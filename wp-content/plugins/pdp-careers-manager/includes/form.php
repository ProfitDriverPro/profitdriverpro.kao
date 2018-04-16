
<div class="pdp_wrap">
	<h2>Add a new posting</h2>
	<?php settings_errors(); ?>
	<form  class="" method="POST" action="options.php">
		
		<?php settings_fields('pdp-careers-entries'); ?>
		<?php do_settings_sections('careers-manager') ?>

		<div class="pdp_body_wrap">
			<?php 
			$content = 'Initial content for the editor.';
			$editor_id = 'editor';
			$settings =   array(
			    'wpautop' => true, //Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
			    'media_buttons' => true, //Whether to display media insert/upload buttons
			    'textarea_name' => $editor_id, // The name assigned to the generated textarea and passed parameter when the form is submitted.
			    'tabindex' => '', //The tabindex value used for the form field
			    'editor_css' => '', // Additional CSS styling applied for both visual and HTML editors buttons, needs to include <style> tags, can use "scoped"
			    'editor_class' => 'pdp_editor', // Any extra CSS Classes to append to the Editor textarea
			    'teeny' => false, // Whether to output the minimal editor configuration used in PressThis
			    'dfw' => false, // Whether to replace the default fullscreen editor with DFW (needs specific DOM elements and CSS)
			    'tinymce' => true, // Load TinyMCE, can be used to pass settings directly to TinyMCE using an array
			    'quicktags' => true, // Load Quicktags, can be used to pass settings directly to Quicktags using an array. Set to false to remove your editor's Visual and Text tabs.
			    'drag_drop_upload' => true //Enable Drag & Drop Upload Support (since WordPress 3.9) 
			);

			 wp_editor( $content, $editor_id, $settings );
			?>
		</div>

		<?php submit_button(); ?>
	</form>

</div>