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
#conteneur_fiche
{
	height: 400px;
	z-index: +4;

}
#conteneur_espace
{
	height: 800px;

}
#conteneur_carte
{
	height: 1000px;
	position: absolute;
	left: 0px;
	top: 0px;
	z-index: -1;
}

#conteneur_details_urba
{
	height: 400px;
	z-index: +4;
}

.conteneur_urba
{
	width: 100%;
}
</style>

<!-- début de la page ----------------------------------------------- -->
<div id="primary" class="site-content">
 single cat-20.php 
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
 <!-- fin menu REF ---------------------------------------------- single-cat-201.php-->
 <div class="conteneur_urba">
  <div id="conteneur_fiche" class="conteneur_urba  texte_blanc fond_gris_clair">
   fiche import ID
  </div>
   <div id="conteneur_espace" class="conteneur_urba ">
   carte google en fond
  </div>
  <div id="conteneur_carte" class="conteneur_urba fond_gris_fonce texte_jaune">
   carte google en fond
  </div>
  <div id="conteneur_details_urba" class="conteneur_urba  texte_blanc fond_gris_clair">
   détails avec galerie et compagnie
  </div>
 </div>
</div>
<?php get_footer(); ?>
