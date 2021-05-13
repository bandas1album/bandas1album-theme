<?php
// Register REST Responsive

add_action('rest_api_init', 'register_rest_images' );

function register_rest_images(){
    register_rest_field(array('album'),
        'images',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    $postID = $object['id'];
    $thumbnail = get_the_post_thumbnail_url($postID, 'thumbnail');
    $full = get_the_post_thumbnail_url($postID, 'full');

    $out = Array(
      'thumbnail' => $thumbnail,
      'full' => $full
    );
    return $out;
}