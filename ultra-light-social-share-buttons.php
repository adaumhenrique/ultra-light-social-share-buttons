<?php
/*
 * Plugin Name: Ultra Light Social Share Buttons
 * Plugin URI: http://www.estudarti.com.br
 * Description: Displays social share buttons on your posts. No JavaScript required, no images required, this plugin uses SVG.
 * Version: 1.0
 * Author: Adam Silva
 * Author URI: http://www.adamsilva.com.br
 * License GPLv3
 */


$plugin_url = WP_PLUGIN_URL . '/ultra-light-social-share-buttons';
$options = array();

function ultralight_menu() {
	add_options_page(
		'Ultra light social share buttons',
		'Ultra light social',
		'manage_options',
		'ultralight',
		'ultralight_options_page'
	);
}
add_action( 'admin_menu', 'ultralight_menu' );

function ultralight_options_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficiente permissions to access this page.' );
	}

	global $plugin_url;
	global $options;

	if ( isset( $_POST['form_submitted'] ) ) {
		$hidden_field = esc_html( $_POST['form_submitted'] );
		if ( 'Y' === $hidden_field ) {
			$options['facebook'] = $_POST['facebook'];
			$options['twitter'] = $_POST['twitter'];
			$options['google'] = $_POST['google'];
			$options['tumblr'] = $_POST['tumblr'];
			$options['email'] = $_POST['email'];
			$options['pinterest'] = $_POST['pinterest'];
			$options['linkedin'] = $_POST['linkedin'];
			$options['reddit'] = $_POST['reddit'];
			$options['xing'] = $_POST['xing'];
			$options['whatsapp'] = $_POST['whatsapp'];
			$options['hacker'] = $_POST['hacker'];
			$options['vk'] = $_POST['vk'];
			$options['telegram'] = $_POST['telegram'];
			$options['position'] = $_POST['position'];
			update_option( 'ultralight_options', $options );
		}
	}

	$options = get_option( 'ultralight_options' );
	if ( '$options' != '' ) {
		var_dump( $options );
	}

	require( 'includes/options-page-wrapper.php' );
}

function ultralight_set_defaults() {
	$options['facebook'] = '1';
	$options['twitter'] = '1';
	$options['google'] = '1';
	$options['linkedin'] = '1';
	$options['tumblr'] = '0';
	$options['email'] = '0';
	$options['pinterest'] = '0';
	$options['reddit'] = '0';
	$options['xing'] = '0';
	$options['whatsapp'] = '0';
	$options['hacker'] = '0';
	$options['vk'] = '0';
	$options['telegram'] = '0';
	$options['position'] = 'top';
	update_option( 'ultralight_options', $options );
}
register_activation_hook( __FILE__, 'ultralight_set_defaults' );

function ultralight_show_buttons_post( $post ) {
	global $content;

	if ( is_single() ) {
		require( 'includes/social-buttons.php' );
	}

	$content .= $post;
	return $content;
}
add_filter( 'the_content', 'ultralight_show_buttons_post' );

function ultralight_enqueue_styles() {
	wp_enqueue_style( 'ultralight_css', plugins_url() . '/ultra-light-social-share-buttons/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ultralight_enqueue_styles' );
