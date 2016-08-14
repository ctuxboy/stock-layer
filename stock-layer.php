<?php
/*
Plugin Name: WooCommerce Stock Layer
Plugin URI: https://webkust.be
Description: This plugin add a layer with over the product image thumbnail image and shows the stock
Author: Christophe Hollebeke
Version: 0.0.1
Author URI: https://webkust.be
*/

add_action( 'woocommerce_before_shop_loop_item_title', function() {
  global $product;
  if ( $product->stock ) { // if manage stock is enabled
  	echo '<span class="sl-in-stock">Voorraad: ' . number_format($product->stock,0,'','') . '</span>';
  }
});

function wksl_scripts() { // adding css
	wp_enqueue_style( 'wkls-style', plugins_url( '/css/wkls-style.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'wksl_scripts' );
?>