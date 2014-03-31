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
    <title>1294: Top Gun Robotics</title>
    <meta name="description" content="The Official Website of the Top Gun (FRC 1294) Located In Sammmamish Washington participating in FIRST Robotics FRC Competitions"/>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<?php
    require'includes/lower_header.php';
?>

	<!-- Start WOWSlider.com BODY section -->
  <!--The WOWSlider MUST be created using the program available at Wowslider.com, simple editing though may be done here-->
	<div class="hidden-xs" style="margin-top: 32px;"id="wowslider-container1">
	    <div class="ws_images">
            <ul>
                <li><img src="data1/images/big_header.jpg" alt="The Team" title="The Team" id="wows1_0" /></li>
                <li><img src="data1/images/img_0131.jpg" alt="Professionialism" title="Professionialism" id="wows1_1"/>We Strive To be as Proffesional as possible</li>
                <li><img src="data1/images/img_0158.jpg" alt="Precision and Execution" title="Precision and Execution" id="wows1_2"/></li>
                <li><img src="data1/images/img_0206.jpg" alt="We strive for the best" title="We strive for the best" id="wows1_3" />Even if it means destroying the competition, we'll do it.</li>
                <li><img src="data1/images/img_0217.jpg" alt="Collaboration" title="Collaboration" id="wows1_4"/></li>
                <li><img src="data1/images/img_0226.jpg" alt="Speed and Efficency" title="Speed and Efficency" id="wows1_5" /></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="The Team"><img src="data1/tooltips/big_header.jpg" alt="The Team" width="101px" height="48px"/>1</a>
                <a href="#" title="Professionialism"><img src="data1/tooltips/img_0131.jpg" alt="Professionialism" width="101px" height="48px"/>2</a>
                <a href="#" title="Precision and Execution"><img src="data1/tooltips/img_0158.jpg" alt="Precision and Execution" width="101px" height="48px"/>3</a>
                <a href="#" title="We strive for the best"><img src="data1/tooltips/img_0206.jpg" alt="We strive for the best" width="101px" height="48px"/>4</a>
                <a href="#" title="Collaboration"><img src="data1/tooltips/img_0217.jpg" alt="Collaboration" width="101px" height="48px"/>5</a>
                <a href="#" title="Speed and Efficency"><img src="data1/tooltips/img_0226.jpg" alt="Speed and Efficency" width="101px" height="48px"/>6</a>
            </div>
        </div>
        <span class="wsl"><a href="http://wowslider.com">Gallery Script</a> by WOWSlider.com v5.2</span>
	    <div class="wdss_shadow"></div>
	</div>
  <!--These script tags must be placed near the WOWSlider html to make it work correctly-->
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>

    <!--End of WOWSlider Body Section-->


<div class="body-container">
    <!-- Main jumbotron-->
    <div class="jumbotron">
        <div class="container">
        <img class="img-responsive" id="eastlake-logo" alt="Eastlake Logo" src="/img/Eastlake-Logo.png"/>
        <h1>We are Top Gun Robotics</h1>
        <p>We are a High School Robotics club/team located at <a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School</a> in Sammamish Washington that has been playing in FRC since 2004.
                Our goal statement would go here that would talk about why we do what we do.</p>
        <p><a class="btn btn-primary btn-lg learn-more" href="/about/team/">Learn more &raquo;</a></p>
        </div>
    </div>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-lg-4">
            <h2>News/Announcments</h2>
            <p>Join our mailing list by clicking here!</p>
            <p>INSERT RSS FEED HERE!</p>
            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2>Join the Team</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        </div>
    </div>
<?php 
    $ExtraFooterTags='<script type="text/javascript" src="http://js.addthisevent.com/atemay.js"></script>';

    require'/includes/footer.php';
?>