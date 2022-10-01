<?php
/**
 * Template Name: Domyślny szablon Gardzienice
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$titleSpectacl = get_field('tytul_spektaklu');
$titleSpectacl2nd = get_field('tytul_eu_2nd');
$titleSpectacl3rd = get_field('tytul_spektaklu_3nd');
$titleSpectacl4th = get_field('tytul_spektaklu_4th');
$titleSpectacl5th = get_field('tytul_spektaklu_5th');
$titleSpectacl6th = get_field('tytul_spektaklu_6th');
$titleRepertuar = get_field('tytul_repertuaru');
$description = get_field('opis_spektaklu');
$place = get_field('miejsce_spektaklu');
$dataSpectacl = get_field('data_spektaklu');
$imgeSpectacl = get_field('obraz_spektaklu');
$information = get_field('dodatkowe_informacje');
$container = get_theme_mod( 'understrap_container_type' );
$calendarDesktop = get_field('calendar_short_desktop');
$calendarMobile = get_field('calendar_short_mobile');
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3');
$image_4 = get_field('image_4');
$image_5 = get_field('image_5');
$post_thumbnail_id = 4783;

$thumbnail_url = wp_get_attachment_image_url( $post_thumbnail_id, 'full');
?>

<?php if(is_page('zarezerwuj')): ?>
<div class="wrapper p-0 m-0" id="index-wrapper" style="overflow:hidden;">
<div class="container-fluid px-0 reserved" id="content" tabindex="-1" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
<?php elseif(is_page('repertuar') || is_page("sceny") || is_page("program-kultura") || is_page("wynajem") || is_page("filmy") || is_page("edukacja-online") || is_page("spektakle-online") || is_page("kontakt")): ?>
	<div class="wrapper" id="index-wrapper" style="overflow:hidden;">
	<div class="container-fluid" id="content" tabindex="-1">

	
	<?php else: ?>
		<div class="wrapper" id="index-wrapper" style="overflow:hidden;">
		<div class="container" id="content" tabindex="-1">
<?php endif; ?>

	<div class="row">
	
	<!-- Do the left sidebar check and opens the primary div -->
	<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
		
	<main class="site-main" id="main">
	
	<?php if(is_page('repertuar')): ?>
		<?php if( !empty($titleRepertuar) || !empty($description) || !empty($place) || !empty($dataSpectacl)):?>
			<div class="row">	
				<div class="col-md-5 p-3" style="float:left!important;"> 
			
					<h1 class="entry-title"> <?php the_title(); ?> </h1>
			
				
					<h4 class="mt-1"><?php echo the_field('tytul_repertuaru'); ?></h4>
					<div> <?php echo $description; ?> </div>
					
					<?php  if($blog_id == 1): ?>
					<h4 class="mt-5">Dodatkowe informacje: </h4>
					<?php else:?>
						<h4 class="mt-5">Additional information: </h4>
						<?php endif;?>
					<div><?php echo $information; ?></div>
				</div>
				<div class="col-md-7"  style="float:left!important;">
					<img src="<?php echo $imgeSpectacl; ?>" >
				</div>
				<div class="col-10 mx-auto">
					<hr class="mt-5" style="background-color:#bb2525; height:1.5px;">
				</div>
				<div class="col-11 mx-auto mt-5 p-2" style="font-size:100%!important;">
				<div class="desktop-calendar" id="calendar"><?php echo do_shortcode($calendarDesktop); ?></div>
				<div class="mobile-calendar mx-auto" id="calendar">
			
				
				<?php echo do_shortcode($calendarMobile); ?></div>
				
			</div>	
		<?php endif; ?>

	<?php elseif(is_page('spektakle-online')):
		$poz1 = get_field('poz_menu_1');
		$poz2 = get_field('poz_menu_2');
		$poz3 = get_field('poz_menu_3');
		$poz4 = get_field('poz_menu_4');
		$poz5 = get_field('poz_menu_5');
		$poz6 = get_field('poz_menu_6');


			  if($blog_id == 1): ?>
			   <a href="https://gardzienice.org/gardzienice-online">Powrót</a>
			   <?php else:?>
				<a href="https://gardzienice.org/gardzienice-online">Return</a>
				<?php endif;?>
			   <div class="row justify-content-center">				
			   <div class="col-lg-3">
			
			   <ul class="theatre-tab-online px-sm-2 px-0" id="tabs">
			
				<?php if($poz1):?>
					   <li class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="tab1" ><?php echo $poz1; ?></a></li>
					   <?php endif; ?>
					   <?php if($poz2): ?>
					   <li class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="tab2" >
					<?php echo $poz2; ?>
					   </a></li>
					   <?php endif; ?>
					   <?php if($poz3): ?>
					   <li   class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="tab3" >
					<?php echo $poz3; ?>
					   </a></li>
					   <?php endif; ?>
					   <?php if($poz4): ?>
					   <li   class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="tab4" >
					<?php echo $poz4; ?>
					   </a></li>
					   <?php endif; ?>
					   <?php if($poz5): ?>
					   <li   class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="tab5" >
					<?php echo $poz5; ?></a></li>
					<?php endif; ?>
					<?php if($poz6): ?>
					<li   class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="tab6" >
					<?php echo $poz6; ?>
					   </a></li>
					 
				   <?php endif; ?>
				   </ul></div>	
				 
				   <div class="kontainer col-lg-8 h-100 px-0 row justify-content-center" id="tab1C">
				   				<?php
			$args = array(
                    'post_type' => 'spektakle-online',
					'post_per_page' => '15',
					'orderby' => 'title',
					'order' => 'ASC',
					'category_name' => 'trailer'
                    );
                    
            $posts = new WP_Query($args);
							 
			if($posts->have_posts()):?>

			 
			
		<?php	 while ($posts->have_posts()) : $posts->the_post();
				   
				  ?>
			   <div class="col-lg-3 col-sm-6 my-2">
			<div class="online-container theatre-artist-container">
				<a class="spectacl-link" href="<?php   the_permalink(); ?>">
				 <?php the_post_thumbnail('medium'); ?> </a>
					
					<a class="spectacl-online-title">	
						 <?php the_title(); ?>
					</a>
			    </div> </div>
				   <?php
				   endwhile;
				   ?>		
				   	
				   <?php
				    wp_reset_postdata();
				   endif;
				   ?> </div> 

				
<div class="kontainer col-lg-8 h-100 " id="tab2C">
					
				   	
					<?php the_content();?>
					
									   </div>
									   				
<div class="kontainer col-lg-8 h-100 " id="tab3C">
					
				   	
<?php
			$args = array(
                    'post_type' => 'spektakle-online',
					'post_per_page' => '15',
					'category_name' => 'Próba covid'
                    );
                    
            $posts = new WP_Query($args);
							 
			if($posts->have_posts()):?>

			 
			
		<?php	 while ($posts->have_posts()) : $posts->the_post();
				   
				  ?>
			   <div class=" col-sm-6">
		<?php the_content();?>
		
		 </div>
				   <?php
				   endwhile;
				   ?>		
				   	
				   <?php
				    wp_reset_postdata();
				   endif;
				   ?>  
					
									   </div>

				 
		
	<?php elseif(is_page('aktualne-projekty')):?>
		<div class="col-12">	
			<?php the_content();?> 
		</div>
		<?php
			$args = array(
                    'post_type' => 'projekty-aktualne',
                    'post_per_page' => '15',
                    );
                    
            $posts = new WP_Query($args);
                 
			if($posts->have_posts()):?>
				<div class="row project-row">
					
					<?php
						while ($posts->have_posts() ) : $posts->the_post();
					?>
				<div class="theatre-project-container col-md-3 border mx-1 p-4 w-100">
				
					<a class="d-block my-3" href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?> </a>
						<hr class="my-3">
					<a href="<?php   the_permalink(); ?>" class="theatre-project-title" style="text-align:center;"  >	
						 <?php the_title(); ?>
					</a>
				<p class="theatre-project-excerpt d-block mt-3"><?php the_excerpt(); ?></p>	
			    </div>
					<?php endwhile;	?>
			</div><?php
				 wp_reset_postdata();
				endif;  ?>
			
				 <?php elseif(is_page('obiekty')):?>
		<div class="col-12">	
		<h1 class="entry-title">	<?php the_title(); ?></h1>
			<?php the_content();?> 
		</div>
		<?php
			$args = array(
                    'post_type' => 'obiekt',
                    'posts_per_page' => '-1',
					
                    );
                    
            $posts = new WP_Query($args);
                 
			if($posts->have_posts()):?>
				<div class="row spectacl-row ">
					<?php
						while ($posts->have_posts()) : $posts->the_post();
					?>
				<div class=" theatre-object-container">
				
					<a href="<?php the_permalink(); ?>" class="theatre-object"	> <?php the_post_thumbnail('medium'); ?> </a>
				
					<a href="<?php   the_permalink(); ?>" class="theatre-object-title" >	
						 <?php the_title(); ?>
					</a>
			    </div>
					<?php endwhile;	?>
			</div><?php
				 wp_reset_postdata();
				endif;  ?>
				 <?php elseif(is_page('sceny')):?>
					
		<div class="row justify-content-between">
	
		<?php
			$args = array(
                    'post_type' => 'obiekt',
					'posts_per_page' => '-1',
					'category_name' => 'sceny'
                    );
                    
            $posts = new WP_Query($args);
                 
			if($posts->have_posts()):?>
			
		<ul class="theatre-stage">
		
					<?php
						while ($posts->have_posts()) : $posts->the_post();	?>
					
						<?php
						if (has_post_thumbnail()) {
							$thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
							$thumbnail_url = $thumbnail_data[0];
						}
					
						?>



					<li  class="theatre-stages shadow" style="background-image:url('<?php echo $thumbnail_url ?>')">
					
					<a href="<?php   the_permalink(); ?>" class="theatre-stage-title">	
						 <?php the_title(); ?>
					</a>
					</li>
					<?php endwhile;	?>
				<?php
				 wp_reset_postdata();?>
				     </ul>
				<?php endif;  ?>

	<?php elseif(is_page('program-kultura')):	?>
		<div class="row justify-content-between">
		<div class="col-md-3">
		<?php $args = array(
                     'post_type' => 'program-kultura',
                     'posts_per_page' => 15
                  );

                  $posts = new WP_Query( $args );
                  if($posts->have_posts()):
                     while($posts->have_posts()): $posts->the_post(); ?>
                     <div class="spectacl-menu mb-2 mx-auto">
                        <a href="<?php the_permalink(); ?>" class="spectacl-menu-link text-center d-block"><?php the_title(); ?></a>

                     </div>
                  <?php endwhile; ?>
              

                  <?php endif; ?>
                  <?php
                  wp_reset_postdata();
				  ?>
				 <div class="my-2 divorder">
			
				 <div class=" my-3 mt-5">
                        <img class="d-block mx-auto mb-5" src="<?php echo $image_1['url'];?>" width="160" alt="fundusze norweskie logo">
                        <img class="d-block mx-auto mt-3" src="<?php echo $image_2['url'];?>" width="160" alt="logo ministerstwa kultury dziedzictwa narodowego i sportu">
						
						</div>
						<?php  if($blog_id == 1): 
							$partnerzy = get_field('partnerzy');?>
					<h3 class="mt-5 mx-auto font-weight-bold my-3 py-3  text-center"><?php echo $partnerzy; ?></h3>
					<?php else: 
						$partners = get_field('partners');?>
						<h3 class="mt-5 mx-auto font-weight-bold my-3 py-3  text-center"><?php echo $partners; ?></h3>
					<?php endif; ?>
					<ul class="d-block w-100 pl-0">
				<li class="d-block  w-75 mx-auto my-2"> 
					<a class="my-2 mx-auto" href="" target="_blank">
				 	    <img class="d-block mx-auto" src="<?php echo $image_3['url'];?>" alt="logo gardzienice" width="120" height="40">
					 </a>
					 </li>
				  	<br>
				  	<li class="d-block w-75 mx-auto my-2">  <a class="my-3 mx-auto" href="http://www.stella-polaris.com/" target="_blank">
				     	<img class="d-block mx-auto" src="<?php echo $image_4['url'];?>" alt="logo stella" width="120" height="40">
				     </a></li>
				  	<br>
					  <li class="d-block  w-75 mx-auto my-2">  <a class="my-2 mx-auto" href="spotkaniakultur.com" target="_blank">
				  	    <img class="d-block mx-auto"  src="<?php echo $image_5['url'];?>" alt="spotkaniakultur" width="120" height="40">
					 
					</a></li>
					</ul>
				
					</div>
				</div>
				  <div class="col-md-8  px-2 text-justify divorder">
				<?php  if($blog_id == 1): ?>
					 <h1 class="mb-4" style="font-size:18px!important; font-weight:600; text-transform:none!important;">"Praktykowanie historii.
Norwegia i Polska - odnajdywanie w czasie i przestrzeni.
Interdyscyplinarne przedsięwzięcie Teatrów Stella Polaris i Ośrodka Praktyk Teatralnych Gardzienice (z Partnerami), w sferze: teatru i filmu; muzyki i tańca; sztuk wizualnych i refleksji akademickiej"</h1>
					 <?php else: ?>
						<h1 class="mb-4" style="font-size:18px!important; font-weight:600; text-transform:none!important;">"Practising history
Norway and Poland – rediscovering time and space.
Inter-disciplinary undertaking of theatres: “Stella Polaris” and “Gardzienice” Centre for Theatre Practices (with partners) in thefield of theatre and film, music and dance, visual arts and academic reflection"</h1>
					 <?php endif;?>
					  <?php the_post_thumbnail('full'); ?>
					  <?php the_content(); ?>
				  </div>
				  </div>
				  <?php elseif(is_page('wynajem')):
$image = get_field('obraz');?>
					<div class="row w-100 h-100  p-0 m-0" style="min-height:800px;">
<aside class="theatre-aside p-0 m-0 " style="overflow:hidden; position:relative; min-height:500px; height:auto; background-image:url(<?php the_field('obraz');?>); background-size:contain; background-repeat:no-repeat; background-attachment:fixed; background-position:left">


<!-- KOLARZ ZE ZDJĘCIAMI Z ACF -->


</aside>
<aside class="theatre-aside py-3 px-sm-5 px-3" style="height:auto; background-color:white;">
<h1 class="mb-5 text-center font-weight-bold"><?php the_title(); ?></h1>
<?php
						$args = array(
								'post_type' => 'wynajem',
								'posts_per_page' => '-1',
							
								);
								
						$posts = new WP_Query($args);
							 
						if($posts->have_posts()):?>
						
				<div class="row justify-content-center" style="position:relative" >
					
								<?php
									while ($posts->have_posts()) : $posts->the_post();	?>
								
									<div class="col-lg-5 wynajem-object">
									<a  href="<?php the_permalink(); ?>" class="wynajem-object-img"> 	<?php the_post_thumbnail(); ?>	
											</a>
											<a  href="<?php the_permalink(); ?>">	<h4 class="wynajem-object-title">	<?php the_title(); ?></h4></a>
											
										
											<div class="row justify-content-center wynajem-excerpt">
											<?php the_excerpt(); ?> 
											</div>

									</div>
							
								<?php endwhile;	?>
							<?php
							 wp_reset_postdata();?>
				</div>
							<?php endif;  ?>
<?php the_content();?>       		
</aside>	
</div>
				
<?php	elseif(is_page('filmy')):?>
	<?php  if($blog_id == 1): ?>
			   <a href="https://gardzienice.org/gardzienice-online">Powrót</a>
			   <?php else:?>
				<a href="https://gardzienice.org/gardzienice-online">Return</a>
				<?php endif;?>
	<?php 
		$args = array(
			'post_type' => 'wideo',
			'posts_per_page' => '-1',
			'category_name' => 'Film'
		
			); 
			$posts = new WP_Query($args);
							 
			 if($posts->have_posts()):?>
				<div class="row">				
				<div class="col-md-3"	>
				<ul class="theatre-tab-online" id="tabs">
				<?php  	$i = 0;
				$t = 0;
					while ($posts->have_posts()) : $posts->the_post();	
					
					$tab = "tab";
					$i++;
				?>
		
				<?php
					 if($blog_id == 2): ?>
						<li class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="<?php echo $tab.$i ?>" ><?php the_title(); ?></a></li>
					<?php else: ?>
						<li   class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="<?php echo $tab.$i ?>" ><?php the_title(); ?></a></li>
					<?php endif;
						endwhile;
					?>
				
					</ul></div>
				<?php	while ($posts->have_posts()) : $posts->the_post();
					
					$tab = "tab";
					$t++; ?>
 			<div class="kontainer col-md-8 h-100" id="<?php echo $tab.$t."C"?>">
				
					<?php
					the_content();
					?> </div>

					<?php
					endwhile;
					?>		 </div> </div>
					
					<?php
										  
										   wp_reset_postdata();
										  
					endif;
					?>
  <?php	elseif(is_page('edukacja-online')):?>
<?php  if($blog_id == 1): ?>
			   <a href="https://gardzienice.org/gardzienice-online">Powrót</a>
			   <?php else:?>
				<a href="https://gardzienice.org/gardzienice-online">Return</a>
				<?php endif;
		$args = array(
			'post_type' => 'wideo',
			'posts_per_page' => '-1',
			'category_name' => 'Edukacja'
		
			); 
			$posts = new WP_Query($args);
							 
			 if($posts->have_posts()):?>
				<div class="row">		
					<div class="col-md-3"	>
				<ul class="px-0 theatre-tab-online" id="tabs">
				<?php  	$i = 0;
				$t = 0;
					while ($posts->have_posts()) : $posts->the_post();	
					
					$tab = "tab";
					$i++;
				?>
		
				<?php
					 if($blog_id == 2): ?>
						<li class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="<?php echo $tab.$i ?>" ><?php the_title(); ?></a></li>
					<?php else: ?>
						<li   class="theatre-tab-link"  ><a tabindex="0" class="theatre-tab-link" id="<?php echo $tab.$i ?>" ><?php the_title(); ?></a></li>
					<?php endif;
						endwhile;
					?>
				
					</ul>
					</div>	
				<?php	while ($posts->have_posts()) : $posts->the_post();
					
					$tab = "tab";
					$t++; ?>
 			<div class="kontainer col-md-8 h-100" id="<?php echo $tab.$t."C"?>">
				
					<?php
					the_content();
					?> </div>
					
					<?php
					endwhile;
					?>		 </div> </div>
					
					<?php
					endif;
					?>

<?php elseif(is_page('wirtualne-zwiedzanie') || is_page("muzyka")): ?>
	<?php  if($blog_id == 1): ?>
			   <a href="https://gardzienice.org/gardzienice-online">Powrót</a>
			   <?php else:?>
				<a href="https://gardzienice.org/gardzienice-online">Return</a>
				<?php endif;?>
<div class="col-12">
		<h1 class="entry-title"><?php the_title(); ?></h1>

	<?php the_content();?>
	

	</div>
	

<?php else:?>
	<div class="col-12">
		<?php if(is_page('zarezerwuj')):?>
		<h1 class="entry-title text-center mb-0 pb-0"><?php the_title(); ?></h1>
		<?php else: ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php endif;?>
	<?php the_content();?>
	

	</div>


	<?php endif;?>
					

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

            <!-- Do the right sidebar check -->
          <?php  if(is_home()):
		 get_template_part( 'global-templates/right-sidebar-check' ); 
          endif; ?>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->
</div><!-- #index-wrapper -->

<?php get_footer(); ?>
