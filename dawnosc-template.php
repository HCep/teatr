<!-- 
Template Name: Dawnosc Page


 -->

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
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content">
        <div class="row justify-content-center" style="height:100%;">
           
   
  

        <div class="col-11">
        <?php echo do_shortcode( '[ivory-search id="1030" title="Wyszukiwarka_archive"]' ); ?>
       
      
  
            </div>
        </div>
        <div class="row justify-content-center mt-md-5">
        
                
 
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
          
          
         
          <div class="col-md-10 p-1 dawnosc-content">
          

            <?php if( !empty($archive_image) ): ?>
                 <img src="<?php echo the_field('image_of_archive'); ?>" class="img-fluid mb-2" style="width:100%;"/>
                 <?php the_content(); ?>
            <?php   elseif(is_page('osoby')):?>
             <div class="row pl-3 my-2">
           
    

  </div>
             

       <?php   $args = array(
            'post_type' => 'osoby',
            'posts_per_page' => '200',
            'order' => 'ASC',
        
            
            );   
           

                $taxonomy = 'osoby';
                $terms = get_terms($taxonomy); 

                // if ( $terms && !is_wp_error( $terms ) ) :
                // ?>
                       
                         <div class="dropdown my-4 mr-5 pr-5" style='text-align:end;'>
                         <button class="spectacl-menu dropdown-toggle p-2 w-25" style=" background-color:#7e0926!important; color:white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Wybierz
</button> 
           
                        



<div class="dropdown-menu w-25" aria-labelledby="dropdownMenuButton"  style=" background-color:#7e0926!important; ">
<!--                   
                        <?php 
                      //  foreach ( $terms as $term ) { 
                          
                          ?> -->
          
                       
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby" style=" background-color:#7e0926!important; color:white" >Wszyscy</a>
                   
                      
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby/rezyserzy" style=" background-color:#7e0926!important; color:white" >Reżyserzy</a>
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby/aktorki-i-aktorzy" style=" background-color:#7e0926!important; color:white" >Aktorki i Aktorzy</a>
          
                        <!-- <?php 
                      // } 
                      ?> -->
                    
                    </div>
                    </div>
                <!-- 
                endif; -->
                <?php   
             if(isset($_POST["asc"])):
            add_filter( 'posts_orderby' , 'posts_orderby_lastname' );
            elseif(isset($_POST["dsc"])):
             add_filter( 'posts_orderby' , 'posts_orderby_lastnameDSC' );
            endif; 
            ?>
            <form method="post" class="sort-form pr-5 mr-5" style="text-align:end;">
    
       <input type="submit" class="submit-order" style="font-size:14px; color:black!important; background-color:#f6f6f6!important;" name="asc" value="A - Z"/>
        <input type="submit" class="submit-order" style="font-size:14px; color:black!important; background-color:#f6f6f6!important;" name="dsc" value="Z - A"/>
        </form>
                <?php 

              $posts = new WP_Query($args);    
            if ($posts->have_posts()): ?>
            <div class="kontainer" id="tab1C">
            
                <div class="row ml-3">
                          
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

            <?php if(has_post_thumbnail()): ?>
                  <div class="theatre-artist-container shadow">
                  <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?></a>    
                  <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
            </div>
            <?php else: ?>
              <div class="theatre-artist-container">
              <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
              <a href="<?php the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
              </div>
            <?php endif; ?>

            <?php  endwhile;?>
</div> 
</div> 

<?php  endif; ?>

              
       <?php elseif(is_page('rezyserzy')):?>
        <div class="dropdown my-4 mr-5 pr-5" style='text-align:end;'>
                         <button class="spectacl-menu dropdown-toggle p-2 w-25" style=" background-color:#7e0926!important; color:white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Wybierz
</button> 
           
                        



