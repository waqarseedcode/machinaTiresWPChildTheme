<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommercexp
 */

?>
			<div class="masonry-item all-searched-blogs">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="about"><span><?php echo get_the_date('M d,  Y'); ?> by</span>
						<span class="author"><?php echo get_the_author_link(); ?></span></div>
							<a  class="image" href="<?php the_permalink(); ?>" title="Read more"><?php the_post_thumbnail('full',array('class'=>'large thumbnail-margin')); ?></a>
							<?php
									if ( is_singular() ) :
										the_title( '<h1 class="all-blog-title  entry-title">', '</h1>' );
									else :
										the_title( '<h5 class="all-blog-title entry-title waqar"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
									endif;

									?>
							<p class="entry-content">
							<?php
								$output = get_the_excerpt();
								if(!empty($output)){
									echo '<span class="content-text">'.substr($output, 0, 300). '... </span>';
								}
								?>
								<span class="readmore"><a href="<?php the_permalink(); ?>" class="btn btn-primary readmore-blog-link" title="Read more">Read More</a></span>

							</p><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
			</div>