<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<!-- ---------- ARTICLE -------------------------------------->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<!-- ---------- IF -------------------------------------->
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<div class="featured-post">
						<?php _e( 'Featured post', 'twentytwelve' ); ?>
			</div>
			<?php endif; ?>
			<!-- ---------- résultat catégorie -------------------------------------->
			
			<!--------------------- style pour les articles de type "par défaut" ---------------------------------->
			<!-- ---------- cellule titre -------------------------------------->
			<div class="cellule_tri_categorie fond_jaune">
						<p id="titre_tri_categorie" class="T-3 texte_blanc" >
									<?php if ( is_single() ) : ?>
									<?php the_title(); ?>
						</p>
						<?php else : ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark">
									<?php the_title(); ?>
						</a>
						<?php endif; // is_single() ?>
			</div>
		
			
			<!-- ---------- cellule vignette-------------------------------------->
			<div id="vignette_tri_categorie" class="cellule_tri_categorie">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('miniature-tri'); ?>
						</a>
			</div>
				<!-- ---------- cellule fil Ariane -------------------------------------->
			<div  class="cellule_tri_categorie fond_gris_fonce  ">
						<p id="fil_ariane_tri_categorie" class="T-6 texte_blanc" >
									<?php twentytwelve_entry_meta(); ?>
									<br/>
									<!-- fil d'Ariane ------------------------------------------------------->
									<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
									<br/>
									<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
									<?php endif; ?>
			</div>
			<!--<div id="vignette_tri_categorie" class="cellule_tri_categorie">	
												------------------- style pour les résultats de recherche --------------------------------
												<?php if ( is_search() ) : // Only display Excerpts for Search ?>
												<div class="entry-summary">
															<?php the_excerpt(); ?>
												</div>
												<?php endif; ?>
											
											------------------------------------------------------------------------------------------------------------------------->
			
			<!-- .entry-meta -->
</article>
<!-- #post -->

