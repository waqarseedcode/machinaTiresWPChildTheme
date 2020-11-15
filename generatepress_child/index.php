<?php 
  if (!defined('ABSPATH')) exit;
  get_header('blog'); 
?>	
		<main id="main" class="site-main">
			<div class="banner">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php 
							echo '<img class="icon " src="'.get_stylesheet_directory_uri().'/img/icon.svg" alt="blogicon">';
							echo '<h1 class="page-title">Machina News</h1>';
							
							/*
							if($fdata['blog_pg_icon']['url']){
								echo '<img class="icon" src="'.$fdata['blog_pg_icon']['url'].'" alt="blog">';
								}
								echo '<h1 class="page-title">Machina News</h1>';
								if($fdata['blog_para']){
									echo '<p>'.$fdata['blog_para'].'</p>';
								}*/
							?>
							<ul class="blog-categories-list">
								<?php dynamic_sidebar( 'blog-cat-banner-blog' ); ?>
							</ul>		


						</div>
					</div>
				</div>
			</div>
			<section class="all-blog">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="grid">
							<div class="grid-sizer"></div>
								<?php
								/* Start the Loop */
								if(have_posts()):
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content', get_post_format() );
									?>
							
								<?php endwhile; ?>
							</div>
							<div class="pagination-sec">
							<?php /*custom added*/
							wpbeginner_numeric_posts_nav(); 
							//the_posts_navigation(); ?>
							</div>	
							<?php
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif; 
							?>
						</div>	
						<div class="col-md-4 col-sm-5">
					
						</div>
					</div>
				</div>
			</section><!-- #primary -->
		</main><!-- #main -->
<?php 
  if (!defined('ABSPATH')) exit;
  get_footer('blog'); 
?>