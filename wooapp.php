<?php
/*!
Plugin Name:   WooApp API
Plugin URI:    https://wooapp-example.com
Author:       Shamss EL-Hadidi
Author URI:   https://shamss-elhadidi.com/
Description:  ًWooCommerce restful api for flutter app
Version:      0.0.1
Text Domain:  wooapp
*/

//ToDo: Add api_token to users table
//ToDo: On Uninstall remove api_token from users table
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