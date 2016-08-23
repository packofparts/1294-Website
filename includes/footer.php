        <div class="body-container footer" style="">
            <footer class="container">
                <div class="row">
                    <h2 id="sponsor-title">At Top Gun Robotics, We Love Our Sponsors!</h2><br>
                    <hr style="margin-top: -7px; ">
                </div>
                
                <div class="row" class="sponsors">
                    <div class="col-sm-4">
                         <img class="img-responsive center-block" id="sponsor-kenworth" alt="Kenworth Logo" src="http://nctrucking.wildapricot.org/Resources/Pictures/Kenworth%20Bar%20Logo%20with%20A%20PACCAR%20Company%20Black%20Trans%20Background%20800%20DPIpng.png"/>
                    </div>
                    <div class="col-sm-4">                        
                       <img class="img-responsive center-block" id="sponsor-SAE" alt="SAE Northwest Logo" src="http://www.sae.org/images/sections/ms049/NWL_380839334_sae_nw_logo_smaller.gif"/>
                    </div>
                    <div class="col-sm-4">
                        <img class="img-responsive center-block" id="sponsor-boeing" alt="Boeing Logo" src="http://www.iptv.org/medialib/media/Boeing_RGB_blue_std_P.JPG"/>
                    </div>
                    <hr>
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

        <link rel="stylesheet" type="text/css" href="//brick.a.ssl.fastly.net/Clear+Sans:400,400i,500,600,700">

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
