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
.conteneur_urba
{
	position:relative;
	float:left;
	width: 100%;
	height:1500px;
}
#conteneur_fiche
{
	z-index: +4;
	float:left;
	width:100%;
	position:relative;
	padding:20px 0px;
}
#conteneur_espace
{
	height: 800px;

}
#conteneur_carte
{
	height:800px;
	position:fixed!important;
	top:0;
	width:100%;
	z-index:0;
}

#conteneur_details_urba
{
	height: 400px;
	z-index: +4;
	position:absolute;
	bottom:0px;
	width:100%;
}




</style>

<!-- gmap -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>


<?php if(get_field('adresse_de_loperation')!= '') : ?>
<script>
		jQuery(document).ready(function(){
			$("#conteneur_carte").gmap3({
				marker:{
				  address: "<?php echo get_field('adresse_de_loperation'); ?>",
				  data: "<?php the_title(); ?>",
				  options:{
					 draggable: false
					},
				  events:{
					mouseover: function(marker, event, context){
					var map = $(this).gmap3("get"),
					infowindow = $(this).gmap3({get:{name:"infowindow"}});
					if (infowindow){
					  infowindow.open(map, marker);
					  infowindow.setContent(context.data);
					} else {
					  $(this).gmap3({
						infowindow:{
						  anchor:marker, 
						  options:{content: context.data}
						}
					  });
					}
					},
					mouseout: function(){
						var infowindow = $(this).gmap3({get:{name:"infowindow"}});
						if (infowindow){
						  infowindow.close();
						}
					}
				}
				},
				map:{
				  options:{
					zoom: 16,
					scrollwheel: false
				  }
				}, 
				
			});
			
			//waypoint
			$('#conteneur_carte').waypoint(function(direction){ 
			   if(direction == 'down') {
					
				}else{}
			},{offset:'bottom-in-view'});
		})

	</script>
<?php endif;?>
												
<!-- début de la page ----------------------------------------------- -->
<div id="primary" class="site-content">
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

 <?php while ( have_posts() ) : the_post(); ?>
	 <div class="conteneur_urba">
		<!-- fiche info -->
		<div id="conteneur_fiche" class="texte_blanc fond_gris_clair">
			<?php the_content(); ?>
		</div>
		<!-- map -->
		<div id="conteneur_carte" class="fond_gris_fonce texte_jaune"></div>
		<!-- description -->
		<div id="conteneur_details_urba" class="texte_blanc fond_gris_clair">
			détails avec galerie et compagnie
		</div>
	 </div>
 <?php endwhile;?>
</div>
<?php get_footer(); ?>
