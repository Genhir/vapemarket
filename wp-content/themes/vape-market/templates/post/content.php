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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
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
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vm' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'vm' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
