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

    <!--link rel="stylesheet" type="text/css" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="/WOWSlider/engine1/style.min.css" /--->
<?php
    require'includes/lower_header.php';
?>


    <!--Start WOWSlider.com BODY section     Updated with Version 6.2
    The WOWSlider MUST be created using the program available at Wowslider.com, simple editing though may be done here-->
	<div id="wowslider-container1">
	    <div class="ws_images">
            <ul>
                <li><img src="/WOWSlider/data1/images/img_0256.jpg" alt="The Team" title="The Team" id="wows1_0"/></li>
                <li><img src="/WOWSlider/data1/images/img_0131.jpg" alt="Professionalism" title="Professionalism" id="wows1_1"/>We Strive to be the most Professional  as possible</li>
                <li><img src="/WOWSlider/data1/images/img_0158.jpg" alt="Precision and Execution" title="Precision and Execution" id="wows1_2"/></li>
                <li><img src="/WOWSlider/data1/images/img_0206.jpg" alt="Nothing but the Best" title="Nothing but the Best" id="wows1_3"/>Even if it means destroying the competition, we'll do it!</li>
                <li><img src="/WOWSlider/data1/images/img_0217.jpg" alt="wordpress slider" title="Collaboration" id="wows1_4"/></a></li>
                <li><img src="/WOWSlider/data1/images/img_0226.jpg" alt="Speed and Efficency" title="Speed and Efficency" id="wows1_5"/></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <a href="#" title="The Team"><img src="/WOWSlider/data1/tooltips/img_0256.jpg" alt="The Team"/>1</a>
            <a href="#" title="Professionalism"><img src="/WOWSlider/data1/tooltips/img_0131.jpg" alt="Professionalism"/>2</a>
            <a href="#" title="Precision and Execution"><img src="/WOWSlider/data1/tooltips/img_0158.jpg" alt="Precision and Execution"/>3</a>
            <a href="#" title="Nothing but the Best"><img src="/WOWSlider/data1/tooltips/img_0206.jpg" alt="Nothing but the Best"/>4</a>
            <a href="#" title="Collaboration"><img src="/WOWSlider/data1/tooltips/img_0217.jpg" alt="Collaboration"/>5</a>
            <a href="#" title="Speed and Efficency"><img src="/WOWSlider/data1/tooltips/img_0226.jpg" alt="Speed and Efficency"/>6</a>
        </div>
        <span class="wsl"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v6.4</span>
	    <div class="ws_shadow"></div>
	</div>	
	<!-- End WOWSlider.com BODY section -->


<div class="body-container" style="padding-bottom: 0px">
    <!-- Main jumbotron-->
    <div class="jumbotron">
        <div class="container">
            <img class="img-responsive" id="eastlake-logo" alt="Eastlake Logo" src="/img/Eastlake-Logo.png"/>
            <h1>We are Top Gun Robotics</h1>
            <p>
                We are a high school <a href="http://www.usfirst.org/roboticsprograms/frc" title="First Robotics Competition">FRC</a> robotics team located at <a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School</a> in Sammamish Washington.
                Since 2004, we have been giving students a place where they can develop and practice their interests in science, technology, engineering, and math based fields. All thanks to our awesome mentors,   and generous sponsors.
            </p>
            <p>
                <a class="btn btn-primary btn-lg learn-more" href="/about/team/">Learn more &raquo;</a>
            </p>
            
        </div>
    </div>
</div>

<?php include 'includes/live_stream.php'  ?>

