<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$wpsm_lp_design = unserialize(get_option('wpsm_lp_design'));	
?>
<Script>
	// Title Font Size Slider	
	jQuery(function() {
		jQuery( "#button-size-slider3" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 120,
			min:10,
			slide: function( event, ui ) {
			jQuery( "#wpsm_headline_ft_size" ).val( ui.value );
			}
		});
			
		jQuery( "#button-size-slider3" ).slider("value",<?php if($wpsm_lp_design['wpsm_headline_ft_size']!=""){ echo  $wpsm_lp_design['wpsm_headline_ft_size']; } else { echo "18"; }?>  );
		jQuery( "#wpsm_headline_ft_size" ).val( jQuery( "#button-size-slider3" ).slider( "value") );

	});
</script>

<Script>
	//Description Fonts Size Slider
	jQuery(function() {
		jQuery( "#button-size-slider4" ).slider({
			orientation: "horizontal",
			range: "min",
			max: 50,
			min:10,
			slide: function( event, ui ) {
			jQuery( "#wpsm_desc_ft_size" ).val( ui.value );
			}
		});

	jQuery( "#button-size-slider4" ).slider("value",<?php if($wpsm_lp_design['wpsm_desc_ft_size']!=""){ echo $wpsm_lp_design['wpsm_desc_ft_size']; } else { echo "16"; }?> );
	jQuery( "#wpsm_desc_ft_size" ).val( jQuery( "#button-size-slider4" ).slider( "value") );

	});
