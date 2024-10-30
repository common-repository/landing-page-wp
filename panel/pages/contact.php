<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$wpsm_lp_contact = unserialize(get_option('wpsm_lp_contact'));	
?>
<table class="form-table">
		<tr>
		<th><?php _e('Contact Info Section Title','WPSM_LP_TEXT_DOMAIN'); ?></th>
		<td>
					<input type="text" class="pro_text" id="wpsm_lp_getintouch" name="wpsm_lp_getintouch" placeholder="<?php _e('Enter your Contact Info Section Title Here','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_contact['wpsm_lp_getintouch']; ?>" />
				
			</td>
		</tr>
		
		<tr>
			<th><?php _e('Address','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
					
				
				<input type="text" class="pro_text" id="wpsm_lp_address" name="wpsm_lp_address" placeholder="<?php _e('Enter your Address','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_contact['wpsm_lp_address']; ?>" />
							
								
			</td>
		</tr>
		
		<tr>
			<th><?php _e('Contact No.','WPSM_LP_TEXT_DOMAIN'); ?></th>
			<td>
				<input type="text" class="pro_text" id="wpsm_lp_no" name="wpsm_lp_no" placeholder="<?php _e('Enter your contact No.','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_contact['wpsm_lp_no']; ?>" />
							
			</td>
			
		</tr>
		
		
		<tr>
			<th><?php _e('Email Address','WPSM_LP_TEXT_DOMAIN'); ?></th>
			<td>
				<input type="text" class="pro_text" id="wpsm_lp_email" name="wpsm_lp_email" placeholder="<?php _e('Enter your contact email','WPSM_LP_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_lp_contact['wpsm_lp_email']; ?>" />
			</td>
		</tr>
		
		
		
</table>

