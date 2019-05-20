<?php
/**
 * Plugin Name: New Order Trigger Plugin
 * Plugin URI: https://github.com/gustable42/neworder-trigger-plugin
 * Description: Sends an API Request every time a new Woocommerce Order is done
 * Version: 1.0
 * Author: Gustavo Veloso
 * Author URI: http://www.syscoin.com.br
 */

add_action( 'woocommerce_thankyou', 'custom_woocommerce_order_status_completed' );

function custom_woocommerce_order_status_completed( $order_id ) {
    $url = "http://us-central1-syscoin-dashboard-app.cloudfunctions.net/woocommerceNewOrderNotification?id=".$order_id;
    $store_url = get_site_url();
    $url .= "&url=".$store_url;
    $http_request = file( $url );

    if( WP_DEBUG ){
        echo "<script> alert('".$order_id."'); </script>"; 
    }
}