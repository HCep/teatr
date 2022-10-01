<!-- 
    Template Name: Front Page 

-->

<?php 
get_header();?>
<?php 
/**
 * 
 *
 * @package understrap
 */
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php

	$image = get_field('background-image');
	$imgSize = "full";
    $video = get_field('background_video');
    $dawnosc = get_field('link');
    $online = get_field('link_two');
    $pageTitle = get_field('page_title');
    $pageSubtitle = get_field('sub_title');
    ?>








    <!-- <body style="background-repeat: no-repeat; background-position: top; background-color:black; background-size: cover; background-color:06000a; "> -->


    <section class="theatre-front-page">
    <?php if (!empty($video) || empty($image)):?>
    <video autoplay muted loop id="myVideo">
  <source src="<?php the_field('background_video');?>" type="video/mp4">

</video>
<?php else: 
    
endif;
    ?>





<?php wp_nav_menu(
    array(
        'theme_location'  => 'extrafour_menu',
        'container_class' => 'home-cnt ',
        'container_id'    => '',
        'menu_class'      => 'home-cnt-links',
        'fallback_cb'     => '',
        'menu_id'         => 'extrafour_menu',
        

    )
);

?>







</section>
</div>
<?php get_footer(); ?>




