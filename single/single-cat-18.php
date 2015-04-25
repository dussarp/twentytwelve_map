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
.conteneur_light_box
{
	float: left;
	width: 70%;
	max-width: 822px;
	margin-left: 290px;
	margin-top: 20px;
}
#visuel_carte
{
	display: inline-block;
	width: 50%;
	max-width : 400px;
	margin-right: 20px;
}
.conteneur_visuels
{
	display: inline-block;
	vertical-align: top;
	float: left;
}
.visuel_light_box
{
	width: 217px;
	vertical-align: top;
	float: left;
	display: block;
	clear: right;
}
#gallery-info
{
  float: right;
  width: 30%;
  display: inline-block;
  max-height: 400px !important;

}
.gallery-item
{
  /* float: left; */
  margin-top: 0px!important;
  /* text-align: center; */
  /* width: 33.3333%!important; */
  display: inline-block;
}
.gallery-item img
{
	border: none!important;
	padding: 0px!important;
	width: 100%!important
}
.gallery .gallery-icon img
{
	max-width: 100%;
}
.gallery-item a
{
	width: 100%;
	height: 200px;
	min-width:200px!important;
	overflow: hidden;
}

.gallery-caption
{
	display: none
}
.fiche_reference
{
	z-index: 10!important;
	position: fixed;

	top: 275px;
	left: 70px;
	width: 240px;
	margin: 0px;
	float: right;
}
.conteneur_fiche_details
{
	float: left;
	width: 100%!important;
	/* padding-bottom: 10px; */
  /* padding-top: 60px; */
  /* border: 1px solid #666; */
	background-color: #999;
}

div.ref-content
{
	float: left;
	position: relative;
	width: 100%;
}
div.ref-background
{
	position: relative;
	float: left;
	width: 100%
}
div.ref-background img
{
	width: 100%;
}
div.ref-description
{
	position: fixed;
	top: 200px;
	left: 20px;
	z-index: 10!important;
	width: 30%;
}
div.ref-carte
{
  float: right;
  width: 40%;
  height: 100%;
  margin-top: 0px;
  /* margin-right: 10%; */
  margin-bottom: 20px;
  /* margin-left: 20px; */
}

div.gallery
{

}
.parallax-window
{
	min-height: 1200px;
	background: transparent;
	position: relative;
	float: left;
	width: 100%;
}
.parallax-mirror
{
	z-index: 10!important
}
div#static-description
{
	float: left;
	width: 30% !important;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	background-color: #999;
	
}
#static-description fiche_reference d-tails {
  height: 260px;
  /* width: 100%; */
  border: 2px none #930;
  background-color: #FFF;
  padding: 10px;
  margin-bottom: 0px;
}

</style>

