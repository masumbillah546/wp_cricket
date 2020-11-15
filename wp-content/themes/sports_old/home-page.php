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
						<h1>Welcome to MyTeam</h1>
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
			<section class="content-box box-1 box-style-1"><!--Start Box-->
				<div class="wrap-box">
					<div class="zerogrid">
						<div class="row">
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>FEATURED NEWS</h2>
									</div>
									<div class="item">
										<img src="<?php echo get_template_directory_uri()?>/images/5.jpg" />
										<div class="item-content">
											<a href="single.html"><h3>Texas Rangers Finish In Second Place</h3></a>
											<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
											<p>Black alloys, Sat Nav, Bluetooth, 4 seats, Ceramic Brakes, Power boot, Soft closing doors, Alcantara roof lining, Double glazing, Keyless entry, Keyless start, Carbon fibre dash and door inserts, IPod connection. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
											<a href="#">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>UPCOMING EVENTS</h2>
									</div>
									<div class="row">
										<div class="item">
											<div class="item-content">
												<a href="single.html"><h3>The Most Epic Match Of The Season</h3></a>
												<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
												<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												<a href="#">Read More</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="item">
											<div class="item-content">
												<a href="single.html"><h3>Pre Season Camp Success</h3></a>
												<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
												<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												<a href="#">Read More</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="item">
											<div class="item-content">
												<a href="single.html"><h3>Nominated Club Of The Year</h3></a>
												<div class="info">Posted on June 22, 2010 in: <a href="#">Featured</a>, <a href="#">News</a></div>
												<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the...</p>
												<a href="#">Read More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>UPCOMING GAME</h2>
									</div>
									<h2 style="font-size: 35px;line-height: 1.3;margin-bottom: 10px;">AMERICAN EAGLES VS. THE WASHINGTON REDSKINS</h2>
									<img src="<?php echo get_template_directory_uri()?>/images/4.jpg" />
									<p>Don't walk through life just playing football. Don't walk through life just being an athlete. Athletics will fade. Character and integrity are the ultimate vision, the</p>
									<a href="#">view all events at this venue</a><br>
									<a href="#" class="button bt1">BUY TICKET</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="content-box box-2 box-style-3"><!--Start Box-->
				<div class="wrap-box">
					<div class="zerogrid">
						<div class="title">
							<h2><span>Our</span> Team</h2>
						</div>	
						<div class="row">
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri()?>/images/user1.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Defender</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri()?>/images/user2.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Midfielder</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri()?>/images/user3.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Goalkeeper</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="single.html">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<img src="<?php echo get_template_directory_uri()?>/images/user4.jpg" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
											<p>Sweeper</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="content-box box-3 box-style-2"><!--Start Box-->
				<div class="wrap-box t-center">
					<div class="zerogrid">
						<div class="title">
							<h2>WELCOME <span>To Our Website</span></h2>
						</div>	
						<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
						<a href="#" class="button bt1">Read More</a>
					</div>
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
									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<h3>30</h3>
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
									</div>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>LASTEST POST</h2>
									</div>
									<div class="item">
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
									</div>
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