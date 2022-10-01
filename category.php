<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">
				
	<?php if(is_category('wystawy') ||( preg_match( '#^kategorie/wystawy(/.+)?$#', $wp->request ) )): ?>
		<h1 class="title p-3 my-3 font-weight-bold"><a href="https://gardzienice.org/kategorie/wystawy/">Wystawy</a></h1>
				
					
					
         <div class="col-md-2">
            <?php	$menu = wp_nav_menu(array(
        'theme_location' => 'aktualne_wystawy',
        'container_class' => 'menu-wystawy',
        'menu_class'      => 'menu-wystawy-container',
        'menu_id'         => 'wystawy-menu',
        'depth' 		  => '5',
        'walker'          => new Understrap_WP_Bootstrap_Navwalker(), )); ?>
        </div>

		<div class="row p-3">

	
		<main class="site-main w-100" id="main">
<div class="row">
	
<?php
if ( have_posts() ) {
	
	while ( have_posts() ) {
		?>
	<div class="col-md-3 col-sm-6">
		<?php
		the_post();

	
		get_template_part( 'loop-templates/content', 'wystawy' );
		?> 
		</div> 

		<?php
	}
} else {
	?>
	<div class="col-md-3 col-sm-6">
		<?php
	get_template_part( 'loop-templates/content', 'none' );
	?>
	</div>
	<?php
}
?>
</div>
</main>






		<?php else: ?>
			<div class="row p-3">
			<main class="site-main w-100" id="main">

				<?php
				if ( have_posts() ) {
				
					while ( have_posts() ) {
						the_post();

	
					
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main>



	
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
			<?php endif; ?>
		</div>

	</div>
	<div class="p-3"><?php understrap_pagination(); ?></div>
</div><!-- #index-wrapper -->

<?php
get_footer();
