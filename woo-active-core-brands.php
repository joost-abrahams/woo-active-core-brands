<?php
/*
Plugin Name: WC Enable Brands
Description: Enable the Brands feature available as of WooCommerce 9.4.
Version: 0.1
Author: https://gist.github.com/itthinx
GitHub Plugin URI: https://github.com/joost-abrahams/yosta-stock-status-contact-us/
Source  URI: https://gist.github.com/joost-abrahams/8da02b960707114be49c0ac5dcbb9d4e/edit
License: GPLv3
Requires Plugins: woocommerce
 */

// Exit if accessed directly
defined( 'ABSPATH' ) or die;

//declare complianz with consent level API
$plugin = plugin_basename( __FILE__ );
add_filter( "wp_consent_api_registered_{$plugin}", '__return_true' );

// Happy hacking


/**
 * Plugin class.
 *
 * @see https://developer.woocommerce.com/2024/10/01/introducing-brands/
 */
class WC_Enable_Brands {
	
	/**
	 * Enable the Brands feature.
	 */
	public static function init() {
		update_option( 'wc_feature_woocommerce_brands_enabled', 'yes' );
		update_option( 'woocommerce_remote_variant_assignment', 2 );
	}
}

add_action( 'init', array( 'WC_Enable_Brands', 'init' ) );
