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

<div class="body-container" style="padding-bottom: 0; margin-top: 60px!important;">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
            <li data-target="#carousel" data-slide-to="5"></li>
            <li data-target="#carousel" data-slide-to="6"></li>
            <li data-target="#carousel" data-slide-to="7"></li>
            <li data-target="#carousel" data-slide-to="8"></li>
            <li data-target="#carousel" data-slide-to="9"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/WOWSlider/data1/images/16141082923_5ba28a67d5_o.jpg" alt="16141082923_5ba28a67d5_o" title="" id="wows1_0"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/20140301_roboticscompetition_0175.jpg" alt="20140301_RoboticsCompetition_0175" title="" id="wows1_1"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/20140424_firstroboticsworldchampionships_0203.jpg" alt="20140424_FIRSTRoboticsWorldChampionships_0203" title="" id="wows1_2"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/20140424_firstroboticsworldchampionships_0211.jpg" alt="20140424_FIRSTRoboticsWorldChampionships_0211" title="" id="wows1_3"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/20140425_firstroboticsworldchampionships_0786.jpg" alt="20140425_FIRSTRoboticsWorldChampionships_0786" title="" id="wows1_4"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/20140425_firstroboticsworldchampionships_0867.jpg" alt="20140425_FIRSTRoboticsWorldChampionships_0867" title="" id="wows1_5"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/20140426_firstroboticsworldchampionships_0886.jpg" alt="20140426_FIRSTRoboticsWorldChampionships_0886" title="" id="wows1_6"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/img_3205.jpg" alt="IMG_3205" title="" id="wows1_7"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/img_7066.jpg" alt="slider" title="" id="wows1_8"/>
            </div>

            <div class="item">
                <img src="/WOWSlider/data1/images/20140412_portlandroboticsregional_0536.jpg" alt="20140412_PortlandRoboticsRegional_0536" title="" id="wows1_9"/>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


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
            <!--p>
            	This button goes nowhere, and is disabled anyways, so we might as well just hide it.
                <a class="btn btn-primary btn-lg disabled learn-more" href="/about/team/">Learn more &raquo;</a>
            </p-->
            
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

