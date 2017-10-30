		</div>
	<!-- /wrapper -->
			<!-- footer -->
			<footer class="footer wrapper" role="contentinfo">
				<div class="inner-footer Grid Grid--1of3 small-Grid--full">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-1')) ?>
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-2')) ?>
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-3')) ?>

				</div>

				<!-- copyright -->
				<p class="copyright centered-text">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Site created by', 'html5blank'); ?>
					<a href="https://cicerodg.no">Cicero Digital og Grafisk AS</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->



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
