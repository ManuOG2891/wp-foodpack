<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FoodPack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foodpack' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-bar">
			<div class="container">
				<div class="top-bar-content">
					<div class="social-icons">
						<?php
						if ( has_nav_menu( 'social' ) ) {
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>',
								)
							);
						} else {
							// Default social links if menu not set
							?>
							<a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
							<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
							<?php
						}
						?>
					</div>
					<div class="header-actions">
						<a href="#"><i class="fas fa-truck"></i> <?php esc_html_e( 'Track Your Order', 'foodpack' ); ?></a>
						<a href="#"><i class="fas fa-map-marker-alt"></i> <?php esc_html_e( 'Location', 'foodpack' ); ?></a>
					</div>
				</div>
			</div>
		</div>

		<div class="main-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="site-branding">
							<?php
							if ( has_custom_logo() ) {
								the_custom_logo();
							} else {
								?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/foodpack_logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
								</a>
								<?php
							}
							?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-6">
						<div class="search-form">
							<?php get_search_form(); ?>
						</div>
					</div>
					<div class="col-md-3">
						<div class="header-cart text-end">
							<a href="#" class="wishlist-link"><i class="far fa-heart"></i> <span>0</span> <?php esc_html_e( 'Wishlist', 'foodpack' ); ?></a>
							<a href="#" class="cart-link"><i class="fas fa-shopping-cart"></i> <span>0</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
						)
					);
				} else {
					// Default menu if not set
					?>
					<ul id="primary-menu" class="menu">
						<li class="current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Inicio', 'foodpack' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>"><?php esc_html_e( 'Nosotros', 'foodpack' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/productos/' ) ); ?>"><?php esc_html_e( 'Productos', 'foodpack' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/asesoria-y-recursos/' ) ); ?>"><?php esc_html_e( 'Asesoría y Recursos', 'foodpack' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/contactanos/' ) ); ?>"><?php esc_html_e( 'Contáctanos', 'foodpack' ); ?></a></li>
						<li><a href="#"><i class="fas fa-file-invoice"></i> <?php esc_html_e( 'Ver Cotizador', 'foodpack' ); ?></a></li>
					</ul>
					<?php
				}
				?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
