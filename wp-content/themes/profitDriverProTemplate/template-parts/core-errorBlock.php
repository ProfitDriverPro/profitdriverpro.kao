	<div id="error-message" class="hidden">		
		<?php if( is_wp_error($error_message) ){ 
			//Might need to iterate over errors
				echo '<p>**'.$error_message->get_error_message().'**<p>';
		} ?>
	</div>