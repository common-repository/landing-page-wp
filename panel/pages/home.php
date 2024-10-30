<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$wpsm_lp_home = unserialize(get_option('wpsm_lp_home'));	
?>

<style>
	
	<?php if($wpsm_lp_home['wp_lp_status']!="2") {?>	
		.pro_text1{
			display:none;
		}
	<?php } ?>	
</style>

<table class="form-table">
	<tr>
		<th><?php _e('Landing Page Status','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
		
			<span style="margin-bottom:10px;display: block;">
				<input type="radio" name="wp_lp_status" value="0" id="wp_lp_status1" onclick="wpsm_enable_lp(this);" <?php if($wpsm_lp_home['wp_lp_status'] == "0") { echo "checked"; } ?>  />&nbsp;<?php _e('Disabled','WPSM_LP_TEXT_DOMAIN'); ?><br>
			</span>
			<span  style="margin-bottom:10px;display: block;">	
				<input type="radio" name="wp_lp_status" value="1" id="wp_lp_status2" onclick="wpsm_enable_lp(this);" <?php if($wpsm_lp_home['wp_lp_status'] == "1") { echo "checked"; } ?>  />&nbsp;<?php _e('Enable Landing Page Mode','WPSM_LP_TEXT_DOMAIN'); ?><br>
			</span>
			<span style="margin-bottom:10px;display: block;">	
				<input type="radio" name="wp_lp_status" value="2" id="wp_lp_status3" onclick="wpsm_enable_lp(this);" <?php if($wpsm_lp_home['wp_lp_status'] == "2") { echo "checked"; } ?>  />&nbsp;<?php _e('Enable Redirect Mode','WPSM_LP_TEXT_DOMAIN'); ?><br>
			</span>
			
			<span>
				<input type="text" class="pro_text1" id="lp_redirecturl" name="lp_redirecturl" placeholder="<?php _e('','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_home['lp_redirecturl']; ?>" />
			</span>
			<br /><br />
			<span class="pro_text1" style="color: #8e8e8e;">Note : Enter Your Redirect url where you want to redirect your website, (Please enter complete url with http:// or with https://) </span>			
				
		</td>
	</tr>
	
	
	
	<tr>
		<th><?php _e('Landing Page Logo','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
			
			<img src="<?php echo $wpsm_lp_home['lp_logo_url']; ?>" class="sahu-csw-admin-img" />
			<input type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload"  />
			<input type="hidden" id="lp_logo_url" name="lp_logo_url" class="rcsp_label_text"  value="<?php echo $wpsm_lp_home['lp_logo_url']; ?>"  readonly="readonly" placeholder="No Media Selected" />
		</td>
	</tr>
	
	
	<tr>
		<th><?php _e('Display Logo','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
			<span style="margin-bottom:10px;display: block;">
				<input type="radio" name="display_logo" value="0" id="display_logo" <?php if($wpsm_lp_home['display_logo'] == "0") { echo "checked"; } ?> />&nbsp;<?php _e('Yes','WPSM_LP_TEXT_DOMAIN'); ?><br>
			</span>
			<span>	
				<input type="radio" name="display_logo" value="1" id="display_logo" <?php if($wpsm_lp_home['display_logo'] == "1") { echo "checked"; } ?>   />&nbsp;<?php _e('No','WPSM_LP_TEXT_DOMAIN'); ?><br>
			</span>
		</td>
	</tr>
	
	<tr>
		<th><?php _e('Landing Page Headline','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
				<input type="text" class="pro_text" id="lp_headline" name="lp_headline" placeholder="<?php _e('Enter Landing Page Title/Headline Here..','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_home['lp_headline']; ?>" />
	
		</td>
	</tr>
	

	<tr>
		<th><?php _e('Landing Page Description','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
				<div id="text_editor_wpsm"> 
				<?php
				
														$content =  $wpsm_lp_home['lp_description'];
                                                        $settings = array(
                                                            'wpautop'       => true,
                                                            
                                                            'textarea_name' => 'lp_description',
                                                            'teeny'         => true
                                                        );

                                                        wp_editor( stripslashes($content), 'lp_description', $settings );
			?>
			
			</div>
			<br />
			<span style="color: #000;"><strong>Note :</strong> All HTML elements are allowed. Shortcodes are not Support here. </span>			
				
		</td>
	</tr>
	
	
	
</table>

<Script>
function wpsm_enable_lp(status){
	if(status.value=='2')
		{
			jQuery(".pro_text1").show(500);
		}
	   else
		{
		  jQuery(".pro_text1").hide(500);
		}
}
</Script>
