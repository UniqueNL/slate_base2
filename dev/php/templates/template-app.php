<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<div class="u-gridRow app">
				<aside class="u-gridCol3 home-left-col">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png" width="200" class="App-iphone" />
				</aside>
				<article class="home-contact Content-article u-gridCol9" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. <br /><br />

					<a href="#">Download de app hier</a>



					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />
				</article>
			</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


