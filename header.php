<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$logo1 = get_field('logo-1');
$dawnosc = get_field('link');
$container = get_theme_mod( 'understrap_container_type' );
$online = get_field('link_two');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="teatr gardzienice, teatr w gardzieniach, gardzienice, Gardzienice, Teatr w Gardzienicach, Teatr Gardzienice, Teatr w Lublinie, Lublin, teatr w Lublinie, kultura, sztuka w lublinie, sztuka w gardzienicach, sztuka, kultura w lublinie, kultura w gardzienicach">
	<meta name="deklaracja-dostępności" content="https://gardzienice.org/deklaracja-dostepnosci">
	<meta name="google-site-verification" content="ZSWJAnZw3vU2VWGvSPTygyEymX8hcOI_AOLwpWpeZik" >
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://gardzienice.org/wp-content/themes/understrap-child/css/custom-editor-style.css" rel="stylesheet" type="text/css">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JZT3CWT1J4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JZT3CWT1J4');
</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v12.0&appId=294924771571891&autoLogAppEvents=1" nonce="OXrPrZVW"></script>


<?php do_action( 'wp_body_open' ); 

$logo = get_field('logo-black'); 
$image = get_field('background-image');


?>
<?php if( !empty($image) && empty($video) ): ?>
	
	<div class="site" id="page" style="height:100%; background-repeat: no-repeat; background-image: url(<?php the_field('background-image'); ?>); background-position:top; background-color:black; background-size: cover; background-color:#06000a; ">


<?php elseif (!empty($video) && empty($image)): ?>
	<div class="site" id="page" style=" height:100%; background-repeat: no-repeat; background-position:top; background-color:black; background-size: cover; background-color:#06000a; ">
	<div class="fullscreen-bg">
<button id="mute-video">Mute video</button>
    <video muted autoplay loop class="fullscreen-bg__video" id="vid" >
  
        <source src="<?php echo the_field('background_video'); ?>" type="video/mp4" >
     
    </video>
   
</div>
<?php else: ?>
				<div class="site" id="page" style="overflow-x:hidden;">
		
<?php endif;?>
	
	
	<?php if(is_front_page()):
	?>
<div id="wrapper-navbar front-header" itemscope itemtype="http://schema.org/WebSite" style="height:250px; z-index:99;
    position:relative;">
		<nav class="navbar-toggle-md" role="navigation">
	<?php else: ?>
		<?php if(is_page('gardzienice-online-festiwal-generator-nadziei') || is_page('plutos-teatr-thiasos')|| is_page('z-gazet-naszych-codziennych') || is_page('swity-zespol-morye') || is_page('tao-historia-smoka')|| is_page('zespol-mundinova')):?>
		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite" style="background:black; height:63px;">
	
		<nav class="navbar-toggle-md black-nav" role="navigation">
		<?php else:?>
			<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite" style="height:63px;">
			<nav class="navbar-toggle-md white-nav" role="navigation">
	<?php endif; ?>
	<?php endif; ?>
			<div class="row testcms-flex">
		
			<?php if(is_front_page()): ?>
				<button class="navbar-toggle" role="button" type="button" id="theatre-top" data-target="#testcms-navbarslide" aria-controls="testcms-navbarslide" aria-expanded="false" aria-label="MENU">
				
						<span class="pl-2 py-1 menu-burger"style="font-family:montserrat;">MENU</span>
						<div class="hamburger-menu mr-sm-4 mr-3" aria-label="Menu">
						<span class="bar "></span>
					</div>
				</button>
			
			<?php else: ?>
			<button class="red-navbar-toggle" id="theatre-top" role="button" data-target="#testcms-navbarslide" aria-controls="testcms-navbarslide" aria-expanded="false" aria-label="MENU">
				
						<span class="pl-sm-2 py-1 pl-1 menu-burger" style="font-family:montserrat;">MENU</span>
						<div class="white-hamburger-menu mr-sm-4 mr-2" aria-label="Menu">
						<span class="white-bar"></span>
					</div>
				</button>
			
			<?php endif;?>
			<?php if(is_front_page()): ?>
					<div class="nav-center-button theatre-visible">
					<?php if(is_page('en')): ?>
							<a href="https://gardzienice.org/en/dawnosc/" class="center-link"><?php echo $dawnosc['title'] ;?></a>
							<a href="https://gardzienice.org/en/gardzienice-online" class="center-link">"GARDZIENICE" ONLINE</a> 
				<?php	else:?>
					<a href="<?php echo $dawnosc['url']; ?>" class="center-link"><?php echo $dawnosc['title'] ;?></a>
					<a href=" <?php echo $online; ?>" class="center-link">"GARDZIENICE" ONLINE</a> 
					</div>
				<?php	endif; ?>
				<?php if($logo): ?>
					<div class="logo-home mr-lg-3 mr-sm-2"> 
						<a href="<?php echo home_url(); ?>" role="logo">
					<img src="<?php echo $logo ?>" alt="Gardzienice"></a>
				
				</div>
					</div>
					<div class="nav-center-button theatre-invisible">
							<a href="<?php echo $dawnosc['url']; ?>" class="center-link" role="button"><?php echo $dawnosc['title'] ;?></a><a href=" <?php echo $online; ?>" class="center-link" role="button">"GARDZIENICE" ONLINE</a> 
					</div>
				<!-- display only for phones -->
					<ul class="nav-center-button theatre-phone">
						<li>	<a href="<?php echo $dawnosc['url']; ?>" class="center-link"><?php echo $dawnosc['title'] ;?></a></li>
						<li><a href=" <?php echo $online; ?>" class="center-link">"GARDZIENICE" ONLINE</a>  </li>	
					</ul>
				<?php endif; ?>
			<?php else: ?>
				<?php if(is_page('gardzienice-online-festiwal-generator-nadziei') || is_page('plutos-teatr-thiasos')|| is_page('z-gazet-naszych-codziennych') || is_page('swity-zespol-morye') || is_page('tao-historia-smoka')|| is_page('zespol-mundinova')):?>
				<div class="logo-page mr-sm-3 my-2 mr-md-5"><a href="<?php echo home_url(); ?>" role="logo"> 
				<img style="height:80%; filter:invert(1);" src="https://gardzienice.org/wp-content/uploads/2020/10/logo-1.png" alt="Gardzienice"></a></div>
			
				<?php else: ?>
					<div class="logo-page mr-sm-3 my-2 mr-md-5"><a href="<?php echo home_url(); ?>" role="logo"> <img style="height:80%;" src="https://gardzienice.org/wp-content/uploads/2020/10/logo-1.png" alt="Gardzienice"></a></div>
		
			<?php endif; ?> 
			
				
			<?php endif; ?> 
			

		<div class="container-fluid red-nav slideleft" id="testcms-navbarslide">
		

		<div class="row testcms-menu-bar mt-5" id="testcms-navbarslide">

		
			<div class="col-lg-8 col-sm-6 col-7 my-2 mr-md-0 mr-2 ml-0 ">
				<a href="<?php echo home_url(); ?>" role="logo" ><img src="https://gardzienice.org/wp-content/uploads/2020/10/logo.png" style="cursor:pointer;" alt="home"  width="200px" /></a>
			</div>
		<div class="col-lg-2 col-sm-4 mt-sm-5 search-control-desktop">
			
		
			<div aria-label="Wyszukiwarka"><?php echo do_shortcode( '[ivory-search id="665" title="Wyszukiwarka"]' ); ?></div>
		
			</div>
			<?php  if($blog_id == 2): ?>
				<button type="button" class="navbar-close my-md-0 my-4 " aria-label="Close" title="Close"></button>
