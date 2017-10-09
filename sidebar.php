<div class="sidebar">

	<h2>Search Sidebar</h2>

	<p>
		Keyword: <br>
		<input class="form-control" type="text" ng-model="keywordInput" />
	</p>
	
	<p>
		Category: <br>
		<select class="form-control" ng-model="categorySelect">
			<option value="-1">Not Specified</option>
			<?php 
			$args = array(
				'type'                     => 'post',
				'hide_empty'               => 0,
				'exclude'                  => '1',
				'taxonomy'                 => 'category');
				
			$categories = get_categories( $args );

			foreach($categories as $category):
			?>	
				<option value="<?php echo $category->slug;?>"><?php echo $category->name;?></option>
			<?php 
			endforeach;
			?>
		</select>
	</p>
	
	<p>
		Sort by: <br>
		<select class="form-control" ng-model="sortSelect">
			<option value="DESC">Latest</option>
			<option value="ASC">Oldest</option>
		</select>
	</p>
	
	<p>
		<button search-btn class="btn btn-warning">Search Now</button>
	</p>

</div>

