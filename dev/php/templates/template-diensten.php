<?php
/*
Template Name: Diensten
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol8 home-left-col">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--home" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div class="home-content">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>
			<div class="u-gridCol4 home-contact">
				<h2 >Geïnteresseerd?</h2>
				<article class="Content Content--home">
					<div class="home-content">Neem contact met ons op!</div>
				</article>
				<a href="/contact">Naar het contactformulier!</a>
			</div>
		</div>
	

	</div>
<?php get_footer(); ?>
