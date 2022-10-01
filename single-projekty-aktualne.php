
<?php get_header();?>
<section>

<main>

       <div class="container-fluid">
      
    <div class="row justify-content-center">

<?php if(has_category("Festiwal XX+2 - lecia APT")): ?>
    <div class="col-lg-3 col-sm-4">       
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
    
   
 <div class="col-sm-8 p-2 image-thumbnail-center">
   

     <?php the_content(); ?>
    

 </div>
 </div>
                    <?php else: ?>
                        <div class="row">
                        <div class="col-sm-12 mx-auto p-2 image-thumbnail-center">

     <?php the_content(); ?>
    
     </div>
 </div>
                    <?php endif; ?>
 
       </div>    
</main>

</section>
<?php get_footer();?>