<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
<style>.gallery .gallery-icon img { max-width: 100%; }
#gallery-info-urba #gallery-1 gallery-item {  float: left;
  margin-top: 10px;
  text-align: center;
		border:solid;
 }
.gallery-item a
{
	width: 100%;
	height: 200px;
	min-width: 200px!important;
	overflow: hidden;
}

.gallery-caption { display: none }</style>
<script>
jQuery(document).ready(function(){
			$('div.bloc-texte-explicatif').appendTo('#programme').show(); /*transfert gallerie wordpress vers le conteneur */})
			</script>
<!-- gmap carte google-->
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

<!-- début de la page -- -->
<div id="primary" class="site-content">
			<!-- section menus REF -- -->
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
						<!-- conteneur des données de la fiche impor de ID  -->
						
						<div id="conteneur_fiche" class="fond_gris_fonce">
									<div class="programme_et_fiche">
											
												<!-- fiche du projet -->
												<div class="fiche_reference_urba">
															<?php the_content(); ?>
												</div>	
									</div>
									<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
	$url = $thumb['0']; ?>
									<div class="visuel-urba">
												<img src="<?php echo $url; ?>"  >
									</div>
						</div>
						<!-- carte -->
						<div id="conteneur_carte">
						</div>
						<!-- description -->
						<div id="conteneur_details_urba"><div id="programme" class="fond_jaune texte_blanc">
												</div>
								<div id="gallery-info-urba">
												</div>
						</div>
			</div>
			<?php endwhile;?>
			<script>
			jQuery(document).ready(function(){
			$('div.gallery').appendTo('#gallery-info-urba').show(); /*transfert gallerie wordpress vers le conteneur */})
			</script>
</div>
<?php get_footer(); ?>
