<!-- Footer Area -->
<script>

</script>
<footer id="footer" class="footer-area">

	<!-- Footer Top Area -->
	<div class="footer-top-area text-dark section-padding-sm">
		<div class="container">
			<div class="footer-widgets widgets">
				<div class="row">

					<div class="col-lg-4 col-md-6 col-12 text-dark">
						<!-- Single Widget -->
						<div class="single-widget footer-widget-about">
							<a href="index.html">
								<img src="<?php echo base_url();?>assets/images/longwayslogowhite.png" alt="footer logo">
							</a>
							
						</div>
						<div class="about-map mt-4">
							<iframe src="https://www.google.com/maps/embed/v1/place?q=Jl.+Raya+Citaringgul+No.+7,+Babakan+Madang,+Sentul,+Citaringgul,+Babakan+Madang,+Bogor,+West+Java+16810&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" allowfullscreen></iframe>
						</div>
						<!--// Single Widget -->

						<!-- Single Widget -->

					</div>

					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-widget widget-quick-links">
							<h5 class="footer-widget-title text-dark">QUICK LINK</h5>
							<ul>
								<li class="">
								 <a href="<?php echo base_url();?>">Home</a>
							 </li>
							 <li class="">
								 <a href="<?php echo base_url();?>about_us">About Us</a>
							 </li>
							 <li class="">
								 <a href="<?php echo base_url();?>product">Products</a>
								 
							 </li>
							 <!-- <li class="">
								 <a href="<?php echo base_url();?>ecoFriendly">Eco-friendly</a>
							 </li>	 -->
						 </ul>
					 </div>
					 <!--// Single Widget -->
				 </div>

				 

				 <div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-widget widget-quick-contact">
						<h5 class="footer-widget-title text-dark">Contact</h5>
						<ul>
							<li>
								<span class="text-dark">Phone</span>
								<p>
									<a href="tel:+01234567890123">+(021) 87950396</a>
								</p>

							</li>
							<li>
								<span class="text-dark">Email</span>
								<p>
									<a href="#">info@ahs.co.id</a>
								</p>
								
							</li>
							<li>
								<span class="text-dark">Address</span>
								<p>Jl. Raya Citaringgul No. 7, Babakan Madang, Sentul, Citaringgul, Babakan Madang, Bogor, West Java 16810</p>
							</li>
						</ul>
					</div>
					<!--// Single Widget -->
				</div>

			</div>
		</div>
	</div>
</div>
<!--// Footer Top Area -->

<!-- Footer Bottom Area -->
<div class="footer-bottom-area bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<ul class="footer-social">
					<li>
						<a href="https://www.instagram.com/alamhijauselaras__/">Instagram</a>
					</li>
					
				</ul>
			</div>
			<div class="col-lg-4">
				<p class="footer-copyright">Copyright &copy;
				PT. Alam Hijau Selaras. 2019. All Right Reserved</p>
			</div>
		</div>
	</div>
</div>
<!--// Footer Bottom Area -->

</footer>
<!-- //Footer Area -->

</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script src="<?php echo base_url();?>assets/js/vendor/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/js/active.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script>
	$(document).ready(function() {
		<?php 
		$counter = 1;

		if (isset($home_background)) {

		foreach ($home_background as $key) {
			?>
			$('.bg-image-<?php echo $counter++; ?>').css('background-image', 'url(<?php echo base_url(); ?>/../assets/images/<?php echo $key['page_image_path']; ?>)');
		<?php }
		} ?>
		
		// <?php if (isset($breadcrumbarea)) {
		// 	?>
		// $('.breadcrumb-area').css('background-image', 'url(<?php echo base_url(); ?>/../assets/images/<?php echo $breadcrumbarea[0]['page_image_path']; ?>');
		// <?php } ?>
		
		<?php if (isset($bg_about_us)) {
			?>
		$('#bg-about-us').css('background-image', 'url(<?php echo base_url(); ?>/../assets/images/<?php echo $bg_about_us[0]['page_image_path']; ?>');
		<?php } ?>

		<?php if (isset($bg_product)) {
			?>
		$('#bg-product').css('background-image', 'url(<?php echo base_url(); ?>/../assets/images/<?php echo $bg_product[0]['page_image_path']; ?>');
		<?php } ?>

		<?php if (isset($bg_eco)) {
			?>
		$('#bg-eco').css('background-image', 'url(<?php echo base_url(); ?>/../assets/images/<?php echo $bg_eco[0]['page_image_path']; ?>');
		<?php } ?>
		

		
	});
</script>
</body>

</html>