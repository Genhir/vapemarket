	<div id="footer">

		<footer class="footer">

			<div class="vm-container">
			<div class="vm-row">
				<div class="vm-col-12">

				</div>
			</div>
		</div>

		</footer>

		<footer class="subfooter">

			<div class="vm-container">

				<div class="vm-row">
					<div class="vm-col-3">
						<h3><?php Vape_Market_Render::renderText('footer_menu1_header'); ?></h3>
						<?php Vape_Market_Render::renderMenu('footer1'); ?>
					</div>
					<div class="vm-col-3">
						<h3><?php Vape_Market_Render::renderText('footer_menu2_header'); ?></h3>
						<?php Vape_Market_Render::renderMenu('footer2'); ?>
					</div>
					<div class="vm-col-3">
						<h3><?php Vape_Market_Render::renderText('footer_menu3_header'); ?></h3>
						<?php Vape_Market_Render::renderMenu('footer3'); ?>
					</div>
					<div class="vm-col-3 footer-logo footer-info-box">
						<?php Vape_Market_Render::renderImageByUrl( get_theme_mod('footer_logo') ); ?>
						<h2 class="footer-info-box-header">
							<?php Vape_Market_Render::renderSettingText('info_box_title'); ?>
						</h2>
						<div class="footer-info-box-content">
							<?php Vape_Market_Render::renderSettingText('info_box_content'); ?>
						</div>
					</div>
				</div>

			</div>

		</footer>

		<footer class="subfooter2">

			<div class="vm-container">

				<div class="vm-row">
					<div class="vm-col-12">

						<?php Vape_Market_Render::renderSettingText('copyright'); ?>

					</div>
				</div>
			</div>

		</footer>

	</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
