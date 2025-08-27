/* Script inline #5 */

/* Google Analytics for WooCommerce (gtag.js) */
					window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments);}
					// Set up default consent state.
					for ( const mode of [{"analytics_storage":"denied","ad_storage":"denied","ad_user_data":"denied","ad_personalization":"denied","region":["AT","BE","BG","HR","CY","CZ","DK","EE","FI","FR","DE","GR","HU","IS","IE","IT","LV","LI","LT","LU","MT","NL","NO","PL","PT","RO","SK","SI","ES","SE","GB","CH"]}] || [] ) {
						gtag( "consent", "default", { "wait_for_update": 500, ...mode } );
					}
					gtag("js", new Date());
					gtag("set", "developer_id.dOGY3NW", true);
					gtag("config", "G-Y4PPK8GFJV", {"track_404":true,"allow_google_signals":true,"logged_in":false,"linker":{"domains":[],"allow_incoming":true},"custom_map":{"dimension1":"logged_in"}});
