<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
<style>
#conteneur_fiche {}
#conteneur_carte {}
#conteneur_details_urba {}
.conteneur_urba {}

</style>

<!-- début de la page ----------------------------------------------- -->
<div id="primary" class="site-content">single cat-22.php
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
			<!-- fin menu REF ---------------------------------------------- single-cat-18.php-->URBA single cat 20
		<div id="conteneur_fiche" class="conteneur_urba">
  </div>
</div>
<?php get_footer(); ?>
