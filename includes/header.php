<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!--The title for the page is set by setting the $title variable in the PHP include statement on the corresponding page-->
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $descriptionContent; ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <?php
            /*
            *There might be some extra tags that need to be placed in the header,
            *Any extra tags needed will be added by setting the $ExtraTags Variable right before the include statement
            *on a webpage, first we check if there is a tag set, if it is, we add it the extra tags to the header.
            *There is also a $ExtraFooterTags variable that can be set to add extra tags to the footer.
            */
            if (!empty($ExtraHeaderTags)) {
                echo $ExtraHeaderTags;
            }

            //Figures out what page your on for the top bar menu
            // gets the current URI, remove the left / and then everything after the / on the right
            $directory = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));

            // loop through each directory, check against the known directories, and add class   
            $directories = array("", "about","contact","media","calendar"); // "" is the homepage sense we are using clean URL's
            foreach ($directories as $folder){
                $active[$folder] = ($directory[0] == $folder)? "active":"";
            }
        ?>
    </head>
    <body>
        <!--Remember to ALWAYS add a '/' at the end of a URL or else bad things will happen-->
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
                    <a class="navbar-brand" href="/"><strong>Top Gun Robotics</strong></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?php echo $active['']?>"><a href="/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li class="dropdown <?php echo $active['about']?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-question-sign"></span> About <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/about/team/"><span class="glyphicon glyphicon-user"></span> The Team</a></li>
                                <li><a href="/about/website/"><span class="glyphicon glyphicon-globe"></span> Website</a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?php echo $active['media']?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-picture"></span> Media <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/media/video/"><span class="glyphicon glyphicon-facetime-video"></span> Videos</a></li>
                                <li><a href="/media/pictures/"><span class="glyphicon glyphicon-picture"></span> Pictures</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $active['calendar']?>"><a href="/media/"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
                        <li class="<?php echo $active['contact']?>"><a href="/contact/"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                        <!--<li class="dropdown startPHP echo $active['something'] endPHP">
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
                        </li>-->
                    </ul>

                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <!--[if lt IE 7]>
             <div class="alert alert-dismissable alert-warning popup">
                <i class="close glyphicon glyphicon-remove" data-dismiss="alert"></i>
                <h4>Warning!</h4>
                <p class="chromeframe">You are using a <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser to one that supports current web standards</a> <span id="Google-Chrome-Frame-Hint">*cough*</span><a class="alert-link" href="https://www.google.com/intl/en/chrome/browser/"/>Google Chrome</a><span id="Google-Chrome-Frame-Hint">*cough*</span></a> or <a class="alert-link" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            </div>
        <![endif]-->

        <div class="body-container" id="top">
 