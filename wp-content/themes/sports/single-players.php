<?php get_header(); ?>



<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div id="main-content" class="col-2-3">
			<div class="wrap-col">
				<div class="wrap-content">
					<h1>Player Stats</h1><br><br>
					<?php	if ( have_posts() ) :
						while ( have_posts() ) : the_post(); ?>

					<article>
						<div class="art-header">
							
							<?php the_post_thumbnail();?>

						</div>
						<div class="art-content">
							<h3><?php the_title() ?></h3>

							<p><?php the_content();?> </p><br>
						</div>
					</article>
					<?php endwhile;
						else :
							echo '<p>There are no pages!</p>';
						endif; ?>

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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>