<?php 
  if (!defined('ABSPATH')) exit;
  get_header('blog'); 
  $banner_bg= get_the_post_thumbnail_url(get_the_ID(),'full');
?>	
	<div id="primary" class="content-area ">
		<main id="main" class="site-main all-pages-area">
			<div class="single other-page">
				<div class="banner" style="background-image: url(<?php echo $banner_bg; ?>);">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h1 class="page-title"><?php wp_title(''); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="container">	
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
			/* 	if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; */
			endwhile; // End of the loop.
			?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
  if (!defined('ABSPATH')) exit;
  get_footer('blog'); 
?>