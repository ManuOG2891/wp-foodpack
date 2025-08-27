/* Script inline #28 */

( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "contact-form-7", {"translation-revision-date":"2025-04-10 13:48:55+0000","generator":"GlotPress\/4.0.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es"},"This contact form is placed in the wrong place.":["Este formulario de contacto est\u00e1 situado en el lugar incorrecto."],"Error:":["Error:"]}},"comment":{"reference":"includes\/js\/index.js"}} );
