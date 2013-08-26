<?php include 'inc/config.php'; // Configuration php file ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $template['title'] ?></title>

        <meta name="description" content="<?php echo $template['description'] ?>">
        <meta name="author" content="<?php echo $template['author'] ?>">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- The roboto font is included from Google Web Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">

        <!-- Bootstrap 2.3.2 is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support them) -->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>
        <!-- Landing Container -->
        <div class="landing-container">
            <!-- Header -->
            <header class="navbar navbar-inverse navbar-fixed-top">
                    <!-- Navbar Inner -->
                    <div class="navbar-inner remove-radius remove-box-shadow text-center">
                        <!-- Nav Left -->
                        <ul class="nav nav-left">
                            <li>
                                <a href="index.php"><i class="icon-arrow-left"></i> Back</a>
                            </li>
                            <li class="divider-vertical remove-margin"></li>
                        </ul>
                        <!-- END Nav Left -->

                        <!-- Logo -->
                        <a href="page_landing.php" class="brand">
                            <img src="img/template/logo.png" alt="logo">
                        </a>
                        <!-- END Logo -->
                    </div>
                    <!-- END Navbar Inner -->
            </header>
            <!-- END Header -->

            <!-- Section Promo Image -->
            <div class="landing-section-outer">
                <div class="landing-section text-center">
                    <img src="img/placeholders/landing_page_promo.png" alt="image">
                </div>
            </div>
            <!-- END Section Promo Image -->

            <!-- Actions -->
            <div class="landing-section-outer">
                <div class="landing-section text-center">
                    <a href="index.php" class="btn btn-large btn-info push"><i class="icon-rocket"></i> Live Demo</a>
                    <a href="http://goo.gl/9QhXQ" class="btn btn-large btn-success push"><i class="icon-shopping-cart"></i> Buy Now!</a>
                </div>
            </div>
            <!-- END Actions -->

            <!-- Section Features -->
            <div class="landing-section-outer grey">
                <div class="landing-section">
                    <!-- Features 1st Row -->
                    <div class="row-fluid">
                        <div class="span4">
                            <h4><i class="icon-rocket"></i> Feature #1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="span4">
                            <h4><i class="icon-rocket"></i> Feature #2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="span4">
                            <h4><i class="icon-rocket"></i> Feature #3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                    </div>
                    <!-- END Features 1st Row -->

                    <!-- Features 2nd Row -->
                    <div class="row-fluid">
                        <div class="span4">
                            <h4><i class="icon-rocket"></i> Feature #4</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="span4">
                            <h4><i class="icon-rocket"></i> Feature #5</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="span4">
                            <h4><i class="icon-rocket"></i> Feature #6</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                    </div>
                    <!-- END Features 2nd Row -->
                </div>
            </div>
            <!-- END Section Features -->

            <!-- Special Feature #1 -->
            <div class="landing-section-outer">
                <div class="landing-section">
                    <div class="row-fluid">
                        <div class="span8">
                            <h4><i class="icon-rocket"></i> Special Feature #1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="span4">
                            <img src="img/placeholders/image_light_360x270.png" alt="promo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Special Feature #1 -->

            <!-- Special Feature #2 -->
            <div class="landing-section-outer">
                <div class="landing-section">
                    <div class="row-fluid">
                        <div class="span8">
                            <h4><i class="icon-rocket"></i> Special Feature #2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="span4">
                            <img src="img/placeholders/image_light_360x270.png" alt="promo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Special Feature #2 -->

            <!-- Special Feature #3 -->
            <div class="landing-section-outer">
                <div class="landing-section">
                    <div class="row-fluid">
                        <div class="span8">
                            <h4><i class="icon-rocket"></i> Special Feature #3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        </div>
                        <div class="span4">
                            <img src="img/placeholders/image_light_360x270.png" alt="promo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Special Feature #3 -->

            <!-- Actions -->
            <div class="landing-section-outer">
                <div class="landing-section text-center">
                    <a href="index.php" class="btn btn-large btn-info push"><i class="icon-rocket"></i> Live Demo</a>
                    <a href="http://goo.gl/9QhXQ" class="btn btn-large btn-success push"><i class="icon-shopping-cart"></i> Buy Now!</a>
                </div>
            </div>
            <!-- END Actions -->

            <!-- Footer Meta Data -->
            <div class="landing-section-outer dark">
                <div class="landing-section">
                    <div class="row-fluid">
                        <div class="span3">
                            <h4>Link Category</h4>
                            <ul class="icons-ul">
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                                <li><i class="icon-globe icon-li"></i> <a href="javascript:void(0)">Link goes here</a></li>
                            </ul>
                        </div>
                        <div class="span3">
                            <h4>About</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus.</p>
                        </div>
                        <div class="span6">
                            <div id="landing-map" class="gmap-con"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Footer Meta Data -->
        </div>
        <!-- END Landing Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="icon-chevron-up"></i></a>

        <!-- Jquery library from Google ... -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!--
        Include Google Maps API for global use.
        If you don't want to use  Google Maps API globally, just remove this line and the gmaps.js plugin from js/plugins.js (you can put it in a seperate file)
        Then iclude them both in the pages you would like to use the google maps functionality
        -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function(){
                // Set height to the google maps container
                $('#landing-map').css('height', '250px');

                // Initialize landing map
                new GMaps({
                    div: '#landing-map',
                    lat: 0,
                    lng: 0,
                    zoom: 1
                }).setMapTypeId(google.maps.MapTypeId.SATELLITE);
            });
        </script>
    </body>
</html>