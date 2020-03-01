<?php

/* TODO
/*
/* Ezt még tesztelnem kell, hogy egyáltalán szükség van-e erre a javításra. Most úgy tűnik, hogy nem kell.
/*
*/
// Fix locale if WPML is active.
function cps_bwc_fix_locale_language( $locale ) {
	if( !is_admin() && defined( 'ICL_LANGUAGE_CODE' ) ) {
		$languages = icl_get_languages( 'skip_missing=0' );
		$locale = $languages[ICL_LANGUAGE_CODE]['default_locale'];
	}
	return $locale;
}
// add_filter( 'locale', 'cps_bwc_fix_locale_language' );

// Activated only for debug! Displays WPML variables and values.
function cps_bwc_wpml_debug() {
	echo 'ICL_LANGUAGE_CODE: ' . ICL_LANGUAGE_CODE;
	echo '<br>';
	echo 'get_locale: ' . get_locale();
	echo '<br>';
	echo 'icl_get_languages array:';
	echo '<pre>';
	print_r( icl_get_languages() );
	echo '</pre>';
	$languages = icl_get_languages( 'skip_missing=0' );
	echo 'Default locale language code: ' . $languages[ICL_LANGUAGE_CODE]['default_locale'];
	echo '<br>';
	echo 'Default locale language codes:';
	echo '<br>';
	foreach( $languages as $l ) {
		echo $l['default_locale'];
		echo '<br>';
	}
}
// add_action( 'wp_footer', 'cps_bwc_wpml_debug' );

// CSS fixes for themes
function cps_bwc_themes_css_fixes() {
?>
<style id="hucommerce-theme-fix">
<?php if ( is_checkout() && wp_basename( get_bloginfo( 'template_directory' ) ) == 'Avada' ) { ?>
	/* Avada CSS FIX */
	form.checkout .form-row-first {float: left !important;width: 48%;}
	form.checkout .form-row-last {float: right !important;width: 48%;}
<?php } ?>
</style>
<?php
}
add_action( 'wp_head', 'cps_bwc_themes_css_fixes', 999 );

// Customize the checkout default address fields
function cps_bwc_filter_default_address_fields( $address_fields ) {
	// Modifications only if language is Hungarian
	if( get_locale() == 'hu_HU' || get_locale() == 'hu' ) {
		$address_fields['last_name']['priority'] = 10;
		$address_fields['last_name']['class'] = array( 'form-row-first' );
		$address_fields['last_name']['autofocus'] = true;

		$address_fields['first_name']['priority'] = 20;
		$address_fields['first_name']['class'] = array( 'form-row-last' );
		$address_fields['first_name']['autofocus'] = false;
	}

	return $address_fields;
}
add_filter( 'woocommerce_default_address_fields' , 'cps_bwc_filter_default_address_fields' );

/* ****************************************************** */

// Customize the checkout fields if country is Hungary
function cps_bwc_filter_get_country_locale( $locale ) {
	$options = get_option( 'cps_bwc_fields' );

	$nocountyValue = isset( $options['nocounty'] ) ? $options['nocounty'] : 1;
	if ( $nocountyValue == 1 ) {
		$locale['HU']['state']['required'] = false;
	}

	return $locale;
}
add_filter( 'woocommerce_get_country_locale', 'cps_bwc_filter_get_country_locale' );

// Default state reset function
function cps_bwc_default_checkout_state() {
	return null;
}
$options = get_option( 'cps_bwc_fields' );
$nocountyValue = isset( $options['nocounty'] ) ? $options['nocounty'] : 1;
if ( $nocountyValue == 1 ) {
	add_filter( 'default_checkout_billing_state', 'cps_bwc_default_checkout_state' );
	add_filter( 'default_checkout_shipping_state', 'cps_bwc_default_checkout_state' );
}

// Hide the state field
function cps_bwc_remove_hu_states( $states ) {
	$options = get_option( 'cps_bwc_fields' );
	$nocountyValue = isset( $options['nocounty'] ) ? $options['nocounty'] : 1;
	if ( $nocountyValue == 1 ) {
		$states['HU'] = array();
	}
	return $states;
}
add_filter( 'woocommerce_states', 'cps_bwc_remove_hu_states' );

/* ****************************************************** */

// Fixed Hungarian address format
function cps_bwc_address_format( $format ) {
	$format['HU']="{name}\n{company}\n{postcode} {city}\n{address_1}\n{address_2}\n{country}";
	return $format;
}
add_filter( 'woocommerce_localisation_address_formats', 'cps_bwc_address_format' );

// Change the name order if language is Hungarian.
add_filter( 'woocommerce_formatted_address_replacements', function( $replacements, $args ) {
	if ( get_locale() == 'hu_HU' || get_locale() == 'hu' )
		$replacements['{name}'] = $args['last_name'] . ' ' . $args['first_name'];
	return $replacements;
}, 10, 2 );
