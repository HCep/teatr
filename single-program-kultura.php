
<?php get_header();
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3');
$image_4 = get_field('image_4');
$image_5 = get_field('image_5');

?>
<div class="container-fluid">
    <div class="row justify-content-between">
<div class="col-md-3 mt-5">
<?php if($blog_id == 2): ?>
   <a class="d-block mb-3" href="https://gardzienice.org/en/program-kultura">Return</a>
   <?php else:?>
 <a class="d-block mb-3" href="https://gardzienice.org/program-kultura">Powrót</a>
 <?php endif; ?>
		<?php $args = array(
                     'post_type' => 'program-kultura',
                     'posts_per_page' => 15
                  );

                  $posts = new WP_Query( $args );
                  if($posts->have_posts()):
                     while($posts->have_posts()): $posts->the_post(); ?>
                     <div class="spectacl-menu mb-2 mx-auto ">
                        <a href="<?php the_permalink(); ?>" class="spectacl-menu-link mx-auto d-block"><?php the_title(); ?></a>

                     </div>
                  <?php endwhile; ?>
              

                  <?php endif; ?>
                  <?php
                  wp_reset_postdata();
                  ?>
                     	 <div class="my-2 divorder">
				
				 <div class=" my-3">
                        <img class="d-block mx-auto mb-5" src="<?php echo $image_1['url']; ?>" width="160" alt="fundusze norweskie logo">
                        <img class="d-block mx-auto mt-3" src="<?php echo $image_2['url']; ?>" width="160" alt="logo ministerstwa kultury dziedzictwa narodowego i sportu">
						
						</div>
						<?php  if($blog_id == 1): 
							$partnerzy = get_field('partnerzy');?>
							<h3 class="mt-5 mx-auto font-weight-bold my-3 py-3  text-center"><?php echo $partnerzy; ?></h3>
					<?php else: 
					$partners = get_field('partners');?>
					<h3 class="mt-5 mx-auto font-weight-bold my-3 py-3  text-center"><?php echo $partners; ?></h3>
					<?php endif; ?>
					<ul class="d-block w-100 px-0">
				<li class="d-block  w-75 mx-auto my-2"> 
					<a class="my-2 mx-auto" href="" target="_blank">
				 	    <img class="d-block mx-auto" src="<?php echo $image_3['url']; ?>" alt="logo gardzienice" width="120" height="40">
					 </a>
					 </li>
				  	<br>
				  	<li class="d-block w-75 mx-auto my-2">  <a class="my-3 mx-auto" href="http://www.stella-polaris.com/" target="_blank">
				     	<img class="d-block mx-auto" src="<?php echo $image_4['url']; ?>" alt="logo stella" width="120" height="40">
				     </a></li>
				  	<br>
					  <li class="d-block  w-75 mx-auto my-2">  <a class="my-2 mx-auto" href="spotkaniakultur.com" target="_blank">
				  	    <img class="d-block mx-auto"  src="<?php echo $image_5['url']; ?>" alt="spotkaniakultur" width="120" height="40">
					 
					</a></li>
					</ul>
				
					</div>
                </div>
				  <div class="col-md-8 px-2 text-justify divorder">
					<h1 class="entry-title mt-3"><?php the_title(); ?></h1>  
					
					  <?php the_content(); ?>
                  </div>
                  </div>
                  </div>
                  <?php get_footer();?>