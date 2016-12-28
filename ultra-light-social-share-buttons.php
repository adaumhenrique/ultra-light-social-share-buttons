<?php
/*
 * Plugin Name: Ultra Light Social Share Buttons
 * Plugin URI: https://github.com/adaumhenrique/ultra-light-social-share-buttons
 * Description: Displays social share buttons on your posts. No JavaScript required, no images required, this plugin uses SVG.
 * Version: 1.0
 * Author: Adam Silva
 * Author URI: http://www.f5themes.com
 * License GPLv3
 */


$options = array();

function ultralight_menu() {
	add_options_page(
		'Ultra Light Social Share Buttons',
		'Ultra Light Social',
		'manage_options',
		'ultralight_fields',
		'ultralight_options_page'
	);
}
add_action( 'admin_menu', 'ultralight_menu' );

function ultralight_options_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficiente permissions to access this page.' );
	}

	require_once( 'includes/options-page-wrapper.php' );
}

function ultralight_setup_sections() {
	add_settings_section( 'ultralight_display_section', 'Display Position', 'ultralight_section_callback', 'ultralight_fields' );
	add_settings_section( 'ultralight_buttons_section', 'Disable / Enable Social Buttons', 'ultralight_section_callback', 'ultralight_fields' );
}
add_action( 'admin_init', 'ultralight_setup_sections' );

function ultralight_section_callback( $arguments ) {
	switch( $arguments['id'] ){
		case 'ultralight_display_section':
			esc_attr_e( 'Choose in which place of the blog post you want to display the social share buttons', 'wp_admin_style' );
			break;
		case 'ultralight_buttons_section':
			echo 'Choose which social share buttons you want to display on your blog posts';
			break;
	}
}

function ultralight_setup_fields() {
	$fields = array(
		array(
			'uid' => 'ultralight_position',
			'label' => 'Buttons Position',
			'section' => 'ultralight_display_section',
			'type' => 'radio',
			'options' => array(
				'top' => 'Top',
				'bot' => 'Bottom',
				'both' => 'Both',
			),
			'default' => array(),
		),
		array(
			'uid' => 'ultralight_buttons',
			'label' => 'Social Buttons',
			'section' => 'ultralight_buttons_section',
			'type' => 'checkbox',
			'options' => array(
				'facebook' => 'Facebook',
				'twitter' => 'Twitter',
				'google' => 'Google+',
				'linkedin' => 'Linkedin',
				'tumblr' => 'Tumblr',
				'email' => 'Email',
				'pinterest' => 'Pinterest',
				'reddit' => 'Reddit',
				'xing' => 'Xing',
				'whatsapp' => 'Whatsapp',
				'vk' => 'Vk',
				'telegram' => 'Telegram',
			),
			'default' => array(),
		),
	);
	foreach ( $fields as $field ) {
		add_settings_field( $field['uid'], $field['label'], 'ultralight_field_callback', 'ultralight_fields', $field['section'], $field );
		register_setting( 'ultralight_fields', $field['uid'] );
	}
}
add_action( 'admin_init', 'ultralight_setup_fields' );

function ultralight_field_callback( $arguments ) {
	$value = get_option( $arguments['uid'] );
	if ( ! $value ) {
		$value = $arguments['default'];
	}
	switch ( $arguments['type'] ) {
		case 'radio':
		case 'checkbox':
			if ( ! empty( $arguments['options'] ) && is_array( $arguments['options'] ) ) {
				$options_markup = '';
				$iterator = 0;
				foreach ( $arguments['options'] as $key => $label ) {
					$iterator++;
					$options_markup .= sprintf( '<label for="%1$s_%6$s"><input id="%1$s_%6$s" name="%1$s[]" type="%2$s" value="%3$s" %4$s /> %5$s</label><br/>', $arguments['uid'], $arguments['type'], $key, checked( $value[ array_search( $key, $value, true ) ], $key, false ), $label, $iterator );
				}
				printf( '<fieldset>%s</fieldset>', $options_markup );
			}
			break;
	}
}

function ultralight_set_defaults() {
	$buttons[0] = 'facebook';
	$buttons[1] = 'twitter';
	$buttons[2] = 'google';
	$buttons[3] = 'linkedin';
	update_option( 'ultralight_buttons', $buttons );

	$position[0] = 'top';
	update_option( 'ultralight_position', $position );
}
register_activation_hook( __FILE__, 'ultralight_set_defaults' );

function ultralight_show_buttons_post( $post ) {
	global $content;

	$buttons = get_option( 'ultralight_buttons' );

	if ( isset( $buttons ) && ! empty( $buttons ) && is_array( $buttons ) ) {

		$post_url = get_the_permalink();
		$post_title = get_the_title();

		if ( is_single() ) {
			require_once( 'includes/social-buttons.php' );
			foreach ( $buttons as $button ) {
				$content .= ultralight_display_buttons( $button, $post_url, $post_title );
			}
		}
	}

	$position = get_option( 'ultralight_position' );

	switch ( $position[0] ) {
		case 'top' :
			return $content . $post;
		break;
		case 'bot' :
			return $post . $content;
		break;
		case 'both' :
			return $content . $post . $content;
		break;
	}
}
add_filter( 'the_content', 'ultralight_show_buttons_post' );

function ultralight_enqueue_styles() {
	wp_enqueue_style( 'ultralight_css', plugins_url() . '/ultra-light-social-share-buttons/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ultralight_enqueue_styles' );
