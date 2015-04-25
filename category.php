<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
	

get_header(); ?>

<!-- section menus REF --------- -->

<nav id="site-navigation" class="main-navigation fond_gris_clair" role="navigation">
			<button class="menu-toggle">
			<?php _e( 'Menu', 'twentytwelve' ); ?>
			</button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>">
						<?php _e( 'Skip to content', 'twentytwelve' ); ?>
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
</nav>
<!-- fin menu REF -->

<!-- boite principale -->
<section id="primary" class="site-content">
			<?php get_sidebar(); ?>
			<div class="conteneur_superieur">
						<?php global $query_string; query_posts( $query_string . '&posts_per_page=9' ); if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
						<!--  ARTICLE ----------->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<!--  résultat catégorie ----------->
									<a href="<?php the_permalink(); ?>" rel="bookmark">
												<div id="conteneur_tri_categorie" class="conteneur_boite">
															<!--  cellule titre ----------->
															<div id="titre_tri_categorie" class="fond_jaune cellule_tri_categorie">
																		<p  class="T-3 texte_blanc" >
																					<?php the_title(); ?>
																		</p>
															</div>
															<!--  cellule vignette----------->
															<div id="vignette_tri_categorie" class="cellule_tri_categorie">
																		<?php the_post_thumbnail('miniature-tri'); ?>
															</div>
															<!--  cellule fil Ariane ----------->
															<div id="fil_ariane_tri_categorie" class="fond_gris_clair cellule_tri_categorie">
																		<p  class="T-6 texte_blanc" >
																					<?php twentytwelve_entry_meta(); ?>
																					<br/>
																					<!-- fil d'Ariane --------->
																					<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
																					<br/>
																		</p>
															</div>
												</div>
									</a>
						</article>
						<?php	endwhile;
			twentytwelve_content_nav( 'nav-below' );
			?>
						<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
			</div>
</section>

<!-- sidebar -------- -->

<?php get_footer(); ?>
