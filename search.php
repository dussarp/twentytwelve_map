<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section id="primary" class="site-content">
			<?php get_sidebar(); ?>
			<!-- boite principale ------------------------------------------------>
			
			<div id="conteneur_recherche" class="conteneur_boite fond_blanc">
						<div id="content" role="main">
									<?php if ( have_posts() ) : ?>
														<div class="T-4">
															<?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span class="texte_jaune T-2">' . get_search_query() . '</span>' ); ?>
												</div>
									<?php twentytwelve_content_nav( 'nav-above' ); ?>
									<?php /* Start the Loop */ ?>
									<?php while ( have_posts() ) : the_post(); ?>
									<!-- template de recherche depuis content.php ------------------------>
									<?php if ( is_search() ) : // Only display Excerpts for Search ?>
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
												<a href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail('miniature-tri'); ?>
												</a>
									</div>
									<!-- ---------- cellule fil Ariane -------------------------------------->
									<div  class="cellule_tri_categorie fond_gris_fonce  ">
									<p id="fil_ariane_tri_categorie" class="T-6 texte_blanc" >
												<!-- ---------- affichage du nom des catégorie -------------------------------------->
												<?php foreach((get_the_category()) as $cat)
												 {echo $cat->cat_name . ' ';} ?>
												<?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?><br/><br/>
												 Mise à jour le
															<?php the_date(); ?><br/><br/>
															<?php echo $category->name; ?>
															<br/>
															<!-- fil d'Ariane ------------------------------------------------------->
																				<br/>
															<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description  ?>
															<?php endif; ?>
									</div>
									<!-- .entry-summary -->
									<?php else : ?>
									<div class="entry-content">
												<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
												<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
									</div>
									<!-- .entry-content -->
									<?php endif; ?>
									
									<!-- .entry-meta -->
									<?php endwhile; ?>
									<?php twentytwelve_content_nav( 'nav-below' ); ?>
									<?php else : ?>
									<article id="post-0" class="post no-results not-found">
												<header class="entry-header">
															<h1 class="entry-title">
																		<?php _e( 'Nothing Found', 'twentytwelve' ); ?>
															</h1>
												</header>
												<div class="entry-content">
															<p>
																		<?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?>
															</p>
															<?php get_search_form(); ?>
												</div>
												<!-- .entry-content -->
									</article>
									<!-- #post-0 -->
									
									<?php endif; ?>
						</div>
						<!-- #content -->
			</div>
</section>
<!-- #primary -->

<?php get_footer(); ?>
