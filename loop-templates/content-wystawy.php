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
<div class="theatre-news-template justify-content-center mx-1 my-2" style="box-shadow:0px 1px 3px rgba(0, 0, 0, 0.2);">
		
		<div class="mb-2 w-100 px-0 theatre-post-thumbnail" style="max-height:400px; overflow:hidden;">
      <a href="<?php the_permalink(); ?>">  <?php echo get_the_post_thumbnail( $post->ID, 'medium-large' ); ?> </a>
    
    </div>
		
		<div class="col-12 p-3 theatre-text-category-container">
	
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
