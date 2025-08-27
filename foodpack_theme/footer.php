<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FoodPack
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-widgets">
				<?php
				// Footer widget areas
				for ( $i = 1; $i <= 4; $i++ ) {
					if ( is_active_sidebar( 'footer-' . $i ) ) {
						echo '<div class="footer-widget footer-' . $i . '">';
						dynamic_sidebar( 'footer-' . $i );
						echo '</div>';
					} else {
						// Default content for footer widgets if not set
						echo '<div class="footer-widget footer-' . $i . '">';
						if ( $i === 1 ) {
							// Footer logo and about text
							?>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/foodpack_logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo">
							<p><?php esc_html_e( 'Expertos en envases para alimentos preparados con más de 60 fábricas en todo el mundo.', 'foodpack' ); ?></p>
							<?php
						} elseif ( $i === 2 ) {
							// Quick links
							?>
							<h4><?php esc_html_e( 'Enlaces Rápidos', 'foodpack' ); ?></h4>
							<ul>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Inicio', 'foodpack' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/nosotros/' ) ); ?>"><?php esc_html_e( 'Nosotros', 'foodpack' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/productos/' ) ); ?>"><?php esc_html_e( 'Productos', 'foodpack' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/asesoria-y-recursos/' ) ); ?>"><?php esc_html_e( 'Asesoría y Recursos', 'foodpack' ); ?></a></li>
							</ul>
							<?php
						} elseif ( $i === 3 ) {
							// Product categories
							?>
							<h4><?php esc_html_e( 'Categorías', 'foodpack' ); ?></h4>
							<ul>
								<li><a href="#"><?php esc_html_e( 'Envolver y Llevar', 'foodpack' ); ?></a></li>
								<li><a href="#"><?php esc_html_e( 'Para Envasar', 'foodpack' ); ?></a></li>
								<li><a href="#"><?php esc_html_e( 'Para Higiene', 'foodpack' ); ?></a></li>
								<li><a href="#"><?php esc_html_e( 'Para Impresos', 'foodpack' ); ?></a></li>
							</ul>
							<?php
						} elseif ( $i === 4 ) {
							// Contact info
							?>
							<h4><?php esc_html_e( 'Contáctanos', 'foodpack' ); ?></h4>
							<ul class="contact-info">
								<li><i class="fas fa-map-marker-alt"></i> <?php esc_html_e( 'Santiago, Chile', 'foodpack' ); ?></li>
								<li><i class="fas fa-phone"></i> <?php esc_html_e( '+56 2 1234 5678', 'foodpack' ); ?></li>
								<li><i class="fas fa-envelope"></i> <?php esc_html_e( 'info@foodpack.cl', 'foodpack' ); ?></li>
							</ul>
							<div class="social-icons">
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-linkedin"></i></a>
							</div>
							<?php
						}
						echo '</div>';
					}
				}
				?>
			</div><!-- .footer-widgets -->
			
			<div class="footer-bottom">
				<p>
					&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. 
					<?php esc_html_e( 'Todos los derechos reservados.', 'foodpack' ); ?>
				</p>
			</div><!-- .footer-bottom -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
