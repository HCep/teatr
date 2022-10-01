<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$plik = get_field('file_pdf');

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php 
		
		
		the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
 <div class="row justify-content-end">
<div class="icons-print-down">
	<?php if($blog_id == 2): ?>
<a arial-label="print" title="Print" onclick="window.print()">
<?php else: ?>
<a arial-label="print" title="Drukuj" onclick="window.print()">
<?php endif; ?>
<svg xmlns="http://www.w3.org/2000/svg" width="20.504" height="18.454" viewBox="0 0 20.504 18.454" style="font-size: calc(16px); line-height: calc(24px); transform: scale(1, 1); padding-left: 0px;" role="print">
                                        <path id="path" d="M647.729,1120.726a3.154,3.154,0,0,1,3.076,3.076v6.151h-4.1v4.1H634.4v-4.1h-4.1V1123.8a3.154,3.154,0,0,1,3.076-3.076ZM646.7,1115.6v4.1H634.4v-4.1Zm-2.05,16.4v-5.126h-8.2V1132Zm2.358-7.484a.991.991,0,1,0-.307-.718A.931.931,0,0,0,647.011,1124.519Z" transform="translate(-630.3 -1115.6)" fill="#707070"></path>
									</svg></a>
									<?php if($blog_id == 2): ?>
								<a rel="noreferrer" title="Save as pdf" aria-label="save as pdf" role="save as pdf" href="<?php the_field('file_pdf'); ?>" target="_blank">
								<?php else:?>
								<a rel="noreferrer" title="Zapisz jako pdf" aria-label="save as pdf" role="save as pdf" href="<?php the_field('file_pdf'); ?>" target="_blank">
							


									<?php endif;?>
								<svg xmlns="http://www.w3.org/2000/svg" width="16.403" height="20.504" viewBox="0 0 16.403 20.504">
								<path id="path" d="M457.752,1045l6.151,6.151v12.3a2.1,2.1,0,0,1-2.05,2.05h-12.3a2.1,2.1,0,0,1-2.05-2.05v-16.4a2.1,2.1,0,0,1,2.05-2.05Zm2.05,12.3v-2.05h-8.2v2.05Zm0,4.1v-2.05h-8.2v2.05Zm-3.076-9.227h5.639l-5.639-5.639Z" transform="translate(-447.5 -1045)" fill="#707070"></path></svg>
                                      
                                </a>
                            </div>
							</div>
		<div class="entry-meta theatre-news-img">

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	
<hr class="my-3">
	<div class="entry-content">

		<?php the_content(); ?>
		<?php
    global $post;
    $post_slug = $post->post_name;
?>
		<div class="dropdown">
 <button class="theatre-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Udostępnij
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item my-2" href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink();?>">
<span>Udostępnij wpis na e-mail</span> <i class="far fa-paper-plane" style="vertical-align:middle; font-size:1.5em;"></i></a>
<div class="fb-share-button " data-href="https://gardzienice.org/" data-layout="button" data-size="small"><a class="dropdown-item my-2" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgardzienice.org%2F<?php echo $post->post_name;?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><span>Udostępnij wpis na facebooku</span></a></div>
<a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fwww.gardzienice.org%2F&amp;ref_src=twsrc%5Etfw&amp;text=<?php the_title(); ?>&amp;tw_p=tweetbutton&amp;url=https%3A%2F%2Fwww.gardzienice.org%2F<?php echo $post->post_name;?>" class="twitter-share-button dropdown-item my-2" data-size="large" data-url="https://dev.twitter.com/web/tweet-button" style="color:#1da1f2!important;"><i class="fab fa-twitter-square" style="font-size:1.5em; vertical-align:middle;"></i> <span>Tweetnij</span></a>

</div>
</div>
		
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>
				


	</div><!-- .entry-content -->

	<footer class="entry-footer">
<?php if(is_user_logged_in()): ?>
		<?php understrap_entry_footer(); ?>
<?php endif; ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
