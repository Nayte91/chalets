<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area <?php echo esc_attr( epl_get_active_theme_name() ); ?>">
		<main id="main" class="site-main <?php echo esc_attr( epl_template_class( 'twentyseventeen', 'single' ) ); ?>" role="main">

			<?php
				/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				do_action( 'epl_property_single' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;

				the_post_navigation(
					array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'easy-property-listings' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'easy-property-listings' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'easy-property-listings' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'easy-property-listings' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					)
				);

				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
