<?php
// Register REST Responsive

add_action('rest_api_init', 'register_rest_fields' );

function register_rest_fields(){
    register_rest_field(array('album'),
        'images',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );

    register_rest_field(array('album'),
        'navigation',
        array(
            'get_callback'    => 'get_rest_navigation',
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

function get_rest_navigation( $object, $field_name, $request ) {
    global $post;
    $post = get_post($object['id']);
  
      $out = Array(
        'prev' => get_previous_post()->post_name,
        'next' => get_next_post()->post_name
      );
      return $out;
  }