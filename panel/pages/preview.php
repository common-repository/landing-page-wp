<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<style>
.btn_margin
{
	margin-right:10px;
}
.hyper
{
	color:#fff !important;
}
.bg
{
	background-color: black;
}
.save-button-block{
	background : rgba(0,0,0,0.5) !important;
	margin-bottom:0px !important;
}
.save-button-block .panel-body{
	margin-bottom:0px !important;
}
</style>
	<div class="panel panel-primary save-button-block">
		<div class="panel-body ">
			<div  class="pull-left">
				<button type="button" style="margin-right:10px;" class="btn btn-info btn-lg btn_margin" onclick="lp_save_data_landing()">Save Changes</button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg"><a href="<?php echo home_url(); ?>?ls_mode_preview=true&TB_iframe=true&width=900&height=80" class="thickbox hyper"  ><?php _e('Live Preview','WPSM_LP_TEXT_DOMAIN'); ?></a></button>
				
			</div>
		</div>
		</div>


<script>
function lp_save_data_landing(){
 jQuery("#wpsm_loding_image").show();
 
 
 
 //HOME SETTINGS
 
 var wp_lp_status = jQuery('input:radio[name="wp_lp_status"]:checked').val();
 var lp_redirecturl = jQuery("#lp_redirecturl").val();
 var lp_logo_url = jQuery("#lp_logo_url").val();
 var display_logo = jQuery('input:radio[name="display_logo"]:checked').val();
 var lp_headline = jQuery("#lp_headline").val();
 //var lp_description = jQuery("#lp_description").val();
 
 //alert(tinymce.get('lp_description'));
// console.log(tinymce.get('lp_description').get);
 
   if (jQuery("#wp-lp_description-wrap").hasClass("tmce-active")){
       var lp_description = tinyMCE.activeEditor.getContent();
	    //alert(lp_description);
    }else{
       var lp_description =  jQuery('#lp_description').val();
    }

 //SEO SETTINGS
 var wpsm_lp_favicon = jQuery("#wpsm_lp_favicon").val();
 var wpsm_lp_seo_title = jQuery("#wpsm_lp_seo_title").val();
 var wpsm_lp_seo_analytiso = jQuery("#wpsm_lp_seo_analytiso").val();
 
 //DESIGN SETTINGS
 var wpsm_lp_select_bg = jQuery('input:radio[name="wpsm_lp_select_bg"]:checked').val();
 var wpsm_lp_bg_clr = jQuery("#wpsm_lp_bg_clr").val();
 var wpsm_lp_bg_img = jQuery("#wpsm_lp_bg_img").val();
 var wpsm_headeline_ft_clr = jQuery("#wpsm_headeline_ft_clr").val();
 var wpsm_desc_ft_clr = jQuery("#wpsm_desc_ft_clr").val();
 var wpsm_navigation_bg_clr = jQuery("#wpsm_navigation_bg_clr").val();
 var wpsm_navigation_content_clr = jQuery("#wpsm_navigation_content_clr").val();
 var wpsm_headline_ft_size = jQuery("#wpsm_headline_ft_size").val();
 var wpsm_desc_ft_size = jQuery("#wpsm_desc_ft_size").val();
 var wpsm_lp_custom_css = jQuery("#wpsm_lp_custom_css").val();
 var wpsm_ft_st = jQuery('#wpsm_ft_st option:selected').val();
 
 
 //ABOUT SETTINGS
 var wpsm_lp_fb = jQuery("#wpsm_lp_fb").val();
 var wpsm_lp_twit = jQuery("#wpsm_lp_twit").val();
 var wpsm_lp_yt = jQuery("#wpsm_lp_yt").val();
 
 //CONTACT SETTINGS
 var wpsm_lp_getintouch = jQuery("#wpsm_lp_getintouch").val();
 var wpsm_lp_address = jQuery("#wpsm_lp_address").val();
 var wpsm_lp_no = jQuery("#wpsm_lp_no").val();
 var wpsm_lp_email = jQuery("#wpsm_lp_email").val();
 jQuery("#wpsm_loding_image").show();
 
 	jQuery.ajax(
            {
	    	    type: "POST",
		        url: location.href,
	
		        data : {
			    'action_landing':'wpsm_sop_landing',
				
			    'wp_lp_status':wp_lp_status,
			    'lp_redirecturl':lp_redirecturl,
			    'lp_logo_url':lp_logo_url,
			    'display_logo':display_logo,
			    'lp_headline':lp_headline,
			    'lp_description':lp_description,
				
				'wpsm_lp_favicon':wpsm_lp_favicon,
			    'wpsm_lp_seo_title':wpsm_lp_seo_title,
			    'wpsm_lp_seo_analytiso':wpsm_lp_seo_analytiso,
				
				'wpsm_lp_select_bg':wpsm_lp_select_bg,
			    'wpsm_lp_bg_clr':wpsm_lp_bg_clr,
			    'wpsm_lp_bg_img':wpsm_lp_bg_img,
			    'wpsm_headeline_ft_clr':wpsm_headeline_ft_clr,
			    'wpsm_desc_ft_clr':wpsm_desc_ft_clr,
			    'wpsm_navigation_bg_clr':wpsm_navigation_bg_clr,
			    'wpsm_navigation_content_clr':wpsm_navigation_content_clr,
			    'wpsm_headline_ft_size':wpsm_headline_ft_size,
			    'wpsm_desc_ft_size':wpsm_desc_ft_size,
			    'wpsm_ft_st':wpsm_ft_st,
			    'wpsm_lp_custom_css':wpsm_lp_custom_css,
			   
			
			    'wpsm_lp_fb':wpsm_lp_fb,
			    'wpsm_lp_twit':wpsm_lp_twit,
			    'wpsm_lp_yt':wpsm_lp_yt,
				
				'wpsm_lp_getintouch':wpsm_lp_getintouch,
				'wpsm_lp_address':wpsm_lp_address,
			    'wpsm_lp_no':wpsm_lp_no,
			    'wpsm_lp_email':wpsm_lp_email,
			   
			        },
                success : function(data){
				jQuery("#wpsm_loding_image").fadeOut();	
				jQuery(".dialog-button").click();
			   //location.href='?page=wpsm_landing_wp';
			   jQuery('#myModal').on('shown.bs.modal', function () {
				jQuery('#myInput').focus()
				})
			  
			   }			
            });
 
}
</script>
<?php
if(isset($_POST['action_landing'])=="wpsm_sop_landing") {
$wp_lp_status       = sanitize_option('wp_lp_status', $_POST['wp_lp_status']);
$lp_redirecturl       = stripslashes(sanitize_text_field($_POST['lp_redirecturl']));
$lp_logo_url          = stripslashes(sanitize_text_field($_POST['lp_logo_url']));
$display_logo          = sanitize_option('display_logo', $_POST['display_logo']);
$lp_headline          = sanitize_text_field($_POST['lp_headline']);
$lp_description          = stripslashes($_POST['lp_description']);

$wpsm_lp_favicon          = sanitize_text_field($_POST['wpsm_lp_favicon']);
$wpsm_lp_seo_title        = stripslashes(sanitize_text_field($_POST['wpsm_lp_seo_title']));
$wpsm_lp_seo_analytiso    = stripslashes($_POST['wpsm_lp_seo_analytiso']);

$wpsm_lp_select_bg       = sanitize_option('wpsm_lp_select_bg', $_POST['wpsm_lp_select_bg']);
$wpsm_lp_bg_clr          = sanitize_text_field($_POST['wpsm_lp_bg_clr']);
$wpsm_lp_bg_img          = sanitize_text_field($_POST['wpsm_lp_bg_img']);
$wpsm_headeline_ft_clr          = sanitize_text_field($_POST['wpsm_headeline_ft_clr']);
$wpsm_desc_ft_clr          = sanitize_text_field($_POST['wpsm_desc_ft_clr']);
$wpsm_navigation_bg_clr          = sanitize_text_field($_POST['wpsm_navigation_bg_clr']);
$wpsm_navigation_content_clr          = sanitize_text_field($_POST['wpsm_navigation_content_clr']);
$wpsm_headline_ft_size          = sanitize_text_field($_POST['wpsm_headline_ft_size']);
$wpsm_desc_ft_size          = sanitize_text_field($_POST['wpsm_desc_ft_size']);
$wpsm_ft_st          = sanitize_text_field($_POST['wpsm_ft_st']);
$wpsm_lp_custom_css          = stripslashes($_POST['wpsm_lp_custom_css']);

$wpsm_lp_fb          = sanitize_text_field($_POST['wpsm_lp_fb']);
$wpsm_lp_twit          = sanitize_text_field($_POST['wpsm_lp_twit']);
$wpsm_lp_yt          = sanitize_text_field($_POST['wpsm_lp_yt']);

$wpsm_lp_getintouch          = sanitize_text_field($_POST['wpsm_lp_getintouch']);
$wpsm_lp_address          = sanitize_text_field($_POST['wpsm_lp_address']);
$wpsm_lp_no          = sanitize_text_field($_POST['wpsm_lp_no']);
$wpsm_lp_email          = sanitize_text_field($_POST['wpsm_lp_email']);
			
			
			
	 $home = serialize( array(
	'wp_lp_status' 		   => $wp_lp_status,
	'lp_redirecturl' 		   => $lp_redirecturl,
	'lp_logo_url' 		       => $lp_logo_url,
	'display_logo' 		       => $display_logo,
	'lp_headline' 		       => $lp_headline,
	'lp_description' 		       => $lp_description,
	
	) );

	$seo = serialize( array(
	'wpsm_lp_favicon' 		       => $wpsm_lp_favicon,
	'wpsm_lp_seo_title' 		       => $wpsm_lp_seo_title,
	'wpsm_lp_seo_analytiso' 		       => $wpsm_lp_seo_analytiso,
	) );
	
	$design = serialize( array(
	'wpsm_lp_select_bg' 		       => $wpsm_lp_select_bg,
	'wpsm_lp_bg_clr' 		       => $wpsm_lp_bg_clr,
	'wpsm_lp_bg_img' 		       => $wpsm_lp_bg_img,
	'wpsm_headeline_ft_clr' 		       => $wpsm_headeline_ft_clr,
	'wpsm_desc_ft_clr' 		       => $wpsm_desc_ft_clr,
	'wpsm_navigation_bg_clr' 		       => $wpsm_navigation_bg_clr,
	'wpsm_navigation_content_clr' 		       => $wpsm_navigation_content_clr,
	'wpsm_headline_ft_size' 		       => $wpsm_headline_ft_size,
	'wpsm_desc_ft_size' 		       => $wpsm_desc_ft_size,
	'wpsm_ft_st' 		       => $wpsm_ft_st,
	'wpsm_lp_custom_css' 		       => $wpsm_lp_custom_css,
	
	) );
	
	$social = serialize( array(
	'wpsm_lp_fb' 		       => $wpsm_lp_fb,
	'wpsm_lp_twit' 		       => $wpsm_lp_twit,
	'wpsm_lp_yt' 		       => $wpsm_lp_yt,
	
	) );
	
	$contact = serialize( array(
	'wpsm_lp_getintouch' 		       => $wpsm_lp_getintouch,
	'wpsm_lp_address' 		       => $wpsm_lp_address,
	'wpsm_lp_no' 		       => $wpsm_lp_no,
	'wpsm_lp_email'    		   => $wpsm_lp_email,
	
	) );	
				
   
update_option('wpsm_lp_home', $home);
update_option('wpsm_lp_seo', $seo);
update_option('wpsm_lp_design', $design);
update_option('wpsm_lp_aboutus', $social);
update_option('wpsm_lp_contact', $contact);
}
 ?>