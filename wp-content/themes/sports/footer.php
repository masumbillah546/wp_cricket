<!--////////////////////////////////////Footer-->
<footer class="site-footer">

	 <p><?php //bloginfo( 'name' ) ?></p>
	 <p><?php //dynamic_sidebar('sidebar-1') ?></p>

	<div class="zerogrid top-footer">
		<div class="row">
			<div class="col-1-5">
				<a href="https://www.robi.com.bd" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/15.jpg" /></a>
			</div>
			<div class="col-1-5">
				<a href="https://www.bkash.com/bn" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/16.jpg" /></a>
			</div>
			<div class="col-1-5">
				<a href="http://freshgroupbd.com/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/17.jpg" /></a>
			</div>
			<div class="col-1-5">
				<a href="https://www.ificbank.com.bd/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/18.jpg" /></a>
			</div>
			<div class="col-1-5">
				<a href="https://evaly.com.bd/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/19.jpg" /></a>
			</div>
		</div>
	</div>
	<div class="zerogrid wrap-footer">
		<div class="row">
			<div class="col-1-4 col-footer-1">
				<div class="wrap-col">
					<h3>About Us</h3>
					<p>Bangladesh Cricket Board (BCB), previously known as the Bangladesh Cricket Control Board, is the main governing body of cricket in Bangladesh. BCB became a full member of the International Cricket Council on 26 June 2000. The Board has its headquarters in Dhaka, it is responsible for the operation and development of cricket, maintenance of venues, and selection for the national team.</p>
					<a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" /></a>
				</div>
			</div>
			<div class="col-1-4 col-footer-2">
				<div class="wrap-col" style="color: white">
				

					<?php dynamic_sidebar('categories')?>
					<!-- <ul>
						<li><a href="#">Action</a></li>
						<li><a href="#">Romantic</a></li>
						<li><a href="#">Cartoon</a></li>
						<li><a href="#">Zombies</a></li>
					</ul> -->
				</div>
			</div>
	<!-- 		<div class="col-1-4 col-footer-3">
				<div class="wrap-col">
					<h3>Flickr Photos</h3>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/6.jpg" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/7.jpg" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/8.jpg" /></a>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/9.jpg" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/6.jpg" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/7.jpg" /></a>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/6.jpg" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/7.jpg" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/images/8.jpg" /></a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="col-1-4 col-footer-4">
				<div class="wrap-col">
					<h3>Contact</h3>
					<span><i class="fa fa-envelope"></i> example@sports-club.com</span>
					<span><i class="fa fa-phone"></i> 1-800-123-1234; 1-800-123-5678</span>
					<span><i class="fa fa-map-marker"></i> Brooklyn, NY 10036, United States</span>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>

<div class="copyright">
	<div class="zerogrid wrapper">
		Copyright @ zSoccer - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
		<ul class="quick-link f-right">
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Terms of Use</a></li>
		</ul>
	</div>
</div>

</div>
</body></html>