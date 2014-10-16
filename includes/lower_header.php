        <style>
            body {
                padding-top: 0px;
                padding-bottom: 10px;
                background-image: url('/img/NavyBlueCamo.png');
            }
        </style>
        <!--link rel="stylesheet" type="text/css" href="/subtrees/bootstrap/dist/css/bootstrap.min.css"-->
        <link rel="stylesheet" type="text/css" href="/style/combined.main.min.css">


        <?php
            /*
                The <title> and description tags are set in betweeen the upper header and lower header include statements
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
                                <li><a href="/about/team/"><i class="fa fa-users"></i> Our Team</a></li>
                                <li><a href="/about/website/"><span class="glyphicon glyphicon-globe"></span> The Website</a></li>
                                <li class="divider"></li>
                                <li><a href="/about/joining/"><span class="glyphicon glyphicon-heart-empty"></span> Join Us!</a></li>
                                <li><a href="/about/donate/"><i class="fa fa-money"></i> Donations</a></li>
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
        <!--[if lt IE 8]>
        <div class="alert alert-dismissable alert-warning popup">
                <i class="close glyphicon glyphicon-remove" data-dismiss="alert"></i>
                <h4>Warning!</h4>
                <p class="chromeframe">You are using a <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser to one that supports current web standards</a> <span id="Google-Chrome-Frame-Hint">*cough*</span><a class="alert-link" href="https://www.google.com/intl/en/chrome/browser/"/>Google Chrome</a><span id="Google-Chrome-Frame-Hint">*cough*</span></a> to improve your experience witht the internet as a whole</p>
        </div>
        <![endif]-->
        </div>
        
<<<<<<< HEAD
        <div class="alert alert-dismissable alert-warning popup" id="preview-popup">
                <i class="close glyphicon glyphicon-remove" data-dismiss="alert"></i>
=======
        <div class="alert alert-dismissable alert-warning popup">
                <i class="close glyphicon glyphicon-remove" data-dismiss="alert"><span class="sr-only">Close</span></i>
>>>>>>> 521f70e2d255cf5d543a1246531502e3242d3c39
                <h4><span class="glyphicon glyphicon-warning-sign"></span> Warning!</h4>
                <p class="chromeframe">You are viewing a <strong>preview version</strong> of our website. Viewing this version of our website might result in <strong>random errors, formatting problems, usability problems, and other unknown issues that aren't fixed yet.</strong> Please visit our full stable website at <a class="alert-link" href="http://www.team1294.org">http://www.team1294.org</a> to avoid encountering errors. You may continue to view our site here, but don't be suprised when you find something that doesn't work.</p>
        </div>
        

        <script>

            /* 
             * This code hides the preview disclaimer after one view, by checking if a entry called 'previewMessageDisplayed' exists in the browser's sessionStorage
             * If sessionStorage doesn't exist, nothing (should) happen.
             * You can check http://caniuse.com/#feat=namevalue-storage for cross-platform compatability.
             * This addition really helps on devices such as my phone when browsing in mobile Chrome, because the message is hidden after one exposure. Since the message pretty much fills my screen, this makes it easier to browse the page.
             *
             * Addition by Austin Jenchi (timtim17 on GitHub)
             */
        	
        	try{ // wrapped in a try catch in case if we have a browser that doesn't support sessionStorage
	        	if(!sessionStorage.getItem('previewMessageDisplayed')){ // checks the sessionStorage if the key 'previewMessageDisplayed' doesn't exist (returns null)
	        		sessionStorage.setItem('previewMessageDisplayed', true); // if it does not, set it to true, and do nothing
	        	}else{
	        		document.getElementById('preview-popup').parentNode.removeChild(document.getElementById('preview-popup')); // if it does exist, delete the popup message node
	        	}
	        }catch(e){
	        	// uh-oh, browser that doesn't support sessionStorage
	        	// (not really doing anything with this error)
	        }
        </script>

    
 