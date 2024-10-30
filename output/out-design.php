<?php
add_action( 'admin_notices', 'wpsm_lp_review' );
function wpsm_lp_review() {

	// Verify that we can do a check for reviews.
	$review = get_option( 'wpsm_lp_review' );
	$time	= time();
	$load	= false;
	if ( ! $review ) {
		$review = array(
			'time' 		=> $time,
			'dismissed' => false
		);
		add_option('wpsm_lp_review', $review);
		//$load = true;
	} else {
		// Check if it has been dismissed or not.
		if ( (isset( $review['dismissed'] ) && ! $review['dismissed']) && (isset( $review['time'] ) && (($review['time'] + (DAY_IN_SECONDS * 2)) <= $time)) ) {
			$load = true;
		}
	}
	// If we cannot load, return early.
	if ( ! $load ) {
		return;
	}

	// We have a candidate! Output a review message.
	?>
	<div class="notice notice-info is-dismissible wpsm-lp-review-notice">
		<div style="float:left;margin-right:10px;margin-bottom:5px;">
			<img style="width:100%;width: 150px;height: auto;" src="<?php echo WPSM_LP_PLUGIN_URL.'library/img/icon-show.png'; ?>" />
		</div>
		<p style="font-size:18px;">'Hi! We saw you have been using <strong>Landing Page</strong> for a few days and wanted to ask for your help to <strong>make the plugin better</strong>.We just need a minute of your time to rate the plugin. Thank you!</p>
		<p style="font-size:18px;"><strong><?php _e( '~ wpshopmart', '' ); ?></strong></p>
		<p style="font-size:19px;"> 
			<a style="color: #fff;background: #ef4238;padding: 5px 7px 4px 6px;border-radius: 4px;" href="https://wordpress.org/support/plugin/landing-page-wp/reviews/?filter=5#new-post" class="wpsm-lp-dismiss-review-notice wpsm-lp-review-out" target="_blank" rel="noopener">Rate the plugin</a>&nbsp; &nbsp;
			<a style="color: #fff;background: #27d63c;padding: 5px 7px 4px 6px;border-radius: 4px;" href="#"  class="wpsm-lp-dismiss-review-notice wpsm-rate-later" target="_self" rel="noopener"><?php _e( 'Nope, maybe later', '' ); ?></a>&nbsp; &nbsp;
			<a style="color: #fff;background: #31a3dd;padding: 5px 7px 4px 6px;border-radius: 4px;" href="#" class="wpsm-lp-dismiss-review-notice wpsm-rated" target="_self" rel="noopener"><?php _e( 'I already did', '' ); ?></a>
		</p>
	</div>
	<script type="text/javascript">
		jQuery(document).ready( function($) {
			$(document).on('click', '.wpsm-lp-dismiss-review-notice, .wpsm-lp-dismiss-notice .notice-dismiss', function( event ) {
				if ( $(this).hasClass('wpsm-lp-review-out') ) {
					var wpsm_rate_data_val = "1";
				}
				if ( $(this).hasClass('wpsm-rate-later') ) {
					var wpsm_rate_data_val =  "2";
					event.preventDefault();
				}
				if ( $(this).hasClass('wpsm-rated') ) {
					var wpsm_rate_data_val =  "3";
					event.preventDefault();
				}

				$.post( ajaxurl, {
					action: 'wpsm_lp_dismiss_review',
					wpsm_rate_data_lp : wpsm_rate_data_val
				});
				
				$('.wpsm-lp-review-notice').hide();
				//location.reload();
			});
		});
	</script>
	<?php
}

add_action( 'wp_ajax_wpsm_lp_dismiss_review', 'wpsm_lp_dismiss_review' );
function wpsm_lp_dismiss_review() {
	if ( ! $review ) {
		$review = array();
	}
	
	if($_POST['wpsm_rate_data_lp']=="1"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		
	}
	if($_POST['wpsm_rate_data_lp']=="2"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		
	}
	if($_POST['wpsm_rate_data_lp']=="3"){
		$review['time'] 	 = time();
		$review['dismissed'] = true;
		
	}
	update_option( 'wpsm_lp_review', $review );
	die;
}
?>