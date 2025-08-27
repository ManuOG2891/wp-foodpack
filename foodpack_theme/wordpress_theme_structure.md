# WordPress Theme Structure for FoodPack.cl

## Theme Organization

### Core Theme Files
- `style.css` - Main theme stylesheet with theme information
- `functions.php` - Theme functions and features
- `index.php` - Main template file
- `screenshot.png` - Theme thumbnail (from FoodPack logo)

### Header and Footer
- `header.php` - Site header with logo, navigation, search, and top bar
- `footer.php` - Site footer with logo, contact information, and secondary navigation

### Template Files
- `front-page.php` - Homepage template with slider and featured sections
- `page.php` - Default page template
- `single.php` - Single post template
- `archive.php` - Archive template for blog posts
- `search.php` - Search results template
- `404.php` - 404 error page (already exists on original site)

### Template Parts
- `template-parts/content/content-page.php` - Page content
- `template-parts/content/content-single.php` - Single post content
- `template-parts/content/content-none.php` - No results content
- `template-parts/header/site-header.php` - Header structure
- `template-parts/header/site-branding.php` - Logo and site title
- `template-parts/header/site-nav.php` - Main navigation
- `template-parts/footer/site-footer.php` - Footer structure

### Section Mapping
- Homepage Hero Section → `template-parts/home/hero-section.php`
- Homepage Features (01-04 numbered sections) → `template-parts/home/features-section.php`
- Products Grid → `template-parts/products/products-grid.php`
- Products Filters → `template-parts/products/products-filters.php`
- About Us Section → `template-parts/about/about-content.php`
- Resources Section → `template-parts/resources/resources-content.php`

### Custom Post Types
- Products → `includes/post-types/products.php`
  - Custom fields: SKU, price, dimensions, materials, etc.
  - Taxonomies: product categories, materials

### Widget Areas
- `sidebar.php` - Main sidebar
- `sidebar-footer.php` - Footer widget areas

### Assets Organization
- `assets/css/` - CSS files
- `assets/js/` - JavaScript files
- `assets/images/` - Image files
- `assets/fonts/` - Font files

## WordPress Features to Implement

### Menus
- Primary Navigation Menu
- Footer Menu
- Mobile Menu

### Widgets
- Footer Widgets
- Sidebar Widgets
- Product Filter Widgets

### Customizer Options
- Logo Upload
- Color Scheme Settings
- Typography Settings
- Social Media Links

### Plugin Dependencies
- WooCommerce (for product catalog)
- Contact Form 7 (for contact forms)
- Elementor (for page building, as mentioned in original theme)

## Special Considerations
- The Contáctanos (Contact) page returns a 404 on the original site, but we'll create a template for it
- Missing Bootstrap CSS will be included from CDN
- Roboto font will be included via Google Fonts API
- Product filtering functionality will be implemented using WooCommerce and custom filters
