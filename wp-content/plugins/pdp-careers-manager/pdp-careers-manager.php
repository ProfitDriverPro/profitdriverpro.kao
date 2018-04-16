<?php

/*
Plugin Name: PDP Careers Page Manager
Description: A simple module to manage the careers page.
Version: 1.1
Author: Chris Tully
*/

///Applications/MAMP/htdocs/profitdriverpro.kao/wp-content/plugins/akismet/akismet.php

// echo dirname( __FILE__ ).'/class.dbinit.php';

require_once( dirname( __FILE__ ).'/class.dbinit.php' );

register_activation_hook(  __FILE__ ,array('DBInit','plugin_activation'));


register_deactivation_hook( dirname( __FILE__ ).'/class.dbinit.php', array( 'DBInit', 'plugin_deactivation' ) );

add_action( 'admin_menu', 'my_admin_menu' );




// function plugin_activation(){
// 		global $wpdb;
// 		$TABLE_NAME = $wpdb->prefix . 'careers_posts';

// 		$charset_collate = $wpdb->get_charset_collate();

// 		$sql = "CREATE TABLE {$TABLE_NAME} (
// 			id INT NOT NULL AUTO_INCREMENT  ,
// 			department_name VARCHAR(199) NOT NULL ,
// 			position_name VARCHAR(199) NOT NULL ,
// 			location VARCHAR(199) NOT NULL , 
// 			body TEXT NOT NULL ,
// 			created_at TIMESTAMP NOT NULL ,
// 			updated_at TIMESTAMP NOT NULL ,
// 			deleted_at TIMESTAMP NOT NULL ,
// 			PRIMARY KEY (id)
// 			)".$charset_collate.";";

// 		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
// 		dbDelta( $sql );

// }

function plugin_deactivation(){
		global $wpdb;
		$TABLE_NAME = $wpdb->prefix . 'careers_posts';

		$charset_collate = $wpdb->get_charset_collate();

		$sql = "DROP TABLE ".$TABLE_NAME;

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

}

function my_admin_menu() {	
	add_menu_page( 
		'PDP | Careers Manager',
		'PDP - Careers Manager',
		'manage_options',
		'careers-manager',
		'pdp_init',
		'dashicons-businessman',
		6);

	add_submenu_page( 
		'careers-manager',
		'PDP | Careers Manager',
		'View Postings',
		'manage_options',
		'careers-manager',
		'pdp_init',
		6  );  //<-- replaes the default page 

	//we fire this here to ensure the function doesn't run in the event the page doesn't run.
	add_action('admin_init', 'pdp_custom_settings');
}

function pdp_init(){

	require_once( dirname( __FILE__ ) . '/views/master.php' );
	require_once( dirname( __FILE__ ) . '/includes/form.php' );
	require_once( dirname( __FILE__ ) . '/includes/models/db.init.php');
	wp_enqueue_style(
		'css',
		plugin_dir_url( __FILE__ ) . 'includes/default.css' ,
		array(),
		'1.0.0',
		'all'
	);
}

// /**
//  * [pdp_custom_settings Base init]
//  * @return [type] [description]
//  */
// function pdp_custom_settings(){
// 	//Register fields
// 	register_setting('pdp-careers-entries','department_name');
// 	register_setting('pdp-careers-entries','position_name','pdp_santize_text');
// 	register_setting('pdp-careers-entries','location_name','pdp_santize_text');

// 	add_settings_section('department-id','', 'pdp_department_name', 'careers-manager');

// 	add_settings_field('cdepartment_id','department_name','pdp_department_name','careers-manager','pdp-careers-group');
// }

// function pdp_department_name(){

// 	$input_config = [
// 		[
// 			'name' => 'department_name',
// 			'classes' => 'pdp_admin_department_name',
// 			'title' => 'Department Name',
// 			'type' => 'select',
// 			'description' => 'Please select a department.'
// 			'options' => [

// 				'option' =>[
// 					'value' => '---',
// 					'selected' => TRUE,
// 					'title' => '---'
// 				],
// 				'option' =>[
// 					'value' => 'Sales',
// 					'selected' => FALSE,
// 					'title' => 'Sales'
// 				],
// 				'option' =>[
// 					'value' => 'I.T',
// 					'selected' => FALSE,
// 					'title' => 'I.T'
// 				],
// 				'option' =>[
// 					'value' => 'Management',
// 					'selected' => TRUE,
// 					'title' => 'Management'
// 				],
// 				'option' =>[
// 					'value' => 'Support',
// 					'selected' =>FALSE,
// 					'title' =>'Support'
// 				]
// 			]
// 		],
// 		[
// 			'name' => 'position_name',
// 			'classes' => 'pdp_admin_position_name',
// 			'title' => 'Position Name',
// 			'type' => 'text',
// 			'description' => 'Please enter a Position name.'
// 		],
// 		[
// 			'name' => 'location_name',
// 			'classes' => 'pdp_admin_location_name',
// 			'title' => 'Location Name',
// 			'type' => 'text',
// 			'description' => 'please enter a location.'
// 		]
// 	];
	
