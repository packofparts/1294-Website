<div class="body-container footer" style="overflow: hidden;">
            <footer class="container">
                <div class="row">
                    <h2 id="sponsor-title">At Top Gun Robotics, We Love Our Sponsors!</h2><br>
                    <hr style="margin-top: -7px; ">
                </div>
                <style>
                    .left, .right {
                        background: none !important;
                        outline: 0;
                      color: darkslategrey;
                    }

                    .tech-slideshow {
                        height: 300px;
                        width: 6700px;
                        /*margin: 0 auto;*/
                        position: relative;
                        overflow: hidden;
                        transform: translate3d(0, 0, 0);
                      text-align: initial;
                    }

                  .tech-slideshow img {
                    max-height: 300px;
                  }

                  /* https://designshack.net/articles/css/infinitephotobanner/ */
                  .tech-slideshow img.sponsor-first {
                    animation: bannermove 60s linear infinite;
                  }

                  @keyframes bannermove {
                    0% {
                      margin-left: 0px;
                    }

                    100% {
                      margin-left: -5249px;
                    }
                  }

                  div#carouselSponsor ol.carousel-indicators#sp-carousel-indicators li {
                    border-color: darkslategrey;
                  }

                  div#carouselSponsor ol.carousel-indicators#sp-carousel-indicators li.active {
                    background-color: darkslategrey;
                  }

                            footer {
                                    margin-left: 0 !important;
                                        padding-left: 0 !important;
                            }
                </style>



                <div id="carouselSponsor" class="carousel slide hidden-sm hidden-md hidden-lg" data-ride="carousel" style="width: 70%; height: 60%; margin: 0 auto">
                    <ol class="carousel-indicators" id="sp-carousel-indicators">
                        <li data-target="#carouselSponsor" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSponsor" data-slide-to="1"></li>
                        <li data-target="#carouselSponsor" data-slide-to="2"></li>
                        <li data-target="#carouselSponsor" data-slide-to="3"></li>
                        <li data-target="#carouselSponsor" data-slide-to="4"></li>
                        <li data-target="#carouselSponsor" data-slide-to="5"></li>
                        <li data-target="#carouselSponsor" data-slide-to="6"></li>
                        <li data-target="#carouselSponsor" data-slide-to="7"></li>
                        <li data-target="#carouselSponsor" data-slide-to="8"></li>
                        <li data-target="#carouselSponsor" data-slide-to="9"></li>
                        <li data-target="#carouselSponsor" data-slide-to="10"></li>
                        <li data-target="#carouselSponsor" data-slide-to="11"></li>
                        <li data-target="#carouselSponsor" data-slide-to="12"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                         <div class="item active">
                            <img src="/img/sponsors/ehs.jpg" alt="Eastlake High School Logo" title="Eastlake High School"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/google.jpg" alt="Google Logo" title="Google"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/lwsd.jpg" alt="Lake Washington School Foundation Logo" title="Lake Washington School Foundation"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/boeing.jpg" alt="Boeing Logo" title="Boeing"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/chase.jpg" alt="Chase Logo" title="Chase"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/FIRSTWa.jpg" alt="FIRST Washington Logo" title="FIRST Washington"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/godaddy.jpg" alt="GoDaddy Logo" title="GoDaddy"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/honeywell.jpg" alt="Honeywell Logo" title="Honeywell"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/kenworth.jpg" alt="Kenworth Logo" title="Kenworth"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/microsoft.jpg" alt="Microsoft Logo" title="Microsoft"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/ospi.jpg" alt="Office of the Superintendant of Public Instruction Logo" title="Office of the Superintendent of Public Instruction"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/rocketdyne.jpg" alt="Aerojet Rocketdyne Logo" title="Aerojet Rocketdyne"/>
                        </div>
                        <div class="item">
                            <img src="/img/sponsors/sae.jpg" alt="SAE Washington Logo" title="SAE Washington"/>
                        </div>
                    </div>

                    <a href="#carouselSponsor" role="button" id="playpause" onClick="toggleSponsorCarousel()">
                        <span class="glyphicon glyphicon-pause" aria-hidden="true" id="sp-carousel-pause"></span>
                        <span class="glyphicon glyphicon-play" aria-hidden="true" id="sp-carousel-play" style="display: none;"></span>
                    </a>
                    <a class="left carousel-control" href="#carouselSponsor" role="button" data-slide="next" onclick="$('#carouselSponsor').carousel('prev');">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselSponsor" role="button" data-slide="next" onclick="$('#carouselSponsor').carousel('next');">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="tech-slideshow hidden-xs" id="slideshow">
                  <img class="sponsor-first" src="/img/sponsors/ehs.jpg" alt="Eastlake High School Logo" title="Eastlake High School"/>
                  <img src="/img/sponsors/google.jpg" alt="Google Logo" title="Google"/>
                  <img src="/img/sponsors/lwsd.jpg" alt="Lake Washington School Foundation Logo" title="Lake Washington School Foundation"/>
                  <img src="/img/sponsors/boeing.jpg" alt="Boeing Logo" title="Boeing"/>
                  <img src="/img/sponsors/chase.jpg" alt="Chase Logo" title="Chase"/>
                  <img src="/img/sponsors/FIRSTWa.jpg" alt="FIRST Washington Logo" title="FIRST Washington"/>
                  <img src="/img/sponsors/godaddy.jpg" alt="GoDaddy Logo" title="GoDaddy"/>
                  <img src="/img/sponsors/honeywell.jpg" alt="Honeywell Logo" title="Honeywell"/>
                  <img src="/img/sponsors/kenworth.jpg" alt="Kenworth Logo" title="Kenworth"/>
                  <img src="/img/sponsors/microsoft.jpg" alt="Microsoft Logo" title="Microsoft"/>
                  <img src="/img/sponsors/ospi.jpg" alt="Office of the Superintendant of Public Instruction Logo" title="Office of the Superintendent of Public Instruction"/>
                  <img src="/img/sponsors/rocketdyne.jpg" alt="Aerojet Rocketdyne Logo" title="Aerojet Rocketdyne"/>
                  <img src="/img/sponsors/sae.jpg" alt="SAE Washington Logo" title="SAE Washington"/>
                  <img src="/img/sponsors/ehs.jpg" alt="Eastlake High School Logo" title="Eastlake High School"/>
                  <img src="/img/sponsors/google.jpg" alt="Google Logo" title="Google"/>
                  <img src="/img/sponsors/lwsd.jpg" alt="Lake Washington School Foundation Logo" title="Lake Washington School Foundation"/>
                  <img src="/img/sponsors/boeing.jpg" alt="Boeing Logo" title="Boeing"/>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                        <div class="">
                            <div class="fb-like" id="fb-like-footer" data-href="https://www.facebook.com/topgunrobotics/" data-width="450" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                            <hr>
                            <a class="footer-links" title="Contact Us" href="/contact/">Contact Us</a> | <a class="footer-links" title="FIRST" href="http://www.firstinspires.org/"><em>FIRST</em></a> | <a class="footer-links" title="FIRST Washington" href="http://firstwa.org/"><em>FIRST</em> Washington</a> | <a class="footer-links" href="https://plus.google.com/103733199754924235388" rel="publisher">Google+</a> | <a class="footer-links" title="Star or Fork us on GitHub" href="https://github.com/FRC-1294">GitHub</a>
                        </div>
                    </div>
                </div>

            </footer>
        </div>

        <!--link rel="stylesheet" type="text/css" href="//brick.a.ssl.fastly.net/Clear+Sans:400,400i,500,600,700"-->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script type="text/javascript" async src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5428b7f92d869d2c&async=1&domready=1"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.min.js?v=2.1.5"></script>
        <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.min.js?v=1.0.6"></script>

        <script type="text/javascript" src="/js/main.min.js"></script>

        <?php
            /*To Add extra footer tags such as scripts, just set the $ExtraFooterTags Variable before the include statement*/
            if (!empty($ExtraFooterTags)) {
                echo $ExtraFooterTags;
            }
        ?>

        <script>
            const $sponsorCarousel = $('#carouselSponsor');
            const $sponsorPlay = $('#sp-carousel-play');
            const $sponsorPause = $('#sp-carousel-pause');
            let sponsorCarouselState = true; // false == paused

            function toggleSponsorCarousel() {
              sponsorCarouselState = !sponsorCarouselState;
              if (sponsorCarouselState) {
                $sponsorCarousel.carousel('cycle');
                $sponsorPlay.hide();
                $sponsorPause.show();
              } else {
                $sponsorCarousel.carousel('pause');
                $sponsorPlay.show();
                $sponsorPause.hide();
              }
            }

            <?php 
                /*Set a different tracking code based on if your viewing this website on the beta version or the full version*/
                if($preview){
                    //Beta Code
                    $analytics_code = 'UA-54892835-2';
                }
                else {
                    //Non-beta code
                    $analytics_code = 'UA-54892835-1';
                }
            ?>
            /*Google Analytics Tracking Code*/
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', '<?php echo $analytics_code; ?>', 'auto');
            ga('require', 'displayfeatures');
            ga('require', 'linkid', 'linkid.js');
            ga('send', 'pageview');

        </script>
    </body>
</html>
