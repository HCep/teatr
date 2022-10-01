
 <?php




 get_header();

 $archive_image = get_field('image_of_archive');
 $imgSize = "full";
 $name = get_field('name');
 $title = get_the_title();
  
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
          
          
         
          <div class="col-md-10 dawnosc-content p-3">
          <h1 class="entry-title mb-3">   <?php the_title(); ?></h1> 
         <div class="row justify-content-around">
          <div class="col-sm-4 ml-auto">  <?php the_post_thumbnail('full'); ?></div> 
          <div class="col-sm-5 mr-auto">    <?php the_content(); ?>
         

         
          </div> 
                    </div>
                    <?php if(has_category('Administracja')): ?>


                    <?php else: ?>
       <div class="row mt-5">
       <div class="accordion" id="accordionExample">
  <div class="card ">
    <div class="card-header my-2" id="headingOne">
    <h3 class=" mb-0 entry-title">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Spektakle
        </button>
        </h3>
    </div>
       
       <?php
       $first_post_ids = get_posts( array(
        'fields'         => 'ids', 
        'posts_per_page' => '200',
        'post_type'      => 'spektakle-gardzienic',
        
    ));
    $second_post_ids = get_posts( array(
        'fields'         => 'ids', 
        'posts_per_page' => '200',
        'post_type'      => 'spektakle-archiwalne',
    ));
    $third_post_ids = get_posts( array(
        'fields'         => 'ids', 
        'posts_per_page' => '200',
        'post_type'      => 'spektakle-apt',
    ));
    $merged_post_ids = array_merge( $first_post_ids, $second_post_ids, $third_post_ids );   
      
          
          $args = array(
            'post_type' => 'any',
            'post__in'  => $merged_post_ids, 
            'posts_per_page' =>100,
            'order_by' => 'title',
            'order' =>'ASC'
        );
            
              $posts = new WP_Query($args);  
              
            if ($posts->have_posts()): ?>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="row">
            <?php while ($posts->have_posts()) : $posts->the_post(); 
           if ( strpos( get_the_content(), $title ) !== false):
          if(has_post_thumbnail()): ?>
                  <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
                  <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('small'); ?></a>    
                  <a href="<?php   the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
            </div>
            <?php else: ?>
              <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
              <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
              <a href="<?php the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
              </div>
          
            <?php endif; ?>
            <?php endif; ?>
            
 <?php 
endwhile;?>
                          </div>
                          </div>
                          </div>
<?php
endif;
?>
        
     
      
        <div class="card">
    <div class="card-header my-2" id="headingTwo">
    <h3 class="mb-0 entry-title">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Projekty
        </button>
      </h3>
    </div>
     
        
          </div>
       <?php
       $first_post_ids = get_posts( array(
        'fields'         => 'ids', 
        'posts_per_page' => '200',
        'post_type'      => 'projekty-aktualne',
        
    ));
    $second_post_ids = get_posts( array(
        'fields'         => 'ids', 
        'posts_per_page' => '200',
        'post_type'      => 'festiwale-archiwalne',
    ));

    $merged_post_ids = array_merge( $first_post_ids, $second_post_ids );   
    
          
          $args = array(
            'post_type' => 'any', 
            'post__in'  => $merged_post_ids, 
            'posts_per_page' =>100,
            'order_by' => 'title',
            'order' =>'ASC'
        );
        
              $posts = new WP_Query($args);  
              
            if ($posts->have_posts()): ?>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
                          <div class="row">
            <?php while ($posts->have_posts()) : $posts->the_post(); 
           if ( strpos( get_the_content(), $title ) !== false):
          if(has_post_thumbnail()): ?>
                  <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
                  <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('small'); ?></a>    
                  <a href="<?php   the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
            </div>
            <?php else: ?>
              <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
              <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
              <a href="<?php the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
              </div>
          
            <?php endif; ?>
            <?php endif; ?>
            
 <?php 
endwhile;?>
                          </div>
                          </div>
                          </div>
<?php
endif;
?>
        
   
       
   
        <div class="card">
    <div class="card-header my-2" id="headingThree">
    <h3 class=" mb-0 entry-title">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Konferencje
        </button>
      </h3>
    </div>
 
       <?php
  
          
          $args = array(
            'post_type' => 'konferencje', 
            'posts_per_page' =>100,
            'order_by' => 'title',
            'order' =>'ASC'
        );
           
              $posts = new WP_Query($args);  
              
            if ($posts->have_posts()): ?>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                          <div class="row">
            <?php while ($posts->have_posts()) : $posts->the_post(); 
           if ( strpos( get_the_content(), $title ) !== false):
          if(has_post_thumbnail()): ?>
                  <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
                  <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('small'); ?></a>    
                  <a href="<?php   the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
            </div>
            <?php else: ?>
              <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
              <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
              <a href="<?php the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
              </div>
          
            <?php endif; ?>
            <?php endif; ?>
            
 <?php 
endwhile;?>
                          </div>
                          </div>
                          </div>
<?php
endif;

?>
  <div class="card">
    <div class="card-header my-2" id="headingFour">
    <h3 class=" mb-0 entry-title">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Rezydencje
        </button>
      </h3>
    </div>
 
  
      
     
         </div>
      <?php
 
         
         $args = array(
           'post_type' => 'rezydencje', 
           'posts_per_page' =>100,
           'order_by' => 'title',
           'order' =>'ASC'
       );
          
             $posts = new WP_Query($args);  
             
           if ($posts->have_posts()): ?>
                           <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
                          <div class="row">
           <?php while ($posts->have_posts()) : $posts->the_post(); 
          if ( strpos( get_the_content(), $title ) !== false):
         if(has_post_thumbnail()): ?>
                 <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
                 <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('small'); ?></a>    
                 <a href="<?php   the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
           </div>
           <?php else: ?>
             <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
             <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
             <a href="<?php the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
             </div>
         
           <?php endif; ?>
           <?php endif; ?>
           
<?php 
endwhile;?>
</div>
                          </div>
                          </div>
<?php
endif;
?>
        
        <div class="card w-100">
    <div class="card-header my-2" id="headingFive">
    <h3 class="mb-0 entry-title">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         Wydarzenia Towarzyszące
        </button>
      </h3>
    </div>
      <?php
 
         
         $args = array(
           'post_type' => 'wydarzenia-towarzysz', 
           'posts_per_page' =>100,
           'order_by' => 'title',
           'order' =>'ASC'
       );
          
             $posts = new WP_Query($args);  
             
           if ($posts->have_posts()): ?>
                    
    
         <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body w-100">
      <div class="row">
           <?php while ($posts->have_posts()) : $posts->the_post(); 
          if ( strpos( get_the_content(), $title ) !== false):
         if(has_post_thumbnail()): ?>
                 <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
                 <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('small'); ?></a>    
                 <a href="<?php   the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
           </div>
           <?php else: ?>
             <div class="theatre-artist-container shadow" style="width:250px; height:250px; margin:10px;">
             <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
             <a href="<?php the_permalink(); ?>" class="theatre-link-osoby" style="height:80px;"><?php the_title(); ?></a>
             </div>
         
           <?php endif; ?>
           <?php endif; ?>
           

<?php 
endwhile;?>
</div>
</div>
<?php

endif;
endif;
?>
       </div>
             </div> 
    </div>



</section>


<?php 


get_footer();



?>