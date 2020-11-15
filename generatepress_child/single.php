<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
  if (!defined('ABSPATH')) exit;
  get_header('blog'); 
  $banner_bg= get_the_post_thumbnail_url(get_the_ID(),'full'); ?>



		<main id="main" class="site-main single <?php echo "page-".$post_id = get_the_ID(); wp_title('');?>">
			<div class="banner" style="background-image: url(<?php echo $banner_bg; ?>);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="bus-btn">Business</span>
							<h1 class="page-title"><?php wp_title(''); ?></h1>
							<p class="blog-more-date-time">
								<span><?php echo get_the_date('F jS, Y'); ?> By </span>
								<span class="author"> 
								<?php $username = get_userdata( $post->post_author ); ?>    
								<a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php echo $username->user_nicename; ?></a> &nbsp;
								</span>
								<span class="with-dot"><?php comments_number( '0', '1', '% ' );?> Comments</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<section class="blog-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
								<?php
								/* Start the Loop */
								if(have_posts()):
								while ( have_posts() ) : the_post();
								the_content();
								endwhile; ?>
					
							<!--<ul class="single-pagination">
								<li class="previous">
									<?php previous_post_link( '%link', __( '', '' ) . '<i class="fa fa-angle-left" aria-hidden="true"></i> Previous' ); ?>
								</li>
								<li class="next">
									<?php   next_post_link( '%link', __( '', '' ) . 'Next <i class="fa fa-angle-right" aria-hidden="true"></i> ' ); ?>
								</li>
							</ul> -->
							<?php
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif; 

							if ( comments_open() || get_comments_number() ) :
								comments_template();
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