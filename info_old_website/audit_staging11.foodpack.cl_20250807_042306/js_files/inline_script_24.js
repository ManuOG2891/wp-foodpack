/* Script inline #24 */

wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "https://staging11.foodpack.cl/wp-json/" ) );
wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "dfa50fe678" );
wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
wp.apiFetch.nonceEndpoint = "https://staging11.foodpack.cl/wp-admin/admin-ajax.php?action=rest-nonce";
