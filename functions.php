<?php

// Add theme support for Featured Images
add_theme_support('post-thumbnails', array(
	'post'
));

function new_excerpt_more( $more ) {
	return '......';
}
add_filter('excerpt_more', 'new_excerpt_more');

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a href="'. site_url() .'/#!post/'.$post->ID.'">Read more</a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link');