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
        <title>Slam Dunk Digital - Perfect Peaks Brews</title>
        <meta name="title" content="Slam Dunk Digital | Europe's New Wild Nature Unleashed">
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
        <div class="cs-perfect-peaks-brews">
            <section id="case-study-nav">
                <div class="col"><a href="../phone-resq/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../soho-film-finance/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">                
                <div class="row top-content">
                    <div class="col">
                        <img src="img/logo_turq.png" alt="Pefect Peaks Brews" width="310" />
                    </div>

                    <div class="col">
                        <article>
                            <h1>Perfect Peaks Brews 
                                <span>Kicking back after a hard days work with a nice cold brew</span>
                            </h1>                        
                        </article>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span>Perfect Peaks Brews</span></h2>
                            <p>Perfect Peaks Brewing is a personal brewing project inspired by the craft brewing movement by creating quality beers for moods and moments. Beer to refresh,recover and reanimate. Cascais, Lisbon, Portugal.</p>

                            <h2>Brief:</h2>
                            <p>We were involved in the complete rebranding of this brewery's look and feel, soon to be sold in mass quantity over Switzerland, France and Portugal. The new base for this brewery is now in Portugal, Cascais.</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <article>
                            <h2>Reach</h2>
                            <p>The target audience of this beer is for the snow sports fans who after a hard days work can kick back with a cold brew. It will be sold during the winter on all major ski resorts in Switzerland and France. During the summer the beer will be sold in Portugal, Cascais aimed at the surfers and the same goes, kicking back with a cold brew after a long day of hardcore surfing.</p>
                            <h2>Deliverables</h2>
                            <ul>
                                <li>Project &amp; Client management</li>
                                <li>Creative direction</li>
                                <li>Design &amp; rebranding</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <h2>Project screenshots</h2>
                    </div>                    
                    <div class="col">
                        <div class="main-carousel">
                            <div class="carousel-cell single"><img src="img/golden_ale.jpg" alt="Golden ale" /></div>
                            <div class="carousel-cell single"><img src="img/red_ale.jpg" alt="Red ale" /></div>
                            <div class="carousel-cell single"><img src="img/black_ale.jpg" alt="Black ale" /></div>
                            <div class="carousel-cell single"><img src="img/winter.jpg" alt="Winter brew" /></div>
                            <div class="carousel-cell single"><img src="img/variations.jpg" alt="Logo and label variations" /></div>
                        </div>
                    </div>
                </div>                
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>