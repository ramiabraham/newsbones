			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
									</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<?php $newsbones_tracking_code = get_option('newsbones_tracking_code');
		 echo $newsbones_tracking_code;
		 wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
