<?php
/**
 * Plugin Name: Landing Page  
 * Version: 1.1.8
 * Description: Landing page wp manage your wordpress site and display a one page content while your website under maintenance mode , Coming Soon or under construction with redirect mode .   
 * Author: wpshopmart
 * Author URI: https://www.wpshopmart.com
 * Plugin URI: https://wpshopmart.com/plugins/coming-soon-pro/
 */
 if ( ! defined( 'ABSPATH' ) ) exit;
define("WPSM_LP_TEXT_DOMAIN","WPSM_LP_lang" );
define("WPSM_LP_PLUGIN_URL", plugin_dir_url(__FILE__));

add_action('plugins_loaded', 'wpsm_lp_language_translation');
function wpsm_lp_language_translation() {
	load_plugin_textdomain( WPSM_LP_TEXT_DOMAIN, FALSE, dirname( plugin_basename(__FILE__)).'/library/languages/' );
}
add_action('admin_menu','wpsm_lp_sidebar_panel_menu');
function wpsm_lp_sidebar_panel_menu()
{
    $menu = add_menu_page('Landing Page', 'Landing Page','administrator', 'wpsm_lp','wpsm_lp_control','dashicons-media-text');
	add_action( 'admin_print_styles-' . $menu, 'wpsm_lp_panel_script' );
}
require_once('library/script.php');

function wpsm_lp_control(){
	require_once('panel/control.php');
}

function wpsm_lp_launch()
{
	$wpsm_lp_home = unserialize(get_option('wpsm_lp_home'));	
	$wp_lp_status = $wpsm_lp_home['wp_lp_status'];
		$redirect_url = $wpsm_lp_home['lp_redirecturl'];
	if($wp_lp_status=="1")
	{	
		// Exit if a custom login page
		if(preg_match("/login|admin|dashboard|account/i",$_SERVER['REQUEST_URI']) > 0 ){
			return false;
		}
		
		// Check if user is logged in.
		if (!is_user_logged_in())
		{
			$file = plugin_dir_path( __FILE__ )."output/index.php";
			include($file);
			exit();
		}
		else{
			
			//get logined in user role
			$wp_get_current_user =  wp_get_current_user();
			$LoggedInUserID = $wp_get_current_user->ID;
			$UserData = get_userdata( $LoggedInUserID );
			//if user role not 'administrator' then redirect page 
			if($UserData->roles[0] != "administrator")
			{
				$file = plugin_dir_path( __FILE__ )."output/index.php";
				include($file);
				exit();
			}
			
		}
	}
	if($wp_lp_status=="2"){
	
		header("Location:$redirect_url");
		exit();
	}
		
}
add_action( 'template_redirect', 'wpsm_lp_launch' );

//Live Preview code
if (  (isset($_GET['ls_mode_preview']) && $_GET['ls_mode_preview'] == 'true') )
{ 	
	
	$file = plugin_dir_path( __FILE__ )."output/index.php";
	include($file);
	exit();
}

add_action('admin_bar_menu', 'wpsm_lp_admin_bar_button', 1000);
function wpsm_lp_admin_bar_button()
{
	
	global $wp_admin_bar;
	$wpsm_lp_home = unserialize(get_option('wpsm_lp_home'));	
	$wp_lp_status = $wpsm_lp_home['wp_lp_status'];
	if($wp_lp_status=='0') return;
	$msg = __('Site Offline Mode Active','');
	// Add Parent Menu
	$argsParent=array(
		'id' => 'myCustomMenu',
		'title' => $msg,
		'parent' => 'top-secondary',
		'href' => '?page=wpsm_laaniding_page_so',
		'meta'   => array( 'class' => 'wpsm_lp_admin_bar_button_ls' ),
	);
	$wp_admin_bar->add_menu($argsParent);
	?>
	<style>
		.wpsm_lp_admin_bar_button_ls a{
			background: #916194 !important;
			color: #fff !important;
		}
		.wpsm_lp_admin_bar_button_ls a:hover{
			background: #916194 !important;
			color: #fff !important;
		}

	</style>
	<?php
   
}
require('output/out-design.php');

###	Default Data  ###
register_activation_hook( __FILE__, 'wpsm_lp_dd' );
function wpsm_lp_dd()
{
	include('functions/default-data.php');
}

?>