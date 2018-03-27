<?php
// ENV. status
$PRODUCTION = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Slam Dunk Digital - Michel Jordi</title>
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
        <div class="cs-mjordi">
            <section id="case-study-nav">
                <div class="col"><a href="../off-the-fence/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../shrimp-festival/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">                
                <div class="row top-content">
                    <div class="col">
                        <img src="img/banner.jpg" alt="Michel Jordi" width="310" />
                    </div>

                    <div class="col">
                        <article>
                            <h1>Michel Jordi Biography, Giving up is not an option!</h1>
                            <p>Michel Jodi is the creator of LE CLIP and the legendary "Swiss Ethno Watch" which he introduced at the occasion of the 700-year anniversary of Switzerland in 1991. A complete line of products and accessories were marketed under the "Spirit of Switzerland" brand, which gave him international fame and appreciation. <br />
                            <a href="http://www.micheljordi.ch/" target="_blank">www.micheljordi.ch</a></p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span>Michel Jordi</span></h2>
                            <p>Watchmakers from father to son. Since my early childhood I have been fascinated by the art of watchmaking that I first discovered in my father's workshop, and then in the mythical valleys of the Swiss Jura mountains.</p>
                            <h2>Brief:</h2>
                            <p>Michel Jordi is about to launch his new biography and got in touch with us to create a landing page for his new book 'Michel Jordi, Guts, Giving up is not an option!'. He wanted the ability for users to buy his book online using Paypal's payment system. The site was localised for multiple languages.</p>
                            <h2>Work link:</h2> <p><a href="http://www.micheljordi.net" target="_blank">www.micheljordi.net</a></p>                            
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
                                <li>UX wireframing &amp; A/B testing</li>
                                <li>Design &amp; development</li>
                                <li>Deployment to servers</li>
                            </ul>

                            <h2>Technologies</h2>
                            <p>HTML5, CSS3, jQuery, Grunt Bourbon + Neat responsive grid, Fully responsive.</p>    
                        </article>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row bottom-content">
                    <div class="col">
                    </div>
                </div>
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>