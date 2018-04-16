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

}