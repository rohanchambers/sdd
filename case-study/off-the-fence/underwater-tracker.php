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
        <title>Slam Dunk Digital - Underwater tracker</title>
        <META NAME="robots" CONTENT="noindex">
        <meta name="title" content="Slam Dunk Digital | Underwater tracker">
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
                <div class="col"><a href="../off-the-fence/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../womens-polo-link/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">                
                <div class="row top-content">
                    <div class="col">
                        <img src="img/octopus_teacher/poster.jpg" alt="Underwater tracker" width="310" />
                    </div>

                    <div class="col">
                        <article>
                            <h1>Underwater tracker</h1>
                            <p>In a desperate attempt to come to terms with an existential crisis, a burn-out filmkaker pledges to free dive without a wetsuit every day in the freezing ocean at the tip of Africa. Utilizing the tracking skills taught to him by Kalahari bushmen, he endeavours to uncover the secrets of the great South African sea forest - one of the most remarkable yet hitherto undocumented habitats on the planet.</p>
<!--                             <p>His life changes when he meets a young octopus who displays remarkable intelligence. Slowly he wins the animal's trust and they develop a never-seen-before bond between human and wild animal.</p> -->
                        </article>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span><a href="http://www.offthefence.com" target="_blank">Off the Fence</a></span></h2>
                            <p>Off the Fence Productions is an award-winning producer of factual television and digital cinema content, which is broadcast worldwide. </p>
                            <h2>Brief:</h2>
                            <p>A one pager info site &amp; brochure for one of Off the Fence's documentaries, 'Underwater tracker'. A simple layout was needed to display all the relevant information of this title to help pitch to potential investors.</p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <article>
                            <h2>Reach:</h2>
                            <p>This project is only shared internally within Off the Fence and to potential investors. We hope this first project is the start of a new collaboration for some of Off the fence's upcoming online needs.</p>                            
          
                            <h2>Deliverables</h2>
                            <ul>
                                <li>Project &amp; Client management</li>
                                <li>Creative direction</li>
                                <li>Brochure design</li>
                                <li>One pager development build</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row bottom-content">
                    <div class="col">
                    </div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <h2>Project screenshots</h2>
                    </div>                         
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