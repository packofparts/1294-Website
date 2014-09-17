  
        <link rel="stylesheet" type="text/css" href="/subtrees/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.min.css">
        <style>
            body {
                padding-top: 0px;
                padding-bottom: 20px;
                background: #78866B;
                background:  #eeeeee; 
                background-image: url('/img/NavyBlueCamo.png');
            }
        </style>

        <?php
            /*
            *There might be some extra tags that need to be placed in the header,
            *Any extra tags needed will be added by setting the $ExtraTags Variable right before the include statement
            *on a webpage, first we check if there is a tag set, if it is, we add it the extra tags to the header.
            *There is also a $ExtraFooterTags variable that can be set to add extra tags to the footer.
            */

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
            $browserlocale = str_replace('-', '_', ($_SERVER['HTTP_ACCEPT_LANGUAGE']));
            
        ?>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <!--In oreder to get the WOWSlider to work, we have to put the jquery tags in the head section-->
    </head>
    <body>


        <!--Begin Facebook SDK-->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/<?php echo $browserlocale ?>/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!--END Facebook SDK-->
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
                        <li class="<?php echo $active['calendar']?>"><a href="/calendar/"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
                        <li class="<?php echo $active['contact']?>"><a href="/contact/"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>                        
                    </ul>
                    <!--<ul class="nav navbar-right">
                        <li><a id="donate-btn" href="/portal" class="btn btn-success navbar-btn">Portal</a></li>
                    </ul>
                    -->
                </div>
            </div>
        </div>
        
        <div>
        <!--[if lt IE 8]>
        <div class="alert alert-dismissable alert-warning popup">
                <i class="close glyphicon glyphicon-remove" data-dismiss="alert"></i>
                <h4>Warning!</h4>
                <p class="chromeframe">You are using a <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser to one that supports current web standards</a> <span id="Google-Chrome-Frame-Hint">*cough*</span><a class="alert-link" href="https://www.google.com/intl/en/chrome/browser/"/>Google Chrome</a><span id="Google-Chrome-Frame-Hint">*cough*</span></a> to improve your experience witht the internet as a whole</p>
        </div>
        <![endif]-->
        </div>        

        
        <div class="alert alert-dismissable alert-warning popup">
                <i class="close glyphicon glyphicon-remove" data-dismiss="alert"></i>
                <h4>Warning!</h4>
                <p class="chromeframe">You are viewing a <strong>preview version</strong> of our website. Viewing this version of our website might result in <strong>errors, formatting problems, usability problems</strong>, and other unknown problems that are not fixed yet. Please visit our full stable website at <a class="alert-link" href="http://www.team1294.org">http://www.team1294.org</a> to avoid encountering errors. You may continue to view our site here, but don't be suprised when you find something that doesn't work.</p>
        </div>
        

    
 