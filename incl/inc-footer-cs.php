        <div id="footer-outer">
            <footer>
                <div id="footer-info" class="col">
                    <p id="footer-logo">Slam<br>
                    Dunk<br>
                    Digital</p>
                    <p><a href="mailto:info@slamdunkdigital.com">info@slamdunkdigital.com</a></p>
                    <p>CTB Studios,<br>
                    Angel, Islington High Street<br>
                    London<br>
                    N1 0YL, UK</p>
                </div>

                <div id="copyright" class="col">
                    <div id="copyright-info">
                        <p>Site <a href="#" class="cd-btn cd-modal-trigger">credits</a><br>
                        Slam Dunk Digital Limited<br>
                        <?php date_default_timezone_set('Europe/London'); ?>
                        &copy;<?= date("Y"); ?> Slam Dunk Digital. All rights reserved</p>
                        <span id="border-blue"></span>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Full sceen Navigation -->
        <button class="hamburger darkNav" id="trigger-overlay" type="button">
            <span id="nav-icon">
              <span></span>
              <span></span>
              <span></span>
            </span>
        </button>

        <button id="back-to-top"></button>

        <!-- Main navigation -->
        <div class="overlay overlay-hugeinc">
            <div class="overlay-layer"></div>
            <img src="../../assets/video/space.jpg" alt="Space">
            <div id="space-video">
                <video loop muted autoplay>
                    <source src="../../assets/video/space.webm" type="video/webm">
                    <source src="../../assets/video/space.mp4" type="video/mp4">
                    <source src="../../assets/video/space.ogv" type="video/ogg">
                </video>
            </div>
            <header>
                <h1>Slam Dunk Digital</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="/#home"><span class="letter-yellow">H</span><span class="letter-red">o</span><span class="letter-green">m</span><span class="letter-blue">e</span></a></li>
                    <li class="yellow"><a href="/#what-we-do"><span class="yellow">W</span>hat we do</a></li>
                    <li class="red"><a href="/#work"><span class="red">O</span>ur work</a></li>
                    <li class="green"><a href="/#clients"><span class="green">C</span>lients</a></li>
                    <li class="blue"><a href="/#contact"><span class="blue">C</span>ontact</a></li>
                    <li class="overlay-share show-hide">
                        <ul>
                            <li><div class="fb-share-button" data-href="http://slamdunkdigital.com/" data-layout="button"></div></li>
                            <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://slamdunkdigital.com/" data-text="We stand for FLAIR / MOTION / CREATIVITY / &amp; STYLE / 10 OUT OF 10 / Every time!" data-via="slamdunkdigital">Tweet</a></li>
                            <li><script type="IN/Share" data-url="http://slamdunkdigital.com/"></script></li>
                            <li><div class="g-plusone" data-annotation="none"></div></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Lightbox -->
        <div class="cd-modal">
            <div class="modal-content">
                <div>
                    <h1>Site credits</h1>
                    <p>We always like to give credit where credit is due, if we have used somebody else's plugin or any bit of functionality. Why re-invent the wheel!</p>
                    <ul>
                        <li>Animated Background Headers from Article on Codrops</li>
                        <li>Alemansdesign.it for space video on main navigation</li>
                        <li>Thumbnail Proximity Effect</li>
                    </ul>
                </div>
            </div> <!-- .modal-content -->
            <a href="#0" class="modal-close">
                <i class="fa fa-times fa-3x" aria-hidden="true"></i>
            </a>
        </div> <!-- .cd-modal -->
        <div class="cd-transition-layer">
            <div class="bg-layer"></div>
        </div> <!-- .cd-transition-layer -->

        <?php if ($PRODUCTION) { ?>
            <script src="/assets/js/cs-compiled.min.js"></script>

            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=168519230210632";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
            <!-- Twitter share -->
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <!-- Google + share -->
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            <!-- Linkedin Share -->
            <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
            <!-- Start of StatCounter Code for Default Guide -->
            <script type="text/javascript">
            var sc_project=11006368;
            var sc_invisible=1;
            var sc_security="096fd4e3";
            var scJsHost = (("https:" == document.location.protocol) ?
            "https://secure." : "http://www.");
            document.write("<sc"+"ript type='text/javascript' src='" +
            scJsHost+
            "statcounter.com/counter/counter.js'></"+"script>");
            </script>
            <noscript><div class="statcounter"><a title="free hit
            counter" href="http://statcounter.com/" target="_blank"><img
            class="statcounter"
            src="//c.statcounter.com/11006368/0/096fd4e3/1/" alt="free
            hit counter"></a></div></noscript>
            <!-- End of StatCounter Code for Default Guide -->
        <?php } else { ?>
            <script src="/assets/js/vendor/modernizr-custom.js"></script>
            <script src="/bower_components/jquery/dist/jquery.min.js"></script>
            <script src="/assets/js/vendor/nav-overlay.js"></script>
            <script src="/assets/js/vendor/classie.js"></script>
            <script src="/assets/js/vendor/css3-animate-it.min.js"></script>
            <script src="/assets/js/vendor/jquery.fittext.js"></script>
            <script src="/assets/js/vendor/constellations.js"></script>
            <script src="assets/js/vendor/lightbox.js"></script>
            <script src="/bower_components/flickity/dist/flickity.pkgd.min.js"></script>
            <script src="/assets/js/main-pages.js"></script>
        <?php }
        ?>
        <script>
        //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('#status').fadeOut(); // will first fade out the loading animation
                $('#preloader').fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').css({'overflow':'visible'});
                $('#case-study-nav a').addClass('buttonPulse');
            })
        //]]>
        </script>