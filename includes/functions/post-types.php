<?php

function register_cpt() {
  register_post_type('album', // Register Custom Post Type
    array(
    'labels' => array(
      'name' => 'Álbuns', // Rename these to suit
      'singular_name' => 'Álbum',
      'add_new' => 'Adicionar novo',
      'add_new_item' => 'Adicionar novo álbum',
      'edit' => 'Editar',
      'edit_item' => 'Editar álbum',
      'new_item' => 'Nova álbum',
      'view' => 'Ver',
      'view_item' => 'Ver álbum',
      'search_items' => 'Buscar álbum',
      'not_found' => 'Nenhum resultado',
      'not_found_in_trash' => 'Nenhuma álbum encontrada'
    ),
    'public' => true,
    'hierarchical' => true, 
    'has_archive' => false,
    'menu_icon' => 'dashicons-album',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'exclude_from_search' => true,
    'can_export' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'album',
    'graphql_plural_name' => 'albums',
  ));

  register_post_type('genre', // Register Custom Post Type
    array(
    'labels' => array(
      'name' => 'Gêneros', // Rename these to suit
      'singular_name' => 'Gênero',
      'add_new' => 'Adicionar novo',
      'add_new_item' => 'Adicionar novo gênero',
      'edit' => 'Editar',
      'edit_item' => 'Editar gênero',
      'new_item' => 'Nova gênero',
      'view' => 'Ver',
      'view_item' => 'Ver gênero',
      'search_items' => 'Buscar gênero',
      'not_found' => 'Nenhum resultado',
      'not_found_in_trash' => 'Nenhum gênero encontrada'
    ),
    'public' => true,
    'hierarchical' => true, 
    'has_archive' => false,
    'menu_icon' => 'dashicons-album',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'exclude_from_search' => true,
    'can_export' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'genre',
    'graphql_plural_name' => 'genres',
  ));

  register_post_type('released', // Register Custom Post Type
    array(
    'labels' => array(
      'name' => 'Ano de lançamentos', // Rename these to suit
      'singular_name' => 'Ano de lançamento',
      'add_new' => 'Adicionar novo',
      'add_new_item' => 'Adicionar novo ano',
      'edit' => 'Editar',
      'edit_item' => 'Editar ano',
      'new_item' => 'Nova ano',
      'view' => 'Ver',
      'view_item' => 'Ver ano',
      'search_items' => 'Buscar ano',
      'not_found' => 'Nenhum resultado',
      'not_found_in_trash' => 'Nenhum ano encontrada'
    ),
    'public' => true,
    'hierarchical' => true, 
    'has_archive' => false,
    'menu_icon' => 'dashicons-album',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'exclude_from_search' => true,
    'can_export' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'released',
    'graphql_plural_name' => 'releases',
  ));

  register_post_type('country', // Register Custom Post Type
    array(
    'labels' => array(
      'name' => 'Países', // Rename these to suit
      'singular_name' => 'País',
      'add_new' => 'Adicionar novo',
      'add_new_item' => 'Adicionar novo país',
      'edit' => 'Editar',
      'edit_item' => 'Editar país',
      'new_item' => 'Nova país',
      'view' => 'Ver',
      'view_item' => 'Ver país',
      'search_items' => 'Buscar país',
      'not_found' => 'Nenhum resultado',
      'not_found_in_trash' => 'Nenhum país encontrada'
    ),
    'public' => true,
    'hierarchical' => true, 
    'has_archive' => false,
    'menu_icon' => 'dashicons-album',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'exclude_from_search' => true,
    'can_export' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'country',
    'graphql_plural_name' => 'countries',
  ));
}
add_action('init', 'register_cpt');