	
<?php

/**
Template Name: National Team Page
 */

 get_header(); ?>

			<section class="content-box box-2 box-style-3"><!--Start Box-->
				<div class="wrap-box">
					<div class="zerogrid">
						<div class="title">
							<h2><span>Our National</span> Team</h2>
						</div>	
						<div class="row">
							<?php

					$data = new WP_Query(array('post_type' => 'players'));
					while($data->have_posts()): $data->the_post();

					?>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="item t-center">
										<div class="item-container">
											<a href="<?php the_permalink();?>">
												<div class="item-caption">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<span class="user-social"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google-plus"></i><i class="fa fa-pinterest"></i></span>
														</div>
													</div>
												</div>
												<?php the_post_thumbnail();?>
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3><?php the_title()?></h3></a>
											<p><?php echo wp_trim_words(get_the_content(),3,'');?></p>
										</div>
									</div>
								</div>
							</div>

								<?php endwhile ;?>
		<!-- 					<div class="col-1-4">
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
												<img src="<?php echo get_template_directory_uri()?>/images/492.png" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>Mahmudullah (VC)</h3></a>
											<p>All-rounder</p>
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
												<img src="<?php echo get_template_directory_uri()?>/images/201.png" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>Sakib Al Hasan</h3></a>
											<p>All-rounder</p>
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
												<img src="<?php echo get_template_directory_uri()?>/images/287.png" />
											</a>
										</div>
										<div class="item-content">
											<a href="single.html"><h3>Tamim Iqbal</h3></a>
											<p>Beatsmen</p>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>

			<?php get_footer(); ?>