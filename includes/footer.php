        <div class="body-container footer" style="">
            <footer class="container">
                <div class="row">
                    <h2 id="sponsor-title">At Top Gun Robotics, We Love Our Sponosors!</h2><br>
                    <hr style="margin-top: -7px; ">
                </div>
                
                <div class="row" class="sponsors">
                    <div class="col-sm-4">
                         <img class="img-responsive center-block" id="sponsor-orora" alt="Orora Logo" src="http://orora.com/logo20.png"/>
                    </div>
                    <div class="col-sm-4">                        
                       <img class="img-responsive center-block" id="sponsor-SAE" alt="SAE Northwest Logo" src="https://www.sae.org/images/sections/ms049/NWL_317138991_SAE_Northwest_Logo.jpg"/>
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
                            <a class="footer-links" title="Contact Us" href="/contact/">Contact Us</a> | <a class="footer-links" title="US First Robotics" href="http://usfirst.org/">US First</a> | <a class="footer-links" title="Washingotn First Robotics" href="http://firstwa.org/">First WA</a> | <a class="footer-links" href="https://plus.google.com/103733199754924235388" rel="publisher">Google+</a> | <a class="footer-links" title="Star or Fork us on GitHub" href="https://github.com/FRC-1294">GitHub</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
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