<div class="dropdown-menu w-25" aria-labelledby="dropdownMenuButton"  style=" background-color:#7e0926!important; ">
<!--                   
                        <?php 
                      //  foreach ( $terms as $term ) { 
                          
                          ?> -->
          
                       
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby" style=" background-color:#7e0926!important; color:white" >Wszyscy</a>
                   
                      
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby/rezyserzy" style=" background-color:#7e0926!important; color:white" >Reżyserzy</a>
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby/aktorki-i-aktorzy" style=" background-color:#7e0926!important; color:white" >Aktorki i Aktorzy</a>
          
                        <!-- <?php 
                      // } 
                      ?> -->
                    
                    </div>
                    </div>
       <h1>
       <?php 
       the_title();
       ?>
       </h1>
        <?php   $args = array(
            'post_type' => 'osoby',
            'posts_per_page' => '200',
            'order' => 'ASC',
            'category_name' => 'rezyserzy',
            
        
            
            );   
            $posts = new WP_Query($args);    
            if ($posts->have_posts()): ?>
            <div class="kontainer" id="tab1C">
            
                <div class="row ml-3">
                          
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

            <?php if(has_post_thumbnail()): ?>
                  <div class="theatre-artist-container shadow">
                  <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?></a>    
                  <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
            </div>
            <?php else: ?>
              <div class="theatre-artist-container">
              <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
              <a href="<?php the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
              </div>
            <?php endif; ?>

            <?php  endwhile;?>
</div> 
</div> 

<?php  endif; ?>
<?php elseif(is_page('aktorki-i-aktorzy')):?>
  <div class="dropdown my-4 mr-5 pr-5" style='text-align:end;'>
                         <button class="spectacl-menu dropdown-toggle p-2 w-25" style=" background-color:#7e0926!important; color:white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Wybierz
</button> 
           
                        



<div class="dropdown-menu w-25" aria-labelledby="dropdownMenuButton"  style=" background-color:#7e0926!important; ">
<!--                   
                        <?php 
                      //  foreach ( $terms as $term ) { 
                          
                          ?> -->
          
                       
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby" style=" background-color:#7e0926!important; color:white" >Wszyscy</a>
                   
                      
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby/rezyserzy" style=" background-color:#7e0926!important; color:white" >Reżyserzy</a>
                       <a class=" dropdown-item spectacl-menu text-center p-2" href="https://gardzienice.org/dawnosc/osoby/aktorki-i-aktorzy" style=" background-color:#7e0926!important; color:white" >Aktorki i Aktorzy</a>
          
                        <!-- <?php 
                      // } 
                      ?> -->
                    
                    </div>
                    </div>
       <h1>
       <?php 
       the_title();
       ?>
       </h1>
        <?php   $args = array(
            'post_type' => 'osoby',
            'posts_per_page' => '200',
            'order' => 'ASC',
            'category_name' => 'Aktor',
            
        
            
            );   
            $posts = new WP_Query($args);    
            if ($posts->have_posts()): ?>
            <div class="kontainer" id="tab1C">
            
                <div class="row ml-3">
                          
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>

            <?php if(has_post_thumbnail()): ?>
                  <div class="theatre-artist-container shadow">
                  <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?></a>    
                  <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
            </div>
            <?php else: ?>
              <div class="theatre-artist-container">
              <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
              <a href="<?php the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
              </div>
            <?php endif; ?>

            <?php  endwhile;?>
</div> 
</div> 

