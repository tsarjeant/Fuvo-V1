

<?php
add_theme_support( 'post-thumbnails' ); 
?>

<?php
//create a permalink after the excerpt
function wpfme_replace_excerpt($content) {
	return str_replace('[...]',
		'<a class="readmore" href="'. get_permalink() .'">Continue Reading</a>',
		$content
	); 
	}
	add_filter('the_excerpt', 'wpfme_replace_excerpt');
?>



<?php
function new_excerpt_length($length) {
return 100;
}
?>