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

    $apiKey = 'AIzaSyDfxQCRwk1MkTHpmNAjL3xFl8CncA_MvD4'; // Your API Key Would Go Here
    // Your calendar id would go here, it can be found in your calendar details.
    // It is encoded so that is can be used properly in the URL, so it's fine to use
    // symbols like the @ sign.
    $calendarId = urlencode('frc1294@gmail.com');
    $apiUrl = 'https://www.googleapis.com/calendar/v3/calendars/'
        .$calendarId
        .'/events?key='
        .$apiKey; // Concatanate all of the parameters into one URL.

    $data;

    $cache = true; // Whether or not to cache and use cache files.
    $cacheFilePath = $_SERVER['DOCUMENT_ROOT'].'/cache/gcal.json';
    if($cache){
        $timedif = @(time() - filemtime());
        if(file_exists($cacheFilePath) && $timedif < 43200 /* 12 hours in seconds */){
            $data = file_get_contents($cacheFilePath);
        }else{
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $data = curl_exec($curl);
            curl_close($curl);
        }
    }
    $data = json_decode($data);
?>
</div>