<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#343540">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( is_404() ) {} else { ?>

<nav class="navbar-ft">
	<div class="container-center">
		<div class="row">
			<div class="col-12">
				<div class="navbar-left">
					
					<div class="nl-site-title">
						<h1><a href="<?php echo esc_url( get_home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
					</div>
					
					<div class="nl-menu-toggle">
						<span onclick="Openmenu()">
							<i class="fas fa-bars"></i>
						</span>
					</div>
					
					<div class="nl-menu" id="Menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary-menu'
								)	
							);
						?>						
						<span class="close-menu" onclick="Closemenu()"><i class="fas fa-times"></i></span>
					</div>
				</div>
				
				<div class="navbar-right">
					<span class="site-search">
						<i class="fas fa-search open-search" id="Icon-os" onclick="Opensc()"></i>
						<i class="fas fa-times close-search" id="Icon-cs" onclick="Closesc()"></i>
					</span>
				</div>
			</div>
		</div>
	</div>
</nav>

<section class="search-container" id="Sc-container">
	<div class="container-center">
		<div class="row">
			<div class="col-12">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>

<?php } ?>