<?php get_header();?>

<div class="site_content">

	<div class="container">
	
		<div class="row">
		
			<div class="col-md-4">
				<?php get_sidebar();?>
				<?php get_sidebar('ad');?>
			</div>
			
			<div class="col-md-8">
				<div ng-view></div>
			</div>
			
		</div>
		
	</div>
	
</div>

<?php get_footer();?>