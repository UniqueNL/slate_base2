<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">										
						<div class="adress-map">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->


					</div>
					<div class="u-gridRow">						
						<div class="adress u-gridCol4">
							<div class="adress-info contact-title">
								<p class="contact-title">Kluskoorts</p>
								<p>Stoofdijk 84</p>
								<p>4671RB Dinteloord</p>
								<p>Email: info@kluskoorts.nl</p>
								<p>Tel: 0639813679</p>
							</div>
	
						</div>

						<div class="u-gridCol8">
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>

					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

