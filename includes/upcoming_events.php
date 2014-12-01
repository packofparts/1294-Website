<div class="upcomingevents" style="width:100%;">
<?php
    /*
     * This code is used for reading and displaying the
     * team Google Calendar that contains all of our events.
     * 
     * This code is based off of code designed for a
     * previous version of the Google Calendar Data API by
     * jamescridland, who posted it on GitHub (https://github.com/media-uk/GCalPHP).
     * The code was later adapted for Team 1294 by Alex Friedberg
     * (blueal on GitHub).
     * 
     * This version uses the new v3 API and was created by Austin
     * Jenchi (timtim17 on GitHub). It doesn't have as many features
     * as the previous version, but it gets the job done.
     *
     *
     *  Create the cache file by SSH'ing into your box and typing these three commands...
     *  <note>These commands only need to run when deployed to the webserver</note>
     *
     * > touch gcal.json
     * > chmod 666 gcal.json
     * > touch -t 01101200 gcal.json
     *
     */




    /* CONFIG BLOCK START */
    $apiKey = 'AIzaSyAe3Fa0uMaHUi88TkHZjuJ4ajQVhjqI9uA'; // Your API Key Would Go Here

    // Your calendar id would go here, it can be found in your calendar details.
    $calendarId = 'frc1294@gmail.com';

    $cache = true; // Whether or not to cache and use cache files.
    $cacheFilePath = $_SERVER['DOCUMENT_ROOT'].'/cache/gcal.json'; // Filepath where cache file is stored.

    $debugMode = false;

    $reqSettings = array( // Create an array of options used in the request to Google
        'orderBy' => 'startTime',
        'timeMin' => date("Y-m-d\TH:i:sP"), // Minimum start time for events returned. Set to current time.
        'maxResults' => 2, // Number of events to get
        'showDeleted' => false, // Don't return deleted elements.
        'singleEvents' => true // Return recurring events as multiple events, not one.
    );

    $dateFormat = 'l, F jS'; // Wednesday, November 19th
    $timeFormat = 'g:i A'; // 7:00 PM
    /* END OF CONFIG BLOCK */




    $data; // initialize a variable to hold the data

    if($debugMode){ // set up error reporting and say hi
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('error_reporting', E_ALL);
        echo "<p>Hi! Debug mode is <strong>ON!</strong> Your server thinks the time is ".date(DATE_RFC822)."</p>";
        echo "<p>We're just about ready to load the feed!</p>";
    }

    // Check if the cache file is valid
    $timedif = @(time() - filemtime($cacheFilePath));
    if($cache && file_exists($cacheFilePath) && $timedif < 43200 /* 12 hours in seconds */){
        if($debugMode){echo "<p>We have a valid cache file! It's stored at ".$cacheFilePath."</p>";}
        $data = json_decode(file_get_contents($cacheFilePath)); // get the file contents and store them
    }else{
        if($debugMode && $cache){
            echo "<p>Our cache file is too old, we can't use it.</p>";
        }
        // get data from api
        try{
            if($debugMode){echo "<p>We're going to set up the request now.</p>";}
            set_include_path(get_include_path().PATH_SEPARATOR.'/subtrees/google-apis/src'); // include gapi client
            require_once $_SERVER['DOCUMENT_ROOT'].'/subtrees/google-apis/autoload.php'; // require gapi client if not already there
            $client = new Google_Client(); // create the client
            $client->setDeveloperKey($apiKey); // set the dev key
            $client->addScope('https://www.googleapis.com/auth/calendar.readonly'); // add the calendar.readonly scope
            $service = new Google_Service_Calendar($client); // create a new gcal service
            $data = $service->events->listEvents($calendarId, $reqSettings)->getItems(); // get a list of events on the specified calendar
            foreach($data as $event){
                // make the start and end times accessable without calling methods because those aren't included when caching
                $event -> start = $event -> getStart();
                $event -> end = $event -> getEnd();
            }
            if($debugMode){echo "<p>We've made the request!</p>";}
            if($cache){
                // if we're caching, put the data in the cache file
                file_put_contents($cacheFilePath, json_encode($data));
                if($debugMode){echo "<p>We've put the data in the cache file here: ".$cacheFilePath."</p>";}
            }
        }catch(Exception $e){
            echo "<p style=\"overflow-wrap: break-word;\">We had a problem getting the data from the server, please contact the webmaster with the following error:\n".$e."</p>";
        }
    }

    if($debugMode){echo "<p>Checking to see if the data doesn't return null.</p>";} // if the data is null, somewhere along the line we had a problem
    if($data){
        if($debugMode){echo "<p>About ready to format the data!</p>";}
        foreach($data as $event){
            $date;
            if($event -> start -> dateTime){ // if the event has a dateTime, it doesn't have a date
                $date = date_format(date_create($event -> start -> dateTime), $dateFormat); // get the start date from the event
            }else{
                $date = date_format(date_create($event -> start -> date), $dateFormat); // get the start date from the event dateTime
            }
            $header = '
                    <div class="panel-body upcomingevents-dateheader text-center">
                        '.$date.'
                    </div>'; // create the top part of the event

            $name = $event -> summary; // get the event title

            $timeString; // create the var later used in the final element
            $start = $event -> start; // get refrences to the start and end time objects
            $end = $event -> end;
            $tempStart = $start -> dateTime; // create some temp vars
            $tempEnd = $end -> dateTime;
            if(!$tempStart){ // if dateTime doesn't exist, we're in a whole day event
                $tempStart = $start -> date; // reset the temp vars
                $tempEnd = $end -> date;
                if(intval(date_format(date_create($tempStart), 'Ynj')) == intval(date_format(date_create($tempEnd), 'Ynj')) - 1){ // if the event ends on the same day, we outright don't need "time until time"
                    $timeString = "";
                }else{
                    $timeString = '<span class="upcomingevents-time">'.date_format(date_create($tempStart), $dateFormat).'</span> until <span class="upcomingevents-time">'.date_format(date_create($tempEnd), $dateFormat).'</span>'; // set $timeString to the beginning and end dates
                    $header = ""; // get rid of the header because our event goes over multiple days
                }
            }else{
                $timeString = '<span class="upcomingevents-time">'.date_format(date_create($tempStart), $timeFormat).'</span> until <span class="upcomingevents-time">'.date_format(date_create($tempEnd), $timeFormat).'</span>'; // if we do have a DateTime, just set the $timeString to "time until time"
            }

            $desc = $event -> description.'<br>'; // set the description to the description + <br>
            if($desc == "<br>"){ // if we had no description, get rid of the lone <br>
                $desc = "";
            }

            $location = $event -> location; // get the event location
            $mapLink; // create a var for the map link
            $link = $event -> htmlLink; // get the link to the event in gcal
            // If the location is Eastlake High School, show a different set of text (Only show "Eastlake High School").
            // If empty, show nothing and disable the map link button
            // Otherwise, just show the event
            if($location == "Eastlake High School, 400 228th Ave NE, Sammamish, WA, United States"){
                $location = 'Eastlake High School<br>';
                $mapLink = '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode("Eastlake High School, 400 228th Ave NE, Sammamish, WA, United States").'" class="btn btn-primary btn-xs">Map It</a>';
            }else if(!$location){
                $mapLink = '<a rel="nofollow" disabled="disabled" href="" class="btn btn-primary btn-xs">No Location</a>';
            }else{
                $location = $location."<br>";
                $mapLink = '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode($location).'" class="btn btn-primary btn-xs">Map It</a>';
            }

            // Create the element for the event
            echo '
                <div class="panel panel-default">
                    '.$header.'
                    <div class="upcomingevents-event panel-footer">
                        <div class="upcomingevents-title text-center">
                            '.$name.'
                        </div>
                        <div class="upcomingevents-date-time text-center">
                            '.$timeString.'
                        </div>
                        <hr class="upcomingevents-hr">
                        <span class="upcomingevents-description">
                            '.$desc.'
                        </span> '.$location.'
                        <div class="btn-group btn-group-justified upcomingevents-buttons">
                            '.$mapLink.'
                            <a rel="nofollow" href="'.$link.'" class="btn btn-default btn-xs">Add This</a>
                        </div>
                    </div>
                </div>';
        }
    }else{
        if($debugMode){
            echo "<p>Uh oh! The data is null.</p>";
        }else{
            echo "<p>Sorry, we couldn't get data from the calendar. Please click the button bellow to look at our full calendar.</p>"; // give the user a nice error message
        }
    }

    if($debugMode){echo "<p><strong>Done!</strong></p>";}
?>
</div>