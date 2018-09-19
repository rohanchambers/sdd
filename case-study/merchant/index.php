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
        <title>Slam Dunk Digital - Merchant Adventurers' Club</title>
        <meta name="title" content="Slam Dunk Digital | Merchant Adventurers' Club">
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
        <div class="cs-merchant">
            <section id="case-study-nav">
                <div class="col"><a href="../tesco/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../off-the-fence/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">
                <div class="row top-content">
                    <div class="col">
                        <h1>Merchant Adventurers' Club</h1>
                        <p>The world's first lifestyle network for ultra-growth business leaders and investors</p>
                        <p>The Merchant Adventurers' Club is a private members club like no other. Our purpose is to enrich our members in every sense of the word.<br>
                        The principal benefit of membership is the opportunity to engage with high-profile leaders and carefully vetted senior executives from multiple industries in intimate and off-the-record settings in a series of carefully curated events throughout the year.</p>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span>Merchant Adventurers' Club</span></h2>
                            <h2>Project Link:</h2> <a href="http://www.merchantadventurersclub.co.uk" target="_blank">www.merchantadventurersclub.co.uk</a>
                            <h2>Reach:</h2>
                            <p>We are expecting to target all the exsiting customers but more importantly gaining more their trust in using the site and it's online shops and payment process. The overall look and feel has been tranposed to their social media pages to keep inline with the rebrand.</p>
                            <h2>Technologies:</h2>
                            <p>HTML5, CSS3, jQuery, Grunt, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive.</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <h2>Brief:</h2>
                        <p>The brief was simple, make the site more user friendly and seperate the divisons of Infohealth with a unison layout and keep them in line with the branding colors across all the sites. They wanted to drive more of their customers and patients to using their online shops and registering their details and giving them the ablility to create and amend prescriptions and recurrences over the months/weeks.</p>

                        <p>The design for each of the divisions were minimilstic yet slick, using two variation colors from their respective logo brand colors to differentiate them apart. The imagery and video were sourced from Getty images to add that touch of movement for the headers and high quality finish for the content. The design had to be obviously unique to set them apart from all the other Pharmaceutical companies out there.</p>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row middle-content middle-content-3">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Deliverables</h2>
                            <p>A full rebranding for the Infohealth brand to set them apart from all the other Pharmaceutical companies. We are already seeing a much higher site view count the moment it went live. The site is fully mobile responsive and has been fully optimised to perform on all devices.</p>
                            <ul>
                                <li>Project &amp; Client management</li>
                                <li>Creative direction</li>
                                <li>UX / Wireframing &amp; A/B testing</li>
                                <li>Site Design &amp; development</li>
                                <li>Deployment to servers</li>
                                <li>Social media branding</li>
                            </ul>
                        </article>
                    </div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <h2>Project screenshots</h2>
                    </div>
                    <div class="col">
                        <div class="main-carousel">
                            <div class="carousel-cell single"><img src="img/carousel/home.jpg" alt="Merchant Adventurers' Club | Home" /></div>
                            <div class="carousel-cell single"><img src="img/carousel/about.jpg" alt="Merchant Adventurers' Club | About" /></div>
                            <div class="carousel-cell single"><img src="img/carousel/members.jpg" alt="Merchant Adventurers' Club | Member" /></div>
                        </div>
                    </div>
                </div>
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>