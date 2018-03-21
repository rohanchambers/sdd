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
        <title>Slam Dunk Digital - Europe's New Wild"</title>
        <meta name="title" content="Slam Dunk Digital | Europe's New Wild">
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
        <div id="case-study-outer" class="cs-new-wild">
            <div id="case-study-intro">
                <div id="intro-bg-img"></div>
                <div id="intro-bg-color">
                    <div class="stars"></div>
                </div>
                <div id="intro-content">
                    <article class="left">
                        <h1>Europe's New Wild</h1>
                        <p>Nature unreleased</p>
                    </article>
                </div>
            </div><!-- End of case study intro -->

            <section id="case-study-nav">
                <div class="col"><a href="../tesco/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../womens-polo-link/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study">
                <div id="case-study-info" class="col col-skew">
                    <div id="particle-canvas"></div>
                    <header>
                        <h2>Client:</h2> 
                        <p><a href="http://www.offthefence.com/" target="_blank">Off the Fence</a></p>
                    </header>
                    <h2>Deliverables</h2>
                    <ul>
                        <li>Project &amp; Client management</li>
                        <li>Creative direction</li>
                        <LI>UX / Wireframing &amp; A/B testing</LI>
                        <li>Site Design &amp; development</li>
                        <li>Deployment to servers</li>
                        <li>Social media branding</li>
                    </ul>
                    <h2>Project summary</h2>
                    <p>Off the Fence Distribution is the world's leading independent factual distribution company. With a catalogue of over 6,500 hours of diverse programming across Wildlife, Science, History, Travel, People &amp; Culture and Lifestyle genres, Off the Fence delivers high-quality programming to broadcasters and new media partners across the globe.<br />Off the Fence has a truly international footprint with sales offices in Amsterdam, London, Cape Town and Mainz, and team that speak 17 languages between them.</p>
                    
                    <h2>Brief</h2>
                    <p>Off the Fence wanted a way to present their recently aquired documentary 'Europe's New Wild' to possible investors. Not only would this be for client presentations it would also be a way to pass on all relevant information regarding the creation of this program to investors via an online solution. This would mean no more lengthy pdf creations for all of Off the Fence's future programs and more importantly an easy way to update content that can all be done online in a matter of minutes. Up until the documentary launches the site will only be available to possible investors thereafter it will act as a supporting site and a way of promoting the documentary online and via social media.</p>
                    <p>The brief was slick, simple and an easy to navigate informational microsite showing off some of the gorgeous shots taken by the film crew. The site is fully responsive allowing viewers to view the site contant on all types of mobile &amp; tablet devices. We expect to be doing many more of these supporting sites for Off the Fence in the upcoming future.</p>

                    <h2>Technologies</h2>
                    <p>HTML5, CSS3, jQuery, Grunt, Wordpress, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive.</p>

                    <h2>View site:</h2>
                    <p>Internal link only until launch (On request only)</p>
                </div><!-- Case study info -->

                <div id="case-study-img" class="col col-no-skew">
                     <img src="img/newWild_home.jpg" alt="New Wild, Nature unreleased">
                     <img src="img/newWild_partners.jpg" alt="New Wild, Nature unreleased">
                     <img src="img/newWild_map.jpg" alt="New Wild, Nature unreleased">
                     <img src="img/newWild_social.jpg" alt="New Wild, Nature unreleased">
                </div>
            </section><!-- End of Case study-->
        </div>
        
        <?php include("../../incl/inc-footer-cs.php"); ?>         
    </body>
</html>