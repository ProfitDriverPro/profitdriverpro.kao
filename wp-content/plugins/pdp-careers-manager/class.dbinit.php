<?php 
class DBInit{
	
	protected $TABLE_NAME;

	function plugin_activation(){

		global $wpdb;
		$TABLE_NAME = $wpdb->prefix . 'careers_posts';

		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE {$TABLE_NAME} (
			id INT NOT NULL AUTO_INCREMENT  ,
			department_name VARCHAR(199) NOT NULL ,
			position_name VARCHAR(199) NOT NULL ,
			location VARCHAR(199) NOT NULL , 
			body TEXT NOT NULL ,
			created_at TIMESTAMP NOT NULL ,
			updated_at TIMESTAMP NOT NULL ,
			deleted_at TIMESTAMP NOT NULL ,
			PRIMARY KEY (id)
			)".$charset_collate.";";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}
	function plugin_deactivation(){
		global $wpdb;
		$TABLE_NAME = $wpdb->prefix . 'careers_posts';

		$charset_collate = $wpdb->get_charset_collate();

		$sql = "DROP TABLE ".$TABLE_NAME;

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}


	// function save_submissions($post){
	// 	global $wpdb;
		
	// 	$table = $TABLE_NAME;
	// 	$cleaned_data = array();

	// 	foreach($POST as $key => $value){
	// 		$cleaned_data[$wpdb->prefix.sanitize_text_field($key)] = sanitize_text_field($value);
	// 	}
	// 	$wpdb->insert($table,$cleaned_data);
	// 	if($wpdb->rows_affected > 0){
	// 		return true;
	// 	} else{
	// 		return false;
	// 	}
	// }

	/**
	 * [validate_form_data  Validates form data, will trip false if honey pot is detected.]
	 * @param  [Array] $POST a passed in $_POST array
	 * @return [BOOL]       [TRUE | FALSE]
	 */
	// function pdp_validate_form_data($POST){
	// 	global $error_message;
	// 	echo 'inside validation';
	// 	die();
	// 	$error_message = new WP_Error();	
	// 		// //Validate $_POST fields		
	// 	foreach ($POST as $key => $value) {
	//     	$value = trim($value);  		
	//     	if(!("" == trim($value))){
	//     		continue;    		
	//     	} else{
	//     		if(!empty($value)){
	// 				$error_message->add('Missing Data', 'You are missing the following: '.$key); 

	//     		}
	//     	}

	//     }

	//     if(is_wp_error($error_message)){
	//     	return true;
	//     } else{
	//     	return false;
	//     }
	// }

}