<?php
/**
 * The main template file
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

// check if blog index
$is_blog = false;
if ( !is_front_page() && is_home() ) {
	$is_blog = true;
}

get_header(); ?>

<div class="vm-container vm-content">

	<div class="vm-row">

		<div class="vm-col-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php

					if( $is_blog ) {
						get_template_part( 'templates/blog/index' );
					}

					elseif ( have_posts() ) {

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'templates/post/content', get_post_format() );

						endwhile;

						the_posts_pagination( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'vm' ) . '</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'vm' ) . '</span>',
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vm' ) . ' </span>',
						) );

					} else {

						get_template_part( 'template-parts/post/content', 'none' );

					}
					?>

				</main><!-- #main -->
			</div><!-- #primary -->

			</div>

			<div class="vm-col-4">

				<?php Vape_Market_Render::sidebar('right_sidebar'); ?>

			</div>



	</div><!-- .vm-row .wrap -->
</div><!-- .vm-container -->

<?php get_footer();
