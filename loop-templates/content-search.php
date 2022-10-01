<meta name="robots" content="noindex">
<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>






<?php if(has_post_thumbnail()): ?>
                  <div class="theatre-artist-container">
                  <a href="<?php the_permalink(); ?>"	> <?php the_post_thumbnail('medium'); ?></a>    
                  <a href="<?php the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
              </div>
              <?php else: ?>
              <div class="theatre-artist-container">
              <a href="<?php the_permalink(); ?>"><img src="https://testcms.pl/wp-content/uploads/2020/11/postac.png"></a>
              <a href="<?php   the_permalink(); ?>" class="theatre-artist-link"><?php the_title(); ?></a>
              </div>
              <?php endif; ?>
				
	