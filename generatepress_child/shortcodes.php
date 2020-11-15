<?php
/***custom short codes* */
 /*--------testmonial-----------*/
/*global $fdata;
/* Testimonials List Shortcode */
/*
add_shortcode("testimonials-list","testimonials_list");
function testimonials_list() 
{
	$args = array(
		'posts_per_page' => 2,
		'post_type' => 'testimonials',
		'order' => 'ASC',
	); 
	$loop = new WP_Query($args);
	$html .='<section class="testimonial-section">';
		$html .='<div class="container">';
			$html .='<div class="row">';    
				$html .='<div class="col-sm-12">';
					$html .='<h2 class="home-testimonials">What clients say about us</h2>';
					$html .='<div class="home-testimonials">';
					while ( $loop->have_posts() ) : $loop->the_post();
							{ 
								$post_id = get_the_ID();
								$html .='<div class="testimonial-half">';
									$html .='<div class="testimonial-block">';
										$my_excerpt = get_the_content();
										//$my_excerpt_limit = wp_trim_words( $my_excerpt, 100, ' ' );
										//$html .= '<div class="content"><p>'.$my_excerpt_limit.'</p>';
										$html .= '<div class="content"><p>'.$my_excerpt.'</p>';$html .='</div>';		
										$html .= '<p class="name">'.get_the_title().' <span class="sub-title">'.get_field("designation").'</span><span class="sub-title">'.get_field("compnay").'</span></p>';
									$html .='</div>';
								$html .='</div>';
							} 
					endwhile;
					$html .='</div>';
					$html .='<a href="'.get_site_url().'/testimonials"  class="btn btn-white">Read More</a>';
				$html .='</div>';
			$html .='</div>';
		$html .='</div>';
	$html .='</section>';		
	return $html;
} */
/* Testimonials List Shortcode End */
/*---------------------------------------*/
/*----current-year--------*/
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('current-year', 'year_shortcode');
/*----------*/
/*----site-url--------*/
function site_url_shortcode() {
  $url = get_site_url();
  return $url;
}
add_shortcode('site-url', 'site_url_shortcode');
/*----------*/
/*site title*/
function title_shortcode() {
 $sitetitle = wp_title('');
 return $sitetitle;
}
add_shortcode('site-title', 'title_shortcode');
/*site title*/
/**/
add_shortcode("footer-logo","footer_logo");
function footer_logo() {	
	global $fdata;
	if($fdata['footer-logo']['url']){
	$html .='<a href="'.get_site_url().'" class="footer-logo"><img src="'.$fdata['footer-logo']['url'].'" alt="ThirdLevel"></a>';
	}
	return $html;
}
/**/


?>