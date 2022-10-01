<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="entry-content ">
<div class="row justify-content-center mx-2 my-2" style="box-shadow:0px 1px 3px rgba(0, 0, 0, 0.2);">
		
		<div class="col-md-3 my-5"><?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?></div>
		
		<div class="col-md-8 my-5">
	
			<?php
			the_title(
				sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h3>'
			);
			?>
			
			<?php if ( 'post' == get_post_type() ) : ?>
	
			
	
			<?php endif; ?>	<?php the_excerpt(); ?>
	
				
			
	
		
	
		</div>
		<!-- .entry-content -->
	
	
		</div>
		</div>


</article><!-- #post-## -->
