<div class="upcoming-events" style="width:100%;">
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

    $cache = true; // Whether or not to cache and use cache files.
    $cacheFilePath = $_SERVER['DOCUMENT_ROOT'].'/cache/gcal.json';

    $data;

    $timedif = @(time() - filemtime($cacheFilePath));
    if($cache && file_exists($cacheFilePath) && $timedif < 43200 /* 12 hours in seconds */){
        $data = json_decode(file_get_contents($cacheFilePath));
    }else{
        getDataFromApi();
    }
    echo json_encode($data);

    function getDataFromApi(){
        try{
            global $apiKey, $apiUrl, $calendarId, $data, $cache, $cacheFilePath;
            error_reporting(-1);
            ini_set('display_errors', 'On');
            set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/includes/vendor/google-apis-client/src');
            require_once '/includes/vendor/google-apis-client/autoload.php';
            $client = new Google_Client();
            $client->setDeveloperKey($apiKey);
            $client->addScope('https://www.googleapis.com/auth/calendar.readonly');
            $service = new Google_Service_Calendar($client);
            $data = $service->events->listEvents($calendarId);
            if($cache){file_put_contents($cacheFilePath, json_encode($data));}
        }catch(Exception $e){
            echo "Sorry, we couldn't get data from the calendar. Please click the button bellow to look at our full calendar.";
        }
    }
?>
</div>