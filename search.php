<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package perspective
 */

get_header(); ?>

	<section class="search-results">
		<main>

		<?php if ( have_posts() ) : ?>

			<header>
				<h1><?php printf( __( 'Search Results for: %s', 'perspective' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php perspective_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>