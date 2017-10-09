<?php

if($_GET['cat']=='-1'){
	$cat_id = '-1';
}else{
	$idObj = get_category_by_slug($_GET['cat']); 
	$cat_id = $idObj->term_id;
}

$sort = $_GET['sort'];

$args = array(
	'cat' => $cat_id,
	'orderby' => 'date',
	'order' => $sort  
);
$loop = new WP_Query( $args );
?>

<div>
	<?php
		
		if(!$loop->have_posts()){
			echo '<p>Sorry, there is 0 result for your search.</p>';
		}else{
	
		while ( $loop->have_posts() ) :
			$loop->the_post();
		?>
			<div ng-show="'<?php the_title();?>'.indexOf('{{keywordInput}}') !== -1">
				<?php echo the_post_thumbnail( 'thumbnail', 'ztravel-thumb' );?>
				<h3><?php the_title();?></h3>
				<div class="excpt">
					<?php the_excerpt();?>
				</div>
				
				<div class="clr"></div>
				<hr class="seperator" />
			</div>
		<?php
		endwhile;
		
		}
	?>
</div> 