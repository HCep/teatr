<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<?php if ( has_category('minione') ) : ?>

<section class="dawnosc-section">
    <div class="container-fluid" id="content">
        <div class="row justify-content-center mt-5">
           
   
  

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

	
		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			
		<?php 
						get_template_part( 'loop-templates/content', 'search' );
						?>

		<?php endwhile; ?>
		</div>
	
	</div>
	</div>



</div>
</div>
</section>
				
					
				<?php else: ?>
					<div class="container-fluid py-5" style="background-color:#f6f6f6">
    <div class="row">
  <div class=" shadow col-md-3 p-4" style="background-color:#fff;">
    
  <?php
								printf(
									/* translators: %s: query term */
                                    '<h4 class="entry-title">' .	esc_html__( 'Search Results for: %s', 'ivory_search' ),
									 get_search_query() . '</h4>'
                                );
                               ?> <hr class="my-3"> <?php
   global $wp_query;
   ?> <h4> <?php $not_singular = $wp_query->found_posts > 1 ? " " : ""; // if found posts is greater than one echo results(plural) else echo result (singular)
   echo " Liczba wyników: ".$wp_query->found_posts ;
 
   
   ?>
	
    </div>
<div class="col-md-9 p-0 m-0">
    <div class="row  mx-auto justify-content-center">  

					<?php get_template_part( 'loop-templates/content', 'aktualne' ); ?>
					</div> 
</div>
</div>

</div>
					
					<?php endif; ?>
	
				

	
<div class="row mx-3 my-3">
			<?php understrap_pagination(); ?>

			</div>

	
<?php get_footer(); ?>
