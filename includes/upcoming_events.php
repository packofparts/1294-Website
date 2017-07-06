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
    $calendarId = 'webmaster@team1294.org';

    $cache = true; // Whether or not to cache and use cache files.
    $cacheFilePath = $_SERVER['DOCUMENT_ROOT'].'/cache/gcal.json'; // Filepath where cache file is stored.

    $debugMode = false;

    $reqSettings = array( // Create an array of options used in the request to Google
        'orderBy' => 'startTime',
        'timeMin' => date("Y-m-d\TH:i:sP"), // Minimum start time for events returned. Set to current time.
        'maxResults' => 4, // Number of events to get
        'showDeleted' => false, // Don't return deleted elements.
        'singleEvents' => true // Return recurring events as multiple events, not one.
    );

    $dateFormat = 'l, F jS'; // Wednesday, November 19th
    $timeFormat = 'g:i A'; // 7:00 PM
    /* END OF CONFIG BLOCK */

    if($debugMode){ // set up error reporting and say hi
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('error_reporting', E_ALL);
        echo "<p>Hi! Debug mode is <strong>ON!</strong> Your server thinks the time is ".date(DATE_RFC822)."</p>";
        echo "<p>We're just about ready to load the feed!</p>";
    }

    function getCacheFileData(){
        global $debugMode, $cacheFilePath;
        if($debugMode){echo "<p>Caching is <strong>ON</strong>. Checking cache file validity.</p>";}
        if(checkCacheFileDate()){
            if($debugMode){echo "<p>We have a valid cache file! It's stored at ".$cacheFilePath."</p>";}
            return json_decode(file_get_contents($cacheFilePath)); // get the file contents and store them
        }else{
            if($debugMode){
                echo "<p>Our cache file is too old, we can't use it.</p>";
            }
            return getOnlineData();
        }
    }

    function checkCacheFileDate(){
        global $cacheFilePath;
        $timedif = @(time() - filemtime($cacheFilePath));
        return file_exists($cacheFilePath) && $timedif < 43200 /* 12 hours in seconds */;
    }

    function getOnlineData(){
        global $debugMode, $cache, $cacheFilePath, $apiKey, $calendarId, $reqSettings;
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
            echo '<p style="word-wrap: break-word;">We had a problem getting the data from the server, please contact the webmaster with the following error:<br><button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#cal-error">See Error</button><pre id="cal-error" class="collapse">'.$e.'</pre></p>';
            return null;
        }

        if($debugMode){echo 'Response recieved: <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#cal-response">See Response</button><pre id="cal-response" class="collapse">'; var_dump($data); echo "</pre>";}

        return $data;
    }

    function parseData($data){
        global $debugMode;
        if($debugMode){echo "<p>Checking to see if the data doesn't return null.</p>";} // if the data is null, somewhere along the line we had a problem
        if(!is_null($data)){
            if($debugMode){echo "<p>The data is not null. Checking if the length > 0.";}
            if(count($data) > 0){
                if($debugMode){echo "<p>There is data! Starting to format it!</p>";}
                formatData($data);
            }else{
                if($debugMode){
                    echo "<p>Uh oh! The data has a length of 0. This means that there are no future events on the calendar.</p>";
                }else{
                    echo "<p>Sorry, there are no events on our calendar currently. You can see our full calendar by clicking the button below.</p>"; // give the user a nice error message
                }
            }
        }else{
            if($debugMode){
                echo "<p>Uh oh! The data is null. This probably is because there was a problem with your API key, which should have raised a <code>Google_Service_Exception</code>.</p>";
            }else{
                echo "<p>Sorry, we couldn't get data from the calendar. Please click the button bellow to look at our full calendar.</p>"; // give the user a nice error message
            }
        }
    }

    function formatData($data){
        global $dateFormat, $timeFormat;
        foreach($data as $event){
            $date = null;
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

            $timeString = null; // create the var later used in the final element
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
            $mapLink = null; // create a var for the map link
            $link = $event -> htmlLink; // get the link to the event in gcal
            // If the location is Eastlake High School, show a different set of text (Only show "Eastlake High School").
            // If empty, show nothing and disable the map link button
            // Otherwise, just show the event
            $temp = null;
            preg_match("/Eastlake High School/", $location, $temp); // regex for a count of ocurances of "Eastlake High School" in $location
            if(count($temp) > 0){
                $mapLink = '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode("Eastlake High School, 400 228th Ave NE, Sammamish, WA, United States").'" class="btn btn-primary btn-xs">Map It</a>';
                $location = 'Eastlake High School<br>';
            }else if(!$location){
                $mapLink = '<a rel="nofollow" disabled="disabled" href="" class="btn btn-primary btn-xs">No Location</a>';
            }else{
                $mapLink = '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode($location).'" class="btn btn-primary btn-xs">Map It</a>';
                $location = $location."<br>";
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
    }

    function getCalendarData(){
        global $cache, $debugMode;
        if($cache){
            $data = getCacheFileData();
        }else{
            $data = getOnlineData();
        }
        parseData($data);
        if($debugMode){echo "<p><strong>Done!</strong></p>";}
    }

    getCalendarData();
    
?>
</div>
