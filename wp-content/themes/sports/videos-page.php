<?php

/**
Template Name: Videos Page
 */

 get_header(); ?>


<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div id="main-content" class="col-2-3">
			<div class="wrap-col">
				<div class="wrap-content">
					<h1>VIDEOS</h1><br>

					<?php

					$data = new WP_Query(array('post_type' => 'videos'));
					while($data->have_posts()): $data->the_post();

					?>

					
				<div class="" style="text-align: center;">
				<div class="wrap-col box">
					<h3><?php the_title()?></h3>
					<?php the_content();?>
					<!-- <div class="more"><a href="#">[...]</a></div> -->
				</div><hr>
				</div>

				<?php endwhile ;

				if($data->have_posts()){
					pagination_nav();
				}


				?>

						
<!-- 					<article>
						<div class="art-header">
							
							<img src="<?php echo get_template_directory_uri()?>/images/slideshow-image2.jpg" />
						</div>
						<div class="art-content">
							<a href="#"><h3>Nam libero tempore, cum soluta nobis est </h3></a>
							<div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut </p>
							<a class="button button02" href="#">MORE</a>
						</div>
					</article>
					<article>
						<div class="art-header">
							
							<img src="<?php echo get_template_directory_uri()?>/images/slideshow-image3.jpg" />
						</div>
						<div class="art-content">
							<a href="#"><h3>Nam libero tempore, cum soluta nobis est </h3></a>
							<div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut </p>
							<a class="button button02" href="#">MORE</a>
						</div>
					</article> -->
				</div>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<div class="wrap-col">
				<div class="wrap-sidebar">
					<!---- Start Widget ---->
					<div class="widget wid-about">
						<div class="wid-header">
							<h5>About Us</h5>
						</div>
						<div class="wid-content">
							<img src="<?php echo get_template_directory_uri()?>/images/15.jpg"/>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-post">

						<?php dynamic_sidebar('right-sidebar')?>
						<!-- <div class="wid-header">
							<h5>Latest Posts</h5>
						</div>
						<div class="wid-content">
							<div class="post">
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/6.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/7.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/8.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
						</div> -->
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-gallery">
						<!-- <div class="wid-header">
							<h5>Gallery</h5>
						</div> -->
						<div class="wid-content">
							<?php dynamic_sidebar('gallery')?>
							<!-- <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/6.jpg"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/10.jpg"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/9.jpg"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/8.jpg"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/7.jpg"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/6.jpg"></a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>