<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>FRC 1294 Top Gun</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/bootstrap.css">
        <style>
            body {
                padding-top: 0px;
                padding-bottom: 20px;
                /*background: #78866B;*/
                background:  #eeeeee url('http://i610.photobucket.com/albums/tt185/ndruqltn/Camouflage/NavyBlueCamo.png');
            }
        </style>
        <link rel="stylesheet" href="/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/css/main.css">

        <!--START FRONT PAGE SPECIFIC TAGS-->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!--STOP FRONT PAGE SPECFIC TAGS-->

        <?php 
            //Figures out what page your on for the top bar menu
            // gets the current URI, remove the left / and then everything after the / on the right
            $directory = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));

            // loop through each directory, check against the known directories, and add class   
            $directories = array("", "about","contact","contact","something","media"); // set home as 'index', but can be changed based of the home uri
            foreach ($directories as $folder) {
            $active[$folder] = ($directory[0] == $folder)? "active":"noactive";
            }
        ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!--<img alt="All Team members" class="headerimage" src="/img/Big_Header.JPG" width="1271px" />-->
            <div class="container">
                <div class="navbar-header">
                    <!--Start of Mobile Only Buttons-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!--End of Mobile Only Buttons-->
                    <a class="navbar-brand" href="/"><strong><span id="frc-txt">FRC</span> 1294</strong></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?php echo $active['']?>"><a href="/">Home</a></li>
                        <li class="dropdown <?php echo $active['about']?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header"><a href="/about/">About</a></li>
                                <li class="divider"></li>
                                <li><a href="/about/team/">The Team</a></li>
                                <li><a href="/about/website">Website</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $active['contact']?>"><a href="/contact">Contact</a></li>
                        <li class="<?php echo $active['media']?>"><a href="/media">Media</a></li>
                        <li class="dropdown <?php echo $active['something']?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right">
                    <a href="/donate"class="btn btn-success">Donate</a>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <div class="body-container" id="top">