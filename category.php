<div>
	<?php
		
		if(!have_posts()){
			echo '<p>Sorry, there is 0 trip for this category for the time being.</p>';
		}
	
		while ( have_posts() ) : the_post();
		?>
			<?php the_post_thumbnail( 'thumbnail', 'ztravel-thumb' );?>
			<h3><?php the_title();?></h3>
			<div class="excpt">
				<?php the_excerpt();?>
			</div>
			
			<div class="clr"></div>
			<hr class="seperator" />
		<?php
		endwhile;
	?>
</div> 