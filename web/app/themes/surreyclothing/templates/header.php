<?php 

	//menu items
	$items = wp_get_nav_menu_items("primary_navigation");
	$items2 = wp_get_nav_menu_items("top_nav");

	$menu_items = array();
	$first_lvl 	= array();

	$i=-1;

	foreach($items2 as $item){
		if($item->menu_item_parent == 0){
			$i++;
			array_push($first_lvl, array('title' => $item->title, 'url' => $item->url, 'id' => $item->ID));
		} else {
			array_push($first_lvl[$i], array('title' => $item->title, 'url' => $item->url, 'parent' => $item->menu_item_parent ));
		}
	}

	foreach($items as $item){
		if($item->menu_item_parent == 0){
			$i++;
			array_push($first_lvl, array('title' => $item->title, 'url' => $item->url, 'id' => $item->ID));
		} else {
			array_push($first_lvl[$i], array('title' => $item->title, 'url' => $item->url, 'parent' => $item->menu_item_parent ));
		}
	}

	$menu_items = count($first_lvl);

?>

<header class="banner" role="banner">
	<div class="container">

	<div class="col-md-4 col-sm-10 col-xs-10 text-left no-border no-padding" style="background-color:transparent;">
		<div class="brand">
			<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
				<div class='brand'>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="img-responsive" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
			<?php else : ?>
				<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
		</div>
	<div class="visible-xs social-under">
			<a href="https://www.facebook.com/pages/Surrey-Clothing/334070626623592"><i class="fa fa-facebook-official"></i></a>
			<!--<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-twitter-square"></i></a>
			<a href="#"><i class="fa fa-youtube-square"></i></a> -->
		</div>
		
	</div>

	<div class="col-xs-2 visible-xs visible-sm visible-ms">
		<label for="mobileNavToggle" class="mobile-nav-toggle show-on-scroll-mobile">
			<div class="top-bar"></div>
			<div class="middle-bar"></div>
			<div class="bottom-bar"></div>
		</label>
	</div>

		<div class="overlayNav">
		<nav id="mobileNav" class="text-center">
			<ul>
			<?php
				//list all menu items
				for($x = 0; $x < $menu_items; $x++)
				{
					echo '<li><a href="'.$first_lvl[$x]['url'].'">'.strtoupper($first_lvl[$x]['title']).'</a></li>';
				}
			?>
			</ul>
		</nav>
	</div>

	<?php /* <div class="col-md-2 hidden-xs hidden-sm hidden-md social-icons">
		<a href="#"><i class="fa fa-facebook-official"></i></a>
		<a href="#"><i class="fa fa-instagram"></i></a>
		<a href="#"><i class="fa fa-twitter-square"></i></a>
		<a href="#"><i class="fa fa-youtube-square"></i></a>	
	</div>
	
	*/ ?>

	<div class="col-md-8 col-lg-7 hidden-xs hidden-sm text-right" style="margin-top:-25px;">
	  <div class="row">
	  	<div class="col-xs-6 text-right phone">
			<p>
			<a href="https://www.facebook.com/pages/Surrey-Clothing/334070626623592"><i style="font-size:20px;" class="fa fa-facebook-official"></i></a>
			<!--<a href="#"><i style="font-size:20px;" class="fa fa-instagram"></i></a>
			<a href="#"><i style="font-size:20px;" class="fa fa-twitter-square"></i></a>
			<a href="#"><i style="font-size:20px; margin-right:10px;" class="fa fa-youtube-square" style="margin-right:10px;"></i>--></a>
			<span class="phone"><i style="margin-right:5px;" class="fa fa-mobile"></i> (03) 9763 1101</span> </p>
		</div>
		<div class="col-xs-6 text-right no-padding">
			<nav role="navigation">
				<?php
					if (has_nav_menu('top-menu')){
						wp_nav_menu(['theme_location' => 'top-menu', 'menu_class' => 'nav']);
					}
				?>
			</nav>
		</div>
	  </div>
	  <div class="row">
		<nav role="navigation">
			<?php
				if (has_nav_menu('primary_navigation')) :
					wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
				endif;
			?>
		</nav>
	  </div>
	</div>

  </div>
</header>

	<?php if ( is_front_page() ) { ?>

	<div class="video-container">
		
		<video autoplay loop poster="http://www.surreyclothing.com.au/app/uploads/2015/05/video-img.jpg" id="bgvid">
			<source src="http://www.surreyclothing.com.au/app/uploads/2015/05/video-overlay.1.mp4" type="video/mp4">
		</video>

		<div class="overlay text-center hidden-xs">
	        <p>Established in 1965 Surrey Clothing is a Quality Supplier of School and Corporate Uniforms, Uniform Management Systems, and Branding Solutions</p>
	        
	    </div>

	</div>

	<?php } ?>


