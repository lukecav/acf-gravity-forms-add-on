<?php
/*
Plugin Name: Advanced Custom Fields: Gravity Forms Add-on
Plugin URI: https://github.com/lukecav/acf-gravityforms-add-on
Description: Advanced Custom Field with which we can select Gravity forms.
Version: 1.0
Author: Luke Cavanagh
Author URI: https://github.com/lukecav/
*/

if (!defined('ABSPATH')) {
	exit;
} // Exit if accessed directly

// Define multiple necessary constants
define('ACF_GF_FIELD_VERSION', 1.0);
define('ACF_GF_FIELD_TEXTDOMAIN', 'acf-gravity-forms-add-on');
define('ACF_GF_FIELD_LANGUAGES', dirname(plugin_basename(__FILE__)) . '/languages/');

define('ACF_GF_FIELD_ASSETS', plugin_dir_url(__FILE__));
define('ACF_GF_FIELD_RESOURCES', __DIR__ . '/resources/');

// Use composer to autoload our classes
require_once __DIR__ . '/vendor/autoload.php';

// Initiate the field!
new ACFGravityformsField\Init();


////Added to check if Gravity Forms is installed on activation.
//function gff_activate() {
//
//    if (class_exists('RGFormsModel')) {
//
//			return true;
//
//		}	else {
//
//			$html = '<div class="notice notice-error">';
//				$html .= '<p>';
//					$html .= __( 'Warning: Gravity Forms is not installed or activated. This plugin does not function without Gravity Forms!', 'gravityforms-acf-field' );
//				$html .= '</p>';
//			$html .= '</div>';
//			echo $html;
//
//		}
//}
//register_activation_hook( __FILE__, 'gff_activate' );
