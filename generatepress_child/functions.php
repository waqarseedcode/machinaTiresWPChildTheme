<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */
function example_enqueue_styles() {
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
}
add_theme_support('post_thumbnails');
add_action('wp_enqueue_scripts', 'example_enqueue_styles');
include('numeric-pagination.php');
include('shortcodes.php');
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu-blog' => __( 'Header Main Menu Blog' ),
      'btn-menu-blog' => __( 'Header Buttons Menu Blog' ),
      'footer-menu-blog' => __( 'Footer Menu Blog' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
register_sidebar( array (
    'name' => __( 'Blog Categories In Banner', 'seedcode' ),
    'id' => 'blog-cat-banner-blog',
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="widget-title none"><span>',
    'after_title' => '</span></h3>',
) );

register_sidebar( array (
    'name' => __( 'Blog Page Logo', 'seedcode' ),
    'id' => 'blog-page-logo',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '<h3 class="widget-title none"><span>',
    'after_title' => '</span></h3>',
) );
/**/
// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    if (!$data['type']) {
        $wp_filetype = wp_check_filetype($filename, $mimes);
        $ext = $wp_filetype['ext'];
        $type = $wp_filetype['type'];
        $proper_filename = $filename;
        if ($type && 0 === strpos($type, 'image/') && $ext !== 'svg') {
            $ext = $type = false;
        }
        $data['ext'] = $ext;
        $data['type'] = $type;
        $data['proper_filename'] = $proper_filename;
    }
    return $data;


}, 10, 4);
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});
add_action('admin_head', function () {
    echo '<style type="text/css">
         .media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail {
      width: 100% !important;
      height: auto !important;
    }</style>';
});
/*show empty categories*/
add_filter( 'widget_categories_args', 'wpb_force_empty_cats' );
function wpb_force_empty_cats($cat_args) {
    $cat_args['hide_empty'] = 0;
    return $cat_args;
}
/*show empty categories*/
/*custom*/
add_image_size( 'recent-blog-image', 604, 300, array( 'center', 'center' ) );
/*redux theme settings */
add_action('admin_head', 'my_custom_css');
function my_custom_css() {
    echo '
    <style>
        .rAds {
            display: none !important;
            opacity: 0 !important;
        } 
    </style>
    <script>
        function home_header12() {
            if(jQuery(".rAds").length){
                jQuery(".rAds").remove();
                console.log("removing banner");
            }
        }
        jQuery(document).ready(function(e) {
            if(jQuery("#redux-header").length){
                setTimeout(home_header12, 3000);
            }
        });
    </script>
    ';
}
######################################################################################
//ADD custom logo on wordpress login page
######################################################################################
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() {
    global $fdata;
    //print_r($fdata['login-logo']);
    $logo_url = ( isset($fdata['login-logo']) ? $fdata['login-logo']['url'] : get_bloginfo('template_url').'/img/silverfox-logo.png' );
    $logo_height = ( isset($fdata['login-logo']) ? $fdata['login-logo']['height'] : '141' );
    ?>
    <style type="text/css">
        body.login {
            background-color: #1E1E20;
        }
        body.login div#login h1 a {
            background-image: url(<?php echo $logo_url ?>);
            padding: 0px;
            margin:0 auto 25px;
            width:auto;
            height:<?=$logo_height?>px;
            background-position:center center;
            background-size:contain;
			}
    </style>
	<?php }

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
    return get_bloginfo('name');//'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
######################################################################################
//Redux framework for theme options
######################################################################################
if ( file_exists( dirname( __FILE__ ) . '/redux/admin-folder/admin-init.php' ) ) {
	require_once( dirname( __FILE__ ) . '/redux/admin-folder/admin-init.php' );
	function seedcode_customize_css() {
		global $fdata;
		if(isset($fdata['opt-ace-editor-css'])) {
			echo '<style type="text/css">
			'.$fdata['opt-ace-editor-css'].'
			</style>
			';
		}
	}
	add_action( 'wp_head', 'seedcode_customize_css', 100);
	function seedcode_customize_js() {
		global $fdata;
		if(isset($fdata['opt-ace-editor-js'])) {
			echo '<script>
			'.$fdata['opt-ace-editor-js'].'
			</script>
			';
		}
	}
	add_action( 'wp_footer', 'seedcode_customize_js', 100);
}