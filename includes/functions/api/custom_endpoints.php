<?php

add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v2', 'genres', array(
    'methods' => 'GET',
    'callback' => 'get_genres_api',
    'permission_callback' => '__return_true'
  ) );
} );

function get_genres_api() {
  $terms = get_terms(array(
    'taxonomy' => 'generos_album',
    'hide_empty' => true,
  ));

  foreach($terms as $term) {
    $genres[] = [
        'title' => $term->name,
        'slug' => $term->slug,
        'count' => $term->count
    ];
  }

  $out = $genres;

  return $out;
}