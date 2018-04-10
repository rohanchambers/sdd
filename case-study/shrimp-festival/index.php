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
        <title>Slam Dunk Digital - Shrimp Festival</title>
        <meta name="title" content="Slam Dunk Digital | Shrimp Festival">
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
        <div class="cs-shrimp-festival">
            <section id="case-study-nav">
                <div class="col"><a href="../jordi/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../phone-resq/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">                
                <div class="row top-content">
                    <div class="col"></div>

                    <div class="col">
                        <article>
                            <h1>Shrimp Festival 
                                <span>55th Annual Ilse of Eight Flags</span>
                            </h1>                        
                            <p>Visit Historic Downtown Fernandina Beach on Amelia Island to experience the Isle of Eight Flags Shrimp Festival. There will be plenty of shrimp to eat!</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span>Shrimp Festival</span></h2>
                            <h2>Brief:</h2>
                            <p>The client wanted to have a major overhaul for their current online presence. We are in the process of rebranding the festival's website along with a better social media presence and look and feel.</p>                    
                            <p>As people from the Southeast come to Amelia Island for the Isle of Eight Flags Shrimp Festival weekend, they know one thing: There will be plenty of shrimp to eat. But what about the other part of the festival name? Why is it called the Isle of Eight Flags?</p></p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <article>
                            <h2>Deliverables</h2>
                            <ul>
                                <li>Project &amp; Client management</li>
                                <li>Creative direction</li>
                                <LI>UX / Wireframing &amp; A/B testing</LI>
                                <li>Site Design &amp; development</li>
                                <li>Deployment to servers</li>
                                <li>Social media branding</li>
                            </ul>
                            <h2>Technologies</h2>
                            <p>HTML5, CSS3, jQuery, Grunt, Wordpress, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive, Font awesome.</p>                            
                        </article>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <div class="main-carousel">
                            <div class="carousel-cell single"><img src="img/shrimpFestival_home.jpg" alt="Home" /></div>
                            <div class="carousel-cell single"><img src="img/shrimpFestival_about.jpg" alt="About" /></div>
                        </div>
                    </div>
                </div>                
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>