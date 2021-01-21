			<!-- footer -->
			<section class="sixth-section">
				<h2 class="pb-2"><strong>Besök oss!</strong></h2>
				<p>Du är  alltid hjärtligt välkommen att kika in i vår digitala verkstad, ta en kopp kaffe och klappa lite på en sällskapssjuk border collie.
</p>
<br/>
				<iframe
					class="map"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2131.6518343952357!2d11.991958416007227!3d57.705384781120394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff382166ab325%3A0xd071d2dad48d24c9!2sDrakegatan%207%2C%20412%2050%20G%C3%B6teborg!5e0!3m2!1ssv!2sse!4v1601044490523!5m2!1ssv!2sse"
					width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false"
					tabindex="0">
				</iframe>
			</section>
			<section class="seventh-section">
			<div class="container">
			<p>[ps2id id='kontakt' target=''/]</p>
				<h2 class="pb-4"><strong>Eller kontakta oss!</strong></h2>
				<? echo do_shortcode( '[wpforms id="269" title="false" description="false"]' ); ?>
				<br/>
		</div>
			</section>
			<footer class="footer" role="contentinfo">

				<div class="row footer-container">
					<div class="col-lg-3 mt-5 side-col">
						<b>
							<p>Address</p>
						</b>
						<ul>
							<li>Drakegatan 7</li>
							<li>Göteborg</li>
							<li>Sverige</li>
						</ul>
					</div>
					<div class="col-lg-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png" alt="Logo" class="logo-img">

						<div class="icon-wrapper d-flex">
							<a href="https://www.facebook.com/Dynamisinvestment" target="_blank"><i
									class="fa fa-facebook-f"></i></a>
							<a href="https://vimeo.com/dynamisinvestment" target="_blank"><i class="fa fa-vimeo"></i></a>
							<a href="https://www.linkedin.com/company/dynamisinvestmentpartners/" target="_blank"><i
									class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="col-lg-3 mt-5 side-col">
						<b>
							<p>Telefon & Email</p>
						</b>
						<ul>
							<li>+44203 542 0986</li>
							<li>info@northmire.com</li>
						</ul>
					</div>
				</div>
				<!-- <p class="copyright mt-3">
					All rights reserved Bästa Sändningstid
				</p> -->
			</footer>
			<!-- /footer -->
			</div>
			<!-- /wrapper -->

			<?php wp_footer(); ?>

			<!-- analytics -->
			<script>
				(function (f, i, r, e, s, h, l) {
					i['GoogleAnalyticsObject'] = s;
					f[s] = f[s] || function () {
						(f[s].q = f[s].q || []).push(arguments)
					}, f[s].l = 1 * new Date();
					h = i.createElement(r),
						l = i.getElementsByTagName(r)[0];
					h.async = 1;
					h.src = e;
					l.parentNode.insertBefore(h, l)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
			</script>


			</body>

			</html>