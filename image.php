<?php
/**
 * The template for displaying image attachments.
 *
 * @package perspective
 */

get_header();
?>

	<main>

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<?php the_title( '<h1>', '</h1>' ); ?>

				<div>
					<?php
						$metadata = wp_get_attachment_metadata();
						printf( __( 'Published <span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%8$s</a>', 'perspective' ),
							esc_attr( get_the_date( 'c' ) ),
							esc_html( get_the_date() ),
							esc_url( wp_get_attachment_url() ),
							$metadata['width'],
							$metadata['height'],
							esc_url( get_permalink( $post->post_parent ) ),
							esc_attr( strip_tags( get_the_title( $post->post_parent ) ) ),
							get_the_title( $post->post_parent )
						);

						edit_post_link( __( 'Edit', 'perspective' ), '<span>', '</span>' );
					?>
				</div><!-- .entry-meta -->

				<nav>
					<div><?php previous_image_link( false, __( '<span>&larr;</span> Previous', 'perspective' ) ); ?></div>
					<div><?php next_image_link( false, __( 'Next <span>&rarr;</span>', 'perspective' ) ); ?></div>
				</nav><!-- #image-navigation -->
			</header><!-- .entry-header -->

			<div>
				<div>
					<div>
						<?php perspective_the_attached_image(); ?>
					</div><!-- .attachment -->

					<?php if ( has_excerpt() ) : ?>
					<div>
						<?php the_excerpt(); ?>
					</div><!-- .entry-caption -->
					<?php endif; ?>
				</div><!-- .entry-attachment -->

				<?php
					the_content();
					wp_link_pages( array(
						'before' => '<div>' . __( 'Pages:', 'perspective' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer>
				<?php
					if ( comments_open() && pings_open() ) : // Comments and trackbacks open
						printf( __( '<a href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'perspective' ), esc_url( get_trackback_url() ) );
					elseif ( ! comments_open() && pings_open() ) : // Only trackbacks open
						printf( __( 'Comments are closed, but you can leave a trackback: <a href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'perspective' ), esc_url( get_trackback_url() ) );
					elseif ( comments_open() && ! pings_open() ) : // Only comments open
						 _e( 'Trackbacks are closed, but you can <a href="#respond" title="Post a comment">post a comment</a>.', 'perspective' );
					elseif ( ! comments_open() && ! pings_open() ) : // Comments and trackbacks closed
						_e( 'Both comments and trackbacks are currently closed.', 'perspective' );
					endif;

					edit_post_link( __( 'Edit', 'perspective' ), ' <span>', '</span>' );
				?>
			</footer><!-- .entry-meta -->
		</article><!-- #post-## -->

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

<?php get_footer(); ?>