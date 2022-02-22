<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jadoo
 */

?>

<footer id="colophon" class="site-footer footer">
	<div class="container">
		<div class="footer__crown">
			<div class="crown__desc">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/jadoo.png" alt="Jadoo Logo" class="desc__logo">
				<p class="desc__desc">
					Book your trip in minute, get full
					Control for much longer.
				</p>
			</div>
			<div class="crown__pages">
				<ul class="links">
					<h4 class="title">company</h4>
					<li><a href="#about">About</a></li>
					<li><a href="#careers">Careers</a></li>
					<li><a href="#mobile">Mobile</a></li>
				</ul>
				<ul class="links">
					<h4 class="title">Contact</h4>
					<li><a href="#help">Help/FAQ</a></li>
					<li><a href="#press">Press</a></li>
					<li><a href="#affilates">Affilates</a></li>
				</ul>
				<ul class="links">
					<h4 class="title">More</h4>
					<li><a href="#airlinefees">Airlinefees</a></li>
					<li><a href="#airline">Airline</a></li>
					<li><a href="#low-fare-tips">Low fare tips</a></li>
				</ul>
			</div>
			<div class="crown__important">
				<ul class="socials">
					<li>
						<a href="#twitter">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/Social.png" alt="Jadoo Logo">
						</a>
					</li>
					<li>
						<a href="#instagram">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/Social-2.png" alt="Jadoo Logo">
						</a>
					</li>
					<li>
						<a href="#facebook">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/logos/Social-1.png" alt="Jadoo Logo">
						</a>
					</li>
				</ul>
				<p class="discover-more">
					Discover our app
				</p>
				<ul class="apps">
					<li>
						<a href="#google-play">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/footer/google-play.png" alt="Google play">
						</a>
					</li>
					<li>
						<a href="#play-store">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/src/assets/images/footer/play-store.png" alt="Play store">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="site-info">
			All rights
			<a href="<?php echo esc_url(get_bloginfo('url')); ?>">
				reserved@jadoo.co
			</a>

		</div><!-- .site-info -->
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>