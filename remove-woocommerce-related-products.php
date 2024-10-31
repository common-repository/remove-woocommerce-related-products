<?php /** 
* Plugin Name: Remove WooCommerce Related Products
* Description: Automatically removes related products from WooCommerce v3+
* Author: Worcester Web Studio
* Author URI: https://www.worcesterwebstudio.com
* Version: 0.1.2 */ 

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

?>