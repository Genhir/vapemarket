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

get_header(); ?>

<div class="vm-container vm-content">

	<div class="vm-row">

		<div class="vm-col-8">

			<!-- Project Title -->
			<h1 class="project-title"><?php print $post->post_title; ?></h1>

			<!-- Project Summary -->
			<div class="project-summary">

				<?php

					if( has_excerpt( $post ) ) {
						print get_the_excerpt( $post );
					}

				?>

			</div>

			<!-- Project URL's -->
			<div class="directory-url">
				<?php

					$url = rwmb_meta( 'website', array(), $post->ID );
					if( $url === '' ) {
						$url = get_permalink( $post );
					}

					print '<a href="' . $url . '">Visit Website</a>';

				?>

			</div>

			<!-- Listing Description (Post Content) -->
			<div class="project-story">

				<?php

					$content = $post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					print $content;

				?>

			</div>

		</div><!-- .vm-col -->
	</div><!-- .vm-row .wrap -->
</div><!-- .vm-container -->

<?php get_footer();
