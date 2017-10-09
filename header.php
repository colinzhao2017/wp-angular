<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo get_bloginfo('title');?></title>
	<script>var baseUrl = '<?php echo site_url();?>';</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- load Angular 1.x cdn-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
	<!-- theme main js and css-->
	<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	<link href="<?php echo get_template_directory_uri();?>/css/main.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body ng-app="myApp" ng-controller="myCtrl">
	
	<div class="top">
		
		<div class="container">
			
			<h1><?php echo get_bloginfo('title');?></h1>

			<ul>
				<li><a href="<?php echo site_url();?>/#/!">Home</a></li>
				<li><a href="<?php echo site_url();?>/#!about">About</a></li>
				<?php 
				$args = array(
					'type'                     => 'post',
					'hide_empty'               => 0,
					'exclude'                  => '1',
					'taxonomy'                 => 'category');
					
				$categories = get_categories( $args );

				foreach($categories as $category):
				?>	
					<li><a href="<?php echo site_url();?>/#!category/<?php echo $category->slug;?>"><?php echo $category->name;?></a></li>
				<?php 
				endforeach;
				?>
			</ul>
		
		</div>
		
	</div>
	
	
	
	