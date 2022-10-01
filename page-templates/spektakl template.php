<?php
/**
 * Template Name: Spektakle Page
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if( is_page('gardzienice-online-festiwal-generator-nadziei') || is_page('plutos-teatr-thiasos') || is_page('z-gazet-naszych-codziennych') || is_page('swity-zespol-morye') || is_page('tao-historia-smoka')|| is_page('zespol-mundinova')):?>
   <div class="wrapper spektakle-wrapper p-0 m-0" style="background-color:black;">
      <?php else:?>
   <div class="wrapper spektakle-wrapper p-0 m-0">
      <?php endif;?>
<div class="<?php echo esc_attr( $container ); ?> p-0" id="content">

   <?php if(is_page('spektakle-gardzienice')): 
      $kolarz = get_field('kolarz'); 
   
     ?>
   <div class="row w-100 h-100  p-0 m-0" style="min-height:800px;">
      <aside class="theatre-aside p-0 m-0 " style="overflow:hidden; position:relative; height:auto; min-height:500px; background-image:url(<?php the_field('kolarz');?>); background-size:cover; background-position:center">


<!-- KOLARZ ZE ZDJĘCIAMI Z ACF -->


      </aside>
      <aside class="theatre-aside py-md-3 py-2 px-lg-5 px-3" style="height:auto; background-color:white;">
		<?php	$args = array(
                    'post_type' => 'spektakle-gardzienic',
                
                    'posts_per_page' => 10
    );

                  
                    
      $posts = new WP_Query( $args );
               
      if($posts->have_posts()):?>
           <div class="dropdown my-4">
            <button class="spectacl-menu dropdown-toggle p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?php the_title(); ?>
            </button> 
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         <?php
            while($posts->have_posts()): $posts->the_post(); ?>
               <li class=" dropdown-item spectacl-menu text-center p-1">
                  <a href="<?php the_permalink(); ?>" class="spectacl-menu-link text-center" style="font-size:15px;"><?php the_title(); ?></a>

               </li>
          <?php endwhile; ?>
          </div>
         </div>

      <?php endif; ?>
   
             <?php
                wp_reset_postdata();
                ?>
            <h1 class="mb-5 text-center font-weight-bold"><?php the_title(); ?></h1>
               <?php the_content();?>       		
      </aside>	
   </div>
   <?php elseif(is_page('spektakle-apt')): 
       $kolarz = get_field('kolarz'); 
   
         ?>
   <div class="row w-100 h-100  p-0 m-0" style="min-height:800px;">
      <aside class="theatre-aside p-0 m-0 " style="overflow:hidden; position:relative; height:auto; min-height:500px; background-image:url(<?php the_field('kolarz');?>); background-size:cover; background-position:top">


<!-- KOLARZ ZE ZDJĘCIAMI Z ACF -->


      </aside>
      <aside class="theatre-aside py-md-3 py-2 px-lg-5 px-3" style="height:auto; background-color:white;">

<!-- MENU SPEKTAKLI CPT UI
PONIŻEJ CONTENT
 -->

      <?php $args = array(
         'post_type' => 'spektakle-apt',
         'posts_per_page' => '-1');
         $posts = new WP_Query( $args );
               
      if($posts->have_posts()):?>
         <div class="dropdown my-4">
            <button class="spectacl-menu dropdown-toggle p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php the_title(); ?>
             </button> 
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <?php
                while($posts->have_posts()): $posts->the_post(); ?>
                  <li class=" dropdown-item spectacl-menu text-center p-1">
                     <a href="<?php the_permalink(); ?>" class="spectacl-menu-link text-center" style="font-size:15px;"><?php the_title(); ?></a>
                  </li>
               <?php endwhile; ?>
          </div>
         </div>
       <?php endif; ?>
                 
                  <?php
                  wp_reset_postdata();
                  ?>
         <h1 class="mb-5 text-center font-weight-bold"><?php the_title(); ?></h1>
           <?php the_content();?>       		
      </aside>	
   </div>
<?php else: ?>

      <div class="row" >
                  
         <div class="col-md-8 mx-auto content-area" id="primary" >
                 
            <main class="site-main p-sm-3 p-2" id="main" role="main">
              
                     
                  <?php the_content(); ?> 
         

<?php   endif; ?>
                

                    
		
</main>
         </div>
      </div>
</div> 
</div>    
		
	

<?php get_footer(); ?>
