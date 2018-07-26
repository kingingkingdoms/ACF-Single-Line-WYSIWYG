<?php
/*
Plugin Name: Millionaire's Digest Single Line WYSIWYG Field (ACF Addon)
Description: Add support for allowing the Advanced Custom Fields Pro Plugin to have a single line WYSIWYG editor.
Version: 1.0.0
Author: K&L (Founder of the Millionaire's Digest)
Author URI: https://millionairedigest.com/
*/

/* Set the text domain */
load_plugin_textdomain( 'acf-single_line_wysiwyg', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 

/* Include field type for ACF5 */
function include_field_types_single_line_wysiwyg( $version ) {
	include_once('acf-single_line_wysiwyg-v5.php');
}
add_action('acf/include_field_types', 'include_field_types_single_line_wysiwyg');

/* Include field type for ACF4 */
function register_fields_single_line_wysiwyg() {
	include_once('acf-single_line_wysiwyg-v4.php');
}
add_action('acf/register_fields', 'register_fields_single_line_wysiwyg');

?>
