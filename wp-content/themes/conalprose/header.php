<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
        <!--styles -->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style1.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
        <link rel="shortcut icon" href="favicon.ico">
        <!--endsyles -->
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css_browser_selector.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.transform-0.9.3.min_.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.RotateImageMenu.js"></script>
        <!-- FlexSlider -->
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
	    $(function(){
	      SyntaxHighlighter.all();
	    });

	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
	  </script>
          <script>
            jQuery( document ).ready( function($) {
                $( ".parpado" ).mouseover( function() {
                        $( this ).stop( true, true ).animate({
                                opacity: 0.6
                        }, 200, "swing", function() {
                                $( this ).animate({
                                        opacity: 1
                                }, 400 );
                        });
                });
            });
	</script>
	<?php wp_head(); ?>
</head>
<body>
    <div id="menu">
        <ul class="ca-menu">
            <a href="#">
                <div class="parpado" id="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logomenu.png" border="0">
                </div>
            </a>
            <li>
                <a href="quienes.html">
                    <span class="ca-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/1.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Quienes Somos</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="asociados.php">
                    <span class="ca-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/2.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Asociados</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="corredor.php">
                    <span class="ca-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/3.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Corredor de Seguros</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="actualidad.php">
                    <span class="ca-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/4.png" border="0"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Actualidad</h2>
                    </div>
                </a>
            </li>
            <li>
                <a href="contacto.php">
                    <span class="ca-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/iconos/5.png"></span>
                    <div class="ca-content">
                        <h2 class="ca-main">Contacto</h2>
                    </div>
                </a>
            </li>
        </ul>
        <div id="footinfo">
            &copy; Copyright 2013 - Centro de Agencias<br>Desarrollado por TOMORROW DIGITAL PROJECT
        </div>
    </div>
    <div id="contenedor">
