<h2>CATEGORIES</h2>

<div class="row categories">
<?php 

$args = array(
	'type'                     => 'post',
	'hide_empty'               => 0,
	'exclude'                  => '1',
	'taxonomy'                 => 'category');
	
$categories = get_categories( $args );

foreach($categories as $category):
?>	
	<div class="col-md-6 category">
		<a href="<?php echo site_url();?>/#!category/<?php echo $category->slug;?>">
			<img src="<?php echo get_template_directory_uri();?>/images/category/<?php echo $category->slug;?>.jpg" />
		</a>
		<br>
		<div><?php echo $category->name;?></div>
	</div>

<?php 
endforeach;
?>
</div>

<h2>WELCOME TO <?php echo get_bloginfo('title');?>!</h2>

<div>
<?php
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
?>
</div>