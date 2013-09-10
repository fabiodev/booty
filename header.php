<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- Invalid Code
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        Postpone decision to uncomment -->
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<style>
		body{
			padding-top: 60px;
			padding-bottom: 40px;
		}
	</style>

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

	<?php include("lib/simple_html_dom.php"); ?>

	<!-- <link rel="icon" href="http://84.23.214.33/wdev/favicon.ico" type="image/ico" /> -->
//facebook
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
//facebook

    <?php //wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <!-- <a class="brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> -->
		    <!-- <a class="brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/titulo_cat.png" alt="ShipsOnCamera" width="250"></a>-->
		    <a class="brand" href="<?php bloginfo('url'); ?>">Ships<span style="color:blue"><strong>On</strong></span>Camera</a>
		    <nav id="nav-main" class="nav-collapse" role="navigation">
			<?php
			if (has_nav_menu('main')) {
			  wp_nav_menu(array('theme_location' => 'main', 
					    'menu_class' => 'nav'));
			}
			?>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
	<?php if (!has_nav_menu('main')) : ?>
	<div class="alert alert-error">
	<strong>No menu!</strong>
	Please go to the administration panel and create a menu named 'main'
	and select it as your Main Menu.
	</div>

	<?php endif; ?>
