<?php

add_theme_support( 'post-thumbnails' ); 


function new_excerpt_length($length) {
return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');


// function new_excerpt_more( $more ) {
// 	return '[.....]';
// }
// add_filter('excerpt_more', 'new_excerpt_more');

// function new_excerpt_more( $more ) {
// 	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
// }
// add_filter( 'excerpt_more', 'new_excerpt_more' );

?>