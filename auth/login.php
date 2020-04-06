<?php

include_once plugin_dir_path(__DIR__) . '/utility/helpers.php';

function spf_login_user( $requst ){
    // fetch all params from request
    $params = $requst->get_params();
    // validation method
    //check value from field is exist or no
    // ( if no response return, so return message instead of value field )
    spf_validate_required_fields($params , ['email', 'password']);
    
    $result =wp_authenticate_username_password(null , $params['email'], $params['password']);

    if (is_wp_error($result)){
        wp_send_json([
            'message' => 'User Credential dos\'t match our record',
        ],403);
    }
    wp_send_json([
        //'api_token' => $result->api_token,
        'result'    => $result->ID
    ],200);
}
