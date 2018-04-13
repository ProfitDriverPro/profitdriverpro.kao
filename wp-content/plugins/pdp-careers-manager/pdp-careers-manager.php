<?php

/*
Plugin Name: PDP Careers Page Manager
Description: A simple module to manage the careers page.
Version: 1.1
Author: Chris Tully
*/


add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'PDP | Careers Manager', 'Careers Manager', 'manage_options', 'careers/careers-manager', '/views/', '/inc/img/menu-icon.png', 6  );
}

function pdp_init(){

		?>
	<div class="wrap">
		<h2>example text</h2>
	</div>
	<?php
}