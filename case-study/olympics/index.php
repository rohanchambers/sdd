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
        <title>Slam Dunk Digital - London 2012 Olympics, Support your team</title>
        <meta name="title" content="Slam Dunk Digital | London 2012 Olympics, Support your team">
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
        <div id="case-study-outer" class="cs-olympics">
            <div id="case-study-intro">
                <div id="intro-bg-img"></div>
                <div id="intro-bg-color">
                    <div class="stars"></div>
                </div>
                <div id="intro-content">
                    <article class="left">
                        <h1>London 2012 Olympics</h1>
                        <p>Support your team</p>
                    </article>
                </div>
            </div><!-- End of case study intro -->

            <section id="case-study-nav">
                <div class="col"><a href="../playboy/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../tesco/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study">
                <div id="case-study-info" class="col col-skew">
                    <div id="particle-canvas"></div>
                    <header>
                        <h2>Client:</h2>
                        <p>London 2012 Olympics</p>
                    </header>
                    <header>
                        <h2>Agency:</h2>
                        <p>Collective London</p>
                    </header>
                    <h2>Deliverables</h2>
                    <ul>
                        <li>Project &amp; Client management</li>
                        <li>Creative direction</li>
                        <li>UX wireframing &amp; A/B testing</li>
                        <li>Design &amp; development</li>
                    </ul>
                    <h2>Project summary</h2>
                    <p>Support your team to Olympic glory. This site was built during the 2012 London summer Olympics to allow fans to tweet about their favourite event and represent their tweets as a visual reference via a timeline/podium animation. Other data is spread around the site such as latest activity and a leader board panel to show team rankings.</p>

                    <h2>Technlogies</h2>
                    <p>HTML5, CSS3, jQuery, Fully responsive</p>

                    <h2>View site:</h2>
                    <p>Campaign / Site offline</p>                        
                </div><!-- Case study info -->

                <div id="case-study-img" class="col col-no-skew">
                    <img src="img/home.jpg" alt="London 2012 Olympics, Support your team">
                    <p><img src="img/podium.jpg" alt="London 2012 Olympics, Support your team"></p>
                    <p><img src="img/leaderboard.jpg" alt="London 2012 Olympics, Support your team"></p>
                </div>
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?> 
        <!-- Start of StatCounter Code for Default Guide -->
        <script type="text/javascript">
        var sc_project=11006368;
        var sc_invisible=1;
        var sc_security="096fd4e3";
        var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "http://www.");
        document.write("<sc"+"ript type='text/javascript' src='" +
        scJsHost+
        "statcounter.com/counter/counter.js'></"+"script>");
        </script>
        <noscript><div class="statcounter"><a title="free hit
        counter" href="http://statcounter.com/" target="_blank"><img
        class="statcounter"
        src="//c.statcounter.com/11006368/0/096fd4e3/1/" alt="free
        hit counter"></a></div></noscript>
        <!-- End of StatCounter Code for Default Guide -->        
    </body>
</html>