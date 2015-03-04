<?php
  /**
   * The Header for our theme
   *
   * Displays all of the <head> section and everything up till <div id="main">
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
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
    <?php wp_deregister_script('jquery'); ?>
    <?php wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'); ?>
    <?php wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array('jquery')) ?>
    <?php wp_enqueue_script('offcanvas-script', get_template_directory_uri() . '/js/offcanvas.js', array('jquery')); ?>
    <?php wp_head(); ?>
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#">Project name</a>
	</div>
	<div class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
	    <li class="active"><a href="#">Home</a></li>
	    <li><a href="#about">About</a></li>
	    <li><a href="#contact">Contact</a></li>
	  </ul>
	</div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">
      <p class="pull-right visible-xs">
	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>
      <div class="jumbotron">
	<h1>Hello, world!</h1>
	<p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
      </div>
      <div class="row-offcanvas row-offcanvas-right">
