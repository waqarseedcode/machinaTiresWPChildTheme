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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/home-scripts/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/home-styles/dist/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/home-scripts/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/home-scripts/main.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/home-scripts/predictive.js"></script>
    <script>
        AOS.init();
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });
        $(".owl-carousel").owlCarousel({
            stagePadding: 50,
            loop: true,
            autoPlay: true,
            autoplaySpeed: 1,
            margin: 10,
            nav: true,
            dots: true,
            autoWidth: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 5,
                },
            },
        });
        $(document).ready(function () {
            $("#video_background").show();
        });
    </script>
</body>
</html>