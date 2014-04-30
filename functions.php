<?php 
// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);




add_theme_support( 'post-thumbnails' ); 


// Create custom sizes
// This is then pulled through to your theme useing the_post_thumbnail('custombig');
//if ( function_exists( 'add_image_size' ) ) {
//	add_image_size('customsmall', 300, 200); //narrow column
//	add_image_size('custombig', 400, 500, true); //wide column
//	add_image_size( 'large_thumb', 75, 75, true );
//	add_image_size( 'wider_image', 200, 150 );
//	add_image_size( 'mine', 960 );
//}


//create a permalink after the excerpt
function wpfme_replace_excerpt($content) {
	return str_replace('[...]',
		'<a class="readmore" href="'. get_permalink() .'">Continue Reading</a>',
		$content
	); 
	}
	add_filter('the_excerpt', 'wpfme_replace_excerpt');





// function new_excerpt_length($length) {
// return 5;
// }
// ?>