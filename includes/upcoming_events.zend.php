<div class="upcomingevents" style="width:100%;">
<?php
    /*
    This code is used for reading and displaying the
    team Google Calendar that contains all of our events.

    This code is based off of code designed for a
    previous version of the Google Calendar Data API by
    jamescridland, who posted it on GitHub (https://github.com/media-uk/GCalPHP).
    The code was later adapted for Team 1294 by Alex Friedberg
    (blueal on GitHub).

    This version uses the new v3 API and was created by Austin
    Jenchi (timtim17 on GitHub). It doesn't have as many features
    as the previous version, but it gets the job done.
    */

    $apiKey = 'AIzaSyDbVDRAzrz64cO98PU7yTm-yEHtQ5ZN_8w'; // Your API Key Would Go Here
    // Your calendar id would go here, it can be found in your calendar details.
    $calendarId = 'frc1294@gmail.com';

    $cache = false; // Whether or not to cache and use cache files.
    $cacheFilePath = $_SERVER['DOCUMENT_ROOT'].'/cache/gcal.json';

    $debugMode = false;

    $reqSettings = array(
        'timeMin' => date("Y-m-d\TH:i:sP"),
        'showDeleted' => false,
        'singleEvents' => false
    );

    $dateFormat = 'l, F jS'; // Wednesday, November 19th
    $timeFormat = 'g:i A'; // 7:00 PM

    $data;

    if($debugMode){
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('error_reporting', E_ALL);
        echo "<p>Hi! Debug mode is <strong>ON!</strong> Your server thinks the time is ".date(DATE_RFC822)."</p>";
        echo "<p>We're just about ready to load the feed!</p>";
    }

    $timedif = @(time() - filemtime($cacheFilePath));
    if($cache && file_exists($cacheFilePath) && $timedif < 43200 /* 12 hours in seconds */){
        if($debugMode){echo "<p>We have a valid cache file! It's stored at ".$cacheFilePath."</p>";}
        $data = json_decode(file_get_contents($cacheFilePath));
    }else{
        if($debugMode && $cache){
            echo "<p>Our cache file is too old, we can't use it.</p>";
        }
        getDataFromApi();
    }
    function getDataFromApi(){
        global $debugMode;
        try{
            if($debugMode){echo "<p>We're going to set up the request now.</p>";}
            global $apiKey, $calendarId, $data, $cache, $cacheFilePath, $reqSettings;
            set_include_path(get_include_path().PATH_SEPARATOR.'/subtrees/google-apis/src');
            require_once $_SERVER['DOCUMENT_ROOT'].'/subtrees/google-apis/autoload.php';
            $client = new Google_Client();
            $client->setDeveloperKey($apiKey);
            $client->addScope('https://www.googleapis.com/auth/calendar.readonly');
            $service = new Google_Service_Calendar($client);
            $data = $service->events->listEvents($calendarId, $reqSettings)->getItems();
            if($debugMode){echo "<p>We've made the request!</p>";}
            if($cache){
                file_put_contents($cacheFilePath, json_encode($data));
                if($debugMode){echo "<p>We've put the data in the cache file here: ".$cacheFilePath."</p>";}
            }
        }catch(Exception $e){
            if($debugMode){
                echo "<p>We had a problem getting the data from the server, here's the exception:\n".$e;
            }
        }
    }

    if($debugMode){echo "<p>Checking to see if the data doesn't return null.</p>";}
    if($data){
        if($debugMode){echo "<p>About ready to format the data!</p>";}
        for($i = 0; $i < count($data); $i++){
            if($data[$i] -> summary){
                $name = $data[$i] -> summary;
            
                $date = date_format(date_create($data[$i] -> getStart() -> date), $dateFormat);

                $timeString;
                $start = $data[$i] -> getStart();
                $end = $data[$i] -> getEnd();
                $tempStart = $start -> dateTime;
                $tempEnd = $end -> dateTime;
                if($tempStart == NULL){
                    $tempStart = $start -> date;
                    $tempEnd = $end -> date;
                    if(intval(date_format(date_create($tempStart), 'Ynj')) == intval(date_format(date_create($tempEnd), 'Ynj')) - 1){
                        $timeString = "";
                    }else{
                        $timeString = '<span class="upcomingevents-time">'.date_format(date_create($tempStart), $dateFormat).'</span> until <span class="upcomingevents-time">'.date_format(date_create($tempEnd), $dateFormat).'</span>';
                    }
                }else{
                    $timeString = '<span class="upcomingevents-time">'.date_format(date_create($tempStart), $timeFormat).'</span> until <span class="upcomingevents-time">'.date_format(date_create($tempEnd), $timeFormat).'</span>';
                }

                $desc = $data[$i]->description.'<br>';
                if($desc == "<br>"){
                    $desc = "";
                }

                $location = ($data[$i] -> location);
                $mapLink;
                $link = $data[$i] -> htmlLink;
                // If the location is Eastlake High School, show a different set of text (Only show "Eastlake High School").
                // If empty, show nothing and disable the map link button
                if($location == "Eastlake High School, 400 228th Ave NE, Sammamish, WA 98074, United States<br>"){
                    $location = 'Eastlake High School<br>';
                    $mapLink = '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode("Eastlake High School, 400 228th Ave NE, Sammamish, WA, United States").'" class="btn btn-primary btn-xs">Map It</a>';
                }else if(!$location){
                    $mapLink = '<a rel="nofollow" disabled="disabled" href="" class="btn btn-primary btn-xs">No Location</a>';
                }else{
                    $location = $location."<br>";
                    $mapLink = '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode($location).'" class="btn btn-primary btn-xs">Map It</a>';
                }

                echo '
                    <div class="panel panel-default">
                        <div class="panel-body upcomingevents-dateheader text-center">
                            '.$date.'
                        </div>
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
    }else{
        if($debugMode){
            echo "<p>Uh oh! The data is null.</p>";
        }else{
            echo "<p>Sorry, we couldn't get data from the calendar. Please click the button bellow to look at our full calendar.</p>";
        }
    }
    if($debugMode){echo "<p><strong>Done!</strong></p>";}
?>
</div>