// 	foreach($input_config as $input ){
// 		switch($input['type']){
// 			case 'text':
// 				echo '<label for="'.$input["name"].'" >'.$input["title"].':</label>  ';
// 				echo '<input type="text" title="'.$input["title"].'" name="'.$input["name"].'" class="'.$input['classes'].'" />';
// 				echo '<p class="description">'.$input["description"].'</p>';
// 				break;
// 			case 'select':
// 				 echo '<label for="'.$input["name"].'">Department Name:</label>  <select title="'.$input["title"].'" name="'.$input["name"].' class="'.$input["classes"].'">';
// 					foreach ( $input['options'] as $option){
// 						echo '<option title="'.$option["title"].'" value="'.$option["value"].'">'.$option["value"].'</option>';
// 					}
// 				echo '</select>';
// 				echo '<p class="description">'.$input["description"].'</p>';
// 				break;
// 			default:
// 				break;
// 		}
// 	}
// }


function pdp_santize_text( $user_input ){
	
	$output = sanatize_text_field($user_input);

	return $output;
}

/**
 * [saveEntry Saves a submitted contact form.]
 * @param  [Array] $POST [ a copy of the $_POST array]
 * @return [BOOL]       [TRUE | FALSE]
 */
function pdp_saveEntry($POST, $table_name){
	global $wpdb;
	
	$table = $wpdb->prefix . $table_name;
	$cleaned_data = array();

	foreach($POST as $key => $value){
		$cleaned_data[$wpdb->prefix.sanitize_text_field($key)] = sanitize_text_field($value);
	}
	$wpdb->insert($table,$cleaned_data);
	if($wpdb->rows_affected > 0){
		return true;
	} else{
		return false;
	}
}

/**
 * [sendMail Notifies user and admin about submission]
 * @param  [ Array ] $POST [a copy of the $_POST array]
 * @return [BOOL]       [TRUE | FALSE]
 */
function pdp_sendMail( $POST ){

	// $email = $post_data['email'];
	// //$to = $post_data[''];
	// $message = "\n\nThe following information was received:\n";

	// if($post_data['comm_reason']){
	// 	$message .= "Reason for contact:".$comm_reason .'\n';
	// }
	// $message = $post_data['message'];
	
 //  	$to = 'christully12@gmail.com';
	// $subject = 'WebMail:';
	// $headers = 'From: '. $post_data['email'] . "\r\n" .
	//   'Reply-To: ' . $post_data['email'] . "\r\n";

	// $sent = wp_mail($to, $subject, strip_tags($message), $headers);
	// if($sent){
	// 	//my_contact_form_generate_response("success", $message_sent); //message sent!	
		
	// 	return true;
	// } 
	// else{
	// 	echo 'fail';
	// 	die();
	// 	//my_contact_form_generate_response("error", "Something has gone wrong, please notify the system administrator"); 
	// 	return false;
	// } 
	return true;
}

/**
 * [validate_form_data  Validates form data, will trip false if honey pot is detected.]
 * @param  [Array] $POST a passed in $_POST array
 * @return [BOOL]       [TRUE | FALSE]
 */
function pdp_validate_form_data($POST){
	global $error_message;

	$error_message = new WP_Error();

  	if($POST['corporate_name']){
		return false;
	}	
		// //Validate $_POST fields		
	foreach ($POST as $key => $value) {

    	$value = trim($value);  		
    	if( $POST['corporate_name'] ){
    		continue;
    	}
    	if(!("" == trim($value))){
    		continue;    		
    	} else{
    		if(!empty($value)){
				$error_message->add('Missing Data', 'You are missing the following: '.$key); 

    		}
    	}

    }

    if(is_wp_error($error_message)){
    	return true;
    } else{
    	return false;
    }
}

/**
 * [PDP_form_submission: handles form submission processing]
 */
function form_submission_handler(){
	
	if(!empty($_POST)){

		if($_POST['wp-submit'] == 'Log In'){
			return true;
		}
		if ( validate_form_data($_POST ) ){	
			$POST = $_POST;
			$table_name = '';

			switch($POST['form_name']){
				case 'demoForm':
					$table_name = 'cust_demo_form';
				break;
				case 'contactForm':
					$table_name = 'custom_contact';
				break;
				default:
				break;
			}
			//clean out unnecessary data
			unset($POST['corporate_name']);
			unset($POST['form_name']);

			if( sendMail($POST) &&	saveEntry($POST,$table_name)){

				unset($POST);
				unset($_POST);
			
				wp_redirect( home_url().'/thank-you' );
				exit;
			} else{
				global $error_message;
				$error_message = new WP_Error( 'Invalid Data', 'The data you entered is invalid. Please try again.' );
				wp_redirect( home_url().'/contact-us?error=true' );
				exit;
			}
		} 
	}
}



add_action( 'init', 'form_submission_handler' );

// /**
//  * [pdp_delete_post deletes an entry]
//  * @param  [type] $id [the id of the entry to delete]
//  * @return [type]     [TRUE | FALSE]
//  */
// function pdp_delete_post($id){
// 	//TODO: handle deleting a entry
// }

// /**
//  * [pdp_add_post Adds a new careers entry]
//  * @return [type] [description]
//  */
// function pdp_add_post(){
// 	//todo: handle adding a new entry
// }

// /*
//  * [pdp_edit_post Edits the careers pages entries.]
//  * @param  [type] $id [The selected post to edit]
//  * @return [type]     [description]
//  */
 
// function pdp_edit_post( $id ){
// 	//todo: Handle editing a existing post
// 	$department_name = esc_attr(get_option('department_name'));
// } 














