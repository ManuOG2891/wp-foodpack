<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FoodPack
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '404', 'foodpack' ); ?></h1>
					<h2><?php esc_html_e( 'Oops! That page can\'t be found.', 'foodpack' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'foodpack' ); ?></p>

					<?php get_search_form(); ?>

					<div class="error-actions">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php esc_html_e( 'Back to homepage', 'foodpack' ); ?></a>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>
	</main><!-- #main -->

<?php
get_footer();
