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

    <body class="login">
        <!-- Login Container -->
        <div id="login-container">
            <div id="login-logo">
                <a href="">
                    <img src="img/template/uadmin_logo.png" alt="logo">
                </a>
            </div>

            <!-- Login Buttons -->
            <div id="login-buttons">
                <h5 class="page-header-sub">Login with..</h5>
                <button id="login-btn-facebook" class="btn btn-primary"><i class="icon-facebook"></i> Facebook</button>
                <button id="login-btn-twitter" class="btn btn-info"><i class="icon-twitter"></i> Twitter</button>
                <button id="login-btn-email" class="btn">or Email <i class="icon-envelope"></i></button>
            </div>
            <!-- END Login Buttons -->

            <!-- Login Form -->
            <form id="login-form" action="index.php" method="post" class="form-inline">
                <div class="control-group">
                    <a href="#" class="login-back"><i class="icon-arrow-left"></i></a>
                </div>
                <div class="control-group">
                    <div class="input-append">
                        <input type="text" id="login-email" placeholder="Email..">
                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                    </div>
                </div>
                <div class="control-group">
                    <div class="input-append">
                        <input type="password" id="login-password" placeholder="Password..">
                        <span class="add-on"><i class="icon-asterisk"></i></span>
                    </div>
                </div>
                <div class="control-group remove-margin clearfix">
                    <div class="btn-group pull-right">
                        <button id="login-button-pass" class="btn btn-small btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="icon-lock"></i></button>
                        <button class="btn btn-small btn-success"><i class="icon-arrow-right"></i> Login</button>
                    </div>
                    <div class="input-switch switch-small pull-left" data-toggle="tooltip" title="Remember me" data-on="success" data-off="danger" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
                        <input type="checkbox">
                    </div>
                </div>
            </form>
            <!-- END Login Form -->
        </div>
        <!-- END Login Container -->

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
            $(function () {

                var loginButtons = $('#login-buttons');
                var loginForm = $('#login-form');

                // Reveal login form
                $('#login-btn-email').click(function(){
                    loginButtons.slideUp(600);
                    loginForm.slideDown(450);
                });

                // Hide login form
                $('.login-back').click(function(){
                    loginForm.slideUp(450);
                    loginButtons.slideDown(600);
                });

                // Don't let 'forgot pass' button submit the form
                $('#login-button-pass').click(function(){

                    // Forgot pass functionality goes here..

                    return false;
                });
            });
        </script>
    </body>
</html>