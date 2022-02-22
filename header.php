<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jadoo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'jadoo'); ?></a>

		<header id="masthead" class="header">
			<div class="container">

				<nav class="navbar" id="navbar">
					<div class="navbar__branding">
						<?php

						if (is_front_page() && is_home()) : ?>
							<h1 class="site-title">
								<?php
								if (get_custom_logo()) :
									the_custom_logo();
								else :
								?>
									<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
								<?php
								endif; ?>
							</h1>
						<?php
						else :
						?>
							<p class="site-title">
								<?php
								if (get_custom_logo()) :
									the_custom_logo();
								else :
								?>
									<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
								<?php
								endif; ?>
							</p>
						<?php
						endif;
						?>
					</div><!-- .site-branding -->
					<button class="navbar__togller btn" data-toggle="collapse" aria-label="Toggle navigation" id="toggle-btn">
						<img class="toggle-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/toggle.png" alt="toggle icon">
					</button>

					<div class="navbar__navigation" id="navigation-collapse">

						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>

						<div class="navbar__navigation__actions">
							<button class="btn contactus-btn">Contact us</button>
							<select class="languages-select">
								<option value="en">EN</option>
								<option value="ar">AR</option>
							</select>
						</div>
					</div>
				</nav>
				<?php //if (is_front_page() && is_home()) : 
				?>
				<section class="hero">
					<div class="hero__textcopy">
						<p class="tagline">
							Best Destinations around the world
						</p>
						<h2 class="heading">
							Travel, <span class="heading__special">enjoy</span>
							and live a new
							and full life
						</h2>
						<p class="description">
							Built Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the.
						</p>
						<div class="cta">
							<button class="btn findoutmore-btn">Find out more</button>
							<button class="btn playdemo-btn">
								<div class="play-circle">
									<img class="toggle-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/icons/play.png" alt="play icon">
								</div>
								play demo
							</button>
						</div>
					</div>
					<div class="hero__image">
						<img class="toggle-icon" src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/hero-man.png" alt="happy traveller man">
					</div>
				</section>
				<?php //endif; 
				?>
			</div>

		</header><!-- #masthead -->