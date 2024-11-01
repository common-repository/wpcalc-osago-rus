<?php
/**
 * @link              http://wpcalc.com/
 * @since             1.2
 * @package           Wpcalc_OSAGO_RUS
 *
 * @wordpress-plugin
 * Plugin Name:       Wpcalc OSAGO RUS
 * Plugin URI:        http://wpcalc.com/plagin-kalkulyatora-osago/
 * Description:       Калькулятор расчета стоимости страхового тарифа ОСАГО Россия.
 * Version:           1.2
 * Author:            Dimy4 Wpcalc
 * Author URI:        http://wpcalc.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpcalc-osago-rus
  */

if ( ! defined( 'WPINC' ) ) {
	die;
}

	
function activate_wpcalc_osago_rus() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/activator.php';
	}

function deactivate_wpcalc_osago_rus() {	
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivator.php';
}

register_activation_hook( __FILE__, 'activate_wpcalc_osago_rus' );

register_deactivation_hook( __FILE__, 'deactivate_wpcalc_osago_rus' );

require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

require_once plugin_dir_path( __FILE__ ) . 'public/public.php';



 







