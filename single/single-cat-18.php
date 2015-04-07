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
/*Gallery Shorcode*/

div.gallery
{

}
.gallery-item a{height:200px; overflow:hidden;}
.gallery-item img{
	border:none!important;
	padding:0px!important;
	width:100%!important
}

.gallery .gallery-icon img{max-width:100%;}
.gallery-item a{width:100%}
.gallery-item
{
	float: left;
	margin-top: 0px!important;
	text-align: center;
	width: 33.3333%!important;
	display: inline-block;
}
}
.gallery-caption
{
	display: none
}
.fiche_reference
{
	z-index: 10!important;
	position: fixed;
	top: 200px;
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
	padding-bottom: 120px;
	padding-top: 50px;/*	border: 1px solid #666; */
}
#gallery-info
{
	float: right;
	width: 40%!important;
	display : inline-block;
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
	width: 30%;
	height: 400px;
	margin-top: 0px;
	margin-right: 20px;
	margin-bottom: 20px;
	margin-left: 20px;
}
div#static-description
{
	float: left;
	width: 30%;
}

div.gallery
{
	display: none;
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
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 70px;
}/* FLECHES http://apps.eky.hk/css-triangle-generator/ */
#position_fleche_droite, #position_fleche_gauche
{
	position: absolute;
	top: 70%;
	z-index: +10;
	display: block;
}
#position_fleche_droite
{
	right: 0px;
}
#position_fleche_gauche
{
	left: 0px;
}
.fleche_droite, .fleche_gauche
{
	display: inline-block;
}
.fleche_haut
{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 37.5px 65.0px 37.5px;
	border-color: transparent transparent #FFC700 transparent;
	line-height: 0px;
	_border-color: #000000 #000000 #FFC700#000000;
_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
}
.fleche_bas
{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 21.7px 12.5px 0 12.5px;
	border-color: #007bff transparent transparent transparent;
	line-height: 0px;
	_border-color: #007bff #000000 #000000 #000000;
_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
}
.fleche_droite
{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 25px 0 25px 43.3px;
	border-color: transparent transparent transparent #FFC700;
	line-height: 0px;
	_border-color: #000000 #000000 #000000 #FFC700;
_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
	float: right!important;
	display : block;
}
.fleche_gauche
{
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 25px 43.3px 25px 0;
	border-color: transparent #FFC700 transparent transparent;
	line-height: 0px;
	_border-color: #000000 #FFC700 #000000 #000000;
_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
	float: left;
}
</style>

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
			<!-- fin menu REF ---------------------------------------------- -->
			<div id="content" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
						<!-- 	<div id="primary" class="site-content">-->
						<!-- script Google -->
						<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
						<div id="primary" class="site-content">
									<!-- fin script Google -->
									<!-- début du contenu de la page ---------------------------------------------- -->
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
												<!--	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> -->
												
												<!-- reference ---------------------------------------------- -->
												<!-- parallaxe ---------------------------------------------- -->
												<div class="ref-content">
															<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
	$url = $thumb['0']; ?>
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
		<!-- neutralisation du scroll ---------------------------------------------- -->
	</script>
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
			$('div.gallery').appendTo('#gallery-info').show();
			 $('html, body').animate({
				scrollTop:190
			}, 500);
			$('#static-description').width( $('.fiche_reference').width());
			$('#static-description').height( $('.fiche_reference').height());
			$('.conteneur_fiche_details').height( $('.fiche_reference').height());
		
			$('.ref-carte').waypoint(function(direction){ // no offset on the way down
			   if(direction == 'down') {
				$('.fiche_reference').appendTo('#static-description').show().css({'position':'initial','width':'100%'});
				}else{
				   $('.fiche_reference').css({'position':'fixed','width':'240px'}).appendTo('#static-description').show();
				   //$('#static-description').html('');
				}
			},{offset:'bottom-in-view'});
		})

		<!-- NAVIGATION précédent / suivant ----------------------------------------------  -->
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
												<footer class="entry-meta">
															<?php twentytwelve_entry_meta(); ?>
															<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
															<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
															<div class="author-info">
																		<div class="author-avatar">
																					<?php
					/** This filter is documented in author.php */
					$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
					echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
					?>
																		</div>
																		<!-- .author-avatar -->
																		<div class="author-description">
																					<h2>
																								<?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?>
																					</h2>
																					<p>
																								<?php the_author_meta( 'description' ); ?>
																					</p>
																					<div class="author-link">
																								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
																											<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
																								</a>
																					</div>
																					<!-- .author-link	-->
																		</div>
																		<!-- .author-description -->
															</div>
															
															<!-- .author-info -->
															<?php endif; ?>
												</footer>
												<!-- .entry-meta -->
									</article>
									<!-- #post fin de l'article -->
									<!----appel du content-ref pour mise en page personnalisée --->
									
									<?php endwhile; // end of the loop. ?>
						</div>
						<!-- #content -->
			</div>
</div>
<!-- #primary -->

<?php get_footer(); ?>
