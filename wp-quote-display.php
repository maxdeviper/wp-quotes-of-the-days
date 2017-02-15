<?php

/**
 * Plugin name: Opus hive Quote of the day.
 * 
 * @wordpress-plugin
 * Plugin URI:        www.opushive.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.0.5
 * Author:            Opus Hive
 * Author URI:        www.opushive.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-quote-display
 */

function opus_hive_display_quote(){
	$queryArgs = array(
			'method' => 'getQuote',
			'format' => 'json',
			'lang'   => 'en'

		);
	$html = '';
	$request = wp_remote_get( 'http://api.forismatic.com/api/1.0/?'.http_build_query($queryArgs));
	if(is_wp_error( $request )) {
        error_log('error in making request for quotes');
        return '';
     }
    $response = json_decode( wp_remote_retrieve_body($request), true);
    //die(var_dump($response));
    if (!empty($response)){

	    extract($response);
		ob_start();
		include plugin_dir_path( __FILE__ ).'/templates/quote-from-forbes.php';
		$html = ob_get_clean();
    }
	return $html;

}

function opus_hive_quote_enqueue_style() {
	wp_enqueue_style( 'opus_hive_quote_css', plugin_dir_url( __FILE__ ).'/css/main2.css'); 
	wp_enqueue_style( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"); 
}

function opus_hive_quote_enqueue_script() {
	wp_enqueue_script( 'opus_hive_quote_js', plugin_dir_url( __FILE__ ).'/js/main.js', array( 'jquery' ));
}


add_shortcode( 'wp-quote-of-the-day', 'opus_hive_display_quote' );
add_action( 'wp_enqueue_scripts', 'opus_hive_quote_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'opus_hive_quote_enqueue_script' );