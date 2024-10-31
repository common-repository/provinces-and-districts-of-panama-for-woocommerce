<?php

/* 
 * Plugin Name: Provinces and Districts of Panama for WooCommerce
 * Plugin URI: https://wordpress.org/plugins/provinces-and-districts-of-panama-for-woocommerce/
 * Description: This plugin allows you to choose the Provinces, Districts and Corregimientos of Panama in the WooCommerce address forms.
 * Author: Yordan Soares
 * Author URI: https://yordansoar.es/ 
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: provinces-and-districts-of-panama-for-woocommerce
 * Domain Path: /languages
 * Version: 1.0.4
 * Requires at least: 4.6
 * Requires PHP: 7.0
 * WC requires at least: 3.0.x
 * WC tested up to: 6.2
*/

// Exit if file is open directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Check if WooCommerce is active
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

  // Define the constants for plugin PATH and URL
  define('PDPW_PLUGIN_PATH', plugin_dir_path(__FILE__));
  define('PDPW_PLUGIN_URL', plugin_dir_url(__FILE__));

  // Prepara the init function
  function pdpw_init() {

    // Load text domain for internationalization
    load_plugin_textdomain('provinces-and-districts-of-panama-for-woocommerce', FALSE,  dirname(plugin_basename(__FILE__)) . '/languages');

    // Get the Class WC_PA_Districts_And_Corregimientos_Select
    require_once('includes/class-wc-panama-corregimientos-select.php');

    // Instantiate the Class WC_PA_Districts_And_Corregimientos_Select in $_GLOBALS variable
    $GLOBALS['wc_corregimientos_select'] = new WC_PA_Districts_And_Corregimientos_Select(__FILE__);    
    
    // Get the Provinces of Panama
    require_once('provinces/PA.php');

    // Insert the Provinces into WooCommerce Options
    add_filter('woocommerce_states', 'pdpw_pa_provinces');

    // Change the order of State and City fields to have more sense with the steps of form
    function pdpw_change_state_and_city_order($fields) {

      $fields['state']['priority'] = 70;
      $fields['state']['label'] = __( 'Province', 'provinces-and-districts-of-panama-for-woocommerce');
      $fields['city']['priority'] = 80;
      $fields['city']['label'] = __( 'District - Corregimiento', 'provinces-and-districts-of-panama-for-woocommerce');

      return $fields;
    }
    add_filter('woocommerce_default_address_fields', 'pdpw_change_state_and_city_order');

    //define('PDPW_ENABLE_POSTCODE', true);

    // If you want to enable the Post Code fields in all the forms
    // put this code in your function.php file in your theme:
    // define( 'PDPW_ENABLE_POSTCODE', true);
    	
    function pdpw_disable_postcodes() {

      if ( ! function_exists('pdpw_disable_postcode_cart' )) {
  
        function pdpw_disable_postcode_cart($fields)
        {
          // // Disable Post Code in Billing Form in Cart
          unset($fields['billing']['billing_postcode']);
          // // Disable Post Code in Billing Form in Cart
          unset($fields['shipping']['shipping_postcode']);
  
          return $fields;
        }
      }
  
      if ( ! function_exists('pdpw_disable_billing_postcode' )) {
        // Disable Post Code in Billing Form
        function pdpw_disable_billing_postcode($fields = array())
        {
          unset($fields['billing_postcode']);
          return $fields;
        }
      }
  
      if ( ! function_exists('pdpw_disable_shipping_postcode' )) {
        // Disable Post Code in Shipping Form
        function pdpw_disable_shipping_postcode($fields = array())
        {
          unset($fields['shipping_postcode']);
          return $fields;
        }
      }

      add_filter('woocommerce_checkout_fields', 'pdpw_disable_postcode_cart');
      add_filter('woocommerce_billing_fields', 'pdpw_disable_billing_postcode');
      add_filter('woocommerce_shipping_fields', 'pdpw_disable_shipping_postcode');

    }

    add_action( 'init', 'pdpw_disable_postcodes' );


  }
  add_action('plugins_loaded', 'pdpw_init');
} else {

  // ...shows a notice to asking for WooCommerce activation
  function pdpw_woocommerce_required() {
    // translators: placeholders are <strong> tags
    $error_wc = wp_sprintf(__('%sProvinces and Districts of Panama for WooCommerce%s plugin requires %sWooCommerce%s activated. The plugin was deactivated until you active %sWooCommerce%s', 'provinces-and-districts-of-panama-for-woocommerce'), '<strong>', '</strong>', '<strong>', '</strong>', '<strong>', '</strong>');
    echo '
    <div class="notice notice-error is-dismissible">            
			<p>' . $error_wc . '</p>
		</div>
		';
    // And deactivate the plugin until WooCommerce is active
    deactivate_plugins(plugin_basename(__FILE__));
  }
  add_action('admin_notices', 'pdpw_woocommerce_required');
}