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

	<!-- CSS uikit ================================================== -->
	<!--   	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/uikit/css/uikit-rtl.min.css">
	  	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/uikit/css/uikit-rtl.css">
	  	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/uikit/css/uikit.min.css"> -->
	  	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/uikit/css/uikit.css">
	  	<script src="<?php echo get_template_directory_uri()?>/uikit/js/uikit-icons.min.js"></script>
	  	<script src="<?php echo get_template_directory_uri()?>/uikit/js/uikit.min.js"></script>
	  	<script src="<?php echo get_template_directory_uri()?>/uikit/js/uikit-icons.js"></script>
	  	<script src="<?php echo get_template_directory_uri()?>/uikit/js/uikit.js"></script>


	
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
<header class="site-header" style="background-color: #59B244;">
<!-- 	<h1><?php // bloginfo( 'name' ); ?></h1>
    <h4><?php // bloginfo( 'description' ); ?></h4> -->
    	<div  style=" width:100px; float: right; ">

       
            <a   style="color: black;height: 90px; padding-top: 8px;" class="uk-navbar-toggle" href="#" uk-search-icon></a>
            <div style="width: 400px; height: 80px" class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                <div class="uk-grid-small uk-flex-middle" uk-grid >
                    <div class="uk-width-expand">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="uk-width-auto">
                        <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                    </div>
                </div>

            </div>
        

    </div>


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
				<?php// get_search_form(); ?>


	



				<!-- <ul>
				   <li class='active'><a href="index.html">Home</a></li>
				   <li><a href="archive.html">Blog</a></li>
				   <li><a href="single.html">About</a></li>
				   <li><a href="contact.html">Contact</a></li>
				</ul> -->
			
			<a href='<?php bloginfo( 'home' );?>' class="logo"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" /></a>
			<?php //get_search_form(); ?>


		</div>
	</div>
</header>

