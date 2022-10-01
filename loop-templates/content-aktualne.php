
<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

    
<?php while ( have_posts() ) : the_post(); ?>
<div class=" shadow-sm p-3 mx-3 mx-1 my-3 col-lg-2 col-md-3 col-4 theatre-search-result" style="background-color:#fff;">
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>	
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?><br />
        Zobacz </a> 
    
</div>

    <?php endwhile; ?>
    

                      
