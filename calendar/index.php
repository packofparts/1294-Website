<?php    
    /**
    *1294's Official Calendar
    *
    *@author Alex Friedberg <blueal22@hotmail.com>
    *@link https://github.com/blueal/FRC-Team-1294
    */
    require($_SERVER['DOCUMENT_ROOT'].'/includes/upper_header.php'); 

 ?>
    <title>1294: Calendar</title>
    <meta name="description" content="The Official Website of the Top Gun (FRC 1294) Located In Sammmamish Washington participating in FIRST Robotics FRC Competitions"/>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<?php
    require($_SERVER['DOCUMENT_ROOT'].'/includes/lower_header.php');
?>

<div class="body-container top-container">
    <div class="container">
    <h1>The Official Calendar of Top Gun 1294</h1>
    </div>
    <div class="calendar-container hidden-xs">
        <iframe style="max-width: 1271px"src="https://www.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=frc1294%40gmail.com&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FLos_Angeles" style=" border-width:0" height="800" frameborder="0" scrolling="no"></iframe>
    </div>    
    <div class="mobile-calendar-container visible-xs">
        <iframe style="max-width: 1271px"src="https://www.google.com/calendar/embed?showTitle=0&showTabs=0&showPrint=0&mode=AGENDA&amp;showCalendars=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=frc1294%40gmail.com&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FLos_Angeles" style=" border-width:0" height="800" frameborder="0" scrolling="no"></iframe>
    </div>

    <div class="container">
        <h3>For Match scores from events visit <a href="http://www.thebluealliance.com/team/1294">thebluealliance.com</a><a style="margin-top: -5px;" class="btn btn-info pull-right visible-md visible-lg" href="http://www.google.com/calendar/embed?src=ZnJjMTI5NEBnbWFpbC5jb20" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Click here to view this calendar directly</a></h3>
        <a class="btn btn-info pull-left visible-sm visible-xs" href="http://www.google.com/calendar/embed?src=ZnJjMTI5NEBnbWFpbC5jb20" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Click here to view this calendar directly</a>
       
    </div>
</div>
<?php 

    require($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
?>