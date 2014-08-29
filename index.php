<?php    

    /**
    *The front page to 1294's website
    *
    *@author Alex Friedberg <blueal22@hotmail.com>
    *@link https://github.com/blueal/FRC-Team-1294
    */
    require'includes/upper_header.php'; 
?>
    <title>1294 | Top Gun Robotics</title>
    <meta name="description" content="The Official Website of the Top Gun Robotics (FRC 1294) Located In Sammmamish Washington participating in FIRST Robotics FRC Competitions"/>

    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="engine1/style.min.css" />
<?php
    require'includes/lower_header.php';
?>


    <!--Start WOWSlider.com BODY section
    The WOWSlider MUST be created using the program available at Wowslider.com, simple editing though may be done here-->
	<div class="hidden-xs" id="wowslider-container1">
	    <div class="ws_images">
            <ul>
                <li><img src="data1/images/big_header.jpg" alt="The Team" title="The Team" id="wows1_0" /></li>
                <li><img src="data1/images/img_0131.jpg" alt="Professionalism" title="Professionalism" id="wows1_1"/>We Strive To be as Proffesional as possible</li>
                <li><img src="data1/images/img_0158.jpg" alt="Precision and Execution" title="Precision and Execution" id="wows1_2"/></li>
                <li><img src="data1/images/img_0206.jpg" alt="We strive for the best" title="We strive for the best" id="wows1_3" />Even if it means destroying the competition, we'll do it.</li>
                <li><img src="data1/images/img_0217.jpg" alt="Collaboration" title="Collaboration" id="wows1_4"/></li>
                <li><img src="data1/images/img_0226.jpg" alt="Speed and Efficiency" title="Speed and Efficiency" id="wows1_5" /></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="The Team"><img src="data1/tooltips/big_header.jpg" alt="The Team" width="101px" height="48px"/>1</a>
                <a href="#" title="Professionalism"><img src="data1/tooltips/img_0131.jpg" alt="Professionialism" width="101px" height="48px"/>2</a>
                <a href="#" title="Precision and Execution"><img src="data1/tooltips/img_0158.jpg" alt="Precision and Execution" width="101px" height="48px"/>3</a>
                <a href="#" title="We strive for the best"><img src="data1/tooltips/img_0206.jpg" alt="We strive for the best" width="101px" height="48px"/>4</a>
                <a href="#" title="Collaboration"><img src="data1/tooltips/img_0217.jpg" alt="Collaboration" width="101px" height="48px"/>5</a>
                <a href="#" title="Speed and Efficiency"><img src="data1/tooltips/img_0226.jpg" alt="Speed and Efficiency" width="101px" height="48px"/>6</a>
            </div>
        </div>
        <span class="wsl"><a href="http://wowslider.com">Gallery Script</a> by WOWSlider.com v5.2</span>
	    <div class="wdss_shadow"></div>
	</div>
  <!--These script tags must be placed near the WOWSlider html to make it work correctly-->
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>

    <!--End of WOWSlider Body Section-->


<div class="body-container" style="padding-bottom: 0px">
    <!-- Main jumbotron-->
    <div class="jumbotron">
        <div class="container">
        <img class="img-responsive" id="eastlake-logo" alt="Eastlake Logo" src="/img/Eastlake-Logo.png"/>
        <h1>We are Top Gun Robotics</h1>
        <p>We are a high school robotics club/team located at <a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School <span class="glyphicon glyphicon-new-window"></span></a> in Sammamish, Washington that has been playing in FRC since 2004.
                <span style="font-style: italic">Our goal statement would go here that would talk about why we do what we do.</span></p>
        <p><a class="btn btn-primary btn-lg learn-more" href="/about/team/">Learn more &raquo;</a></p>
        </div>
    </div>
</div>

<div class="body-container">
<?php include 'includes/live_stream.php'  ?>
</div>

