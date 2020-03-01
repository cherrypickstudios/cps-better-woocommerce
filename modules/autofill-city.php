<?php

function cps_bwc_autofill_city_scripts() {
	if( is_checkout() ) {
		wp_enqueue_script( 'cps-bwc-zipcodes', CPS_BWC_PLUGIN_URL . '/assets/js/zipcodes.js', array( 'jquery' ), CPS_BWC_PLUGIN_VERSION_NUMBER, true );
		wp_enqueue_script( 'cps-bwc-autofill', CPS_BWC_PLUGIN_URL . '/assets/js/autofill.js', array( 'jquery' ), CPS_BWC_PLUGIN_VERSION_NUMBER, true );
	}
}
add_action( 'wp_enqueue_scripts', 'cps_bwc_autofill_city_scripts' );
