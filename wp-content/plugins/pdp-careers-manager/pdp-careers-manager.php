<?php

/*
Plugin Name: PDP Careers Page Manager
Description: A simple module to manage the careers page.
Version: 1.1
Author: Chris Tully
*/

require_once( dirname( __FILE__ ).'/class.dbinit.php' );

register_activation_hook(  __FILE__ ,array('DBInit','plugin_activation'));
register_deactivation_hook( dirname( __FILE__ ), array( 'DBInit', 'plugin_deactivation' ) );

add_action( 'admin_menu', 'my_admin_menu' );
add_action( 'init',array('DBInit', 'pdp_init_handler'));

/**
 * [my_admin_menu Base menu page additions]
 * @return [type] [n/a]
 */
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
		6  );  
		wp_register_script( 
		'jQueryLoad',
		'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', 
		array(),
		null, 
		false 
	);
	
	wp_enqueue_script( 'jQueryLoad' );
	add_action('admin_init', 'pdp_custom_settings');
}

/**
 * [pdp_init handles base initilization of admin components]
 * @return [type] [description]
 */
function pdp_init(){
	require_once( dirname( __FILE__ ) . '/views/master.php' );
	require_once( dirname( __FILE__ ) . '/includes/form.php' );
}

/**
 * [pdp_custom_settings Base init]
 * @return [type] [description]
 */
function pdp_custom_settings(){
	//Register fields
	register_setting('pdp-careers-entries','department_name');
	register_setting('pdp-careers-entries','position_name','pdp_santize_text');
	register_setting('pdp-careers-entries','location_name','pdp_santize_text');

	add_settings_section('department-id','', 'pdp_department_name', 'careers-manager');
	wp_enqueue_style(
		'css',
		plugin_dir_url( __FILE__ ) . 'includes/default.css' ,
		array(),
		'1.0.0',
		'all'
	);

	add_settings_field('cdepartment_id','department_name','pdp_department_name','careers-manager','pdp-careers-group');
}

/**
 * [pdp_department_name Outputs the form elements]
 * @return [type] [description]
 */
function pdp_department_name(){

	$input_config = [
		[
			'name' => 'department_name',
			'classes' => 'pdp_admin_department_name',
			'title' => 'Department Name',
			'type' => 'select',
			'description' => 'Please select a department.',
			'options' => [
				'option' =>[
					'value' => '---',
					'selected' => TRUE,
					'title' => '---'
				],
				'option' =>[
					'value' => 'Sales',
					'selected' => FALSE,
					'title' => 'Sales'
				],
				'option' =>[
					'value' => 'I.T',
					'selected' => FALSE,
					'title' => 'I.T'
				],
				'option' =>[
					'value' => 'Management',
					'selected' => TRUE,
					'title' => 'Management'
				],
				'option' =>[
					'value' => 'Support',
					'selected' =>FALSE,
					'title' =>'Support'
				]
			]
		],
		[
			'name' => 'position_name',
			'classes' => 'pdp_admin_position_name',
			'title' => 'Position Name',
			'type' => 'text',
			'description' => 'Please enter a Position name.'
		],
		[
			'name' => 'location_name',
			'classes' => 'pdp_admin_location_name',
			'title' => 'Location Name',
			'type' => 'text',
			'description' => 'please enter a location.'
		]
	];
	
	foreach($input_config as $input ){
		switch($input['type']){
			case 'text':
				echo '<label for="'.$input["name"].'" >'.$input["title"].':</label>  ';
				echo '<input type="text" title="'.$input["title"].'" name="'.$input["name"].'" class="'.$input['classes'].'" />';
				echo '<p class="description">'.$input["description"].'</p>';
				break;
			case 'select':
				 echo '<label for="'.$input["name"].'">Department Name:</label>  <select title="'.$input["title"].'" name="'.$input["name"].'" class="'.$input["classes"].'">';
					foreach ( $input['options'] as $option){
						echo '<option title="'.$option["title"].'" value="'.$option["value"].'">'.$option["value"].'</option>';
					}
				echo '</select>';
				echo '<p class="description">'.$input["description"].'</p>';
				break;
			default:
				break;
		}
	}
}



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














