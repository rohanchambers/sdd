<?php
// ENV. status. Run grunt
$PRODUCTION = true;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Slam Dunk Digital - Web design package deals</title>
        <meta name="title" content="Slam Dunk Digital | Heinz, Get Well Soup">
        <meta name="author" content="Slam Dunk Digital">
        <meta name="description" content="Slam Dunk Digital is a creative and digital agency that specialises in user friendly web design and development based in London. We transform brands to make them fresh young, and vibrant with the help of a new breed of thinkers, planners, strategists and creatives technologists.">
        <meta name="keywords" content="slam dunk digital, digital agency, web design, web development, respsonive design, UX, online marketing, strategy, social media, print">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <?php if ($PRODUCTION) { ?>
                <link rel="stylesheet" href="/assets/css/compiled.min.css">
            <?php } else { ?>
                <link rel="stylesheet" href="/bower_components/normalize-css/normalize.css">
                <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
                <script src="/assets/js/vendor/modernizr-custom.js"></script>
            <?php }
        ?>

        <!-- Open graph tags -->
        <meta property="og:image"           content="http://slamdunkdigital.co.uk/">
        <meta property="og:title"           content="Welcome to Slam Dunk Digital">
        <meta property="og:description"     content="Slam Dunk Digital is a creative and digital agency that specialises in user friendly web design and development based in London. We transform brands to make them fresh, young and vibrant with the help of a new breed of thinkers, planners, strategists and creatives technologists.">
        <meta property="og:url"             content="http://slamdunkdigital.co.uk/">
        <meta property="og:image:width"     content="600">
        <meta property="og:image:height"    content="600">
        <meta property="og:image:type"      content="image/jpg">
        <meta property="fb:app_id"          content="168519230210632">

        <meta name="twitter:card"           content="summary">
        <meta name="twitter:site"           content="@slamdunkdigital">
        <meta name="twitter:title"          content="Welcome to Slam Dunk Digital">
        <meta name="twitter:description"    content="Slam Dunk Digital is a creative and digital agency specialising in web design and development based in London.">
        <meta name="twitter:creator"        content="@slamdunkdigital">
        <meta name="twitter:image:src"      content="http://slamdunkdigital.co.uk/">
        <meta name="twitter:domain"         content="slamdunkdigital.co.uk">
    </head>
    <body class="page-case-study">
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="sk-cube-grid">
                    <div class="sk-cube sk-cube1"></div>
                    <div class="sk-cube sk-cube2"></div>
                    <div class="sk-cube sk-cube3"></div>
                    <div class="sk-cube sk-cube4"></div>
                    <div class="sk-cube sk-cube5"></div>
                    <div class="sk-cube sk-cube6"></div>
                    <div class="sk-cube sk-cube7"></div>
                    <div class="sk-cube sk-cube8"></div>
                    <div class="sk-cube sk-cube9"></div>
                </div>
            </div>
        </div>

        <!-- Site Header for pages -->
        <div id="site-header-outer">
            <header id="site-header">
                <h1><a href="/">Slam Dunk Digital</a></h1>
                <nav id="social-links" class="nav-global">
                    <ul>
                        <li><span class="share-text">Share</span><a href="#nogo" id="share-me-cta" class="animatedClick fast" title="Share this site" data-target="share-me-panel"><i class="fa fa-1x fa-share-alt btn-animate"></i></a>
                            <ul id="share-me" class="animated fadeInDown fast share-me-panel">
                                <li><div class="fb-share-button" data-href="http://slamdunkdigital.co.uk/" data-layout="button"></div></li>
                                <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://slamdunkdigital.co.uk/" data-text="We stand for FLAIR / MOTION / CREATIVITY / &amp; STYLE / 10 OUT OF 10 / Every time!" data-via="slamdunkdigital">Tweet</a></li>
                                <li><script type="IN/Share" data-url="http://slamdunkdigital.co.uk/"></script></li>
                                <li><div class="g-plusone" data-annotation="none"></div></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
        </div><!-- End of Site header for pages -->

        <section class="packages-banner">
            <div class="language">
                <a href="index.php">English</a> | <a href="#">Francais</a>
            </div>
            <div class="container">
                <article class="three-points">
                    <h1>Rénovez l’image de votre restaurant à un prix abordable!</h1>
                    <p>Finalement une agence qui donne accès aux meilleurs designs sans payer de prix astronomiques.</p>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Dédié aux restaurateurs</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Une autonomie totale pour promouvoir vos menus</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Investissement à la taille de vos besoins</li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="package-deals">
            <article id="basic" class="col">
                <h2>Offre "Basic"</h2>
                <p><strong>Nous fournissons:</strong></p>
                <ul>
                    <li>Choix entre <strong>3 designs différents</strong></li>
                    <li>Site web d’<strong>une page</strong></li>
                    <li><strong>2 révisions</strong> possibles</li>
                    <li><strong>Pas de changement</strong> gratuit après remise du site</li>
                    <li>Tous changements additionnels sur offre</li>
                    <li><strong>Une session</strong> de formation (1-2 heures) sur Skype</li>
                    <li><strong>Une semaine de support</strong> gratuite après remise du site</li>
                    <li>Livraison du site <strong>2-3 semaines</strong> dès réception de tous les éléments</li>
                </ul>

                <p class="guarantee lang-fr"><strong>Nous garantissons:</strong></p>
                <ul>
                    <li>Accès au back-office simple et aisé pour adapter les menus et plats du jour</li>
                    <li>Mise en place de tous vos textes et photos qui nous seront fournies (uniquement la 1ère fois)</li>
                    <li>Site web adaptatif sur tous les dispositifs smartphone, tablettes et ordinateurs</li>
                    <li>Meilleures pratiques SEO</li>
                    <li>Intégration des plateformes sociales avec boutons de partage</li>
                </ul>
                <span class="btn-price">CHF 2,990</span>
            </article>

            <article id="business" class="col">
                <h2>Offre "Business"<span class="star-pop"> <span class="fr">Le plus<br> Populaire</span></span></h2>
                <p><strong>Nous fournissons:</strong></p>
                <ul>
                    <li>Choix entre <strong>5 designs différents</strong></li>
                    <li>Site web de <strong>5 pages</strong></li>
                    <li><strong>5 révisions</strong> possibles</li>
                    <li><strong>Un changement gratuit</strong> d’une page/contenu après remise du site</li>
                    <li>Tous changements additionnels sur offre</li>
                    <li><strong>Deux sessions</strong> de formation (1-2 heures chacune) sur Skype</li>
                    <li><strong>1 mois de support</strong> gratuit après remise <br>du site</li>
                    <li>Livraison du site <strong>2-3 semaines</strong> dès réception de tous les éléments</li>
                </ul>

                <p class="guarantee lang-fr"><strong>Nous garantissons:</strong></p>
                <ul>
                    <li>Accès au back-office simple et aisé pour adapter les menus et plats du jour</li>
                    <li>Mise en place de tous vos textes et photos qui nous seront fournies (uniquement la 1ère fois)</li>
                    <li>Site web adaptatif sur tous les dispositifs smartphone, tablettes et ordinateurs</li>
                    <li>Meilleures pratiques SEO</li>
                    <li>Intégration des plateformes sociales avec boutons de partage</li>
                </ul>
                <span class="btn-price">CHF 4,990</span>
            </article>

            <article id="premium" class="col col-12">
                <h2>Offre "Premium"</h2>
                <p><strong>Nous fournissons:</strong></p>
                <ul>
                    <li><strong>Libre choix de design</strong> ou site web fait sur mesure</li>
                    <li><strong>Nombre illimité</strong> de pages</li>
                    <li><strong>Nombre illimité</strong> de revisions</li>
                    <li><strong>3 changements gratuit</strong> d’une page/contenu après remise du site</li>
                    <li>Tous changements additionnels sur offre</li>
                    <li><strong>Nombre illimité de sessions</strong> de formation sur Skype</li>
                    <li><strong>3 mois de support</strong> gratuit après remise du site</li>
                    <li>Livraison du site <strong>4-6 semaines</strong> dès réception de tous les éléments</li>
                </ul>

                <p class="guarantee lang-fr"><strong>Nous garantissons:</strong></p>
                <ul>
                    <li>Accès au back-office simple et aisé pour adapter les menus et plats du jour</li>
                    <li>Mise en place de tous vos textes et photos qui nous seront fournies (uniquement la 1ère fois)</li>
                    <li>Site web adaptatif sur tous les dispositifs smartphone, tablettes et ordinateurs</li>
                    <li>Meilleures pratiques SEO</li>
                    <li>Intégration des plateformes sociales avec boutons de partage</li>
                </ul>
                <span class="btn-price">CHF 10,000+</span>
            </article>

            <article id="extras" class="col col-12">
                <h2>Additional features</h2>
                <ul>
                    <li>Branding, logo, identité visuelle</li>
                    <li>Rajout d’un blog pour partager votre philosophie et promouvoir votre établissement. Créer facilement un post grâce à nos modèles</li>
                    <li>Création des plateformes media: facebook, instagram, pinterest, youtube, tumblr, etc</li>
                    <li>Rapports google analytics sur trafic du site</li>
                    <li>Photos professionnelles</li>
                </ul>
                <span class="btn-price">Get in touch with us</span>
            </article>
        </section>

        <section class="packages-banner process">
            <div class="container">
                <article class="three-points">
                    <h1>Process of a web project</h1>
                    <p>To get an idea of how the process of our journey together will unfold please have a look below. Please understand all projects are different so the below is a rough outline. Some fully customised designs...</p>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Dédié aux restaurateurs</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Une autonomie totale pour promouvoir ses menus</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Investissement à la taille de vos besoins</li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="process-steps">
            <header>
            </header>
            <div class="row">
                <article class="col">
                    <h2>1. Package Selection</h2>
                    <p>Get an idea of which package you want that fits your needs and available budget and we can then speak one to one to help you through the process.</p>
                </article>
                <article class="col">
                    <h2>2. Accept Estimate &amp; Pay</h2>
                    <p>Once we have agreed on the package and any additional features you think are necessary, we can agree on a total quote and a delivery date.</p>
                </article>
                <article class="col">
                    <h2>3. Discovery Call</h2>
                    <p>Using skype or over the phone, we'll work together to construct your website's infrastructure &amp; pages. It's important to get this perfect from the start...</p>
                </article>
                <article class="col">
                    <h2>4. Design</h2>
                    <p>Working with the page layouts we created in step 3, depending on which package you chose our creative team will customize your website. We will always give you a preview of the final design before we commence coding the site.</p>
                </article>
                <article class="col">
                    <h2>5. Development</h2>
                    <p>The coding / programming commences and we integrate any required functionality &amp; ensure the site works great on mobile.</p>
                </article>
                <article class="col">
                    <h2>6. Edit Call</h2>
                    <p>With your working website ready for review, we do the final cosmetic checks to make tweaks across the site.</p>
                </article>
                <article class="col">
                    <h2>7. Final Review</h2>
                    <p>If the content has been provided to us, we add it and do anohter final site review. This is optional, you are free to put in the content manually via the CMS.</p>
                </article>
                <article class="col">
                    <h2>8. Ready for launch</h2>
                    <p>Upon final transfer of the total quote (if agreed to do in instalments), we will upload your site to the web and voila!</p>
                </article>
            </div>
        </section>

        <section id="pck-services">
            <div class="container">
                <article class="col-6">
                    <h1>What we need to complete the order?</h1>
                    <ol>
                        <li>WordPress login details if available</li>
                        <li>Hosting / cPanel / FTP login details</li>
                        <li>All content signed off and provided by you</li>
                        <li>All imagery assets that you want on the site provided</li> 
                    </ol>
                </article>
            </div>
        </section>

        <div id="footer-outer">
            <footer>
                <div id="footer-info" class="col">
                    <p id="footer-logo">Slam<br>
                    Dunk<br>
                    Digital</p>

                    <p>+44 (0)79 17044058<br>
                    <a href="mailto:info@slamdunkdigital.com">info@slamdunkdigital.com</a></p>

                    <p>CTB Studios,<br>
                    Angel, Islington High Street<br>
                    London<br>
                    N1 0YL, UK</p>
                </div>

                <div id="copyright" class="col">
                    <div id="copyright-info">
                        <p>Slam Dunk Digital Limited<br>
                        ©2016 Slam Dunk Digital. All rights reserved</p>
                        <span id="border-blue"></span>
                    </div>
                </div>
            </footer>
        </div>

        <?php include("../incl/inc-navs-cs.php"); ?>

        <?php if ($PRODUCTION) { ?>
            <script src="/assets/js/cs-compiled.min.js"></script>
        <?php } else { ?>
            <script src="/assets/js/vendor/modernizr-custom.js"></script>
            <script src="/bower_components/jquery/dist/jquery.min.js"></script>
            <script src="/assets/js/vendor/nav-overlay.js"></script>
            <script src="/assets/js/vendor/classie.js"></script>
            <script src="/assets/js/vendor/css3-animate-it.min.js"></script>
            <script src="/assets/js/vendor/jquery.fittext.js"></script>
            <script src="/assets/js/vendor/constellations.js"></script>
            <script src="/assets/js/main-pages.js"></script>
        <?php }
        ?>

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
    </body>
</html>