<?php
/**
 * Default Events Template
 */
?>
<?php
if ( !defined('ABSPATH') ) { die('-1'); }

//remove breadcrumb

?>

<?php do_action( '__before_main_wrapper' ); ##hook of the header with get_header ?>
<div id="main-wrapper" class="<?php echo tc__f( 'tc_main_wrapper_classes' , 'container' ) ?>">

    <?php do_action( '__before_main_container' ); ##hook of the featured page (priority 10) and breadcrumb (priority 20)...and whatever you need! ?>
    
    <div class="container" role="main">
        <div class="row-fluid">

       
                
                <div id="content" class="<?php echo tc__f( '__screen_layout' , tc__f ( '__ID' ) , 'class' ) ?> article-container">
                    
			<?php do_action ('__before_loop');##hooks the header of the list of post : archive, search...?>
						<div id="tribe-events-pg-template">
							<?php tribe_events_before_html(); ?>
							<?php tribe_get_view(); ?>
							<?php tribe_events_after_html(); ?>
						</div> <!-- #tribe-events-pg-template -->

                    	<?php do_action ('__after_loop');##hook of the comments and the posts navigation with priorities 10 and 20 ?>

                </div><!--.article-container -->

           

        </div><!--.row -->
    </div><!-- .container role: main -->

    <?php do_action( '__after_main_container' ); ?>

</div><!--#main-wrapper"-->

<?php do_action( '__after_main_wrapper' );##hook of the footer with get_get_footer ?>