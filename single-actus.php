<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty Twelve_map
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<style>
.gallery-item
{
	margin-top: 0px!important;
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
	min-width: 200px!important;
	overflow: hidden;
}

.gallery-caption
{
	display: none
}

/*------------------------------------*/




.bloc_visuels_actus
{
	width: 100%;
	float: left;
}

.visuel_article_actus img
{
	width: 100%;
}

#gallery-info_single
{
	float: left;
	width: 30%;
	display: inline-block;
	max-height: 400px !important;
	margin-left: 50px;
}

.conteneur_gallerie_actus
{
	float: left;
	width: 100%!important;
	background-color: #999;
	display: inline-block;
}

.conteneur_article_actus
{
	width: 100%;
	padding: 0px;
	float: left;
}

.article_actus
{
	width: 100%;
}

#titre_article_actus
{
	padding-top: 10px;
	padding-bottom: 30px;
	width: 100%;
	text-align:center;
}

#corps_article_actus
{
	width: 83% !important;
	padding-top: 30px;
	padding-right: 30px;
	padding-bottom: 30px;
	padding-left: 60px;
}

#corps_article_actus b.texte_jaune {
	color: #666;
}


</style>

<!-- début de la page ----------------------------------------------- -->
<div id="primary" class="site-content">
 <div id="content" role="main">
  
  <!-- début du contenu de la page ---------------------------------------------- -->
  
  <?php while ( have_posts() ) : the_post(); ?>
  <!-- début de la boucle ------ -->
  <!-- Galerie  ---------------------------------------------- -->
  <div class="bloc_visuels_actus">
   <div id="titre_article_actus" class="article_actus texte_blanc fond_gris_clair T-1" style="margin-bottom: 0px !important">
    <?php the_title(); ?> 	
    	<p id="date_actu" class="texte_blanc T-5"> mapNews, le
												<?php the_date(); ?>
									</p>
   </div>
   <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
	$url = $thumb['0']; ?>
   <!-- parallaxe ---------------------------------------------- -->
   <div class="visuel_article_actus">
    <img src="<?php echo $url; ?>" data-speed="0.4">
   </div>
   <!-- <div id="gallery-info_single">
   </div> -->
  </div>
  <div class="conteneur_article_actus fond_blanc">
   <div id="corps_article_actus" class="article_actus T-4  interligne_-2">
   		<?php the_field('accroche_actus'); ?><br/><br/>
    <?php the_content(); ?>
   
   </div>
  
  </div>
  <script>
		jQuery(document).ready(function(){
			$('div.gallery').appendTo('#gallery-info_single').show(); /*transfert gallerie wordpress vers le conteneur */
		
		})
</script>
  
  <!-- script pour la navigation -->
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
 <!-- NAVIGATION précédent / suivant ----------------------------------------------  
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
 
 </article>
 <?php endwhile; // end of the loop. ?>
</div>
<!-- #content -->

</div>
<?php get_footer(); ?>

<!-- NAVIGATION 
				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
</div>
<!-- #content -->
</div>
<!-- #primary -->

