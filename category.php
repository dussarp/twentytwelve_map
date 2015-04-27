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

<nav id="site-navigation" class="main-navigation fond_gris_clair" role="navigation">
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
    <div id="conteneur_tri_categorie" class="conteneur_boite fond_jaune">  <!--  cellule vignette----------->
     <div id="vignette_tri_categorie" class="cellule_tri_categorie">
      <?php the_post_thumbnail('miniature-tri'); ?>
     </div>
     <!--  cellule titre ----------->
     <div id="titre_tri_categorie" class="interligne_-3 cellule_tri_categorie texte_blanc fond_gris_clair">
      <p  class="T-5" style="text-transform: uppercase;" >
       <?php the_title(); ?>
      </p>
      <p  class="T-7 texte_blanc" >
       <!-- ---------- affichage du nom des catégorie -------------------------------------->
       
       <?php /*?> <?php foreach((get_the_category()) as $cat)
												 {echo $cat->cat_name . ' ';} ?>
       <?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?>
       <br/>
       <?php echo $category->name; ?><?php */?>
      </p>
     </div>
     <div id="fil_ariane_tri_categorie" class="fond_gris_fonce T-6 texte_gris_clair">
      Mise à jour le<br/>
      <?php the_date(); ?>
      <br/>
      </p>
     </div>
     
   
    </div>
   </a>
  </article>
  <?php	endwhile; ?>
  <?php endif; ?>
 </div>
</section>
<!-- script pour navigation -->
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
						}else{
							return $cat->cat_ID;
						}
					}	
				}
				
				function get_next_subcategory_post_link()
				{
					$cat_ID = get_the_subcategory();
					
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
							elseif($post->ID == get_the_ID())
							{
								$current = true;
							}
							else
							{}
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
						elseif($post->ID == get_the_ID())
						{
							$current = true;
						}
						else
						{}
					}
				}
			
			?>

<!-- NAVIGATION précédent / suivant ----------------------------------------------  -->
<div class="ref_nav_avant_apres fond_gris_fonce">
 <nav class="ref_precedent_suivant">
  <?php
					$previous = get_previous_subcategory_post_link();
					$next = get_next_subcategory_post_link();
				?>
  <?php if($previous != false) { ?>
  <a href="<?php echo $previous; ?>">
   <div class="fleche_gauche_gris alignleft">
   </div>
  </a>
  <?php } ?>
  <?php if($next != false) { ?>
  <a href="<?php echo $next; ?>">
   <div class="fleche_droite_gris alignright">
   </div>
  </a>
  <?php }  ?>
 </nav>
</div>
<!-- fin navigation -------------------------------- -->

<?php get_footer(); ?>
<!-- script pour la navigation -------------------------------------------------------------- -->
