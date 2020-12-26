<?php
/**
 * Biodata functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Biodata
 */

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Define Const for theme Dir
 * @since 1.0.0
 * */
define('BIODATA_ROOT_PATH',get_template_directory());
define('BIODATA_ROOT_URL',get_template_directory_uri());
define('BIODATA_CSS',BIODATA_ROOT_URL .'/assets/css');
define('BIODATA_JS',BIODATA_ROOT_URL .'/assets/js');
define('BIODATA_IMG',BIODATA_ROOT_URL .'/assets/images');
define('BIODATA_INC',BIODATA_ROOT_PATH .'/inc');
define('BIODATA_THEME_OPTIONS',BIODATA_INC .'/theme-options');
define('BIODATA_THEME_OPTIONS_IMG',BIODATA_ROOT_URL .'/inc/theme-options/img');

/*
 * include template helper function
 * @since 1.0.0 */

if (file_exists(BIODATA_INC.'/template-functions.php') && BIODATA_INC.'/template-tags.php'){
	require_once  BIODATA_INC.'/template-functions.php';
	require_once  BIODATA_INC.'/template-tags.php';
	require_once  BIODATA_INC.'/class-biodata-init.php';

	if (!function_exists('BioData_Function')){
		function BioData_Function($instance){
			$new_instance = false;
			switch ($instance){
				case ("Functions"):
					$new_instance = class_exists('BioData_Function') ? BioData_Functions::getInstance() : false;
					break;
				case ("Tags"):
					$new_instance = class_exists('BioData_Tags') ? BioData_Tags::getInstance() : false;
					break;
				default:
					$new_instance = false;
					break;
			}

			return $new_instance;
		}
	}

}
