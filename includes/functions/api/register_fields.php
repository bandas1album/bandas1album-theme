<?php

//Register REST Responsive

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

    register_rest_field(array('generos_album'),
        'images',
        array(
            'get_callback'    => 'get_rest_genre_banner',
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
      'thumbnail_webp' => $thumbnail . '.webp',
      'full' => $full,
      'full_webp' => $full . '.webp',
    );
    return $out;
}

function get_rest_genre_banner( $object, $field_name, $request ) {
    $postID = $object['id'];
    $banner = get_field('banner', 'generos_album_' . $postID);

    $out = Array(
      'banner' => [
        'normal' => $banner,
        'webp' => $banner . '.webp',
      ]
    );
    return $out;
}

function add_rand_orderby_rest_post_collection_params( $query_params ) {
	$query_params['orderby']['enum'][] = 'rand';
	return $query_params;
}
add_filter( 'rest_album_collection_params', 'add_rand_orderby_rest_post_collection_params' );

function add_metavalue_orderby_rest_post_collection_params( $query_params ) {
	$query_params['orderby']['enum'][] = 'meta_value';
	return $query_params;
}
add_filter( 'rest_album_collection_params', 'add_metavalue_orderby_rest_post_collection_params' );

function add_custom_query_rest_album( $args, $request ) {
    $args['meta_key'] = $request['meta_key'];
    $args['meta_value'] = $request['meta_value'];

    return $args;
}
add_filter('rest_album_query', 'add_custom_query_rest_album', 10, 2);