<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommercexp
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'exp' ); ?></h1>
	</header><!-- .page-header -->
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-10 col-not-found">
				<div class="page-content">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php
							printf(
								wp_kses(
									/* translators: 1: link to WP admin new post page. */
									__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'exp' ),
									array(
										'a' => array(
											'href' => array(),
										),
									)
								),
								esc_url( admin_url( 'post-new.php' ) )
							);
						?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'exp' ); ?></p>
						<?php
							get_search_form();

					else : ?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'exp' ); ?></p>
						<?php
							get_search_form();

					endif; ?>
				</div><!-- .page-content -->
			</div>
		</div>
	</div>
</section><!-- .no-results -->
