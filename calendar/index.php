<?php    
    /**
    *1294's Official Calendar
    *
    *@author Alex Friedberg <blueal22@hotmail.com>
    *@link https://github.com/blueal/FRC-Team-1294
    */
    require($_SERVER['DOCUMENT_ROOT'].'/includes/upper_header.php'); 

 ?>
    <title>1294 | Calendar</title>
    <meta name="description" content="The Official Calendar of Top Gun Robotics"/>
<?php
    require($_SERVER['DOCUMENT_ROOT'].'/includes/lower_header.php');
?>

<div class="body-container top-container">
    <div class="container">
        <div class="row-fluid">
            
                <h1>The Official Calendar of Top Gun Robotics</h1>
                <div class="calendar-container hidden-xs">
                    <iframe style="max-width: 1271px; border-width:0" src="https://www.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=webmaster%40team1294.org&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FLos_Angeles" height="800" frameborder="0" scrolling="no"></iframe>
                </div>    
                <div class="mobile-calendar-container visible-xs">
                    <iframe style="max-width: 1271px; border-width:0" src="https://www.google.com/calendar/embed?showTitle=0&showTabs=0&showPrint=0&mode=AGENDA&amp;showCalendars=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=webmaster%40team1294.org&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FLos_Angeles" height="800" frameborder="0" scrolling="no"></iframe>
                </div>
            
        
            <div class="col-xs-12">
                <div style="display:none;">
                    <div id="ics-link">
                        <h4>Use this .ics link to add the Official Calendar to your own calendar</h4>
                        <p><a href="https://www.google.com/calendar/ical/webmaster%40team1294.org/public/basic.ics">https://www.google.com/calendar/ical/webmaster%40team1294.org/public/basic.ics</a></p>
                    </div>
                </div>

                <h3>For Match scores from events visit <a href="http://www.thebluealliance.com/team/1294">thebluealliance.com</a></h3>
                <a id="ics-btn" class="btn btn-default add-tooltip" rel="nofollow" data-toggle="modal" data-target="#ics-link-modal" data-toggle="tooltip" data-placement="top" title="Use This Link to Add This Calendar to Your Personal Calendar"><i class="fa fa-link"></i> Click Here To Get .ics Feed <i class="fa fa-angle-double-right"></i></a>
                <!--a class="btn btn-default pull-left visible-sm visible-xs center-content" rel="nofollow" data-toggle="modal" data-target="#ics-link-modal"><i class="fa fa-download"></i> Click Here Get .ics Feed</a-->
            </div>
        </div>
    </div>
</div>

<!-- Start Modal (Must be outside any containers to prevent formatting errors)-->
<div class="modal fade" id="ics-link-modal" tabindex="-1" role="dialog" aria-labelledby="Popup with .ics feed link" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa-stack"><span class="fa-stack-1x filetype-text">ICS</span><i class="fa fa-file-o fa-stack-2x"></i></span> Add our calendar to your calendar!</h4>
            </div>
            <div class="modal-body">
                <p>It's simple, just add the following <code>.ics</code> feed to your preferred calendar service to have our events automatically show in your phone or calendar!</p>
                <p class="text-center"><a href="https://www.google.com/calendar/ical/webmaster%40team1294.org/public/basic.ics"><i class="fa fa-link hidden-xs"></i>&nbsp;https://www.google.com/calendar/ical/webmaster%40team1294.org/public/basic.ics</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal-->
<?php 
    $ExtraFooterTags="";
    require($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
?>