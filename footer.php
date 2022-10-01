
				</div>
				<footer class="site-footer" id="colophon">
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
wp_footer();
$container = get_theme_mod( 'understrap_container_type' );
?>
 <?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?> 

<?php if(is_page('spektakle-online')): ?>
	<div id="wrapper-footer wrapper-footer-online" style="position:relative;">
	<?php else: ?>
<div id="wrapper-footer" style="position:relative;">
<?php endif; ?>
	<div class="container-fluid p-0">


		
		

				<?php if(is_front_page()):?>
				<div class="front-page-footer">	<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?></div>
	<?php wp_footer(); ?>
<?php else: ?>
	<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>

	<?php 
endif;
	
	?>

				

				

					
				

		</div><!-- container end -->
		<?php		
	global $blog_id;
 
    global $post;
    $post_slug = $post->post_name;

	$switcher = get_field('switcher');
		 if($blog_id == 2): 
		 ?>
			<div class="translate-div" aria-label="Zmień język">
			<?php if(!empty($switcher)): ?>
			<?php	if ( !is_front_page() && is_home() ): ?>
						<a href="https://gardzienice.org/aktualnosci/">	
			<?php else: ?>
					
					<a href="<?php echo $switcher; ?>">
					<?php endif;?>
				<?php else: ?>
					<?php	if ( !is_front_page() && is_home() ): ?>
						<a href="https://gardzienice.org/aktualnosci/">	
			<?php else: ?>
					
					<a href="<?php echo get_home_url(); ?>/<?php echo $post_slug; ?>">
					<?php endif;?>
					<?php endif;?>
		
			<img class="img-fluid" style="box-shadow:0px 2px 4px #444;" src="https://gardzienice.org/wp-content/uploads/2020/12/pl_PL.png" alt="Polska wersja">
			<?php if(is_front_page()): ?>
			<span style="color:white!important; font-size:10px; text-shadow:0px 0px 1px black;">POLSKA WERSJA</span>
			<?php else: ?>
			<span class="language-version-link">POLSKA WERSJA</span>
				<?php endif;?>
			</a>
				</div> 

		<?php else: 
			 ?>
			<div class="translate-div" aria-label="Change language version">
			<?php if(!empty($switcher)): ?>
			<?php	if ( !is_front_page() && is_home() ): ?>
  			
						<a href="https://gardzienice.org/en/aktualnosci/">	
				<?php else:?>
			
				<a href="<?php echo $switcher; ?>">
				<?php endif;?>
			
				<?php else: ?>
					<?php	if ( !is_front_page() && is_home() ): ?>
						<a href="https://gardzienice.org/en/aktualnosci/">	
				<?php else:?>
					<a href="<?php echo get_home_url(); ?>/en/<?php echo $post_slug; ?>">
					<?php endif;?>
					<?php endif; ?>
			<img class="img-fluid" style="box-shadow:0px 2px 4px #444;" src="https://gardzienice.org/wp-content/uploads/2020/12/gb_GB.png" alt="English version" />
			
			<?php if(is_front_page()): ?>
			<span style="color:white!important; font-size:12px;  text-shadow:0px 0px 1px black;">ENGLISH VERSION</span>
			<?php else: ?>
			<span class="language-version-link">ENGLISH VERSION</span>
				<?php endif;?>
			</a>
			<div>
			
			</div>
				</div> 
		<?php endif; ?>
	

</div><!-- wrapper end -->



</div><!-- #page we need this extra closing tag here -->
<!-- #colophon -->
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("thBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
</footer>
</body>

</html>

