<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="primary" class="site-content">

						<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
						<?php get_sidebar(); ?>
						<div style="float:right">
									<?php

// The Loop
while ( have_posts() ) : the_post(); ?>
									<div class="conteneur_tri_presse">
												<div id="vignette_tri_presse"  class="cellule_tri_presse">
															<?php the_post_thumbnail('miniature-tri'); ?>
												</div>
							
									<div class="cellule_tri_presse fond_gris_clair">
												<div id="titre_tri_presse" class="T-2 texte_blanc">
															<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
																		<?php the_title(); ?>
															</a>
												</div>
												<div id="fil_ariane_tri_presse" class="T-5">
													<?php the_date(); ?> - <?php $category = get_the_category(); echo $category[0]->cat_name;?>
												</div>
												<div id="corps_tri_presse" class="T-5 texte_blanc">
															<?php the_excerpt(); ?>
												</div>
									</div>	
									<?php endwhile; ?>
						</div>
						<?php else: ?>
						<p>Sorry, no posts matched your criteria.</p>
						<?php endif; ?>
			</div>
</section>
<?php get_footer(); ?>
