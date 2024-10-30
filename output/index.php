<!DOCTYPE html>
<html lang="en">
<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$wpsm_lp_home = unserialize(get_option('wpsm_lp_home'));	
$wpsm_lp_design = unserialize(get_option('wpsm_lp_design'));	
$wpsm_lp_aboutus = unserialize(get_option('wpsm_lp_aboutus'));
$wpsm_lp_seo = unserialize(get_option('wpsm_lp_seo'));
$wpsm_lp_contact = unserialize(get_option('wpsm_lp_contact'));	
?>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="<?php echo $wpsm_lp_seo['wpsm_lp_favicon']; ?>">
	<title><?php echo $wpsm_lp_seo['wpsm_lp_seo_title']; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Josefin+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo WPSM_LP_PLUGIN_URL.'library/css/bootstrap.css'; ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo WPSM_LP_PLUGIN_URL.'library/css/font-awesome/css/font-awesome.min.css' ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo WPSM_LP_PLUGIN_URL.'output/assets/css/jquery.fullPage.css'; ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo WPSM_LP_PLUGIN_URL.'output/assets/css/style.css'; ?>" >
   <style>
   .logo-class
   {
   
	overflow: hidden;
   display: inline-block;
  
   width:100%;
   height:auto;
   }
   .services-icon {
    color: <?php echo $wpsm_lp_design['wpsm_desc_ft_clr'] ?> !important;
	border: 3px SOLID <?php echo $wpsm_lp_design['wpsm_desc_ft_clr'] ?> !important;
   }
   .social li a i {
    color: <?php echo $wpsm_lp_design['wpsm_navigation_content_clr'] ?> !important;
    background: <?php echo $wpsm_lp_design['wpsm_navigation_bg_clr'] ?> !important;
	    
  }
  .navbar-custom .navbar-nav li.active a {
    color: <?php echo $wpsm_lp_design['wpsm_navigation_bg_clr'] ?> !important;
    background: transparent;
}
.navbar-custom .navbar-nav li.active a {
    color: <?php echo $wpsm_lp_design['wpsm_navigation_bg_clr'] ?> !important;
    background: transparent;
}
.navbar-custom .navbar-nav li a {
    color: <?php echo $wpsm_lp_design['wpsm_navigation_bg_clr'] ?> !important ; 
}	
#fp-nav ul li a.active span, .fp-slidesNav ul li a.active span, #fp-nav ul li:hover a.active span, .fp-slidesNav ul li:hover a.active span {
    background: <?php echo $wpsm_lp_design['wpsm_navigation_bg_clr'] ?> !important;
}	
.section-title h1 {
    font-size: <?php echo $wpsm_lp_design['wpsm_headline_ft_size']; ?>px !important;
    font-family: '<?php echo $wpsm_lp_design['wpsm_ft_st'] ?>'  !important;
    color: <?php echo $wpsm_lp_design['wpsm_headeline_ft_clr'] ?> !important; 
	 line-height: 1.4;
  }
  .home-title p {
    color: <?php echo $wpsm_lp_design['wpsm_desc_ft_clr'] ?>;
    font-size: <?php echo $wpsm_lp_design['wpsm_desc_ft_size']; ?>px !important;
    font-family: '<?php echo $wpsm_lp_design['wpsm_ft_st'] ?>'  !important;
	    line-height: 1.4;
}
.section-title p {
    color: <?php echo $wpsm_lp_design['wpsm_desc_ft_clr'] ?>;
    font-size: <?php echo $wpsm_lp_design['wpsm_desc_ft_size']; ?>px !important;
    font-family: '<?php echo $wpsm_lp_design['wpsm_ft_st'] ?>'  !important;
    }
.service-details p {
     color: <?php echo $wpsm_lp_design['wpsm_desc_ft_clr'] ?>;
    font-size: <?php echo $wpsm_lp_design['wpsm_desc_ft_size']; ?>px !important;
    font-family: '<?php echo $wpsm_lp_design['wpsm_ft_st'] ?>'  !important;
}
body {
   
    background-color: <?php echo $wpsm_lp_design['wpsm_lp_bg_clr']; ?> !important;
    overflow-x: hidden !important;
    font-family: '<?php echo $wpsm_lp_design['wpsm_ft_st'] ?>'  !important;
}

#fp-nav ul li a span, .fp-slidesNav ul li a span {
    background: <?php echo $wpsm_lp_design['wpsm_navigation_bg_clr'] ?> !important;
}

.social-profile-ul li {
    display: inline-block;
    font-size: 20px;
    margin: 10px;
    margin-right: 25px;
	    min-width: 200px;
}
.social-profile-ul{
	text-align:center;
	margin-left: 0px;
    padding: 0px;
	padding-top:20px;
	padding-bottom:20px;
}
<?php echo $wpsm_lp_design['wpsm_lp_custom_css']; ?>

   </style>
   <?php echo $wpsm_lp_seo['wpsm_lp_seo_analytiso']; ?>
   
  </head>

