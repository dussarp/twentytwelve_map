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

<!-- section menus REF ----------------------------------------------- -->

<nav id="site-navigation" class="main-navigation fond_gris_clair" role="navigation">
			<button class="menu-toggle">
			<?php _e( 'Menu', 'twentytwelve' ); ?>
			</button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>">
						<?php _e( 'Skip to content', 'twentytwelve' ); ?>
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
</nav>
<!-- fin menu REF ------------------------------------------------>
<?php get_sidebar(); ?>
<!-- boite principale ------------------------------------------------>
<div id="conteneur_tri_categorie" class="conteneur_boite">

			<div id="content" role="main">
						<?php if ( have_posts() ) : ?>
						<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content-categories', get_post_format() ); 	/* modifié pour pointer vers content-catégories ------------------------------------------------ */		

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>
						<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
			</div>
			<!-- #content -->
			
			<!-- #primary -->
</div>

<!-- sidebar ---------------------------------------------- -->

<?php get_footer(); ?>
