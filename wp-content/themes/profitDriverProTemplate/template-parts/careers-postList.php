<?php
	global $wpdb;
	
	$TABLE_NAME = $wpdb->prefix . 'careers_posts';
	$results = $wpdb->get_results("SELECT id, department_name, position_name, location_name FROM ".$TABLE_NAME);	

?>

<ul class="list">
	<li class="title">
		<div class="type">Department</div>
		<div class="position">Position</div>
		<div class="location">Location</div>
	</li>
	<li>
	<?php
		if(!empty($results)):
			foreach($results as $result):		
	 ?>
		<div class="type">&nbsp;<div class="department"><?php echo $result->department_name ?></div></div>
		<div class="position"><?php echo $result->position_name ?></div>
		<div class="location"><?php echo $result->location_name ?></div>
		<a href="http://www.profitdriverpro.com/career?posting=<?php echo $result->id ?>"><div class="button">View</div></a>
	<?php endforeach; 
		endif;
	?>
	</li>
</ul>