<body <?php if($wpsm_lp_design['wpsm_lp_select_bg'] == "1") { ?> class="image-background" bg-image="<?php echo $wpsm_lp_design['wpsm_lp_bg_img'] ?>" <?php } else { ?> class="color-background" background-color="<?php echo $wpsm_lp_design['wpsm_lp_bg_clr']; ?>" <?php } ?> >
 <div id="preloader">
        <div id="status">
          <div class="spinner">
            Loading...
          </div>
        </div>
      </div>
    <div class="background"></div>
    <header class="header">
      <nav class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<?php if($wpsm_lp_home['display_logo'] == "0") {?>
            <a class="navbar-brand logo" href="index_2.html"><img class="logo-class" src="<?php echo $wpsm_lp_home['lp_logo_url']; ?>"></a>
			<?php } ?>
		  </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="menu">
              <li class="active" data-menuanchor="1stPage"><a href="#1stPage" class="active"><i class="fa fa-home"></i></a></li>
             
              <li data-menuanchor="5thPage"><a href="#5thPage"><i class="fa fa-info"></i></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <div id="fullpage">

      <div class="section home image-background" id="section0">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="home-title section-title">
               <h1 class="text-center"><?php echo $wpsm_lp_home['lp_headline']; ?></h1>
                 <p class="text-center"><?php echo $wpsm_lp_home['lp_description']; ?></p>
               
              </div>
            </div><!--End-col-->
          </div><!--End-row-->
        </div><!--End-container-->
      </div><!-- End section -->

	<div class="section" id="section4">
        <div class="container">
          <div class="common-container contact-container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">

                <div class="contact-section section-title">
                  <h1 class="text-center"><?php echo $wpsm_lp_contact['wpsm_lp_getintouch']; ?></h1>
                  </div>
              </div><!-- End col-->
            </div><!-- End row -->

            <div class="row"> 
              <div class="col-md-10 col-md-offset-1">
				<ul class="social-profile-ul">
					<?php if($wpsm_lp_contact['wpsm_lp_address']!=""){ ?>
						<li>
						  <div class="service-details">
							<div class="services-icon">
							  <i class="fa fa-map-marker"></i>
							</div>
							<p class="center"><?php echo $wpsm_lp_contact['wpsm_lp_address']; ?></p>
						  </div>
						</li>
					<?php } ?>
					<?php if($wpsm_lp_contact['wpsm_lp_no']!=""){ ?>
						<li>
						  <div class="service-details">
							<div class="services-icon">
							  <i class="fa fa-phone"></i>
							</div>
							<p class="center"><?php echo $wpsm_lp_contact['wpsm_lp_no']; ?></p>
						  </div>
						</li>
					<?php } ?>
					<?php if($wpsm_lp_contact['wpsm_lp_email']!=""){ ?>	
						<li>
						  <div class="service-details">
							<div class="services-icon">
							  <i class="fa fa-envelope-o"></i>
							</div>
							<p class="center"><?php echo $wpsm_lp_contact['wpsm_lp_email']; ?></p>
						  </div>
						</li>
					<?php } ?>
					</ul>
              </div>
            </div><!--End row-->
          </div><!-- End common -->
        </div><!-- End container -->
      </div><!-- End section -->
      

    </div> <!-- End fullpage -->

      <footer class="footer onstart animated" data-animation="fadeInUp" data-animation-delay="800">
        <nav class="social text-center">
          <ul>
            <?php if($wpsm_lp_aboutus['wpsm_lp_fb']!="") { ?>
				<li><a href="<?php echo $wpsm_lp_aboutus['wpsm_lp_fb']; ?>" target="_blank" class="social-link "><i class="fa fa-facebook"></i></a></li>
            <?php }  if($wpsm_lp_aboutus['wpsm_lp_twit']!="") { ?>
				<li><a href="<?php echo $wpsm_lp_aboutus['wpsm_lp_twit']; ?>" target="_blank" class="social-link "><i class="fa fa-twitter"></i></a></li>
			<?php }  if($wpsm_lp_aboutus['wpsm_lp_yt']!="") { ?>	
				<li><a href="<?php echo $wpsm_lp_aboutus['wpsm_lp_yt']; ?>" target="_blank" class="social-link "><i class="fa fa-youtube-play"></i></a></li>
			<?php } ?>
          </ul>
        </nav>

       
      </footer>
	<?php 	
		$output ="";
		$output .= "<!-- JS -->\n";
		$include_url = includes_url();
		$last = $include_url[strlen( $include_url )-1];
		if ( $last != '/' ) {
			$include_url = $include_url . '/';
		}
		echo $output .= '<script src="'.$include_url.'js/jquery/jquery.js"></script>'."\n"; 
		?>

    <!-- Js placed at the end of the document so the pages load faster -->
   
	<script type="text/javascript" src="<?php echo WPSM_LP_PLUGIN_URL.'library/js/bootstrap.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo WPSM_LP_PLUGIN_URL.'output/assets/js/jquery.backstretch.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo WPSM_LP_PLUGIN_URL.'output/assets/js/jquery.easings.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo WPSM_LP_PLUGIN_URL.'output/assets/js/jquery.fullPage.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo WPSM_LP_PLUGIN_URL.'output/assets/js/custom.js'; ?>"></script>
	

</body>

</html>