<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package perspective
 */

get_header(); ?>

	<main>
		<section class="error">
			<header>
				<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'perspective' ); ?></h1>
			</header><!-- .page-header -->

			<div>
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'perspective' ); ?></p>

				<?php get_search_form(); ?>

				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<?php if ( perspective_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
				<div>
					<h2><?php _e( 'Most Used Categories', 'perspective' ); ?></h2>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div><!-- .widget -->
				<?php endif; ?>

				<?php
				/* translators: %1$s: smiley */
				$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'perspective' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
				?>

				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php get_footer(); ?>