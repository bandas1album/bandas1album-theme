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

  $labels = array(
    'name'              => 'Gêneros',
    'singular_name'     => 'Gênero',
    'search_items'      => 'Buscar Gêneros',
    'all_items'         => 'Todos os Gêneros',
    'edit_item'         => 'Editar Gênero',
    'update_item'       => 'Atualizar Gênero',
    'add_new_item'      => 'Adicionar Novo Gênero',
    'new_item_name'     => 'Novo Gênero',
    'menu_name'         => 'Gêneros',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'generoAlbum',
    'graphql_plural_name' => 'generosAlbum',
    'rest_base'         => 'generos_album'
  );

  register_taxonomy( 'generos_album', 'album', $args );
}
add_action('init', 'register_cpt');