<?php

//If only one post in the loop, if = while
if(have_posts()) : 

	the_post();

	echo '<h2>'.get_the_title().'</h2>';

	the_post_thumbnail( 'full' , ['class' => 'fullsize_image']); 
	the_content();


endif;

?>
