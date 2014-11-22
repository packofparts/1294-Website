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

                        if ($debug_mode) {echo "<P>Begin Processing Gcal Feed</p>";}

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
                                *Old origianl code, this would group together events that occured on the same day
                                *but I couldn't find a nice way to format due to constrants with the code.
                                *So we just print out each event as its own block
                                *
                                *if ($GroupByDate) {
                                *    if ($gCalDate!=$old_date) {
                                *        //An event as occured on a new date
                                *        echo $temp_dateheader; $old_date=$gCalDate;
                                *    }
                                *    else{
                                *        //an event has occured on the same date
                                *    }
                                *}
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
</div>