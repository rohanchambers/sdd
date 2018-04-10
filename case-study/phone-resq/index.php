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
        <title>Slam Dunk Digital - Phone ResQ</title>
        <meta name="title" content="Slam Dunk Digital | Phone ResQ">
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
        <div class="cs-phoneresq">
            <section id="case-study-nav">
                <div class="col"><a href="../shrimp-festival/" class="go-prev" title="Previous Project"><i class="fa fa-2x fa-chevron-circle-left" aria-hidden="true"></i></a></div>
                <div class="col"><a href="/#work" class="go-all" title="All Projects"><i class="fa fa-th fa-2x" aria-hidden="true"></i></a></div>
                <div class="col"><a href="../perfect-peaks-brews/" class="go-next" title="Next Project"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a></div>
            </section>

            <section id="case-study-custom">                
                <div class="row top-content">
                    <div class="col">
                        <!-- <img src="img/logo_large.jpg" alt="PhoneResQ" /> -->
                    </div>

                    <div class="col">
                        <article>
                            <h1>PhoneResQ 
                                <span>Strives to create a new and unique experience for its customers</span>
                            </h1>                        
                        </article>
                    </div>
                </div>

                <div class="row middle-content">
                    <div class="col img"></div>

                    <div class="col content">
                        <article>
                            <h2>Client: <span>PhoneResQ</span></h2>
                            <p>Phone ResQ is a privately owned business that repairs and improves all handheld devices and home computers. They needed a complete rebranding and a fresh rebuild of their site.</p>

                            <h2>Brief:</h2>
                            <p>We took on this project with one thing in mind, fresh new look. Our team were working directly with the owner and other members of staff to complete all tasks from proposing color scheme ideas to the intial design proposal and presentation to final deployment on their servers. The site had to be fully responsive on all major mobiles, tablets and computers so a lot of cross browser testing was done to ensure maximum compatibility.</p>

                            <h2>Project link:</h2>
                            <p><a href="http://phoneresq.com/" target="_blank">www.phoneresq.com</a></p>
                        </article>
                    </div>
                </div>

                <div class="row middle-content middle-content-2">
                    <div class="col content">
                        <article>
                            <h2>Reach</h2>
                            <p>PhoneResQ were able to reach a much larger audience as the site's new ecommerce solution allowed users to send in their phones for repair through the post as well as buy inventory from the shop at a discounted rate. The social media integration into the site drove the total likes by 200%.</p>
                            <h2>Deliverables</h2>
                            <ul>
                                <li>Project &amp; Client management</li>
                                <li>Creative direction</li>
                                <li>UX wireframing &amp; A/B testing</li>
                                <li>Design &amp; development</li>
                                <li>Back-end theme creation with Wordpress</li>
                                <li>Ecommerce implementation</li>
                                <li>Deployment to servers</li>                            
                            </ul>
                        <h2>Technologies</h2>
                        <p>HTML5, CSS3, jQuery, Grunt, Wordpress, Bourbon + Neat responsive grid, Skrollr plugin, CSS3 transitions, Fully responsive, Font awesome.</p>                            
                            </article>
                    </div>
                    <div class="col img"></div>
                </div>

                <div class="row carousel-content">
                    <div class="col">
                        <div class="main-carousel">
                            <div class="carousel-cell single"><img src="img/home.jpg" alt="PhoneResQ Home" /></div>
                        </div>
                    </div>
                </div>                
            </section><!-- End of Case study-->
        </div>

        <?php include("../../incl/inc-footer-cs.php"); ?>
    </body>
</html>