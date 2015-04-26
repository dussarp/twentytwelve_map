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

<nav id="site-navigation" class="main-navigation fond_jaune" role="navigation">
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
												<div id="conteneur_tri_categorie" class="conteneur_boite fond_gris_fonce">
															<!--  cellule titre ----------->
															<div id="titre_tri_categorie" class="fond_gris_clair cellule_tri_categorie">
																		<p  class="T-4 texte_blanc" >
																					<?php the_title(); ?>
																		</p>
																		<p  class="T-7 texte_blanc" >
																					<!-- ---------- affichage du nom des catégorie -------------------------------------->
																					<?php foreach((get_the_category()) as $cat)
												 {echo $cat->cat_name . ' ';} ?>
																					<?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
																					<br/>
																					<?php echo $category->name; ?>
																					<br/>
																					Mise à jour le
																					<?php the_date(); ?>
																					<br/>
																		</p>
															</div>
															<!--  cellule vignette----------->
															<div id="vignette_tri_categorie" class="cellule_tri_categorie">
																		<?php the_post_thumbnail('miniature-tri'); ?>
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