<?php  endif; ?>
       <?php elseif(is_page('festiwale-archiwalne')):?>
                        <h1 class="mb-2"><?php the_title();?></h1>
                        <select  onchange="location = this.value;">
                          <option value="https://gardzienice.org/dawnosc/festiwale-archiwalne/festiwale/">Festiwale</option>
                          <option value="https://gardzienice.org/dawnosc/festiwale-archiwalne/projekty/">Projekty</option>
                         
                        </select>
		<?php
			$args = array(
                    'post_type' => 'festiwale-archiwalne',
                    'posts_per_page' => '-1',
                    'category_name' => 'festiwal'
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
        endif;  ?>
         <?php   elseif(is_page('spektakle-archiwalne')):?>
          <h1 class="mb-2"><?php the_title();?></h1>
          <?php
			$args = array(
                    'post_type' => 'spektakle-archiwalne',
                    'posts_per_page' => -1,
                    );
                    
            $posts = new WP_Query($args);
                 
			if($posts->have_posts()):?>
				<div class="row theatre-row">
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
        endif;  ?>
                       
     <?php   elseif(is_page('wydarzenia-towarzyszace')):?>
      <h1 class="mb-2"><?php the_title();?></h1>
      <?php
  $args = array(
                'post_type' => 'wydarzenia-towarzysz',
                'posts_per_page' => -1,
                );
                
        $posts = new WP_Query($args);
             
  if($posts->have_posts()):?>
    <div class="row theatre-row">
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
    endif;  ?>
    <?php   elseif(is_page('konferencje')):?>
      <h1 class="mb-2"><?php the_title();?></h1>
      <?php
  $args = array(
                'post_type' => 'konferencje',
                'posts_per_page' => '15',
                );
                
        $posts = new WP_Query($args);
          $blank = get_field("blank");
  if($posts->have_posts()):?>
    <div class="row theatre-row mx-auto">
      <?php
        while ($posts->have_posts()) : $posts->the_post();
           if(has_post_thumbnail()): ?>
          <div class="theatre-artist-container">
            <?php if(has_category("PDF")): ?>
          <a href="<?php the_permalink(); ?>" target="_blank"	> <?php the_post_thumbnail('medium'); ?></a>    
          <a href="<?php   the_permalink(); ?>" target="_blank" class="theatre-artist-link"><?php the_title(); ?></a>
              <?php else: ?>
                <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?></a>    
          <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
                <?php endif; ?>
      </div>
      <?php else: ?>
      <div class="theatre-artist-container">
      <?php if(has_category("PDF")): ?>
      <a href="<?php the_permalink(); ?>" target="_blank"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
      <a href="<?php   the_permalink(); ?>" target="_blank" class="theatre-artist-link"><?php the_title(); ?></a>
      <?php else: ?>
        <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
      <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
        <?php endif; ?>
      </div>
      <?php endif; 
       endwhile;	?>
  </div><?php
     wp_reset_postdata();
    endif;  ?>
    <?php   elseif(is_page('rezydencje')):?>
      <h1 class="mb-2"><?php the_title();?></h1>
      <?php
  $args = array(
                'post_type' => 'rezydencje',
                'posts_per_page' => -1,
                );
                
        $posts = new WP_Query($args);
             
  if($posts->have_posts()):?>
    <div class="row theatre-row">
      <?php
        while ($posts->have_posts()) : $posts->the_post();
           if(has_post_thumbnail()): ?>
          <div class="theatre-artist-container">
          <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?></a>    
          <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
      </div>
      <?php else: ?>
      <div class="theatre-artist-container">
      <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
      <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
      </div>
      <?php endif; 
       endwhile;	?>
  </div><?php
     wp_reset_postdata();
    endif;  ?>
    <?php   elseif(is_page('dydaktyka')):?>
      <h1 class="mb-2"><?php the_title();?></h1>
      <?php   the_content();
      
  $args = array(
                'post_type' => 'minione-dydaktyka',
                'posts_per_page' => '15',
                );
                
        $posts = new WP_Query($args);
             
  if($posts->have_posts()):?>

    <div class="row justify-content-center">
      <?php
        while ($posts->have_posts()) : $posts->the_post();
           if(has_post_thumbnail()): ?>
          <div class="theatre-artist-container">
          <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?></a>    
          <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
      </div>
      <?php else: ?>
      <div class="theatre-artist-container">
      <a href="<?php the_permalink(); ?>"><img src="https://gardzienice.org/wp-content/uploads/2020/11/postac.png"></a>
      <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
      </div>
      <?php endif; 
       endwhile;	?>
  </div><?php
     wp_reset_postdata();
    
    endif;  ?>
          <?php 
            else: 
              the_content(); 
        
        endif;
                ?>   
     
             </div>
       




<?php get_footer();?>


</div>
</div>



</section>