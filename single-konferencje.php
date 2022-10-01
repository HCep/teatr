

 <?php
 /**
 * 
 *
 * @package understrap
 */


defined( 'ABSPATH' ) || exit;



 get_header();

 $archive_image = get_field('image_of_archive');
 $imgSize = "full";
    
  
 ?>
 <section class="dawnosc-section my-5">
    <div class="container-fluid" id="content">
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
          <?php understrap_post_nav(); ?>
          <h1 class="entry-title mb-3">   <?php the_title(); ?></h1> 
         <div class="row justify-content-around">
          <div class="col-sm-4 ml-auto">  <?php the_post_thumbnail('full'); ?></div> 
          <div class="col-sm-5 mr-auto">    <?php the_content(); ?></div> 
             </div>
             </div>
       



    </div>



</section>


<?php 


get_footer();



?>