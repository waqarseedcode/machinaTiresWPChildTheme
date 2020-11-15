<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>
	<article id="post-<?php the_ID(); ?>" class="grid-item">
		<div class="inner">
			<a  class="image left" href="<?php the_permalink(); ?>" title="Read more"><span><?php if (has_post_thumbnail() ) {		
				the_post_thumbnail('recent-blog-image',array('class'=>'single-blog-img'));	
				}
				else {
				echo '<img src="'.get_bloginfo( 'stylesheet_directory' ).'/img/thumbnail-default.jpg" alt="blog-image">';
				}
			?></span>
			</a>
			<span class="bus-btn">Business</span>
			<h4 class="title"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h4>				
			<p class="blog-more-date-time">
				<span><?php echo get_the_date('F jS, Y'); ?> By </span>
				<span class="author"> <?php echo get_the_author_link(); ?></span>
			</p>
			<ul class="bottom-c"><li><?php comments_number( '0', '1', '%' );?> Comments</li>
			<li><a href="<?php the_permalink(); ?>" title="Read more">Read more</a></li>	
			</p>
		</div>
	</article>