<!-- début de la page ----------------------------------------------- -->
<div id="primary" class="site-content">
			<!-- section menus REF ----------------------------------------------- -->
			<nav id="site-navigation" class="main-navigation fond_blanc" role="navigation">
						<button class="menu-toggle">
						<?php _e( 'Menu', 'twentytwelve' ); ?>
						</button>
						<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>">
									<?php _e( 'Skip to content', 'twentytwelve' ); ?>
						</a>
						<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
			<!-- fin menu REF ---------------------------------------------- single-cat-18.php-->
			<div id="content" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
						<!-- script Google -->
						<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
						<!-- début du contenu de la page ---------------------------------------------- -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
									<!-- reference ---------------------------------------------- -->
									
							<div class="ref-content">
												<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
	$url = $thumb['0']; ?><!-- parallaxe ---------------------------------------------- -->
												<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $url; ?>" data-speed="0.4">
												</div>
												<!-- fin parallaxe ---------------------------------------------- -->
												<!-- import html de la reference depuis ID ---------------------------------------------- -->
												<div class="fiche_reference">
															<?php the_content(); ?>
												</div>
									</div>
									<!-- fin import html de la reference depuis ID ---------------------------------------------- -->
									<!-- détails de la fiche : carte, photos, etc ---------------------------------------------- -->
									<div class="conteneur_fiche_details">
												<!-- appel de la carte ---------------------------------------------- -->
												<?php if(get_field('adresse_de_loperation')!= '') : ?>
												<script>
		jQuery(document).ready(function(){
			$(".ref-carte").gmap3({
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
					zoom: 16
				  }
				}, 
				
			});
		})

	</script>
												<!-- carte ---------------------------------------------- -->
												<?php endif;?>
												<div id="static-description">
												</div>
												<?php if(get_field('adresse_de_loperation')!= '') : ?>
												<div class="ref-carte">
												</div>
												<div id="gallery-info">
												</div>
												<?php endif;?>
												<script>
		jQuery(document).ready(function(){
			$('div.gallery').appendTo('#gallery-info').show(); /*transfert gallerie wordpress vers le conteneur */
			 $('html, body').animate({
				scrollTop:160 //niveau de scroll
			}, 500);
			$('#static-description').width( $('.fiche_reference').width());
			$('#static-description').height( $('.fiche_reference').height());
			$('.conteneur_fiche_details').height( $('.fiche_reference').height());
			$('.conteneur_fiche_details').css({'min-height' :  $('.fiche_reference').height() + 'px'});
		
			$('.ref-carte').waypoint(function(direction){ // no offset on the way down
			   if(direction == 'down') {
				$('.fiche_reference').appendTo('#static-description').show().css({'position':'initial','width':'100%'});
				}else{
				   $('.fiche_reference').css({'position':'fixed','width':'240px'}).appendTo('#static-description').show();
				   //$('#static-description').html('');
				}
			},{offset:'bottom-in-view'});
		})
</script>

												<?php 
		function get_the_subcategory()
		{
			$categories = get_the_category();
			// get the sub category if we have them
			foreach ($categories as $cat)
			{
			$parent = $cat->category_parent;
			if ($parent != 0 )
			{
				$sub_cat_ID = $cat->cat_ID;
			}
			}
			if (!$sub_cat_ID)
			{
				return false;
			}
			else
			{
				return $sub_cat_ID;
			}
		}
		
		function get_next_subcategory_post_link()
		{
			$cat_ID = get_the_subcategory();
			if($cat_ID != false)
			{
				$args = array(
				'numberposts'     => 1000,
				'category'        => $cat_ID,
				'orderby'         => 'post_date',
				'order'           => 'DESC' );
				$list = get_posts($args);
				$current = false;
			foreach($list as $post)
			{
				if($current == true)
				{
					return get_permalink($post->ID);
				}
				if($post->ID == get_the_ID())
				{
					$current = true;
				}
				else
				{}
			}
			}
			else
			{
				return "#error";
			}

		}
		
		function get_previous_subcategory_post_link()
		{
			$cat_ID = get_the_subcategory();
			$args = array(
			'numberposts'     => 1000,
			'category'        => $cat_ID,
			'orderby'         => 'post_date',
			'order'           => 'ASC' );
			$list = get_posts($args);
			$current = false;
			foreach($list as $post)
			{
				if($current == true)
				{
					return get_permalink($post->ID);
				}
				if($post->ID == get_the_ID())
				{
					$current = true;
				}
				else
				{}
			}
		}
	
	?>
									</div>		
									<!-- NAVIGATION précédent / suivant ----------------------------------------------  -->
									<nav class="ref_precedent_suivant">
												<?php
			$previous = get_previous_subcategory_post_link();
			$next = get_next_subcategory_post_link();
		?>
												<?php if($previous != false) { ?>
												<a href="<?php echo $previous; ?>">
															<div id="position_fleche_gauche" class="fleche_gauche">
															</div>
												</a>
												<?php } ?>
												<?php if($next != false) { ?>
												<a href="<?php echo $next; ?>">
															<div id="position_fleche_droite" class="fleche_droite">
															</div>
												</a>
												<?php }  ?>
									</nav>
									<!-- fin navigation -------------------------------- -->
									<!-- fil d'Ariane  ----------------------------------------------  -->
						</article>
						<!----appel du content-ref pour mise en page personnalisée --->
						
						<?php endwhile; // end of the loop. ?>
			</div>
			<!-- #content -->
</div>
</div>
<?php get_footer(); ?>
