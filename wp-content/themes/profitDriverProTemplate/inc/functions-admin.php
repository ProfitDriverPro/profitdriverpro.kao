<?php 

/*
@package profitDriverProTemplate
 */

/**
 * Admin Page
 */

function pdp_add_admin_page(){

	add_menu_page( 'PDP | Careers Manager', 'Careers Manager', 'manage_options', 'careers/careers-manager', 'pdp_add_page', 'dashicons-admin-users', 6  );
	add_submenu_page( 'PDP | Careers Manager', 'Settings', 'manage_options', 'careers/careers-manager', 'pdp_add_page', 'dashicons-admin-users', 6  );
}
	add_action('admin_menu','pdp_add_admin_page');


function pdp_add_page(){

}