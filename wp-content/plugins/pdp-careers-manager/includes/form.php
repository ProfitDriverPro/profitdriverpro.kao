
<div class="pdp_wrap">
	<h2>Add a new posting</h2>
	<?php settings_errors(); ?>
	<form  class="" method="POST" action="options.php">
		<script src="//cdn.tinymce.com/4/tinymce.min.js" type="text/javascript"></script>


		<?php settings_fields('pdp-careers-entries'); ?>
		<?php do_settings_sections('careers-manager') ?>

		<div class="pdp_body_wrap" >
			<h2 class="editable">Editable header</h2>

			<textarea id="elm1" name="elm1" rows="15" cols="80"></textarea>

			</div>
		</div>
		<script>
			// tinymce.init({			 
			// });
			tinymce.init({
			  
    			mode: "exact",
    			elements : "elm1",

			  plugins: [
			    'advlist autolink lists link image charmap print preview anchor',
			    'searchreplace visualblocks code fullscreen',
			    'insertdatetime media table contextmenu paste'
			  ],
			  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			  content_css: [
			    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			    '//www.tinymce.com/css/codepen.min.css']
			});

		</script>
		<?php submit_button(); ?>
	</form>

</div>