<?php else: ?>
	<button type="button" class="navbar-close my-md-0 my-4 " aria-label="Zamknij" title="Zamknij"></button>
	<?php endif; ?>
			
		</div>
		<div class="col-lg-2 p-2 mt-sm-5 my-3 search-control-phone">
			
		
			<?php echo do_shortcode( '[ivory-search id="665" title="Wyszukiwarka"]' ); ?>
		
			</div>
		<div class="row">



				

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'testcms-menu-block col-12',
						'container_id'    => '',
						'menu_class'      => 'testcms-menu-items',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth' 		  => '5',
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),

					)
				);
				wp_nav_menu(
					array(
						'theme_location'  => 'phone_menu',
						'container_class' => 'theatre-phone-menu',
						'container_id'    => '',
						'menu_class'      => 'theatre-phone-links',
						'menu_id'         => 'phone_menu',
						'depth' 		  => '5',
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),

					)
				);
				wp_nav_menu(
					array(
						'theme_location'  => 'secondary_menu',
						'container_class' => 'testcms-menu-block col-12',
						'container_id'    => '',
						'menu_class'      => 'category-menu',
						'menu_id'         => 'secondary_menu',
						'depth' 		  => '5',
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),

					)
				);
			
				wp_nav_menu(
					array(
						'theme_location'  => 'extra_menu',
						'container_class' => 'testcms-menu-downcnt col-12',
						'container_id'    => '',
						'menu_class'      => 'testcms-menu-downlinks',
						'fallback_cb'     => '',
						'menu_id'         => 'extra_menu',
						'depth' 		  => '5',
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						

					)
				);
				wp_nav_menu(
					array(
						'theme_location'  => 'extrathree_menu',
						'container_class' => 'theatre-menu-logs col-12',
						'container_id'    => '',
						'menu_class'      => 'row justify-content-around',
						'fallback_cb'     => '',
						'menu_id'         => 'extra_menu',
						'depth' 		  => '5',
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						

					)
				);
			
				  
				
				?>
			
		
		
		
	
			</div>
			</div>
		</nav><!-- .site-navigation -->


	<button id="topBtn"><i class="fas fa-arrow-up"></i></button>

	
	</div>

	