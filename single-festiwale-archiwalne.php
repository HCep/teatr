

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
          
          <?php if(has_category("Festiwal XX+2 - lecia APT")): ?>
    <div class="col-lg-2 col-sm-3">       
        <?php	$args = array(
                    'post_type' => 'festiwal-xx-2-lecia',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'posts_per_page' => -1
    );

                    $posts = new WP_Query($args);
                 
                    if ($posts->have_posts()):
                     ?>  
                      <div class="dropdown theatre-dropdown-phone" style="width:80%; margin:10px; ">
                      <button class="dropdown-toggle spectacl-menu-link mx-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Przewodnik
  </button>
  <div class="dropdown-menu theatre-dropdown-menu shadow mx-auto"  aria-labelledby="dropdownMenuButton">
                   <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                  
              <a href="<?php   the_permalink(); ?>" class="dropdown-item " style="font-size:13px; padding:10px;"><?php the_title(); ?></a>
           
                  <?php  endwhile;
                  ?> 
                    </div>
</div>
<div class="theatre-menu-desktop">
<?php while ($posts->have_posts()) : $posts->the_post(); ?>
                        <div class="spectacl-menu" >
                 <a href="<?php   the_permalink(); ?>" class="spectacl-menu-link mx-1" style="width:90%;"><?php the_title(); ?></a>
              </div>
              
              <?php  endwhile;
                  ?> 
                  </div>
                  <?php endif; ?>
                  
                  <?php
                  wp_reset_postdata();
                  ?>
 
               
                  </div>
    
   
 <div class="col-sm-7 p-2 image-thumbnail-center">
   

   <?php else:?>
    


          <div class="col-md-10 dawnosc-content festiwal-archive">
         <?php endif;?>     
          <?php understrap_post_nav(); ?>
          <h1 class="mb-2"><?php the_title();?></h1>
              <?php if(!empty(has_post_thumbnail())):?>
              <?php the_post_thumbnail("large"); ?>
              <?php else:?>
                
              <?php endif;
              global $post;
    $post_slug = $post->post_name;?>
              <?php if($post_slug == 'kalejdoskop'):
                			$args = array(
                                'post_type' => 'festiwale-archiwalne',
                                'posts_per_page' => '-1',
                                'category_name' => 'kalejdoskop'
                                );
                                
                        $posts = new WP_Query($args);
                             
                        if($posts->have_posts()):?>
                            	<div class="row spectacl-row theatre-row">
					<?php
						while ($posts->have_posts()) : $posts->the_post();
					?>
				<div class=" theatre-artist-container ">
			<?php	if(has_post_thumbnail()):?>
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?> </a>
                 <?php else: ?>
                    <a href="<?php the_permalink(); ?>"	> <img style="height:100%; width:100%; object-fit:cover;" src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png" alt="Gardzienice" >
                    </a>
      
                 <?php endif; ?>
					<a href="<?php   the_permalink(); ?>" class="theatre-artist-link" >	
						 <?php the_title(); ?>
					</a>
			    </div>
					<?php endwhile;	?>
			</div><?php
				 wp_reset_postdata();
        endif;  
        endif;  
        
        ?>
        
                
            

        
     <?php the_content(); ?>


 </div>

</div>

</div>
</section>
<?php get_footer();?>