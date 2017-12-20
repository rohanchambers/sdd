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
        <title>Slam Dunk Digital - Women's Polo Link</title>
        <meta name="title" content="Slam Dunk Digital | Women's Polo Link">
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
        <div id="case-study-outer" class="cs-womens-polo-link">
            <div id="case-study-intro">
                <div id="intro-bg-img"></div>
                <div id="intro-bg-color">
                    <div class="stars"></div>
                </div>
                <div id="intro-content">
                    <article class="left">
                        <h1>Women's Polo Link</h1>
                        <p>The one stop shop for women's polo</p>
                    </article>
                </div>
            </div><!-- End of case study intro -->

            <section id="case-study-nav">
                <div class="col"><a href="../tesco/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../jordi/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study">
                <div id="case-study-info" class="col col-skew">
                    <div id="particle-canvas"></div>
                    <header>
                        <h2>Client:</h2> 
                        <p>Women's Polo Link</p>
                    </header>
                    <h2>Deliverables</h2>
                    <ul>
                        <li>Project &amp; Client management</li>
                        <li>Creative direction</li>
                        <li>Logo design / rebranding</li>
                        <LI>UX / Wireframing &amp; A/B testing</LI>
                        <li>Site Design &amp; development</li>
                        <li>Deployment to servers</li>
                    </ul>
                    <h2>Project summary</h2>
                        <p>Women's Polo Link is a company that was founded to bring women in the polo world together. The client wanted a unique branding and identity to break this market and have an impact that would seperate them selves from the rest.</p>
                        <p>Curently we have just completed the first phase of this project which was to create the rebranding, such as the logo and the color scheme for the overall look and feel. There is also a holding page that we developed to get a buzz going and collect potential customers and investors. In the second phase it will become a full fledged site with all the functionalities that are necessary to get the client's vision a reality.</p>
                    <h2>Technlogies</h2>
                    <p>HTML5, CSS3, jQuery, Grunt, Wordpress, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive, Font awesome, Mail chimp.</p>

                    <h2>View site:</h2>
                    <p><a href="http://www.womenspololink.com/" class="targetBlank" target="_blank">http://www.womenspololink.com</a></p>
                </div><!-- Case study info -->

                <div id="case-study-img" class="col col-no-skew">
                     <img src="img/logo.jpg" alt="Women's Polo Link logo">
                     <img src="img/final.jpg" alt="Women's Polo Link color scheme">                  
                </div>
            </section><!-- End of Case study-->
        </div>
        
        <?php include("../../incl/inc-footer-cs.php"); ?>         
    </body>
</html>