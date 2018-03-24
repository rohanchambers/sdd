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
        <title>Slam Dunk Digital - Octopus Teacher</title>
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
        <div class="cs-octopus-teacher">
            <section id="case-study-nav">
                <div class="col"><a href="../tesco/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../shrimp-festival/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">                
                <div class="row top-content">
                    <div class="col">
                        <img src="img/octopus_teacher/poster.jpg" alt="Octopus Teacher" width="310" />
                    </div>

                    <div class="col">
                        <article>
                            <h1>Octopus Teacher</h1>
                            <p>In a dessperate attempt to come to terms with an existential crisis, a burn-out filmkaker pledges to free dive without a wetsuit every day in the freezing ocean at the tip of Africa. Utilizing the tracking skills taught to him by Kalahari bushmen, he endeavours to uncover the secrets of the great South African sea forest - one of the most remarkable yet hitherto undocumented habitats on the planet.</p>
                            <p>His life changes when he meets a young octopus who displays remarkable intelligence. Slowly he wins the animal'strust and they develop a never-seen-before bond between human and wild animal.</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span><a href="http://www.offthefence.com" target="_blank">Off the Fence</a></span></h2>
                            
                            <h2>Brief:</h2>
                            <p>Off the Fence wanted a way to present their latest documentary series in development: 'Europe's New Wild' to raise production-financing for the show. Not only would this be for client presentations, it would also be a way to pass on all relevant information regarding the production of this program to investors via an online solution. This would mean no more lengthy pdf creations for the series and more importantly an easy way to update content that can all be done online in a matter of minutes. Up until the documentary launches the site will only be available to potential investors, thereafter it will act as a supporting site and a way of promoting the documentary online and via social media.</p>
                            <p>The brief was slick, simple and allowed Slamdunk Digital to create an easy to navigate informational microsite showing off some of the gorgeous shots taken by the film crew.</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <h2>Technologies:</h2>
                        <p>HTML5, CSS3, jQuery, Grunt, Wordpress, Bourbon + Neat responsive grid, CSS3 transitions, Fully responsive.</p>
                        <h2>Reach:</h2>
                        <p>When the site launches it will only be viewable by potential investors that Off the Fence choose to share it with. Once the documentary launches it will become public and act as a supporting site and a way for followers to find out the latest news and info about the show.</p>

                        <h2>Client Site:</h2> <p><a href="http://www.offthefence.com" target="_blank">www.offthefence.com</a></p>
                        <h2>Project Link:</h2> <p>Internal link only (until launch)</p>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row bottom-content">
                    <div class="col">
                        <h2>Deliverables</h2>
                        <p>The site is fully responsive allowing viewers to browse the site's content on all types of devices (Desktop/Mobile phone/Tablet). We expect to be doing many more of these supporting sites for Off the Fence in the upcoming future.</p>
                        <ul>
                            <li>Project &amp; Client management</li>
                            <li>Creative direction</li>
                            <li>UX / Wireframing &amp; A/B testing</li>
                            <li>Site Design &amp; development</li>
                            <li>Deployment to servers</li>
                            <li>Social media branding</li>
                        </ul>
                    </div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <div class="main-carousel">
                            <div class="carousel-cell single"><img src="img/octopus_teacher/page_home.jpg" alt="Home" /></div>
                            <div class="carousel-cell single"><img src="img/octopus_teacher/page_about.jpg" alt="About"  /></div>
                        </div>
                    </div>
                </div>
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>