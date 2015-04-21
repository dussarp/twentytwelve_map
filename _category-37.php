<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="publication" class="site-content">
			<?php /*?><?php get_sidebar(); ?><?php */?>
		<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

	<script>
		jQuery(document).ready(function(){
		$('.bxslider').bxSlider({
			minSlides: 4,
			maxSlides: 4,
			slideWidth: 5000,
			slideMargin: 5
		});
		})
	</script>
	<style>
		.bxslider{width:100%;}
		.bx-wrapper{margin:0px 0px 20px 0px;}
		.bx-viewport{box-shadow:0 0 0px #fff!important; border:none!important;}
		.bxslider .conteneur_tri_presse{width:100%;}
		.bxslider .conteneur_tri_presse #vignette_tri_presse{width:100%; overflow:hidden;}
		.bxslider .conteneur_tri_presse #vignette_tri_presse img{min-width:300px; width:400px; max-width:100%}
		.bxslider .conteneur_tri_presse .cellule_tri_presse{width:100%;}
	</style>
	<ul class="bxslider">
	<!-- The Loop		-->
	<?php while ( have_posts() ) : the_post(); ?>
	 <li><div class="conteneur_tri_presse">
				<div id="vignette_tri_presse"  class="cellule_tri_presse">
	
				<?php the_post_thumbnail('miniature-publication'); ?>
					
				</div>
				
				<div class="cellule_tri_presse fond_gris_clair texte_blanc">
				<div id="champs" class="T-7 texte_jaune tete" style="text-transform: uppercase;">
							<?php the_field('projet_concerne'); ?>
				</div>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<div id="titre_tri_presse" class="T-4">
													<?php the_title(); ?>
										</div>
										<div id="champs" class="T-5">
													<?php the_field('nom_support_publi'); ?> /
													<?php the_field('date_paru'); ?> /
													<?php the_field('support_publi'); ?>
													<?php the_field('lien_externe'); ?>
										</div>
							</a>
				</div>
				<?php /*?><?php the_date(); ?> - <?php $category = get_the_category(); echo $category[0]->cat_name;?><?php */?>
	</div></li>
	<?php endwhile; ?>
	</ul>
	<?php else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>
