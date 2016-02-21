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
    <meta name="description" content="The Official Website of the Top Gun Robotics (FRC&#0174; 1294) Located In Sammmamish Washington participating in FIRST&#0174; Robotics FRC Competitions"/>

    <!--link rel="stylesheet" type="text/css" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="/WOWSlider/engine1/style.min.css" /-->
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
                <li><img src="/WOWSlider/data1/images/img_0217.jpg" alt="wordpress slider" title="Collaboration" id="wows1_4"/></li>
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
                We are a high school <a href="http://www.usfirst.org/roboticsprograms/frc" title="First Robotics Competition">FRC&#0174;</a> robotics team located at <a href="http://www.lwsd.org/school/ehs/Pages/default.aspx">Eastlake High School</a> in Sammamish, Washington.
                Since 2004, we have been giving students a place where they can develop and practice their interests in science, technology, engineering, and math based fields. All thanks to our awesome mentors, and generous sponsors.
            </p>
            <p>
                <a class="btn btn-primary btn-lg disabled learn-more" href="/about/team/">Learn more &raquo;</a>
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
                <?php include 'includes/upcoming_events.php' ?>
                <p><a class="btn btn-default" href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> View Calendar &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2 class="section-header">Featured Video </h2>
                <div class="embed-responsive embed-responsive-16by9 img-thumbnail">
                    <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/PFNH1x9r2uM?list=PLL1agQEsn8lTo09Px9e1RgcrX6TAwfIS7;wmode=transparent" allowfullscreen></iframe>
                </div>
                <br><br>
                <p><a class="btn btn-default" href="https://www.youtube.com/user/TopGun1294/"><i class="fa fa-youtube-play"></i> Visit our Youtube Channel &raquo;</a></p>
                <h2 class="section-header">Featured Picture</h2>
                <img class="img-responsive img-thumbnail" alt="Our 2015 Robot" src="/img/featured_picture.jpg" />
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
                        <li><i class="fa fa-file-powerpoint-o icon-bullet"></i><a href="/documents/2015/new-members/EHS_Team_1294_Intro_10-1-2014.pptx">2015 Team Intro Power Point</a></li>
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/2016/EHS_Robotics_Info_Sheet_2015-2016_ver2.docx">2016 Robotics Info Sheet</a></li>
                    </ul>
                </div>
                <p>
                    Fill out the safety form and turn it in at the next meeting to get access to the shop.
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/2016/EHS_Robotics_Parent_Permission_Safety_Letter_ver2.pdf">Required Permission/Safety Form</a></li>
                    </ul>
                </div>
                <p>
                    After you have reviewed the documents and have attended a meeting, fill out the following signup form so we have your contact information.
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-text-o icon-bullet"></i><a href="https://docs.google.com/a/team1294.org/forms/d/1e2LtHBRZiF_DzdaH4S2ZOcQ5QGcEYKexqQW1R8Hwx3k/viewform">Official Member Signup Form</a></li>
                    </ul>
                </div>
                <p>
                    Before you can attend a competition, you must fill out STIMS online.
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-pencil-square-o icon-bullet"></i><a href="https://my.usfirst.org/stims/Login.aspx">STIMS Registration</a></li>
                    </ul>
                </div>
                <p>
                    Check out our calendar so you can attend the next meeting!<br>
                </p>
                <div class="center-content center-text">
                    <div class="btn-group btn-group-justified">
                        <a class="btn btn-default disabled" href="/documents/2016/new-members.zip"><span class="glyphicon glyphicon-compressed"></span> Download All</a>
                        <a class="btn btn-default" href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> Calendar &raquo;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="section-header">General Information</h3>
                <hr class="section-header-hr">
                <div class="text-justified">         
                    <p>
                        Top Gun Robotics participates in <a href="http://www.usfirst.org/roboticsprograms/frc" title="First Robotics Competition">FRC</a>, the oldest and most popular league of <a href="http://www.usfirst.org/" title="For Inspiration and Recognition of Science and Technology"><em>FIRST&#0174;</em></a> robotics.
                    </p>      
                    <p>
                        Anyone is allowed to join the Eastlake Robotics Team. It doesn't matter what school you belong to or what your experience or interests are:<br>
                    </p>
                    <p class="text-center" style="font-style:italic; font-weight: bold;">
                        If you want to join the team, you can join.<br>
                        No experience necessary.<br>
                    </p>
                    <br>
                    <p>
                        Feel free to review our reference documents and workshop presentations at any time.
                    </p>
                    <div>
                        <ul class="no-bullets">
                            <li><i class="fa fa-share-square-o icon-bullet"></i><a href="https://drive.google.com/a/team1294.org/folderview?id=0B7dBlgLDUixVRTh6cVBud2NGQzA">Reference Documents/Presentations</a></li>
                        </ul>
                    </div>
                    <p>
                        Fill out our member signup form so we have your contact information.
                    </p>
                    <div class="center-content center-text">
                    
                        <div class="btn-group-vertical btn-block">
                            <a class="btn btn-primary" href="https://docs.google.com/a/team1294.org/forms/d/1e2LtHBRZiF_DzdaH4S2ZOcQ5QGcEYKexqQW1R8Hwx3k/viewform"><i class="fa fa-file-text-o"></i> Member Signup Form</a>
			    			<a class="btn btn-default" href="https://docs.google.com/a/team1294.org/forms/d/1RS7h-h0rUN2yARcoIo133ww9HzDfd-zKQOgIIqIGLzM/viewform"><i class="fa fa-fighter-jet"></i> T-Shirt Order Form</a>
			    			<a class="btn btn-default" href="/about/competitions/2016.php"><i class="fa fa-file-text-o"></i> Competition Information</a>
                        </div>
             
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="section-header">Past / Existing Members</h3>
                <hr class="section-header-hr">
                <p class="center-content">
                    Past Members are still required to turn in a safety form and pass safety training, as well as complete STIMS.<br>
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/2016/EHS_Robotics_Info_Sheet_2015-2016_ver2.docx">2016 Robotics Info Sheet</a></li>
                        <li><i class="fa fa-file-word-o icon-bullet"></i><a href="/documents/2016/EHS_Robotics_Parent_Permission_Safety_Letter_ver2.pdf">Required Permission/Safety Form</a></li>
                        <li><i class="fa fa-pencil-square-o icon-bullet"></i><a href="https://my.usfirst.org/stims/Login.aspx">STIMS Registration</a></li>
                    </ul>
                </div>
                <p>
                    Please fill out the contact information form so we know that you are returning this year.
                </p>
                <div>
                    <ul class="no-bullets">
                        <li><i class="fa fa-file-text-o icon-bullet"></i><a href="https://docs.google.com/a/team1294.org/forms/d/1e2LtHBRZiF_DzdaH4S2ZOcQ5QGcEYKexqQW1R8Hwx3k/viewform">Official Member Signup Form</a></li>
                    </ul>
                </div>
                <p>
                    Consult the calendar so you can attend our next meeting<br>
                </p>
                <div class="center-content center-text">
                    <div class="btn-group btn-group-justified">
                        <a class="btn btn-default disabled" href="/documents/2016/past-members.zip"><span class="glyphicon glyphicon-compressed"></span> Download All</a>
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

