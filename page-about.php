<h2><?php the_title();?></h2>
<div>
	<?php
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	?>
</div>