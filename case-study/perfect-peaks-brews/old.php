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
        <meta name="title" content="Slam Dunk Digital | Perfect Peaks Brews">
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

        <div id="case-study-outer" class="cs-ppb">
            <div id="case-study-intro">
                <div id="intro-bg-img"></div>
                <div id="intro-bg-color">
                    <div class="stars"></div>
                </div>
                <div id="intro-content">
                    <article class="left">
                        <h1>Perfect Peaks Brews</h1>
                         <p>Kicking back after a hard days work with a nice cold brew</p>
                    </article>
                </div>
            </div><!-- End of case study intro -->

            <section id="case-study-nav">       
                <div class="col"><a href="../phone-resq" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../soho-film-finance/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study">
                <div id="case-study-info" class="col col-skew">                    
                    <div id="particle-canvas"></div>                
                    <header>
                        <h2>Client:</h2>
                        <p>Perfect Peaks Brews</p>
                    </header>
                    <h2>Deliverables</h2>
                    <ul>
                        <li>Project &amp; Client management</li>
                        <li>Creative direction</li>
                        <li>Design &amp; rebranding</li>
                    </ul>
                    <h2>Project summary</h2>
                    <p>Perfect Peaks Brews is a privately owned startup brewery in Switzerland, Geneva that produces 6 blends of Ale and soon to be 3 Ciders.</p>
                    <p>We were involved in the complete rebranding of this brewery's look and feel, soon to be sold in mass quantity over Switzerland, France and Portugal.</p>
                    <p>The target audience of this beer is for the snow sports fans who after a hard days work can kick back with a cold brew. It will be sold during the winter on all major ski resorts in Switzerland and France.</p>
                    <p>During the summer the other blends will mainly be for the surfer and water sport fans, again to kick back with a cold brew... It will be sold mainly in Portugal but also Ibiza and the South of France.</p>
                </div><!-- Case study info -->
                
                <div id="case-study-img" class="col col-no-skew">
                    <img src="img/logo.jpg" alt="Perfect Peaks Brews">
                    <img src="img/variations.jpg" alt="Perfect Peaks Brews">                    
                    <img src="img/winter.jpg" alt="Perfect Peaks Brews">
                </div>
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>               
    </body> 
</html>