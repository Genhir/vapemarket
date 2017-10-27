<?php
/**
 * Homepage template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Clay Theme
 * @subpackage Templates
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="vm-container vm-content">

	<div class="vm-row">
		<div class="vm-col-4">
			<?php Vape_Market_Render::sidebar('home1'); ?>
		</div>

		<div class="vm-col-4">
			<?php Vape_Market_Render::sidebar('home2'); ?>
		</div>

		<div class="vm-col-4">
			<?php Vape_Market_Render::sidebar('home3'); ?>
		</div>

	</div><!-- .vm-row .wrap -->
</div><!-- .vm-container -->

<?php get_footer();