<div class="body-container">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-md-4">
            <h2 class="section-header">Find us on Facebook!</h2>
            <div class="fb-like-box" data-href="https://www.facebook.com/topgunrobotics" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div><br>
            <br>
            <p><a class="btn btn-default" href="https://www.facebook.com/topgunrobotics">View us on Facebook! <span class="glyphicon glyphicon-new-window"></span></a></p>
        </div>
        <div class="col-md-4">
            <h2 class="section-header">Upcoming Events</h2>
            <div class="upcomingevents" style="width:100%;">
                <?php
                    /*
                    set_include_path("subtrees/google-api-client-library/src/" . PATH_SEPARATOR . get_include_path());
                    /*set_include_path(get_include_path() . '/subtrees/google-api-php-client/src');
                    set_include_path(get_include_path() . PATH_SEPARATOR . '/subtrees/google-api-php-client/src/');
                    $client_id = '253596219209-9dic7493era4ot9r42f859ba2tc50r3a.apps.googleusercontent.com'; //Client ID
                    $service_account_name = '253596219209-9dic7493era4ot9r42f859ba2tc50r3a@developer.gserviceaccount.com'; //Email Address 
                    $key_file_location = 'key.p12'; //key.p12

                    session_start();
                    require_once '/subtrees/google-api-client-library/src/Google/Client.php';
                    require_once 'Google/Service/calendar.php';
                    
                    
                    $client = new Google_Client();
                    $client->setApplicationName("Calendar-Tester");
                    
                    if (isset($_SESSION['token'])) {
                        $client->setAccessToken($_SESSION['token']);
                    }
                    
                    $key = file_get_contents($key_file_location);
                    $client->setClientId($client_id);
                    $cred = new Google_Auth_AssertionCredentials(
                        $service_account,
                        array('https://www.googleapis.com/auth/calendar'),
                        $key);

                    $client->setAssertionCredentials($cred);
                    
                    if($client->getAuth()->isAccessTokenExpired()) {
                      $client->getAuth()->refreshTokenWithAssertion($cred);
                    }
                    
                    $_SESSION['token'] = $client->getAccessToken();
                    
                    $cal = new Google_Service_Calendar($client);

                    $events = $cal->events->listEvents('frc1294@gmail.com', $optionalParams);
                    echo "<pre>";
                    print_r($events);
                    echo"</pre>";

                    while(true) {
                        foreach ($events->getItems() as $event) {
                        echo $event->getSummary();
                            print_r($event);
                      }
                      $pageToken = $events->getNextPageToken();
                      if ($pageToken) {
                        $optParams = array('pageToken' => $pageToken);
                        $events = $service->calendarList->listCalendarList($optParams);
                      } else {
                        break;
                      }
                    }
                    */

                    //The Following PHP Code is for reading the Google Calendar that has all of our meetings in it. 
                    //This code was initally written by 'jamescrodland' on github (https://github.com/media-uk/GCalPHP)
                    //The code has been edited from its original version to best suit our website

                    // Your private feed - which you get by right-clicking the 'xml' button in the 'Private Address' section of 'Calendar Details'.
                    if (!isset($calendarfeed)) {$calendarfeed = "https://www.google.com/calendar/feeds/frc1294%40gmail.com/public/basic"; }

                    // Date format you want your details to appear
                    $dateformat="l F j"; // 10 March 2009 - see http://www.php.net/date for details
                    $timeformat="g:ia"; // 12.15am

                    // The timezone that your user/venue is in (i.e. the time you're entering stuff in Google Calendar.) http://www.php.net/manual/en/timezones.php has a full list
                    date_default_timezone_set('America/Los_Angeles');

                    // How you want each thing to display.
                    // By default, this contains all the bits you can grab. You can put ###DATE### in here too if you want to, and disable the 'group by date' below.
                    $event_display='<div class="upcomingevents-event panel-footer"><div class="upcomingevents-title">###TITLE###</div> From <strong>###FROM### ###DATESTART###</strong> until <b>###UNTIL### ###DATEEND###</b> (<a href="###LINK###">add this</a>)<BR>###WHERE### (<a href="###MAPLINK###">map</a>)<br>###DESCRIPTION###</div></div>';

                    // What happens if there's nothing to display
                    $event_error="<P>There are no events to display.</p>";

                    // The separate date header is here
                    $event_dateheader='<div class="panel panel-default"><div class="panel-body upcomingevents-dateheader text-center"><div class="">###DATE###</div></div>';
                    $GroupByDate=true;
                    // Change the above to 'false' if you don't want to group this by dates.

                    // ...and how many you want to display (leave at 999 for everything)
                    $items_to_show=4;

                    // ...and here's where you tell it to use a cache.
                    // Your PHP will need to be able to write to a file called "gcal.xml" in your root. Create this file by SSH'ing into your box and typing these three commands...
                    // > touch gcal.xml
                    // > chmod 666 gcal.xml
                    // > touch -t 01101200 gcal.xml
                    // If you don't need this, or this is all a bit complex, change this to 'false'
                    $use_cache=true;

                    // And finally, change this to 'true' to see lots of fancy debug code
                    $debug_mode=false;

                    //
                    //End of configuration block
                    /////////

                    if ($debug_mode) {error_reporting (E_ALL); ini_set('display_errors', 1);
                    ini_set('error_reporting', E_ALL); echo "<P>Debug mode is on. Hello there.<BR>Your server thinks the time is ".date(DATE_RFC822)."</p>";}

                    // Form the XML address.
                    $calendar_xml_address = str_replace("/basic","/full?singleevents=true&futureevents=true&max-results".$items_to_show."&orderby=starttime&sortorder=a",$calendarfeed); //This goes and gets future events in your feed.

                    if ($debug_mode) {
                    echo "<P>We're going to go and grab <a href='$calendar_xml_address'>this feed</a>.</P>";}

                    if ($use_cache) {
                            ////////
                            //Cache
                            //
       
                            $cache_time = 3600*12; // 12 hours
                            $cache_file = $_SERVER['DOCUMENT_ROOT'].'/gcal.xml'; //xml file saved on server
       
                            if ($debug_mode) {echo "<P>Your cache is saved at ".$cache_file."</P>";}
       
                            $timedif = @(time() - filemtime($cache_file));
 
                            $xml = "";
                            if (file_exists($cache_file) && $timedif < $cache_time) {
                                    if ($debug_mode) {echo "<P>I'll use the cache.</P>";}
                                    $str = file_get_contents($cache_file);
                                    $xml = simplexml_load_string($str);
                            } else { //not here
                                    if ($debug_mode) {echo "<P>I don't have any valid cached copy.</P>";}
                                    $xml = simplexml_load_file($calendar_xml_address); //come here
                                    if ($f = fopen($cache_file, 'w')) { //save info
                                            $str = $xml->asXML();
                                            fwrite ($f, $str, strlen($str));
                                            fclose($f);
                                            if ($debug_mode) {echo "<P>Cache saved :)</P>";}
                                    } else { echo "<P>Can't write to the cache.</P>"; }
                            }
       
                            //done!
                    } else {
	                    $xml = simplexml_load_file($calendar_xml_address);
                    }

                    if ($debug_mode) {echo "<P>Successfully got the GCal feed.</p>";}

                    $items_shown=0;
                    $old_date="";
                    $xml->asXML();

                    foreach ($xml->entry as $entry){
	                    $ns_gd = $entry->children('http://schemas.google.com/g/2005');

	                    //Do some niceness to the description
	                    //Make any URLs used in the description clickable
	                    $description = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $entry->content);
	
	                    // Make email addresses in the description clickable
	                    $description = preg_replace("`([-_a-z0-9]+(\.[-_a-z0-9]+)*@[-a-z0-9]+(\.[-a-z0-9]+)*\.[a-z]{2,6})`i","<a href=\"mailto:\\1\" title=\"mailto:\\1\">\\1</a>", $description);

	                    if ($debug_mode) { echo "<P>Here's the next item's start time... GCal says ".$ns_gd->when->attributes()->startTime." PHP says ".date("g.ia  -Z",strtotime($ns_gd->when->attributes()->startTime))."</p>"; }

	                    // These are the dates we'll display
	                    $gCalDate = date($dateformat, strtotime($ns_gd->when->attributes()->startTime));
	                    $gCalDateStart = date($dateformat, strtotime($ns_gd->when->attributes()->startTime));
	                    $gCalDateEnd = date($dateformat, strtotime($ns_gd->when->attributes()->endTime));
	                    $gCalStartTime = date($timeformat, strtotime($ns_gd->when->attributes()->startTime));
	                    $gCalEndTime = date($timeformat, strtotime($ns_gd->when->attributes()->endTime));
                   
	                    // Now, let's run it through some str_replaces, and store it with the date for easy sorting later
	                    $temp_event=$event_display;
	                    $temp_dateheader=($event_dateheader);
	                    $temp_event=str_replace("###TITLE###",$entry->title,$temp_event);
	                    $temp_event=str_replace("###DESCRIPTION###",$description,$temp_event);

	                    if ($gCalDateStart!=$gCalDateEnd) {
	                    //This starts and ends on a different date, so show the dates
	                    $temp_event=str_replace("###DATESTART###",$gCalDateStart,$temp_event);
	                    $temp_event=str_replace("###DATEEND###",$gCalDateEnd,$temp_event);
	                    } else {
	                    $temp_event=str_replace("###DATESTART###",'',$temp_event);
	                    $temp_event=str_replace("###DATEEND###",'',$temp_event);
	                    }

	                    $temp_event=str_replace("###DATE###",$gCalDate,$temp_event);
	                    $temp_dateheader=str_replace("###DATE###",$gCalDate,$temp_dateheader);
	                    $temp_event=str_replace("###FROM###",$gCalStartTime,$temp_event);
	                    $temp_event=str_replace("###UNTIL###",$gCalEndTime,$temp_event);
	                    $temp_event=str_replace("###WHERE###",$ns_gd->where->attributes()->valueString,$temp_event);
	                    $temp_event=str_replace("###LINK###",$entry->link->attributes()->href,$temp_event);
	                    $temp_event=str_replace("###MAPLINK###","http://maps.google.com/?q=".urlencode($ns_gd->where->attributes()->valueString),$temp_event);
	                    // Accept and translate HTML
	                    $temp_event=str_replace("&lt;","<",$temp_event);
	                    $temp_event=str_replace("&gt;",">",$temp_event);
	                    $temp_event=str_replace("&quot;","\"",$temp_event);
                   
	                    if (($items_to_show>0 AND $items_shown<$items_to_show)) {
                            /*
                            if ($GroupByDate) {
                                if ($gCalDate!=$old_date) {
                                    //An event as occured on a new date
                                    echo $temp_dateheader; $old_date=$gCalDate;
                                }
                                else{
                                    //an event has occured on the same date
                                }
                            }
                            */
                            echo $temp_dateheader; $old_date=$gCalDate;
                            //before the event
		                    echo $temp_event;
                            //after the event
		                    $items_shown++;
	                    }
                       
                    }


                    if (!$items_shown) { echo $event_error; }
                ?>
                <!--<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=frc1294%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " height="300" frameborder="0" scrolling="no"></iframe>-->
            </div>
            <p><a class="btn btn-default" href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> View Calendar &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2 class="section-header">Featured Video</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube-nocookie.com/embed/-KhwzHqkZag?wmode=transparent" allowfullscreen></iframe>
            </div>
            <br><br>
            <p><a class="btn btn-default" href="/media/videos"><span class="glyphicon glyphicon-facetime-video"></span> Videos &raquo;</a></p>
            <h2 class="section-header">Featured Picture</h2>

            <p></p><a class="btn btn-default" href="/media/pictures"><span class="glyphicon glyphicon-picture"></span> Pictures &raquo;</a></p>
        </div>
        </div>
    </div>
</div>
<?php 
    $ExtraFooterTags='<script type="text/javascript" src="http://js.addthisevent.com/atemay.js"></script>';

    require'/includes/footer.php';
?>