<?php
// ENV. status
$PRODUCTION = true;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Slam Dunk Digital - SOHO Film Finance</title>
        <meta name="title" content="Slam Dunk Digital | SOHO Film Finance">
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
                <link rel="stylesheet" type="text/css" href="/bower_components/flickity/dist/flickity.min.css">
                <script src="/assets/js/vendor/modernizr-custom.js"></script>
            <?php }
        ?>

        <!-- Open graph tags -->
        <meta property="og:image"           content="http://slamdunkdigital.com/">
        <meta property="og:title"           content="Welcome to Slam Dunk Digital">
        <meta property="og:description"     content="Slam Dunk Digital is a creative and digital agency that specialises in user friendly web design and development based in London. We transform brands to make them fresh, young and vibrant with the help of a new breed of thinkers, planners, strategists and creatives technologists.">
        <meta property="og:url"             content="http://slamdunkdigital.com/">
        <meta property="og:image:width"     content="600">
        <meta property="og:image:height"    content="600">
        <meta property="og:image:type"      content="image/jpg">
        <meta property="fb:app_id"          content="168519230210632">

        <meta name="twitter:card"           content="summary">
        <meta name="twitter:site"           content="@slamdunkdigital">
        <meta name="twitter:title"          content="Welcome to Slam Dunk Digital">
        <meta name="twitter:description"    content="Slam Dunk Digital is a creative and digital agency specialising in web design and development based in London.">
        <meta name="twitter:creator"        content="@slamdunkdigital">
        <meta name="twitter:image:src"      content="http://slamdunkdigital.com/">
        <meta name="twitter:domain"         content="slamdunkdigital.com">
    </head>
    <body class="page-case-study-custom">
        <?php include("../../incl/inc-header-cs.php"); ?>

        <!-- Case study Intro -->
        <div class="cs-sff">
            <section id="case-study-nav">
                <div class="col"><a href="../perfect-peaks-brews/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../heineken/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">                
                <div class="row top-content">
                    <div class="col"></div>

                    <div class="col">
                        <article>
                            <h1>SOHO Film Finance 
                                <span>Joy is an alternative investment</span>
                            </h1>                        
                        </article>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span><a href="http://www.sohofilmfinance.com/" target="_blank">SOHO Film Finance</a></span></h2>
                            <h2>Work link:</h2>
                            <p><a href="http://www.sohofilmfinance.com/" target="_blank">www.sohofilmfinance.com</a></p>                            
                            <p>SOHO Film Finance is a EIS Film Investment Company based in London, specialising in sourcing high profile film and television projects in order to reach the highest possible returns for our clients.</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <article>
                            <h2>Brief:</h2>
                            <p>We took on this project in the film finance business as firstly at Slam Dunk we are all movie buffs and secondly we enjoy going to some of the premieres.<br>
                            The site was based on a brochure that was previously designed by the creative director Laurent Graudens. The company liked it so much they asked us to create their whole identify around this theme. The other guideline was that they wanted the site to have movement and motion so to this we created some parallax effects along with some brochue style design layouts.</p>                            
                            <h2>Deliverables</h2>
                            <ul>
                                <li>Project &amp; Client management</li>
                                <li>Creative direction</li>
                                <li>Design &amp; rebranding</li>
                                <li>UX wireframing &amp; A/B testing</li>
                                <li>Design &amp; development</li>
                                <li>Back-end theme creation with Wordpress</li>
                                <li>Deployment to servers</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <div class="main-carousel">
                            <div class="carousel-cell single"><img src="img/about.jpg" alt="About" /></div>
                            <div class="carousel-cell single"><img src="img/beahead.jpg" alt="Black ale" /></div>
                            <div class="carousel-cell single"><img src="img/assets.jpg" alt="Black ale" /></div>
                        </div>
                    </div>
                </div>                
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>