/* Script inline #12 */


				fbq('init', '909664637675831', {}, {
    "agent": "woocommerce-9.9.3-3.4.9"
});

				fbq( 'track', 'PageView', {
    "source": "woocommerce",
    "version": "9.9.3",
    "pluginVersion": "3.4.9"
} );

				document.addEventListener( 'DOMContentLoaded', function() {
					// Insert placeholder for events injected when a product is added to the cart through AJAX.
					document.body.insertAdjacentHTML( 'beforeend', '<div class=\"wc-facebook-pixel-event-placeholder\"></div>' );
				}, false );

			