<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">
					<?php	if($blog_id == 1): ?>
						<h1 class="page-title"><?php esc_html_e( 'Ups! Strona nie została znaleziona.', 'understrap' ); ?></h1>
					<?php	elseif($blog_id == 2): ?>

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>
<?php endif;?>
						</header><!-- .page-header -->

						<div class="page-content">
						<?php	if($blog_id == 1): ?>
							<p><?php esc_html_e( 'Wygląda na to, że nic tutaj nie znaleziono. Może spróbuj wyszukiwania lub kliknij jeden z odnośników poniżej?

', 'understrap' ); ?></p>
							<?php	elseif($blog_id == 2): ?>
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'understrap' ); ?></p>
							<?php endif;?>
							<?php get_search_form(); ?>
									<br />
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						

								<div class="widget widget_categories">
								<?php	if($blog_id == 1): ?>
									<h2 class="widget-title">Najczęściej wyświetlane:</h2>
									<?php	elseif($blog_id == 2): ?>
									<h2 class="widget-title">Most viewed:</h2>
<?php endif;?>
									<ul>
									<li><a href="https://gardzienice.org/mec-category/spektakle/" tab="_blank" role="link">Najbliższe pokazy spektakli</a>
</li>
									<li>
<a href="https://gardzienice.org/repertuar/" tab="_blank" role="link">Repertuar</a></li>
									<li><a href="https://gardzienice.org/aktualnosci/" tab="_blank" role="link">Aktualności</a></li>
									<li><a href="https://gardzienice.org/gardzienice-online/" tab="_blank" role="link">„GARDZIENICE” ONLINE</a></li>
									<li>
<a href="https://gardzienice.org/?page_id=144" tab="_blank" role="link">Aktualne wystawy</a></li>
									
										
									</ul>

								</div><!-- .widget -->

							

				

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
