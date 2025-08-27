<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FoodPack
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/foodpack_hero.jpg');">
        <div class="container">
            <div class="hero-content">
                <h1><?php esc_html_e('Envases del Mundo para Chile', 'foodpack'); ?></h1>
                <p><?php esc_html_e('Con más de 60 fabricas en todo el mundo, contamos con el catalogo más amplio y variado del mercado.', 'foodpack'); ?></p>
                <a href="<?php echo esc_url(home_url('/productos/')); ?>" class="btn"><?php esc_html_e('Consultar por los tuyos', 'foodpack'); ?></a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-box">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="number">01</div>
                    <h3><?php esc_html_e('EQUIPO HUMANO', 'foodpack'); ?></h3>
                    <p><?php esc_html_e('Profesionales capacitados para brindar el mejor servicio y asesoría.', 'foodpack'); ?></p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-box">
                    <div class="icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="number">02</div>
                    <h3><?php esc_html_e('INFRAESTRUCTURA, COBERTURA Y SERVICIO', 'foodpack'); ?></h3>
                    <p><?php esc_html_e('Presencia global con soluciones locales para todas sus necesidades.', 'foodpack'); ?></p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-box">
                    <div class="icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="number">03</div>
                    <h3><?php esc_html_e('VARIEDAD DE MARCAS Y PRODUCTOS', 'foodpack'); ?></h3>
                    <p><?php esc_html_e('Amplio catálogo de soluciones para cada necesidad específica.', 'foodpack'); ?></p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-box">
                    <div class="icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="number">04</div>
                    <h3><?php esc_html_e('RESPALDO CERTIFICADO', 'foodpack'); ?></h3>
                    <p><?php esc_html_e('Productos con certificaciones internacionales de calidad y seguridad.', 'foodpack'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title"><?php esc_html_e('Nosotros', 'foodpack'); ?></h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-image.jpg" alt="<?php esc_attr_e('FoodPack Warehouse', 'foodpack'); ?>">
                </div>
                <div class="about-text">
                    <h3><?php esc_html_e('Expertos en envases para alimentos preparados', 'foodpack'); ?></h3>
                    <p><?php esc_html_e('En Food Pack® Ud podrá encontrar un mix completo de productos, desde 20 distintos países y más de 60 proveedores, que han sido cuidadosamente seleccionados con criterios de calidad, funcionalidad, costos y eficiencia logística, de forma de constituir una solución confiable en el tiempo para su negocio.', 'foodpack'); ?></p>
                    <a href="<?php echo esc_url(home_url('/nosotros/')); ?>" class="btn"><?php esc_html_e('Saber Más', 'foodpack'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="products-section">
        <div class="container">
            <h2 class="section-title"><?php esc_html_e('Productos Destacados', 'foodpack'); ?></h2>
            
            <?php
            // Check if WooCommerce is active
            if (class_exists('WooCommerce')) {
                // Display featured WooCommerce products
                echo do_shortcode('[products limit="8" columns="4" visibility="featured"]');
            } else {
                // Custom product display if WooCommerce is not active
                $args = array(
                    'post_type' => 'foodpack_product',
                    'posts_per_page' => 8,
                    'meta_key' => '_featured',
                    'meta_value' => 'yes',
                );
                
                $featured_products = new WP_Query($args);
                
                if ($featured_products->have_posts()) :
                    ?>
                    <div class="products-grid">
                        <?php while ($featured_products->have_posts()) : $featured_products->the_post(); ?>
                            <div class="product-card">
                                <div class="product-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product-placeholder.jpg" alt="<?php the_title_attribute(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="product-content">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'product_category');
                                    if ($terms && !is_wp_error($terms)) :
                                        $term = array_shift($terms);
                                    ?>
                                        <div class="product-category"><?php echo esc_html($term->name); ?></div>
                                    <?php endif; ?>
                                    <h3 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php
                    wp_reset_postdata();
                else :
                    ?>
                    <p><?php esc_html_e('No featured products found.', 'foodpack'); ?></p>
                    <?php
                endif;
            }
            ?>
            
            <div class="text-center mt-4">
                <a href="<?php echo esc_url(home_url('/productos/')); ?>" class="btn"><?php esc_html_e('Ver Todos los Productos', 'foodpack'); ?></a>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <h2 class="section-title"><?php esc_html_e('Quienes ya confían en nosotros', 'foodpack'); ?></h2>
            <div class="partners-grid">
                <?php
                // Partner logos
                $partners = array(
                    'kfc' => 'KFC',
                    'latam' => 'LATAM',
                    'manantial' => 'Manantial',
                    'maxi' => 'Maxi',
                    'melt' => 'Melt Pizzas',
                    'monticello' => 'Monticello'
                );
                
                foreach ($partners as $partner_slug => $partner_name) :
                    $partner_image = get_template_directory_uri() . '/assets/images/partners/' . $partner_slug . '.png';
                ?>
                    <div class="partner-logo">
                        <img src="<?php echo esc_url($partner_image); ?>" alt="<?php echo esc_attr($partner_name); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
