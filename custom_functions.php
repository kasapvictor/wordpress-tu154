<?php

add_filter( 'woocommerce_cart_needs_shipping', 'filter_function_disable_shipping' );
function filter_function_disable_shipping( $needs_shipping ){
return false;
}

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
unset($fields['billing']['billing_country']);
return $fields;
}

/* Kasap Victor */

/* скрипты и стили */
add_action('wp_enqueue_scripts', 'vi_scripts');
function vi_scripts()
{
    wp_enqueue_script('vic_script', get_template_directory_uri() . '/js/vi.js', false, '1.0.0', true);
    wp_enqueue_style('vi-style', get_stylesheet_directory_uri() . '/css/vi.css', [], '1.0');
}