</script>


		<table class="form-table">
			<tr>
				<th><?php _e('Select Background','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
					<span style="margin-bottom:10px;display: block;">
						<input type="radio" name="wpsm_lp_select_bg" value="0" id="wpsm_lp_select_bg" <?php if($wpsm_lp_design['wpsm_lp_select_bg'] == "0") { echo "checked"; } ?> />&nbsp;<?php _e('Color Background','WPSM_LP_TEXT_DOMAIN'); ?><br>
					</span>
					<span>	
						<input type="radio" name="wpsm_lp_select_bg" value="1" id="wpsm_lp_select_bg" <?php if($wpsm_lp_design['wpsm_lp_select_bg'] == "1") { echo "checked"; } ?>  />&nbsp;<?php _e('Image Background','WPSM_LP_TEXT_DOMAIN'); ?><br>
					</span>
				</td>
			</tr>
			
			<tr>
				<th><?php _e('Background Color','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
						
					<input id="wpsm_lp_bg_clr" name="wpsm_lp_bg_clr" type="text" value="<?php echo $wpsm_lp_design['wpsm_lp_bg_clr']; ?>" class="my-color-field" data-default-color="#ffffff" />

				</td>
				
			</tr>
			

			<tr>
				<th><?php _e('Background Image','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
						
						<img src="<?php echo $wpsm_lp_design['wpsm_lp_bg_img'] ?>" class="sahu-csw-admin-img" />
						
						<input type="button" id="upload-background" name="upload-background" value="Upload Image" class="button-primary rcsp_media_upload"  />
						<input type="hidden" id="wpsm_lp_bg_img" name="wpsm_lp_bg_img" class="rcsp_label_text"  value="<?php echo $wpsm_lp_design['wpsm_lp_bg_img'] ?>"  readonly="readonly" placeholder="No Media Selected" />
						
				</td>
			</tr>
			
			<tr>
				<th><?php _e('Headline Color','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
						
					<input id="wpsm_headeline_ft_clr" name="wpsm_headeline_ft_clr" type="text" value="<?php echo $wpsm_lp_design['wpsm_headeline_ft_clr'] ?>" class="my-color-field" data-default-color="#ffffff" />

				</td>
				
			</tr>
			

			<tr>
				<th><?php _e('Description Color','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
						
					<input id="wpsm_desc_ft_clr" name="wpsm_desc_ft_clr" type="text" value="<?php echo $wpsm_lp_design['wpsm_desc_ft_clr'] ?>" class="my-color-field" data-default-color="#ffffff" />

				</td>
			</tr>
			

			
			

			<tr>
				<th><?php _e('Social Profile Color','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
						
					<input id="wpsm_navigation_content_clr" name="wpsm_navigation_content_clr" type="text" value="<?php echo $wpsm_lp_design['wpsm_navigation_content_clr'] ?>" class="my-color-field" data-default-color="#ffffff" />

				</td>
			</tr>
			
			<tr>
				<th><?php _e('Social Profile Background Color or Navigation menu Color','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
						
					<input id="wpsm_navigation_bg_clr" name="wpsm_navigation_bg_clr" type="text" value="<?php echo $wpsm_lp_design['wpsm_navigation_bg_clr'] ?>" class="my-color-field" data-default-color="#ffffff" />

				</td>
			</tr>
					

			<tr>
				<th><?php _e('Heading Font Size','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td class="text-and-color-panel">
					<div id="button-size-slider3" class="size-slider" style="width: 25%;display:inline-block"></div>
					<input type="text" class="range-slider-font" id="wpsm_headline_ft_size" name="wpsm_headline_ft_size"  readonly="readonly">
					<span class="slider-text-span">Px</span>
				</td>
			</tr>
			

			
			<tr>
				<th><?php _e('Content Font Size','WPSM_LP_TEXT_DOMAIN'); ?></th>
				
				<td class="text-and-color-panel">
					<div id="button-size-slider4" class="size-slider" style="width: 25%;display:inline-block"></div>
					<input type="text" class="range-slider-font" id="wpsm_desc_ft_size" name="wpsm_desc_ft_size"  readonly="readonly">
					<span class="slider-text-span">Px</span>
				</td>
			</tr>
			

			<tr>
				<th> <?php _e('Font Family','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<?php $wpsm_ft_st = $wpsm_lp_design['wpsm_ft_st']; ?>

				<td class="text-and-color-panel">
					<label class="sahu-dropdown">
						<select id="wpsm_ft_st" class="sahu-standard-dropdown" name="wpsm_ft_st"  >
							<optgroup label="Default Fonts">
								<option value="Arial"           <?php if($wpsm_ft_st == 'Arial' ) { echo "selected"; } ?>>Arial</option>
								<option value="Arial Black"    <?php if($wpsm_ft_st == 'Arial Black' ) { echo "selected"; } ?>>Arial Black</option>
								<option value="Courier New"     <?php if($wpsm_ft_st == 'Courier New' ) { echo "selected"; } ?>>Courier New</option>
								<option value="Georgia"         <?php if($wpsm_ft_st == 'Georgia' ) { echo "selected"; } ?>>Georgia</option>
								<option value="Grande"          <?php if($wpsm_ft_st == 'Grande' ) { echo "selected"; } ?>>Grande</option>
								<option value="Helvetica" 	<?php if($wpsm_ft_st == 'Helvetica' ) { echo "selected"; } ?>>Helvetica Neue</option>
								<option value="Impact"         <?php if($wpsm_ft_st == 'Impact' ) { echo "selected"; } ?>>Impact</option>
								<option value="Lucida"         <?php if($wpsm_ft_st == 'Lucida' ) { echo "selected"; } ?>>Lucida</option>
								<option value="Lucida Grande"         <?php if($wpsm_ft_st == 'Lucida Grande' ) { echo "selected"; } ?>>Lucida Grande</option>
								<option value="Open Sans"   <?php if($wpsm_ft_st == 'Open Sans' ) { echo "selected"; } ?>>Open Sans</option>
								<option value="OpenSansBold"   <?php if($wpsm_ft_st == 'OpenSansBold' ) { echo "selected"; } ?>>OpenSansBold</option>
								<option value="Palatino Linotype"       <?php if($wpsm_ft_st == 'Palatino Linotype' ) { echo "selected"; } ?>>Palatino</option>
								<option value="Sans"           <?php if($wpsm_ft_st == 'Sans' ) { echo "selected"; } ?>>Sans</option>
								<option value="sans-serif"           <?php if($wpsm_ft_st == 'sans-serif' ) { echo "selected"; } ?>>Sans-Serif</option>
								<option value="Tahoma"         <?php if($wpsm_ft_st == 'Tahoma' ) { echo "selected"; } ?>>Tahoma</option>
								<option value="Times New Roman"          <?php if($wpsm_ft_st == 'Times New Roman' ) { echo "selected"; } ?>>Times New Roman</option>
								<option value="Trebuchet"      <?php if($wpsm_ft_st == 'Trebuchet' ) { echo "selected"; } ?>>Trebuchet</option>
								<option value="Verdana"        <?php if($wpsm_ft_st == 'Verdana' ) { echo "selected"; } ?>>Verdana</option>
							</optgroup>
						</select>
					</label>	
				</td>
				
			</tr>
			
			<tr>
				<th> <?php _e('Custom CSS','WPSM_LP_TEXT_DOMAIN'); ?></th>
				<td>
						<textarea rows="6"  class="pro_text" id="wpsm_lp_custom_css" name="wpsm_lp_custom_css" placeholder="<?php _e('Enter Your custom CSS Here',''); ?>"><?php echo $wpsm_lp_design['wpsm_lp_custom_css']; ?></textarea>
			
				</td>
			</tr>
			
		</table>
	
	