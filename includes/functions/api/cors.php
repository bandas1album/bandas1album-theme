<?php

add_action('init', 'handle_preflight');

function handle_preflight() {
    $origin = get_http_origin();
    if ($origin === 'https://bandas1album.com.br') {
        header("Access-Control-Allow-Origin: bandas1album.com.br");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');

        if ('OPTIONS' == $_SERVER['REQUEST_METHOD']) {
            status_header(200);
            exit();
        }
    }
}
add_filter('rest_authentication_errors', 'rest_filter_incoming_connections');
function rest_filter_incoming_connections($errors) {
    $request_server = $_SERVER['REMOTE_ADDR'];
    $origin = get_http_origin();
    if ($origin !== 'https://bandas1album.com.br') return new WP_Error('forbidden_access', $origin, array(
        'status' => 403
    ));
    return $errors;
}