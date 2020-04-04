<?php

include_once plugin_dir_path(__DIR__) . '/utility/helpers.php';

function spf_login_user( $requst ){
    // fetch all params from request
    $params = $requst->get_params();
    // validation method
    //check value from field is exist or no
    // ( if no response return, so return message instead of value field )
    spf_validate_required_fields($params , ['email', 'password']);
}
