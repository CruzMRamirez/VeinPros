			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<!--Below is where map should be.-->
				<div class="embed-responsive embed-responsive-16by9" id="googleMap">
					<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.105597273587!2d-119.76769768470898!3d36.839946979940414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80945d355e920537%3A0x68e7fc143abf795e!2sVein+Pros+Medical+Group!5e0!3m2!1sen!2sus!4v1500595066639" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>
				</div>

				<div class="style-bottom">
				<!--3 divs of info content below-->
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="row">
								<div class="col-sm-6">
									<h3 class="bold-font ">VeinPros</h3>
									<?php
										wp_nav_menu( array(
											'theme_location' => 'footer-menu',
											'container_class' => 'custom-menu-class' ) );
									?>
								</div>
								<div class="col-sm-6">
									<h3 class="bold-font">Contact Us</h3>
									<ul>
										<li>7191 N. Millbrook Avenue</li>
										<li>Fresno, CA 93720</li>
										<li>Phone: (559) 261-0266</li>
										<li>Fax: (559) 261-1307</li>
										<li><a class="alink" href="<?php echo home_url(); ?>/contact-us">Email Us</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-6">
							<h3 class="bold-font mbottom">DISCLAIMER:</h3>

							<p>The information contained on this website is for informational purposes only. It is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health care provider with any questions you may have regarding a medical condition or treatment and before undertaking a new health care regimen, and never disregard professional medical advice or delay in seeking it because of something you have read on this website.​</p>
						</div>
					</div>
				<!-- copyright -->
				<div class="text-center">
					<p class="copyright">
						&copy; Copyright 2007-2012 VeinPros Medical Group - All Rights Reserved
					</p>
					<p class="copyright"  style="color: #444;"> 
						<?php _e('Created by', 'VeinPros'); ?> <a style="color: #444;" href="<?php echo home_url(); ?>">VeinPros</a> and <a  style="color: #444;" href="http://www.cruz-ramirez.com">Cruz Ramirez</a>
					</p>
				</div>
			</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
