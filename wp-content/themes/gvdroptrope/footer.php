<!-- Footer -->
<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-4 col-6-medium col-12-small">
					<?php dynamic_sidebar('footer-1')?>
				</div>
				<div class="col-4 col-6-medium col-12-small">
					<?php dynamic_sidebar('footer-2')?>
				</div>
				<div class="col-4 col-12-medium">
					<?php dynamic_sidebar('footer-3')?>
				</div>
				<div class="col-12">

				<!-- Copyright -->
					<div id="copyright">
						<?php dynamic_sidebar('footer-bottom')?>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>

	<!-- Scripts -->
	<script src="assets/js/main.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
