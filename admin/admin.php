<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function enqueue_osago_ru_styles() {
		wp_enqueue_style( 'admin-style-osago-rus', plugin_dir_url( __FILE__ ) . 'css/style.css');
		
	}

	function add_osago_rus_admin__scripts() {

		wp_enqueue_script( 'admin-script-osago-rus', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ));

	}
	
	function add_global_wpcalc_osago_rus_options() {
		add_options_page('OSAGO RUS', 'OSAGO RUS', 'manage_options', 'wpcalcosagorus','global_wpcalc_osago_rus_options');
	}
	
	function global_wpcalc_osago_rus_options() {
	include_once( 'partials/display.php' );
	
	}
	
	add_action('admin_menu', 'enqueue_osago_ru_styles');
	add_action('admin_menu', 'add_osago_rus_admin__scripts');
	add_action('admin_menu', 'add_global_wpcalc_osago_rus_options');


	
