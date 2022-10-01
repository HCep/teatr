

 <?php
 /**
 * 
 *
 * @package understrap
 */


defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'understrap_container_type' );


 get_header();

 $archive_image = get_field('image_of_archive');
 $imgSize = "full";
  
  
 ?>
 <section class="dawnosc-section mt-5">
    <div class="<?php echo esc_attr( $container ); ?>" id="content">
        <div class="row justify-content-center">
           
   
  

        <div class="col-11">
        <?php echo do_shortcode( '[ivory-search id="1030" title="Wyszukiwarka_archive"]' ); ?>
          
            </div>
        </div>
        <div class="row justify-content-center mt-sm-5">
        
                
 
            <?php wp_nav_menu(
                            array(
                                'theme_location'  => 'dawnosc_menu',
                                'container_class' => 'archive-menu-cnt col-md-2',
                                'menu_class'      => 'archive-menu-links',
                                'menu_id'         => 'dawnosc_menu',
                                'depth' 		  => '5',
						        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),

                            )
                        );

        ?>
          
          
         
          <div class="col-md-10 dawnosc-content">
          
       <?php   $args = array( 'post_type' => 'minione' );
$args = array_merge( $args, $wp_query->query );
query_posts( $args ); ?>
     
             </div>
       



             
             
            </div>
            </div>

</section>


<?php 


get_footer();



?>