<div class="body-container">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row-fluid">
            <div class="col-md-4">
                <h2 class="section-header">Find us on Facebook!</h2>
                <div class="fb-like-box" data-href="https://www.facebook.com/topgunrobotics" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div><br>
                <br>
                <p><a class="btn btn-default" href="https://www.facebook.com/topgunrobotics"><i class="fa fa-facebook"></i> View us on Facebook! &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2 class="section-header">Upcoming Events</h2>
                <div class="upcomingevents" style="width:100%;">
                    <?php
                        //The Following PHP Code is for reading and displaying the teams Google Calendar that contains all important events
                        //This code was initally written by 'jamescrodland' and was posted publically on github (https://github.com/media-uk/GCalPHP)
                        //The code has been heavily edited from its original version to best suit our website

                        // Your private feed - which you get by right-clicking the 'xml' button in the 'Private Address' section of 'Calendar Details'.
                        // (We made our calendar public so I just grabbed the public feed)
                        if (!isset($calendarfeed)) {$calendarfeed = "https://www.google.com/calendar/feeds/frc1294%40gmail.com/public/basic"; }

                        // Date format you want your details to appear
                        $dateformat="l, F jS"; // Wednesday, September 1st - see http://www.php.net/date for details and different formats
                        $dateformat2="n/j/y"; // 9/1/14
                        $timeformat="g:i A"; // 12:15 AM

                        // The timezone that your user/venue is in (i.e. the time you're entering stuff in Google Calendar.) http://www.php.net/manual/en/timezones.php has a full list
                        date_default_timezone_set('America/Los_Angeles');

                        // How you want each thing to display.
                        // By default, this contains all the bits you can grab. You can put ###DATE### in here too if you want to, and disable the 'group by date' below.
                        $event_display='<div class="upcomingevents-event panel-footer"><div class="upcomingevents-title text-center">###TITLE###</div><div class="upcomingevents-date-time text-center"><span class="upcomingevents-time">###FROM###</span> <span class="upcomingevents-date">###DATESTART###</span> until <span class="upcomingevents-time">###UNTIL###</span> <span class="upcomingevents-date">###DATEEND###</span></div><hr class="upcomingevents-hr"><span class="upcomingevents-description">###DESCRIPTION###</span> ###WHERE###  
                        <div class="btn-group btn-group-justified upcomingevents-buttons">###MAPLINK###
                        <a rel="nofollow" href="###LINK###" class="btn btn-default btn-xs">Add This</a></div></div></div>';

                        // What happens if there's nothing to display
                        $event_error='<div class="panel panel-default"><div class="panel-body upcomingevents-dateheader text-center">There are no events to display.</div><div class="upcomingevents-event panel-footer">Sorry, There Are Currently No Upcoming Events On Our Calendar</div></div>';

                        // The separate date header is here
                        $event_dateheader='<div class="panel panel-default"><div class="panel-body upcomingevents-dateheader text-center">###DATE###</div>';
                        $GroupByDate=true;
                        // Change the above to 'false' if you don't want to group this by dates. (This will break the css formatting)

                        // ...and how many you want to display (leave at 999 for everything)
                        // (Currently it looks best with only 2 or 3)
                        $items_to_show=2;

                        // ...and here's where you tell it to use a cache.
                        // Your PHP will need to be able to write to a file called "gcal.xml" in your root. Create this file by SSH'ing into your box and typing these three commands...
                        // > touch gcal.xml
                        // > chmod 666 gcal.xml
                        // > touch -t 01101200 gcal.xml
                        // If you don't need this, or this is all a bit complex, change this to 'false'
                        // (We use the cache but we have to do the SSH instructions to get it to work with our webhost.)
                        $use_cache=true;

                        //Location of cache file
                        $cache_file = $_SERVER['DOCUMENT_ROOT'].'/cache/gcal.xml';

                        // And finally, change this to 'true' to see lots of fancy debug code
                        // MAKE SURE YOU ABSOLUTLY DISABLE THIS BEFORE MERGING TO THE MASTER BRANCH
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
                                //Cache file location is defined in the configuration block
       
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
                                        } else { echo "<P>Can't write to the cache file, please contact the webmaster.</P>"; }
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
	                        $gCalDate       = date($dateformat, strtotime($ns_gd->when->attributes()->startTime));
	                        $gCalDateStart  = date($dateformat2, strtotime($ns_gd->when->attributes()->startTime));
	                        $gCalDateEnd    = date($dateformat2, strtotime($ns_gd->when->attributes()->endTime));
	                        $gCalStartTime  = date($timeformat, strtotime($ns_gd->when->attributes()->startTime));
	                        $gCalEndTime    = date($timeformat, strtotime($ns_gd->when->attributes()->endTime));
                            $gCalLocation   = $ns_gd->where->attributes()->valueString;
                   
	                        // Now, let's run it through some str_replaces, and store it with the date for easy sorting later
	                        $temp_event=$event_display;
	                        $temp_dateheader=($event_dateheader);
	                        $temp_event=str_replace("###TITLE###",$entry->title,$temp_event);
                            if(!$description == ''){
                                $temp_event=str_replace("###DESCRIPTION###",$description . '<br>',$temp_event);
                            } else {
                                $temp_event=str_replace("###DESCRIPTION###",$description,$temp_event);
                            }
	                        if ($gCalDateStart!=$gCalDateEnd) {
	                            //this event starts and ends on DIFFERENT days, show the dates and times
	                            $temp_event=str_replace("###DATESTART###",$gCalDateStart,$temp_event);
	                            $temp_event=str_replace("###DATEEND###",$gCalDateEnd,$temp_event);
	                        } else {
                                //event starts and ends on the SAME day, only show the times
	                            $temp_event=str_replace("###DATESTART###",'',$temp_event);
	                            $temp_event=str_replace("###DATEEND###",'',$temp_event);
	                        }

	                        $temp_event=str_replace("###DATE###",$gCalDate,$temp_event);
	                        $temp_dateheader=str_replace("###DATE###",$gCalDate,$temp_dateheader);
	                        $temp_event=str_replace("###FROM###",$gCalStartTime,$temp_event);
	                        $temp_event=str_replace("###UNTIL###",$gCalEndTime,$temp_event);
                        
                            //If the location is Eastlake High School, show a different set of text (Only show "Eastlake High School").
                            //If empty, show nothing and disable the map link button
                            if (strpos($gCalLocation,'Eastlake High School') !== false) {
                                $temp_event=str_replace("###WHERE###",('Eastlake High School<br>'),$temp_event);
                                $temp_event=str_replace("###MAPLINK###", '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode($gCalLocation).'" class="btn btn-primary btn-xs">Map It</a>',$temp_event);
                            } else if(strpos($gCalLocation,' ')) {
                                $temp_event=str_replace("###WHERE###",($gCalLocation . '<br>'),$temp_event);
                                $temp_event=str_replace("###MAPLINK###", '<a rel="nofollow" href="https://maps.google.com/?q='.urlencode($gCalLocation).'" class="btn btn-primary btn-xs">Map It</a>',$temp_event);
                            } else {
                                $temp_event=str_replace("###WHERE###",(''),$temp_event);
                                $temp_event=str_replace("###MAPLINK###", '<a rel="nofollow" disabled="disabled" href="" class="btn btn-primary btn-xs">No Location</a>',$temp_event);
                            }
                            $temp_event=str_replace("###WHERE###",($gCalLocation . '</br>'),$temp_event);
	                        $temp_event=str_replace("###LINK###",$entry->link->attributes()->href,$temp_event);
	                        //$temp_event=str_replace("###MAPLINK###","https://maps.google.com/?q=".urlencode($gCalLocation),$temp_event);//OLD CODE DOWN HERE
	                        // Accept and translate to valid HTML
	                        $temp_event=str_replace("&lt;","<",$temp_event);
	                        $temp_event=str_replace("&gt;",">",$temp_event);
	                        $temp_event=str_replace("&quot;","\"",$temp_event);
                   
	                        if (($items_to_show>0 AND $items_shown<$items_to_show)) {
                                /*

                                Old origianl code, this would group together events that occured on the same day
                                but I couldn't find a nice way to format due to constrants with the code.
                                So we just print out each event as its own block

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
                <h2 class="section-header">Featured Video </h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/-KhwzHqkZag?wmode=transparent" allowfullscreen></iframe>
                </div>
                <br><br>
                <p><a class="btn btn-default" href="/media/videos"><i class="fa fa-youtube-play"></i> Visit our Youtube Channel &raquo;</a></p>
                <h2 class="section-header">Featured Picture</h2>
                <img class="img-responsive img-thumbnail" alt="A super high score in Aerial Assist" src="/WOWSlider/data1/images/img_0206.jpg" />
                <br><br>
                <p><a class="btn btn-default" href="http://www.gallery.team1294.org/"><span class="glyphicon glyphicon-picture"></span> Gallery &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
<div class="body-container">
    <div class="container">
        <div class="row-fluid">

            <div class="col-md-4">
                <h3 class="section-header">New Members</h3>
                <hr class="section-header-hr">
                <p>
                    Want to join the team? Consult the documents below for more information about joining our team.<br>
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-powerpoint-o icon-bullet"></i><a href="/documents/new-members/EHS_Team_1294_Intro_10-1-2014.pptx">Team Intro Power Point</a></li>
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/new-members/EHS_Robotics_Info_Sheet_2014-2015_ver1.docx">2015 Robotics Info Sheet</a></li>
                    </ul>
                </div>
                <p>
                    Fill out the safety form and turn it in at the next meeting to get access to the shop.
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/new-members/Robotics_Permission_Letter_ver1.doc">Required Permission/Safety Form</a></li>
                    </ul>
                </div>
                <p>
                    After you have reviewed the documents and have attended a meeting, fill out the following form so we have your contact information.
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-text-o icon-bullet"></i><a href="https://docs.google.com/forms/d/1DO14AK_qE7DOcej8IGRMaCixI1_KLAMvIfx4TfQUuGM/viewform?usp=send_form">Offical Contact Information Form</a></li>
                    </ul>
                </div>
                <p>
                    Check out our calendar so you can attend the next meeting!<br>
                </p>
                <div class="center-content center-text">
                    <div class="btn-group btn-group-justified">
                        <a class="btn btn-default" href="/documents/new-members.zip"><span class="glyphicon glyphicon-compressed"></span> Download All</a>
                        <a class="btn btn-default" href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> Calendar &raquo;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="section-header">General Information</h3>
                <hr class="section-header-hr">
                <div class="text-justified">         
                    <p>
                        Top Gun robotics participates in <a href="http://www.usfirst.org/roboticsprograms/frc" title="First Robotics Competition">FRC</a>, the oldest and most popular league of <a href="http://www.usfirst.org/" title="For Inspiration and Recognition of Science and Technology">FIRST</a> first robotics.
                    </p>      
                    <p>
                        Anyone is allowed to Join the Eastlake Robotics Team. It doesn't matter what school you belong to or what your experience or interests are<br>
                    </p>
                    <p class="text-center" style="font-style:italic; font-weight: bold;">
                        If you want to join the team, you can join.<br>
                        No experience neccasary.<br>
                    <br>
                    <p>
                        Feel free to review our reference documents and workshop presentations at any time.
                    </p>
                    <div>
                        <ul class="no-bullets">
                            <li><i class="fa fa-share-square-o icon-bullet"></i><a href="https://drive.google.com/folderview?id=0B00pbMpQbO7mTXVtTThMbTRVa28&usp=sharing">Reference Documents/Presentations</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="section-header">Past / Existing Memebers</h3>
                <hr class="section-header-hr">
                <p class="center-content">
                    Past Members are still required to turn in safety form and pass safety training<br>
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/past-members/EHS_Robotics_Info_Sheet_2014-2015_ver1.docx">2015 Robotics Info Sheet</a></li>
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/past-members/Robotics_Permission_Letter_ver1.doc">Required Permission/Safety Form</a></li>
                    </ul>
                </div>
                <p>
                    Please fill out the contact information form so we know that you are returning this year.
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-text-o icon-bullet"></i><a href="https://docs.google.com/forms/d/1DO14AK_qE7DOcej8IGRMaCixI1_KLAMvIfx4TfQUuGM/viewform?usp=send_form">Offical Contact Information Form</a></li>
                    </ul>
                </div>
                <p>
                    Consult the calendar so you can attend our next meeting<br>
                </p>
                <div class="center-content center-text">
                    <div class="btn-group btn-group-justified">
                        <a class="btn btn-default" href="/documents/past-members.zip"><span class="glyphicon glyphicon-compressed"></span> Download All</a>
                        <a class="btn btn-default" href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> Calendar &raquo;</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php 
    $ExtraFooterTags='<script type="text/javascript" src="//js.addthisevent.com/atemay.js"></script>
        <script type="text/javascript" src="/WOWSlider/engine1/wowslider.min.js"></script>
	    <script type="text/javascript" src="/WOWSlider/engine1/script.min.js"></script>';

    require'includes/footer.php';
?>