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
			location_name VARCHAR(199) NOT NULL , 
			body TEXT NOT NULL ,
			created_at TIMESTAMP NOT NULL ,
			updated_at TIMESTAMP NOT NULL ,
			deleted_at TIMESTAMP NOT NULL ,
			PRIMARY KEY (id)
			)".$charset_collate.";";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}

	/**
	 * [plugin_deactivation Handles plugin table removals]
	 * @return [type] [n/a]
	 */
	function plugin_deactivation(){
		global $wpdb;
		$TABLE_NAME = $wpdb->prefix . 'careers_posts';

		$charset_collate = $wpdb->get_charset_collate();

		$sql = "DROP TABLE ".$TABLE_NAME;

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}

	
	/**
	 * [pdp_init_handler handles init page load functionallity]
	 * @return [type] [description]
	 */
	function pdp_init_handler(){

		if(!empty($_POST)){
			//bypass login form stuff
			if($_POST['wp-submit'] == 'Log In')
				return true; 	
					
			if( self::save_submissions($_POST)){
				wp_redirect( home_url().'/wp-admin/admin.php?page=careers-manager&submission=true' );
				exit;

			} else{
				global $error_message;
				$error_message = new WP_Error( 'Invalid Data', 'The data you entered is invalid. Please try again.' );
				wp_redirect( home_url().'/wp-admin/admin.php?page=careers-manager&submission=false' );
				exit;
			}
		}
	}


	/**
	 * [save_submissions handles save submission process]
	 * @param  [type] $post [Post array]
	 * @return [type]       [TRUE | FALSE]
	 */
	function save_submissions($post){
		global $wpdb;
	
		$TABLE_NAME = $wpdb->prefix . 'careers_posts';

		$existing_columns = $wpdb->get_col("DESC ". $TABLE_NAME, 0);
		$query_start = "INSERT INTO ".$TABLE_NAME. "( ";
		$query_end = ' ) VALUES ( ';
		$last_value = end(array_keys($_POST));

		foreach($existing_columns as $key => $column_name){
			
			if(!empty($_POST[$column_name])){
				
				if ( $column_name == 'body'){
					$query_start .= $column_name;
					$query_end  .= '"'.(string)base64_encode($_POST[$column_name]).'"';
					unset($_POST[$column_name]);
				} else{					
					$query_start .= $column_name .',';
					$query_end  .= '"'. $_POST[$column_name].'",';
					unset($_POST[$column_name]);	
				}				
			} 	
		}
		$query = trim($query_start).trim($query_end).' )';
		$wpdb->query($query);
		if($wpdb->rows_affected > 0){
			return true;
		} else{
			return false;
		}
	}

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