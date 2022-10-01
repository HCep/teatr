<?php
flush_rewrite_rules( false );
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,800;0,900;1,500&family=Roboto:ital,wght@0,400;0,700;0,900;1,700&display=swap', false );
	}
	
	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
function ww_load_dashicons(){
	wp_enqueue_style('dashicons');
 }
 add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);

add_action( 'wp_enqueue_scripts', 'load_js' );
function load_js(){
 wp_register_script('testcms','https://gardzienice.org/wp-content/themes/understrap-child/js/testcms.js?ver=5.5.1'.'/js/testcms.js');
	wp_enqueue_script('testcms');


}

add_filter( 'theme_page_templates', 'child_remove_page_templates' );
function child_remove_page_templates( $page_templates ) {
	unset( $page_templates['page-templates/right-sidebarpage.php'] );
	unset( $page_templates['page-templates/left-sidebarpage.php'] );
	unset( $page_templates['page-templates/both-sidebarspage.php'] );
	unset( $page_templates['page-templates/blank.php'] );

	return $page_templates;
}

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
register_nav_menus([
	'secondary_menu' => 'Secondary Menu',
	'extra_menu' => 'Extra Menu',
	'phone_menu' => 'Phone Menu',
	'extrathree_menu' => 'Extra3 Menu',
	'extrafour_menu' => 'Extra4 Menu',
	'extrafive_menu' => 'Extra5 Menu',
	'dawnosc_menu' => 'Dawnosc Menu',
	'aktualne_wystawy' => 'Aktualne Wystawy Menu',
]);
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
function child_theme_setup() {
	// override parent theme's 'more' text for excerpts
	remove_filter( 'excerpt_more', 'understrap_auto_excerpt_more' ); 
	remove_filter( 'get_the_excerpt', 'understrap_custom_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );
// Replaces the excerpt "Read More" text by a link
function understrap_all_excerpts_get_more_link( $post_excerpt ) {
	$post = get_post();
	global $blog_id;
	
	 if($blog_id == 2):
	return $post_excerpt . '<div class="row justify-content-end"><div><a class="theatre_more_link" href="'.get_permalink($post->ID). '"> MORE </a></div></div>';
	 else:
	return $post_excerpt . '<div class="row justify-content-end"><div><a class="theatre_more_link" href="'.get_permalink($post->ID). '"> WIĘCEJ </a></div></div>';
	 endif;
}

add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );



function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 10);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
	}
function posts_orderby_lastname ($orderby_statement)
{
$orderby_statement = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) ASC";
return $orderby_statement;
}
function posts_orderby_lastnameDSC ($orderby_statement)
{
$orderby_statement = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) DESC";
return $orderby_statement;
}

function cptui_register_my_taxes() {
	flush_rewrite_rules( false );
	/**
	 * Taxonomy: Kategorie Osoby.
	 */

	$labels = [
		"name" => __( "Kategorie Osoby", "custom-post-type-ui" ),
		"singular_name" => __( "Kategorie Osoby", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Kategorie Osoby", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'osoby', 'with_front' => false, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "osoby",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];

	register_taxonomy( "osoby", [ "osoby" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

// Register a slider block.
add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items( $items, $args ) {
	
	// get menu
	$menu = wp_get_nav_menu_object($args->menu);
	
	
	// modify primary only
	if( $args->theme_location == 'extrathree_menu' ) {
		
		// vars
		$linkOne = get_field('link-1', $menu);
		$linkTwo = get_field('link-2', $menu);
		$linkThree = get_field('link-3', $menu);
		$linkFour = get_field('link-4', $menu);
		$linkFive = get_field('link-5', $menu);
		$linkSix = get_field('link-6', $menu);
		
		$logoOne = get_field('logo-1', $menu);
		$logoTwo = get_field('logo-2', $menu);
		$logoThree = get_field('logo-3', $menu);
		$logoFour = get_field('logo-4', $menu);
		$logoFive = get_field('logo-5', $menu);
		$logoSix = get_field('logo-6', $menu);
		
		
		// prepend logo
		$html_logoOne = '<li class="menu-item-logo"><a href="'.$linkOne.'" target="_blank"><img src="'.$logoOne['url'].'" class="theatre-img" alt="'.$logoOne['alt'].'" /></a></li>';
		$html_logoTwo = '<li class="menu-item-logo"><a href="'.$linkTwo.'" target="_blank"><img src="'.$logoTwo['url'].'" class="theatre-img" alt="'.$logoTwo['alt'].'" /></a></li>';
		$html_logoThree = '<li class="menu-item-logo"><a href="'.$linkThree.'" target="_blank"><img src="'.$logoThree['url'].'" class="theatre-img" alt="'.$logoThree['alt'].'" /></a></li>';
		$html_logoFour = '<li class="menu-item-logo"><a href="'.$linkFour.'" target="_blank"><img src="'.$logoFour['url'].'" class="theatre-img" alt="'.$logoFour['alt'].'" /></a></li>';
		$html_logoFive = '<li class="menu-item-logo"><a href="'.$linkFive.'" target="_blank"><img src="'.$logoFive['url'].'" class="theatre-img" alt="'.$logoFive['alt'].'" /></a></li>';
		$html_logoSix = '<li class="menu-item-logo"><a href="'.$linkSix.'" target="_blank"><img src="'.$logoSix['url'].'" class="theatre-img" alt="'.$logoSix['alt'].'" /></a></li>';
		
		
		
		
		
		// append html
		$items = $html_logoOne . $html_logoTwo . $html_logoThree. $html_logoFour . $html_logoFive . $html_logoSix. $items;
		
	}
	
	
	// return
	return $items;
	
}
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);