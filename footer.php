<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Perspective
 */
?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
                <?php do_action( 'mytheme_credits' ); ?>
                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'perspective' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'perspective' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'perspective' ), 'Perspective', '<a href="http://www.perspectivedesign.co.uk/" rel="designer">Perspective Design</a>' ); ?>
            </footer>
        </div>

<?php wp_footer(); ?>

</body>
</html>