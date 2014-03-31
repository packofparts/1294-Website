
          <hr class="footer-seperator">

          <footer class="container">
            <p><span id="sponser-title">At Top Gun Robotics, We Love Our Sponsers</span></p>
                   
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" id="sponser-SAE" class="img-responsive" alt="SAE Northwest Logo" src="http://www.sae.org/images/sections/ms049/NWL_317138991_SAE_Northwest_Logo.jpg"/>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" id="sponser-boeing" alt="Boeing Logo" src="http://www.iptv.org/medialib/media/Boeing_RGB_blue_std_P.JPG"/>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" id="sponser-orora" alt="Orora Logo" src="http://orora.com/logo20.png"/>
                    </div>
                </div>
            </div>
            <div class="footer-links">
                <a class="footer-links" title="Contact Us" href="/contact/">Contact Us</a> | <a class="footer-links" title="US First Robotics" href="usfirst.org">US First</a> | <a class="footer-links" title="Washingotn First Robotics"href="http://firstwa.org/">First WA</a>
            </div>
          </footer>
    </div>  <!--/body-container-->

        <?php
            /*To Add extra footer tags such as scripts, just set the $ExtraFooterTags Variable before the include statement at the top of the document*/
            if (!empty($ExtraFooterTags)) {
                echo $ExtraFooterTags;
            }
        ?>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <script type="text/javascript">
            $(document).ready(function() {
	            $(".fancybox").fancybox();
                $(".various").fancybox({
		            maxWidth	: 800,
		            maxHeight	: 600,
		            fitToView	: false,
		            width		: '70%',
		            height		: '70%',
		            autoSize	: false,
		            closeClick	: false,
		            openEffect	: 'none',
		            closeEffect	: 'none'
	            });
            });
        </script>
        <script>
            /*Google Analytics*/
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
