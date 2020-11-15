<?php Global $fdata; 
$time= time();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="yes" name="apple-mobile-web-app-capable"/>
		<meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
		<?php if($fdata['favicon-logo']['url']){
			echo '<link rel="shortcut icon" type="image/x-icon" href="'.$fdata['favicon-logo']['url'].'">';
			echo '<link rel="icon" type="image/x-icon" href="'.$fdata['favicon-logo']['url'].'">';
		} ?>
		<title><?php bloginfo('name');echo ' | '; echo the_title(); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/home-styles/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/home-styles/dist/assets/owl.carousel.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/home-styles/style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/home-styles/animate.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/home-styles/aos.css"/>
	</head>
	<body <?php body_class();?>  id="body">
	<header class="header">
		<!-- main-header -->
			<div class="main-header fixed-enabled">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 align-self-center header-col">		
						<?php if($fdata['site-logo']['url']){
							echo '<a href="'.get_site_url().'" class="header-logo animated fadeInUp delay-1"><img src="'.$fdata['site-logo']['url'].'" alt="Site-main-logo"></a>';
						}
						else{
							echo "<p>Upload logo in theme settings</p>";
						}
						?>
						</div>
						<div class="col-sm-9 menu-col  col-xl-6 col-lg-7 align-self-center menu-rel">
						
						<span class="btn btn-primary click-to-show-nav lg-none"><span class="x">x</span>Menu</span>
						<?php 
							if ( has_nav_menu( 'main-menu-blog' )){
								wp_nav_menu(array( 
								'container' => false,
								'depth'             => 1,
								'menu_class'=> 'main-menu',
								'menu_id'=> '',
								'theme_location' => 'main-menu-blog'
								)); 
							} 
							else{
								echo "<p>Assign Any Menu To Header Main Menu Blog</p>";
							}
						?>	
						</div>
						<div class="col-sm-2 col-lg-2 col-md-2 col-xl-3 align-self-center btn-col">
						<?php 
							if ( has_nav_menu('btn-menu-blog')){
								wp_nav_menu(array( 
								'container' => false,
								'depth'             => 1,
								'menu_class'=> 'btn-menu',
								'menu_id'=> '',
								'theme_location' => 'btn-menu-blog'
								)); 
							} 
							else{
								echo "<p>Assign Any Menu To Header button menu Blog</p>";
							}
						?>
						</div>	
					</div>
				</div>
			<!-- main-header-Ended -->
		</div>
	</header>