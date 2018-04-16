<?php 

//todo: get last id entered, iterate +1
$editor_id = '1';

?>
<div class="pdp_wrap">
	<h2>Add a new posting</h2>
	<?php settings_errors(); ?>
	<form  class="" method="POST" action="options.php">
		
		<?php settings_fields('pdp-careers-entries'); ?>
		<?php do_settings_sections('careers-manager') ?>

		<div class="pdp_body_wrap">
			<?php wp_editor('',$editor_id); ?>
		</div>

		<?php submit_button(); ?>
	</form>

</div>