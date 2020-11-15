<?php

/**
Template Name: About Page
 */
get_header();
?>


<div class="bg-white">
	<div class="zerogrid">
		<!-- Slideshow -->
		<div class="callbacks_container">
			<ul class="rslides" id="slider">

				<?php

					$data = new WP_Query(array('post_type' => 'sliders'));
					while($data->have_posts()): $data->the_post();

					?>
						<li>
							<?php the_post_thumbnail(); ?>
							<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
							
						</li>

					<?php endwhile ;?>
					
				<!-- <li>
					<img src="images/slideshow-image1.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li>
				<li>
					<img src="images/slideshow-image2.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li>
				<li>
					<img src="images/slideshow-image3.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li> -->
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div id="main-content" class="col-2-3">
			<div class="wrap-col">
				<div class="wrap-content">
					<article>
						<div class="art-header">
							
							<img src="images/slideshow-image1.jpg" />
						</div>
						<div class="art-content">
							<a href="#"><h3 style="font-size: 37px; line-height: 1.5;">Nam libero tempore, cum soluta nobis est </h3></a>
							<div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
							<div class="excerpt"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip.</p></div>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
								<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
								<h2>Heading 1</h2>
								<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor sit amet.</p>
								<h2>Heading 2</h2>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo.</p>
								<h2>Heading 3</h2>
								<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse molestie.</p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
								<p><code>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</code></p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
								<div class="note">
								  <ol>
									<li>Lorem ipsum</li>
									<li>Sit amet vultatup nonumy</li>
									<li>Duista sed diam</li>
								  </ol>
								  <div class="clear"></div>
								</div>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
						</div>
					</article>
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
							<img src="images/1.jpg"/>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-post">
						<div class="wid-header">
							<h5>Latest Posts</h5>
						</div>
						<div class="wid-content">
							<div class="post">
								<a href="#"><img src="images/6.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/7.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								  <span>$25 - $26</span>
								</div>
							</div>
							<div class="post">
								<a href="#"><img src="images/8.jpg"/></a>
								<div class="wrapper">
								  <h5><a href="#">Lorem ipsum dolor</a></h5>
								   <span>$25 - $26</span>
								</div>
							</div>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-gallery">
						<div class="wid-header">
							<h5>Gallery</h5>
						</div>
						<div class="wid-content">
							<a href="#"><img src="images/6.jpg"></a>
							<a href="#"><img src="images/10.jpg"></a>
							<a href="#"><img src="images/9.jpg"></a>
							<a href="#"><img src="images/8.jpg"></a>
							<a href="#"><img src="images/7.jpg"></a>
							<a href="#"><img src="images/6.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer();?>