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

    register_rest_field(array('album'),
        'genres',
        array(
            'get_callback'    => 'get_rest_genres',
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
      'full_webp' => $thumbnail . '.webp',
    );
    return $out;
}

function get_rest_genres( $object, $field_name, $request ) {
    $postID = $object['id'];
    $terms = get_the_terms($postID, 'generos_album');
    
    foreach($terms as $term) {
        $genres[] = [
            'name' => $term->name,
            'slug' => $term->slug
        ];
    }

    $out = $genres;
    return $out;
}

/**
 * Plugin Name: REST API - Post list randomize
 * Description: Randomize the content list in REST API passing `orderby=rand` as parameter.
 * Version:     1.0.0
 * Author:      Felipe Elia | Codeable
 * Author URI:  https://codeable.io/developers/felipe-elia?ref=qGTOJ
 */
 
/**
 * Add `rand` as an option for orderby param in REST API.
 * Hook to `rest_{$this->post_type}_collection_params` filter.
 *
 * @param array $query_params Accepted parameters.
 * @return array
 */
function add_rand_orderby_rest_post_collection_params( $query_params ) {
	$query_params['orderby']['enum'][] = 'rand';
	return $query_params;
}
add_filter( 'rest_album_collection_params', 'add_rand_orderby_rest_post_collection_params' );