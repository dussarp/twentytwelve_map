<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<div id="primary" class="site-content">


<!-- début du contenu de la page -->
 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<div class="featured-post">
						<?php _e( 'Featured post', 'twentytwelve' ); ?>
			</div>
			<?php endif; ?>
			<div class="visuel_principal">
						<!---------------------image de fond  ---------------------------------->
						<?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail('visuel-maxi');
			endif; ?>
			</div> 
			<!------------------------------------------------- détails additionnels ------------------------------------------------------------------------------
			<div class="conteneur_fiche_details">
						<div class="conteneur_light_box">
									<div id="visuel_carte" class="visuel_light_box">
												<a href="http://mapgroupe.fr/wp-content/uploads/2015/03/Capture.png">
															<img src="http://mapgroupe.fr/wp-content/uploads/2015/03/Capture.png" width="100%" />
												</a>
									</div>
									<div id="conteneur_visuels">
									<div class="visuel_light_box">
												<a href="http://mapgroupe.fr/wp-content/uploads/2015/01/HLM10.jpg">
															<?php the_post_thumbnail('miniature-tri'); ?>
												</a>
									</div>
									<div class="visuel_light_box">
												<a href="http://mapgroupe.fr/wp-content/uploads/2015/01/HLM10.jpg">
															<img src="http://mapgroupe.fr/wp-content/uploads/2015/01/HLM10.jpg" width="100%" />
												</a>
									</div>
									<div class="visuel_light_box">
												<a href="http://mapgroupe.fr/wp-content/uploads/2015/01/HLM10.jpg">
															<img src="http://mapgroupe.fr/wp-content/uploads/2015/01/HLM10.jpg" width="100%" />
												</a>
									</div></div>
						</div> 
</div>-->
<?php if(get_field('adresse_de_loperation')!= '') : ?>
	<script>
		jQuery(document).ready(function(){
			$(".ref-map").gmap3({
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
	<div class="ref-map" style="width:400px; height:400px"></div>
	
	<?php endif;?>
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
<nav class="nav-single">
<?php
	$previous = get_previous_subcategory_post_link();
	$next = get_next_subcategory_post_link();
?>
<?php if($previous != false) { ?>
	<span class="nav-previous texte_blanc"><a href="<?php echo $previous; ?>"><< PREVIOUS</a></span>
<?php } ?>
<?php if($next != false) { ?>
	<span class="nav-next texte_blanc"><a href="<?php echo $next; ?>">NEXT >></a></span>
<?php }  ?>

</nav>

			<!------------------------------------------------- fiche référence importée ID ------------------------------------------------------------------------------->
			
			<section class="fiche_reference">
						<!-- .entry-header -->
						<?php if ( is_search() ) : // Only display Excerpts for Search ?>
						<div class="entry-summary">
									<?php the_excerpt(); ?>
						</div>
						<!-- .entry-summary -->
						<?php else : ?>
						<div >
									<!-- contenu -->
									<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
									<?php the_meta(); ?>
									<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
						</div>
						<!-- .entry-content ---------------------------------------------------------------->
						<?php endif; ?>
			</section>
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

