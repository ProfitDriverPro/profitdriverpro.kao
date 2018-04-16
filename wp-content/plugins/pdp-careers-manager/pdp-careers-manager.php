<?php

/*
Plugin Name: PDP Careers Page Manager
Description: A simple module to manage the careers page.
Version: 1.1
Author: Chris Tully
*/


add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	// add_menu_page( 
	// 	'PDP | Careers Manager', //page title
	// 	'PDP',  // menu_title
	// 	'manage_options', // Permissions Level
	// 	'careers-manager'
	// 	'pdp_init', //init function
	// 	'/inc/img/menu-icon.png', //icon
	// 	 6 //position
	// );
	
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



	// add_submenu_page( 
	// 	'careers-manager',
	// 	'Add / Delete Postings',
	// 	'Add / Delete',
	// 	'manage_options',
	// 	'careers-manager',
	// 	'pdp_add_post',
	// 	6  
	// );


	//we fire this here to ensure the function doesn't run in the event the page doesn't run.
	add_action('admin_init', 'pdp_custom_settings');

}

function pdp_init(){

//inc/templates/s....
	require_once( dirname( __FILE__ ) . '/views/master.php' );
	require_once( dirname( __FILE__ ) . '/includes/form.php' );
	wp_enqueue_style(
		'css',
		plugin_dir_url( __FILE__ ) . 'includes/default.css' ,
		array(),
		'1.0.0',
		'all'
	);

}



function pdp_custom_settings(){
	//Register fields
	register_setting('pdp-careers-entries','department_name');
	register_setting('pdp-careers-entries','position_name');
	register_setting('pdp-careers-entries','location_name');

	add_settings_section('department-id','Department', 'pdp_department_name', 'careers-manager');

	add_settings_field('cdepartment_id','department_name','pdp_department_name','careers-manager','pdp-careers-group');

}

function pdp_department_name(){

	$input_config = [
		[
			'name' => 'department_name',
			'classes' => 'pdp_admin_department_name',
			'title' => 'Department Name',
			'type' => 'select',
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
			'type' => 'text'
		],
		[
			'name' => 'location_name',
			'classes' => 'pdp_admin_location_name',
			'title' => 'Location Name',
			'type' => 'text'
		]
	];
	
	foreach($input_config as $input ){
		switch($input['type']){
			case 'text':
				echo '<label for="'.$input["name"].'" >'.$input["title"].':</label>  ';
				echo '<input type="text" title="'.$input["title"].'" name="'.$input["name"].'" class="'.$input['classes'].'" />';
				break;
			case 'select':
				 echo '<label for="'.$input["name"].'">Department Name:</label>  <select title="'.$input["title"].'" name="'.$input["name"].' class="'.$input["classes"].'">';
					foreach ( $input['options'] as $option){
						echo '<option title="'.$option["title"].'" value="'.$option["value"].'">'.$option["value"].'</option>';
					}
				echo '</select>';
				break;
			default:
				break;
		}

	}

}

function pdp_position_name(){

	
}

function add_body_editor(){

}

/**
 * [pdp_delete_post deletes an entry]
 * @param  [type] $id [the id of the entry to delete]
 * @return [type]     [TRUE | FALSE]
 */
function pdp_delete_post($id){
	//TODO: handle deleting a entry
}

/**
 * [pdp_add_post Adds a new careers entry]
 * @return [type] [description]
 */
function pdp_add_post(){
	//todo: handle adding a new entry
}

/*
 * [pdp_edit_post Edits the careers pages entries.]
 * @param  [type] $id [The selected post to edit]
 * @return [type]     [description]
 */
 
function pdp_edit_post( $id ){
	//todo: Handle editing a existing post
	$department_name = esc_attr(get_option('department_name'));
} 














