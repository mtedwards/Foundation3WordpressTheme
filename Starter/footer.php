	</div> <!-- End Main Row -->
	<!-- Footer -->
	<footer class="row">
		<div class="twelve columns"><hr></div>
			<div class="row">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
					<?php endif; ?>
			</div>
	</footer>
	<!-- Footer -->
</div><!-- end container uncomment for fixed width -->
	<?php wp_footer(); ?>
</body>
</html>