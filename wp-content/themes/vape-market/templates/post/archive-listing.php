<?php
/**
 * Template part for displaying posts
 *
 * @package Vape Market Theme
 * @subpackage Templates
 * @since 1.0
 * @version 1.2
 */

 // get tags by post
 global $post;
 $tags = wp_get_post_tags( $post->ID );

?>

<a href="<?php print get_permalink( $post ); ?>">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h2>
			<?php the_title(); ?>
		</h2>

		<?php if ( '' !== get_the_post_thumbnail() ) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php
						if( has_post_thumbnail( $post ) ) {
							get_the_post_thumbnail( $post );
						}
					?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>

		<div class="vm-post-tags">
			<?php
				foreach( $tags as $tag ) {

					print '<a href="';
					print get_tag_link( $tag->term_id );
					print '">';
					print $tag->name;
					print '</a> ';

				}
			?>
		</div>

		<div class="entry-content">
			<?php

			?>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</a>

<hr />
