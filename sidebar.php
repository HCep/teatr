<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-3 widget-area" id="secondary" role="complementary">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php	wp_nav_menu(
					array(
						'theme_location'  => 'extratwo_menu',
			
					)
				);
				
				
				?>
<?php if(is_category('wystawy') || in_category("wystawy")): ?>
         <div class="col-md-3">
            <?php	$menu = wp_nav_menu(array(
        'theme_location' => 'aktualne_wystawy',
        'container_class' => 'menu-wystawy',
        'menu_class'      => 'menu-wystawy-container',
        'menu_id'         => 'wystawy-menu',
        'depth' 		  => '5',
        'walker'          => new Understrap_WP_Bootstrap_Navwalker(), )); ?>
        </div>

		<?php endif; ?>
</div><!-- #secondary -->
