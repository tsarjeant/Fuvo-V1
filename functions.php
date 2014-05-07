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



function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Continue', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



function my_search_form( $form ) {
    $form = '
    <div class="search">
	<div class="field" >
	<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( '' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="search" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>
    </div>
    </div>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

