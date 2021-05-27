<?php

function mass_update_posts() {
		
	$args = array(	'post_type'=>'album', //whatever post type you need to update 
					'posts_per_page'   => -1);
		
	$my_posts = get_posts($args);
	
	foreach($my_posts as $key => $my_post){
		$meta_values = get_post_meta( $my_post->ID);
		foreach($meta_values as $meta_key => $meta_value ){
			update_field($meta_key, $meta_value[0], $my_post->ID);
		}
	}
}

// add_action( 'init', 'mass_update_posts' );

// API
include('includes/functions/api/images.php');

// Post Types
include('includes/functions/post-types.php');

// Images
include('includes/functions/images.php');
