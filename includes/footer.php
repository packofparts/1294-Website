
          <hr>

          <footer class="container">
            <p><span id="sponser-title">At Top Gun Robotics, We Love Our Sponsers</span></p><a id="donate-btn" href="/donate" class="btn btn-success">Donate/Sponsor</a>
                   
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                        <img id="sponser-SAE" class="img-responsive" alt="SAE Northwest Logo" src="http://www.sae.org/images/sections/ms049/NWL_317138991_SAE_Northwest_Logo.jpg"/>
                    </div>
                    <div class="col-md-4">
                        <img id="sponser-boeing" alt="Boeing Logo" src="http://www.iptv.org/medialib/media/Boeing_RGB_blue_std_P.JPG"/>
                    </div>
                    <div class="col-md-4">
                        <img id="sponser-orora" alt="Orora Logo" src="http://orora.com/logo20.png"/>
                    </div>
                </div>
            </div>
          </footer>
    </div>  <!--/body-container-->
        <?php
            /*To Add extra footer tags such as scripts, just set the $ExtraFooterTags Variable before the include footer*/
            if (!empty($ExtraFooterTags)) {
                echo $ExtraHeaderTags;
            }
        ?>
    </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="/js/vendor/bootstrap.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script>
            /*Google Analytics*/
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
