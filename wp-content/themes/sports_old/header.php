<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	 <meta charset="<?php bloginfo( 'charset' ); ?>">
	 <title><?php bloginfo( 'name' ); ?></title>
	<!-- <title>zSoccer - Free Html5 Templates</title> -->
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/menu.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/responsiveslides.css">
	<link href="<?php echo get_template_directory_uri()?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="<?php echo get_template_directory_uri()?>/js/jquery-latest.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/jquery183.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	
    
</head>
<body <?php body_class(); ?> >


<!-- <header class="site-header">
    
</header>
 -->


<div class="wrap-body">

<!-- /////////////////////////////////////////Top -->
<!-- <div class="top">
	<div class="zerogrid">
		<div class="row">
			<div class="f-left">
				<span><i class="fa fa-map-marker"></i> Brooklyn, NY 10036, United States </span>
				<span><i class="fa fa-phone"></i> 1-800-123-1234; 1-800-123-5678</span>
				<span><i class="fa fa-envelope"></i> example.com</span>
			</div>
			<div class="f-right">
				<span>Don't walk through life just playing football.</span>
			</div>
		</div>
	</div>
</div> -->

<!--////////////////////////////////////Header-->
<header class="site-header">
<!-- 	<h1><?php // bloginfo( 'name' ); ?></h1>
    <h4><?php // bloginfo( 'description' ); ?></h4> -->

	<div class="wrap-header zerogrid">
		<div class="row">
			
				<?php $args = array(
        'menu'                 => '',
        'container'            => 'div',
        'container_class'      => '',
        'container_id'         => 'cssmenu',   
        'theme_location'       => 'primary',
    ); ?>
				<?php wp_nav_menu( $args ) ?>
				<!-- <ul>
				   <li class='active'><a href="index.html">Home</a></li>
				   <li><a href="archive.html">Blog</a></li>
				   <li><a href="single.html">About</a></li>
				   <li><a href="contact.html">Contact</a></li>
				</ul> -->
			
			<a href='index.html' class="logo"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" /></a>
		</div>
	</div>
</header>