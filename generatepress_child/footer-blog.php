<?php global $fdata; ?>						
<footer>
	<div class="container">
		<div class="row">
		<div class="col-md-6  align-self-center"> 
		<?php 
		if($fdata['site-logo']['url']){
			echo '<span class="footer-logo"><a href="'.get_site_url().'"><img src="'.$fdata['site-logo']['url'].'" alt="Site-main-logo"></a></span>';
		}
		if($fdata['footer-copyright']){
						$output = do_shortcode($fdata['footer-copyright']);
			echo '<span>'.$output.'</span>';
		} 
		?>
		
		</div>		
		
		<div class="col-md-6  align-self-center cus-col"> 
		<?php 
			if ( has_nav_menu('footer-menu-blog')){
			wp_nav_menu(array( 
			'container' => false,
			'depth'             => 1,
			'menu_class'=> 'footer-menu',
			'menu_id'=> '',
			'theme_location' => 'footer-menu-blog'
			)); 
		} 
		else{
			echo "<p>Assign Any Menu To Header button menu Blog</p>";
		}
		
		?>
		
		</div>
		

		</div>
	</div>
</footer>
	<?php wp_footer(); ?>	
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/scripts.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/aos.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/custom.js?nocache=<?php echo time(); ?>"></script>	
</body>
</html>