<?php
include_once plugin_dir_path(__DIR__) . 'utility/helper.php';

function spf_register_new_user( $request ){
    // fetch all params from request
    $params = $request->get_params();
    // validation method
    //check value from field is exist or no
    // ( if no response return, so return message instead of value field )
    spf_validate_required_fields($params, [
        'first_name', 'last_name', 'email', 'password'
    ]);
    $api_token = md5(uniqid());

    //if success request return user id
    $user_id = wp_create_user($params['email'], $params['password'], $params['email']);

    global $wpdb;
    $table = $wpdb->prefix . 'users';
    $query =$wpdb->update($table, ['api_token' => $api_token], ['ID' => $user_id]);

        wp_send_json([
            'user_id'    => $user_id,
            'api_token'  => $api_token,

        ]);

}
