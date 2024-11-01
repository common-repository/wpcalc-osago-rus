<?php
if ( ! defined( 'ABSPATH' ) ) exit;
	function shortcode_osago_rus_calc() {
		wp_enqueue_script( 'wpcalc-osago-rus-calc', plugins_url( 'js/calc.js', __FILE__ ));	
		wp_enqueue_style ( 'wpcalc-osago-rus-style', plugins_url( 'css/style.css', __FILE__ ));
		ob_start();
		include_once( 'partials/page-calc.php' );		
		$output_string=ob_get_contents();
		ob_end_clean();  
		return $output_string;
		 }
	 add_shortcode( 'wpcosagorus', 'shortcode_osago_rus_calc' ); 