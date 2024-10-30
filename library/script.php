<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
function wpsm_lp_panel_script()
{
	wp_enqueue_script('theme-preview');
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('wpsm_rw-bootstrap_css', WPSM_LP_PLUGIN_URL.'library/css/bootstrap.css');
	wp_enqueue_style('wpsm_rw-font-awesome_min', WPSM_LP_PLUGIN_URL.'library/css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('wpsm_rw-rcsp_jquery-ui', WPSM_LP_PLUGIN_URL.'library/css/jquery-ui.css');
	wp_enqueue_style('wpsm_rw-backend', WPSM_LP_PLUGIN_URL.'library/css/backend.css');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script('wpsm_lp-media-uploads',WPSM_LP_PLUGIN_URL.'library/js/media-upload-script.js',array('media-upload','thickbox','jquery'));
	wp_enqueue_script('wpsm_lp-time-picker', WPSM_LP_PLUGIN_URL.'library/js/jquery-ui-timepicker.js',array('jquery','jquery-ui-datepicker'));
	wp_enqueue_script('wpsm_lp-my-color-picker-script', WPSM_LP_PLUGIN_URL.'library/js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	wp_enqueue_script('wpsm_lp-bootstrap_min_js',WPSM_LP_PLUGIN_URL.'library/js/bootstrap.min.js');
	
	//dailog js css
	wp_enqueue_style('wpsm_lp-dialog', WPSM_LP_PLUGIN_URL.'library/css/dialog/dialog.css');
	wp_enqueue_style('wpsm_lp-dialog-box-style', WPSM_LP_PLUGIN_URL.'library/css/dialog/dialog-box-style.css');
	wp_enqueue_style('wpsm_lp-dialog-wilma', WPSM_LP_PLUGIN_URL.'library/css/dialog/dialog-jamie.css');
	
	wp_enqueue_script('wpsm_lp-rcsp-validator-js',WPSM_LP_PLUGIN_URL.'library/js/validator.js');
	wp_enqueue_script('wpsm_lp-snap-svg-min',WPSM_LP_PLUGIN_URL.'library/js/dialog/snap.svg-min.js');
	wp_enqueue_script('wpsm_lp-modernizr-custom',WPSM_LP_PLUGIN_URL.'library/js/dialog/modernizr.custom.js');
	wp_enqueue_script('wpsm_lp-classie',WPSM_LP_PLUGIN_URL.'library/js/dialog/classie.js');
	wp_enqueue_script('wpsm_lp-dialogFx',WPSM_LP_PLUGIN_URL.'library/js/dialog/dialogFx.js'); 
	
}
?>