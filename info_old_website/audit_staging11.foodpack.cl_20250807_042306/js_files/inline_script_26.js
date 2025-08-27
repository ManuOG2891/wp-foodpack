/* Script inline #26 */

( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "yith-woocommerce-wishlist", {"translation-revision-date":"2020-10-16 14:04+0200","generator":"WP-CLI\/2.7.1","source":"assets\/js\/dist\/components\/add-to-wishlist\/index.js","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","lang":"es_ES","plural-forms":"nplurals=2; plural=n!=1;"},"Create a new list":[""]}}} );
