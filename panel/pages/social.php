<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$wpsm_lp_aboutus = unserialize(get_option('wpsm_lp_aboutus'));	
?>
<table class="form-table">
				
		<tr>
			<th><?php _e('Facbook','WPSM_LP_TEXT_DOMAIN'); ?></th>
			<td>
				<input type="text" class="pro_text" id="wpsm_lp_fb" name="wpsm_lp_fb" placeholder="<?php _e('Enter Facebook profile url','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_aboutus['wpsm_lp_fb']; ?>" />
				<span style="color: #8e8e8e;"> Note : enter complete profile url with "http://" example  : https://www.facebook.com/sahufb/</span>		
								
			</td>
		</tr>
		
		<tr>
			<th><?php _e('Twitter','WPSM_LP_TEXT_DOMAIN'); ?></th>
			<td>
					
				
				<input type="text" class="pro_text" id="wpsm_lp_twit" name="wpsm_lp_twit" placeholder="<?php _e('Enter Twitter profile url','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_aboutus['wpsm_lp_twit']; ?>" />
				<span style="color: #8e8e8e;">Note : enter complete profile url with "http://" example  :https://twitter.com/sahu1</span>			
								
			</td>
		</tr>
		
		
		
		
		<tr>
			<th> <?php _e('YouTube','WPSM_LP_TEXT_DOMAIN'); ?></th>
			<td>
					
				
				<input type="text" class="pro_text" id="wpsm_lp_yt" name="wpsm_lp_yt" placeholder="<?php _e('Enter YouTube profile url ','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_aboutus['wpsm_lp_yt']; ?>" />
				<span style="color: #8e8e8e;">Note : enter complete profile url with "http://" </span>			
								
			</td>
		</tr>
		
		
</table>
