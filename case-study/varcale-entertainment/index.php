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
        <title>Slam Dunk Digital - Varcale Entertainment</title>
        <meta name="title" content="Slam Dunk Digital | Infohealth, Live Well">
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
        <div class="cs-varcale-entertainment">

            <section id="case-study-nav">
                <div class="col"><a href="../tesco/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../off-the-fence/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">
                <div class="row top-content">
                    <div class="col">
                        <h1>Varcale Entertainment</h1>
                        <p>A one-stop shop for Film Finance investment opportunities.</p>
                        <p>Located in Soho, London’s Entertainment district the company was formed by experienced individuals from: Investment, Distribution, Production and Film music composition. Varcale Entertainment specialise in film as an alternative investment and aim to deliver capital growth, tax efficiency and glamour experiences to our investors from a team you can trust.</p>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span><a href="http://varcalecap.co.uk/" target="_blank">Varcale Capital Management</a></span></h2>
                            <h2>Project Link:</h2> <a href="http://www.slamdunkdigital.com/clients/varcaleE/" target="_blank">www.varcaleentertainment.tv</a></p>
                            <h2>Deliverables</h2>
                            <ul>
                                <li>Project &amp; Client management</li>
                                <li>Creative direction</li>
                                <li>UX / Wireframing &amp; A/B testing</li>
                                <li>Site Design &amp; development</li>
                                <li>Deployment to servers</li>
                                <li>Social media branding</li>
                            </ul>
                            <h2>Technologies:</h2>
                            <p>HTML5, CSS3, jQuery, Grunt, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive.</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <h2>Brief:</h2>
                        <p>The brief for Varcale Entertainment was to create an original site that would stand out from the other film investment companies. A design that would say we are in films but we are a young and creative company ready to work with all genres of film.</p>
                        <p>The site itself was an informational site so potential investors could see what Varcale Entertaiment were all about, such as the films they invested in and the team they have behind them. This was all decorated using nice imagery and video to complement this content.</p>
                        <p>The idea behind the home page design was inspired by the James Bond opening theme scene of looking down into a barrel of a gun and at the end of it seeing the brand logo. We created some movement so the user would feel like they were pointing and aiming for a target.</p>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <h2>Project screenshots</h2>
                    </div>
                    <div class="col">
                        <div class="main-carousel">
                            <div class="carousel-cell single"><img src="img/home.jpg" alt="Home" /></div>
                            <div class="carousel-cell single"><img src="img/investments.jpg" alt="Investments" /></div>
                            <div class="carousel-cell single"><img src="img/projects.jpg" alt="Projects"  /></div>
                            <div class="carousel-cell single"><img src="img/team.jpg" alt="Team" /></div>
                        </div>
                    </div>
                </div>
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>