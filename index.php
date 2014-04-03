<?php    
    /**
    *The front page to 1294's website
    *
    *@author Alex Friedberg <blueal22@hotmail.com>
    *@link https://github.com/blueal/FRC-Team-1294
    */
    require'includes/upper_header.php'; 
    /*
    *The header code is set up so that you can code in page specific tags in the pages .php file easily.
    *Just include in the upper_header.php and than add the page specific tags.
    *Then all you have to do is add the lower_header.php file and your done with the header.
    */
 ?>
    <title>1294 - Top Gun Robotics</title>
    <meta name="description" content="The Official Website of the Top Gun (FRC 1294) Located In Sammmamish Washington participating in FIRST Robotics FRC Competitions"/>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<?php
    require'includes/lower_header.php';
?>

	<!-- Start WOWSlider.com BODY section -->
  <!--The WOWSlider MUST be created using the program available at Wowslider.com, simple editing though may be done here-->
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
<!--
<div class="body-container">
<?php /*include 'includes/live_stream.php' */ ?>
</div>
-->
<div class="body-container">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-md-4">
            <h2>News/Announcements</h2>
            <p>Join our mailing list by clicking here!</p>
            <p>INSERT RSS FEED HERE!</p>
            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Upcoming Events</h2>
            <div style="width:100%;">
                <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=frc1294%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <p><a class="btn btn-default" href="/calendar"><span class="glyphicon glyphicon-calendar"></span> View Calendar &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Featured Video</h2>
            <iframe class="img-responsive" style="height: 203px!important;"width="360" src="//www.youtube-nocookie.com/embed/-KhwzHqkZag" frameborder="0" allowfullscreen></iframe><br />
            <p><a class="btn btn-default" href="/media/videos"><span class="glyphicon glyphicon-facetime-video"></span> Videos &raquo;</a>
               <a class="btn btn-default" href="/media/pictures"><span class="glyphicon glyphicon-picture"></span> Pictures &raquo;</a></p>
        </div>
        </div>
    </div>
</div>
<?php 
    $ExtraFooterTags='<script type="text/javascript" src="http://js.addthisevent.com/atemay.js"></script>';

    require'/includes/footer.php';
?>