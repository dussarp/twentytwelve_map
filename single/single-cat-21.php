<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

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
			<!-- fin menu REF ---------------------------------------------- single-cat-18.php-->
		
		<!-- top -->
		
		<div class="top-container">
			<div id="image_urba_bandeau">
				<a href="<?php the_permalink(); ?>">
							<!--<?php the_post_thumbnail('miniature-bandeau'); ?> -->
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
					$url = $thumb['0']; ?>
					
						<!--<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $url; ?>" data-speed="0.1"></div> -->
						<img src="<?php echo $url; ?>" style="width:auto; height:400px;"/>
				</a>
			</div>
		</div>
		
		<div id="content" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
						<!-- script Google -->
						<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
						<!-- début du contenu de la page ---------------------------------------------- -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
									<!-- reference ---------------------------------------------- -->
							<!-- fin import html de la reference depuis ID ---------------------------------------------- -->
									<!-- détails de la fiche : carte, photos, etc ---------------------------------------------- -->
								
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

												<div class="ref-carte"></div>
												<?php endif;?>
												
												<!-- <div class="fiche_reference"></div> -->
												<div class="conteneur_fiche_details">
													<div id="texte_urba"><?php the_content(); ?></div>
													<div id="legende_urba"></div>
												</div>
												<script>
														jQuery(document).ready(function(){
														
															 $('html, body').animate({
																scrollTop:190
															}, 500);
			
															$('div.gallery').appendTo('#gallery-info').show(); /*transfert gallerie wordpress vers le conteneur */
																$('div.bloc-texte-explicatif').appendTo('#texte_urba').show(); /*transfert gallerie wordpress vers le conteneur */
																$('div.l-gende-urba-VERSO').appendTo('#legende_urba').show(); /*transfert gallerie wordpress vers le conteneur */
																	
															 $('html, body').animate({
																scrollTop:190
															}, 500);
															$('.ref-carte').waypoint(function(direction){ // no offset on the way down
															   if(direction == 'down') {
																//$('.fiche_reference').appendTo('#static-description').show().css({'position':'initial','width':'100%'});
																}else{
																  // $('.fiche_reference').css({'position':'fixed','width':'240px'}).appendTo('#static-description').show();
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
