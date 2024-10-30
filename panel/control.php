<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="wpsm-rw-warpper">
	
	<style>
	#TB_ajaxContent{
			width:100% !important;
		}
	#TB_window {
		height: auto !important;
		width:98% !important;
		margin-left: 10px!important;
		left: 10px;
	}
	#TB_iframeContent{
		width:100% !important;
	}
</style>
	
   <div class="row">
        <div class="col-md-9">
             
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1"  role="tab" data-toggle="tab"><i class="fa fa-home"></i>Dashboard</a></li>
                    <li role="presentation"><a href="#Section2"  role="tab" data-toggle="tab"><i class="fa fa-globe"></i>Seo</a></li>
                    <li role="presentation"><a href="#Section3"  role="tab" data-toggle="tab"><i class="fa fa fa-paint-brush"></i>Design</a></li>
                    <li role="presentation"><a href="#Section4" role="tab" data-toggle="tab"><i class="fa fa fa-twitter"></i>Social</a></li>
                    <li role="presentation"><a href="#Section5"  data-toggle="tab"><i class="fa fa-envelope-o"></i>Contact Info</a></li>
                    <li role="presentation"><a href="#Section6"  data-toggle="tab"><i class="fa fa-shopping-cart"></i>Pro Screenshot</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div  class="tab-pane active" id="Section1">
                        <?php require_once('pages/home.php'); ?>
                    </div>
					 <div  class="tab-pane " id="Section2">
                        <?php require_once('pages/seo.php'); ?>
                    </div>
					 <div  class="tab-pane " id="Section3">
                        <?php require_once('pages/design.php'); ?>
                    </div>
					 <div  class="tab-pane " id="Section4">
                       <?php require_once('pages/social.php'); ?>
                    </div>
					<div  class="tab-pane " id="Section5">
                        <?php require_once('pages/contact.php'); ?>
                    </div>
					<div  class="tab-pane " id="Section6">
                        <?php require_once('pages/pro.php'); ?>
                    </div>
                   
                </div>
        </div>
		<div class="col-md-3 wpsm_lp_sidebar">
			<?php require_once('sidebar.php'); ?>
		</div>
    </div>
   
<?php require_once('pages/preview.php'); ?>
	 <div class="wpsm_loding_image" id="wpsm_loding_image"></div>
	<button data-dialog="somedialog" class="dialog-button" style="display:none;">Open Dialog</button>
	<div id="somedialog" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong></strong><?php _e('Setting Saved Successfully','WPSM_LP_TEXT_DOMAIN'); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button" ><?php _e('Close','');?></button></div>
			</div>
		</div>
	</div>
<?php require_once('fs.php'); ?>
	
	<a href="https://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">	
				<img src="<?php echo WPSM_LP_PLUGIN_URL.'library/img/temp.jpg'; ?>" style="width:100%;height:auto"  />
				</a>
	
	
</div>