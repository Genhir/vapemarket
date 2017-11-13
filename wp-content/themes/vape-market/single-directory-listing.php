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
			<h1 class="directory-listing-title"><?php print $post->post_title; ?></h1>

			<?php if ( has_post_thumbnail( $post ) ) : ?>
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php
							if( has_post_thumbnail( $post ) ) {
								print get_the_post_thumbnail( $post );
							}
						?>
					</a>
				</div><!-- .post-thumbnail -->
			<?php endif; ?>

			<!-- Project Summary -->
			<div class="directory-listing-summary">

				<?php

					if( has_excerpt( $post ) ) {
						print get_the_excerpt( $post );
					}

				?>

			</div>

			<!-- Project URL's -->
			<div class="directory-website-link">
				<?php

					$url = rwmb_meta( 'website', array(), $post->ID );
					if( $url !== '' ) {
						print '<a href="' . $url . '">Visit Website</a>';
					}

				?>

			</div>

			<!-- Listing Content -->
			<div class="directory-listing-content">

				<?php

					$content = $post->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					print $content;

				?>

			</div>

			<!-- Listing Content -->
			<div class="directory-return-link">
				<a href="<?php print home_url('directory'); ?>" class="btn btn-primary btn-lg">Return to Directory</a>
			</div>

		</div><!-- .vm-col -->
	</div><!-- .vm-row .wrap -->
</div><!-- .vm-container -->

<?php get_footer();
