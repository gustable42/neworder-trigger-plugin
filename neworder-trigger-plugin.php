<?php
/**
 * Plugin Name: New Order Trigger Plugin
 * Plugin URI: https://github.com/gustable42/neworder-trigger-plugin
 * Description: Sends an API Request every time a new Woocommerce Order is done
 * Version: 1.0
 * Author: Gustavo Veloso
 * Author URI: http://www.syscoin.com.br
 */

add_action( 'woocommerce_order_status_completed', 'custom_woocommerce_order_status_completed' );

function custom_woocommerce_order_status_completed( $order_id ) {
    $order = new WC_Order($order_id);

    $items = $order->get_items();

    foreach ($items as $key => $value) {
        if($value == 10) { // given product id
            // trigger order complete email for specific email address
        }
    }
}