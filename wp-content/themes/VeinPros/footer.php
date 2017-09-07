			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<!--Below is where map should be.-->
				<div class="" id="map">
					
				</div>
				<script>
					function initMap() {
						var uluru = {lat: 36.839947, lng:   -119.765510};
						var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 12,
						center: uluru
						});
						var marker = new google.maps.Marker({
						position: uluru,
						map: map
						});
					}
				</script>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABEiMnijucsq6Q-3ud-hJBXtdq0-XuWyg&callback=initMap">
				</script>

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
										<li><span style="white-space: nowrap;"> <a class="alink" href="https://www.google.com/maps/place/Vein+Pros+Medical+Group/@36.839947,-119.7676977,17z/data=!3m1!4b1!4m5!3m4!1s0x80945d355e920537:0x68e7fc143abf795e!8m2!3d36.839947!4d-119.765509">View Map</a> </span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-6">
							<h3 class="bold-font mbottom">DISCLAIMER</h3>

							<p>The information contained on this website is for informational purposes only. It is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health care provider with any questions you may have regarding a medical condition or treatment and before undertaking a new health care regimen, and never disregard professional medical advice or delay in seeking it because of something you have read on this website.​</p>
						</div>
					</div>
				<!-- copyright -->
				<div class="text-center">
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
