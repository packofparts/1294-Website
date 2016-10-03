        <style>
            body {
                padding-top: 0px;
                padding-bottom: 10px;
                background-image: url('/img/NavyBlueCamo.png');
            }
        </style>
        <!--link rel="stylesheet" type="text/css" href="/subtrees/bootstrap/dist/css/bootstrap.min.css"-->
        <link rel="stylesheet" type="text/css" href="/style/10-2-16.3.combined.main.css">


        <?php
            /*
                The <title> and description tags are set in betweeen the upper header and lower header include statements
            */

            /*
            * Checks if you are viewing the beta version and sets a variable 
            * that can be tested against throughout the entitre website.
            *
            * An example of usage would be in the footer, a different analytics code is
            * used for the beta version of this website which is visible at http://www.team1294.org/
            */

            $preview_url = "www.preview.team1294.org"; // The Preview Domain
            $preview_overide = false; //Overide into beta mode
            $url = $_SERVER['HTTP_HOST'];

            if ($url == $preview_url || strpos($url,'localhost') !== false || $preview_overide) {
                $preview = true;
            } else {
                $preview = false;
            }


            //Figures out what page your on for the top bar menu
            // gets the current URI, remove the left / and then everything after the / on the right
            $directory = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));

            // loop through each directory, check against the known directories, and add class   
            $directories = array("", "about","contact","media","calendar"); // "" is the homepage sense we are using clean URL's
            foreach ($directories as $folder){
                $active[$folder] = ($directory[0] == $folder)? "active":"";
            }


            /*This will be for automatically turning off fancybox for mobile
            $fancybox_types = array("various", "about","contact","media","calendar");
            foreach ($fancybox_types as $folder){
                $active[$folder] = ($directory[0] == $folder)? "active":"";
            }
            */
            
        ?>
       
    </head>
    <body>


        <!--Begin Facebook SDK-->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!--END Facebook SDK-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
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
                            <li class="dropdown <?php echo $active['about']?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-question-sign"></span> Information <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/about/forms/2016.php"><i class="fa fa-pencil-square-o"></i> Forms & Documents</a></li>
                                    
                                    <li><a rel="nofollow" href="/about/competitions/2016.php"><i class="fa fa-connectdevelop"></i> Competitions</a></li>

                                    <?php if($preview){ /*Block out beta only products*/ ?>
                                    <li style="display: none"><a rel="nofollow" href ="/about/team/"><i class="fa fa-users"></i> Our Team</a></li>
                                    <li style="display: none"><a rel="nofollow" href="/about/website/"><span class="glyphicon glyphicon-globe"></span> The Website</a></li>
                                    <li style="display: none" class="divider"></li>
                                    <li style="display: none"><a rel="nofollow" href="/about/joining/"><span class="glyphicon glyphicon-heart-empty"></span> Join Us!</a></li>
                                    <li style="display: none"><a rel="nofollow" href="/about/donate/"><i class="fa fa-money"></i> Donations</a></li>
                                    <?php } //End of preview only block ?>
                                </ul>
                            </li>
                        <li class="dropdown <?php echo $active['media']?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-picture"></span> Media <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://youtube.com/user/TopGun1294/"><i class="fa fa-youtube-play"></i> Videos</a></li>
                                <li><a href="http://www.gallery.team1294.org/"><span class="glyphicon glyphicon-picture"></span> Pictures</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $active['calendar']?>"><a href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
                        <li class="<?php echo $active['contact']?>"><a href="/contact/"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>                        
                    </ul>
                    <div class="addthis_horizontal_follow_toolbox social-media-icons navbar-right"></div>
                    <!--<ul class="nav navbar-right">
                        <li><a id="donate-btn" href="/portal" class="btn btn-success navbar-btn">Portal</a></li>
                    </ul>
                    -->
                </div>
            </div>
        </nav>
        
        <div>
        <!--[if lte IE 8]>
        <div class="alert alert-warning popup">
                <h4>Warning!</h4>
                <p class="chromeframe">You are using a <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser to one that supports current web standards</a> <span class="Google-Chrome-Frame-Hint">*cough*</span><a class="alert-link" href="https://www.google.com/intl/en/chrome/browser/"/>Google Chrome</a><span class="Google-Chrome-Frame-Hint">*cough*</span> to improve your experience with the internet as a whole</p>
        </div>
        <![endif]-->
        </div>
        
        <?php if($preview){ ?>
            <div class="alert alert-dismissable alert-warning popup" id="preview-popup">
                    <i class="close glyphicon glyphicon-remove" data-dismiss="alert"><span class="sr-only">Close</span></i>
                    <h4><span class="glyphicon glyphicon-warning-sign"></span> Warning!</h4>
                    <p class="chromeframe">You are viewing a <strong>preview version</strong> of our website. Viewing this version of our website might result in <strong>random errors, formatting problems, usability problems, and other unknown issues that aren't fixed yet.</strong> Please visit our full stable website at <a class="alert-link" href="http://www.team1294.org">http://www.team1294.org</a> to avoid encountering errors. You may continue to view our site here, but don't be suprised when you find something that doesn't work.</p>
            </div>
        <?php } ?>
 