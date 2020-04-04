<?php
// validation method
function spf_validate_required_fields( $params, $keys){
    $failed = false;
    $messages = [];
    $messages['error'] = 'Request Failed ! Can Be Not Handle This Request , Missing Parameters';
    $messages['require_field']= array();
    foreach ($keys as $key){
        // check value from field is exist or no
        if (! isset($params[$key]) || $params[$key] == null || empty($params[$key])){
           $failed = true;
           array_push($messages['require_field'] , [
               $key => ' field is required',
           ]);
        }
    }
    // ( if no response return, so return message instead of value field )
     if( $failed ){
         wp_send_json( $messages ,404 );
     }
}
// if ِ above function success return below function
function spf_response_data( $params, $keys){
    $failed = true;
    $messages = [];

    foreach ($keys as $key){
        // check value from field is exist or no
        if (isset($params[$key]) || ! $params[$key] == null || ! empty($params[$key])){
            $failed = false;
            array_push($messages , [
                $key => $params[$key] ,
            ]);

        }
    }
    // ( if no response return, so return message instead of value field )
    if( !$failed ){
        wp_send_json( $messages ,200 );
    }
}