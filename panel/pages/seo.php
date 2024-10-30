<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$wpsm_lp_seo = unserialize(get_option('wpsm_lp_seo'));	
?>
<table class="form-table">
							
	<tr>
		<th><?php _e('Favicon Icon','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
				
			<img src="<?php echo $wpsm_lp_seo['wpsm_lp_favicon']; ?>" class="sahu-csw-admin-img" />
			<input type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload"  />
			<input type="hidden" id="wpsm_lp_favicon" name="wpsm_lp_favicon" class="rcsp_label_text"  value="<?php echo $wpsm_lp_seo['wpsm_lp_favicon']; ?>"  readonly="readonly" placeholder="No Media Selected" />

		</td>
	</tr>
	
	
	
	<tr>
		<th><?php _e('SEO Title','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
			<input type="text" class="pro_text" id="wpsm_lp_seo_title" name="wpsm_lp_seo_title" placeholder="<?php _e('Enter Your SEO Title Here...','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_seo['wpsm_lp_seo_title']; ?>" />
	
		</td>
	</tr>
	

	<tr>
		<th><?php _e('Google Analytiso Script','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
			<textarea rows="6"  class="pro_text" id="wpsm_lp_seo_analytiso" name="wpsm_lp_seo_analytiso" placeholder="<?php _e('Enter Your Google Analytiso Script Here','WPSM_LP_TEXT_DOMAIN'); ?>"><?php echo $wpsm_lp_seo['wpsm_lp_seo_analytiso']; ?></textarea>
	
		</td>
	</tr>
	
	
	
</table>


