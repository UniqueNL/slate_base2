<?php
/*
Template Name: Landingpage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol8 home-left-col">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--home" id="post-<?php the_ID(); ?>">

					<div class="home-content">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>
			<div class="u-gridCol4 home-contact">
				<h2>Geïnteresseerd?</h2>
				<article class="Content Content--home">
					<div class="home-content">Neem contact met ons op!</div>
				</article>
				<a href="/contact/">Naar het contactformulier!</a>
			</div>
		</div>
	
	<!--- ------------------------------------------------------ -->
	
	<div class="u-gridRow grid-header">Selecteer één van onze diensten</div>

	<div class="u-gridRow thumbnail-row">
		<div class="u-gridCol4 bg-kunstgras">
			<a href="/kunstgras"><div class="grid-title">Kunstgras</div></a>
		</div>
		<div class="u-gridCol4 bg-schilder">
			<a href="/schilderwerk"><div class="grid-title">Schilderwerk</div></a>
		</div>
		<div class="u-gridCol4 bg-indusreiniging no-marginright">
			<a href="/industriele-reiniging"><div class="grid-title">Industrïele reiniging</div></a>
		</div>
	</div>

	<div class="u-gridRow thumbnail-row">
		<div class="u-gridCol4 bg-autopoetsen">
			<a href="/auto-polijsten"><div class="grid-title">Auto poetsen</div></a>
		</div>
		<div class="u-gridCol4 bg-kleineschadeauto">
			<a href="/kleine-schade-auto"><div class="grid-title">Kleine schade auto</div></a>
		</div>
		<div class="u-gridCol4 bg-terrasreiniging no-marginright">
			<a href="/terrasreiniging"><div class="grid-title">Terrasreiniging</div></a>
		</div>
	</div>

	<div class="u-gridRow thumbnail-row">
		<div class="u-gridCol4 bg-kleineklus">
			<a href="/kleine-klus"><div class="grid-title">Kleine klus</div></a>
		</div>
		<div class="u-gridCol4 bg-grondwerken">
			<a href="/grondwerkzaamheden"><div class="grid-title">Grondwerken</div></a>
		</div>
		<div class="u-gridCol4 bg-sierbestrating no-marginright">
			<a href="/sierbestrating"><div class="grid-title">Sierbestrating</div></a>
		</div>
	</div>

	</div>
<?php get_footer(); ?>
