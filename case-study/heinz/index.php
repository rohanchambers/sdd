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
        <title>Slam Dunk Digital - Heinz, Get Well Soup</title>
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
    <body class="page-case-study">
        <?php include("../../incl/inc-header-cs.php"); ?>
   
        <!-- Case study Intro -->
        <div id="case-study-outer" class="cs-heinz">
            <div id="case-study-intro">
                <div id="intro-bg-img"></div>
                <div id="intro-bg-color">
                    <div class="stars"></div>
                </div>
                <div id="intro-content">
                    <article class="left">
                        <h1>Heinz,<br> Get Well Soup</h1>
                        <p>Cheer up a loved one with a pesronalised can of Heinz Soup.</p>
                    </article>
                </div>
            </div><!-- End of case study intro -->

            <section id="case-study-nav">
                <div class="col"><a href="../redbull/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../ea/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study">
                <div id="case-study-info" class="col col-skew">
                    <div id="particle-canvas"></div>
                    <header>
                        <h2>Client:</h2>
                        <p>Heinz</p>
                    </header>
                    <header>
                        <h2>Agency:</h2>
                        <p>We Are Social</p>
                    </header>
                    <h2>Deliverables</h2>
                    <ul>
                        <li>Project &amp; Client management</li>
                        <li>Creative direction</li>
                        <li>UX wireframing &amp; A/B testing</li>
                        <li>Design &amp; development</li>
                    </ul>
                    <h2>Project summary</h2>
                    <p>Our team designed and developed this app. for the Heinz, Get Well Soup campaign. The project was such a pleasure to work on as it wasn't just for a big brand but also for cheering up the ones that were using it.</p>
                    <p>The premise for the app. was inviting fans to cheer up a loved one who's feeling under the weather with a personalised can of Heinz Soup.</p>
                    <ul>
                        <li>Select whether you would like to 'buy' a can or 'share' a digital can of 'Get Well' Soup</li>
                        <li>Enter your details and the details of your loved one to see how your can will look</li>
                        <li>If you buy a can you'll be directed to Paypal to confirm your purchase.</li>
                        <li>If you 'share' a can you just need to confirm a few details before posting to your friend's Facebook profile.</li>
                    </ul>
                    <h2>Technologies</h2>
                    <p>HTML5, CSS3, jQuery, Grunt, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive</p>
                </div><!-- Case study info -->

                <div id="case-study-img" class="col col-no-skew">
                     <img src="img/home.jpg" alt="Heinz, Get Well Soup">
                     <p><img src="img/buycan.jpg" alt="Heinz, Get Well Soup"></p>
                     <p><img src="img/buycan_form.jpg" alt="Heinz, Get Well Soup"></p>
                     <p><img src="img/videoshare.jpg" alt="Heinz, Get Well Soup"></p>
                </div>
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?> 
    </body>
</html>