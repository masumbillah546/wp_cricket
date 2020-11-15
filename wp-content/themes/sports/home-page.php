<?php

/**
Template Name: Home Page
 */


 get_header()?>



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
						<h1><?php the_title();?></h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
							
						</li>

					<?php endwhile ;?>

				<!-- <li>
					<img src="<?php echo get_template_directory_uri()?>/images/slideshow-image1.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri()?>/images/slideshow-image2.jpg" alt="">
					<div class="caption">
						<h1>Welcome to MyTeam</h1>
						<span >Lorem ipsum dolor sit amet</span>
					</div>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri()?>/images/slideshow-image3.jpg" alt="">
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
<section id="container" class="home-page">
	<div class="wrap-container clearfix">
		<div id="main-content">
			
			<section class="content-box box-3 box-style-2"><!--Start Box-->
				<div class="wrap-box t-center">
				
					<div class="zerogrid">
						<div class="title">
							<h2>WELCOME <span>To Our Website</span></h2>
						</div>	
						<?php	while(have_posts()): the_post();?>

						<p><?php the_content();?></p>
						<a href="http://localhost/bd_cricket2/about/" class="button bt1">Read More</a>
					</div>
				<?php endwhile;?>
				</div>
			</section>
			<section class="content-box box-4 box-style-1"><!--Start Box-->
				<div class="wrap-box" >
					<div class="zerogrid">
						<div class="row">
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>ADVERTISING</h2>
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri()?>/images/banner.jpg" />
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri()?>/images/banner2.jpg" />
									</div>
								</div>
							</div>
							<div class="col-2-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>UPCOMING EVENTS</h2>
									</div>


									<?php $data = new WP_Query(array('post_type' => 'Events'));
									while($data->have_posts()): $data->the_post();?>

									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<?php the_content()?>
															<!-- <h3><?php the_time('j')?></h3>
															<span><?php the_time('M , Y')?></span> -->
														</div>
													</div>
												</div>
											</div>
											<div class="col-2-3">
												<div class="item-content">
													<h3><?php the_title();?></h3><?php the_post_thumbnail();?>
													<div class="info">Posted on <?php the_time('F j, Y')?>
								
													</div>
													
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>

									<?php endwhile ;?>
<!-- 
									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<h3>31</h3>
															<span>DEC,2015</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-2-3">
												<div class="item-content">
													<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
													<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
													<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<h3>18</h3>
															<span>jun,2016</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-2-3">
												<div class="item-content">
													<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
													<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
													<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div> -->
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
								<!-- 	<div class="sub-title">
										<h2>LASTEST NEWS</h2>
									</div> -->
									<?php dynamic_sidebar('home_page_sidebar')?>

									<!-- <div class="item">
										<img src="<?php echo get_template_directory_uri()?>/images/2.jpg" />
										<div class="item-content">
											<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
											<p>Black alloys, Sat Nav, Bluetooth, 4 seats, Ceramic Brakes...</p>
										</div>
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri()?>/images/3.jpg" />
										<div class="item-content">
											<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
											<p>Black alloys, Sat Nav, Bluetooth, 4 seats, Ceramic Brakes...</p>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>


<?php get_footer()?>