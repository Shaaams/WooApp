<?php
/*!
Plugin Name:   WooApp API
Plugin URI:    https://wooapp-example.com
Author:       Shamss EL-Hadidi
Author URI:   https://shamss-elhadidi.com/
Description:  ًWooCommerce restful api for flutter app
Version:      0.0.1
Text Domain:  wooapp
@package wooapp
Namespace wooapp
*/
defined('ABSPATH') or die('No Script kiddies Please');

//ToDo: Add api_token to users table

register_activation_hook(__FILE__, 'spf_install_plugin');

function spf_install_plugin(){
    global $wpdb ;
    $table = $wpdb->prefix . 'users';
    $sql = 'ALTER TABLE ' . $table . ' ADD api_token VARCHAR(255);';
    $wpdb->query($sql);
}
//ToDo: On Uninstall remove api_token from users table

register_deactivation_hook(__FILE__, 'spf_uninstall_plugin');

function spf_uninstall_plugin(){
    global $wpdb;
    $table = $wpdb->prefix . 'users';
    $sql = 'ALTER TABLE ' . $table .
    ' DROP COLUMN api_token ;';
    $wpdb->query($sql);
}

function spf_register_route(){
    register_rest_route('wooapp/v1','/shop/products',Array(
        'methods' => 'GET',
        'callback' => 'spf_get_shop_products',
    ));
}

add_action('rest_api_init','spf_register_route');

function spf_get_shop_products(){
wp_send_json([
    'message' => 'thank you the endpoint is fine'
], 200);
}


//ToDo: On User Register
//ToDo: Generate to api_token (unique)
//ToDo: Generate api authentication endpoints
   //ToDo: Register API  /wooapp/api/register -> method (POST)-> WP_User (api_token)
   //ToDo: Login API  /wooapp/api/login -> method (POST)-> api_token
   //ToDo: Update Password
   //ToDo: Recover Password
//ToDo: Shop API /wooapp/api/shop?filter=FILTER (GET) -> (NO AUTH)
//ToDo: Product API /wooapp/api/products?product=ID  (GET) -> (NO AUTH) -> WC_Product
//ToDo: Cart API  /wooapp/api/cart/add (POST) (NO AUTH)
//ToDo: Cart API  /wooapp/api/cart/remove(POST) (NO AUTH)
//ToDo: Cart API  /wooapp/api/cart/coupon(POST) (NO AUTH)
// After App Make Payment
//ToDo: Order API /wooapp/api/orders/new (POST) (AUTH)
//ToDo: Order API /wooapp/api/orders (POST) (AUTH)
//ToDo: Order API /wooapp/api/orders?order=ID (POST) (AUTH)
// Utilities API
//ToDo: Account API
    //ToDo: Update Billing Address
    //ToDo: Update Shipping Address
    //ToDo: Update Account Details
//ToDo: Search API
//ToDo: List Categories
//ToDo: List Tags
//ToDo: Product By Category
//ToDo: Product By Tag