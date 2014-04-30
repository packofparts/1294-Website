        <div class="body-container footer" style="margin-bottom: 0px!important; padding-bottom: 0px!important;">
            <footer class="container ">
                <h2><span id="sponsor-title">At Top Gun Robotics, We Love Our Sponosors</span></h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" id="sponsor-SAE" alt="SAE Northwest Logo" src="http://www.sae.org/images/sections/ms049/NWL_317138991_SAE_Northwest_Logo.jpg"/>
                        </div>
                        <div class="col-sm-4">                        
                            <img class="img-responsive" id="sponsor-orora" alt="Orora Logo" src="http://orora.com/logo20.png"/>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" id="sponsor-boeing" alt="Boeing Logo" src="http://www.iptv.org/medialib/media/Boeing_RGB_blue_std_P.JPG"/>
                        </div>
                    </div>

                <div class="footer-links">
                    <a class="footer-links" title="Contact Us" href="/contact">Contact Us</a> | <a class="footer-links" title="US First Robotics" href="http://usfirst.org">US First</a> | <a class="footer-links" title="Washingotn First Robotics"href="http://firstwa.org/">First WA</a>
                    <div class="fb-like" data-href="https://www.facebook.com/topgunrobotics" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                </div>
            </footer>
        </div>
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
		            maxWidth	: 2000,
		            maxHeight	: 2000,
		            fitToView	: false,
		            width		: '80%',
		            height		: '80%',
		            autoSize	: true,
		            closeClick	: false,
		            openEffect	: 'none',
		            closeEffect	: 'none'
	            });
            });
            $('.add-tooltip').tooltip();
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
