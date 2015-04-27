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

nav.ref_precedent_suivant{position:absolute; top:50%; width:100%;}
nav.ref_precedent_suivant a{display:block;}
nav.ref_precedent_suivant .fleche_gauche{position:inherit!important; float:left;}
nav.ref_precedent_suivant .fleche_droite{position:inherit!important; float:right;}


.bloc_visuels_WP
{
	width: 45%;
	display: inline-block;
	float: left;
	margin-left: 50px;
}

.visuel_article_WP img
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

.conteneur_gallerie_WP
{
	float: left;
	width: 100%!important;
	background-color: #999;
	display: inline-block;
}

.conteneur_article_WP
{
	width: 50%;
	padding: 0px;
	display: inline-block;
	float: left;
	margin: 0px !important;
}

.article_WP
{
	width: 100%;
}

#titre_article_WP
{
	padding: 30px;
	width: 89%;
}

#corps_article_WP
{
	width: 83% !important;
	padding-top: 30px;
	padding-right: 30px;
	padding-bottom: 30px;
	padding-left: 60px;
}
</style>

<!-- début de la page ----------------------------------------------- -->
<div id="primary" class="site-content">
 <div id="content" role="main">
  
  <!-- début du contenu de la page ---------------------------------------------- -->
  
  <?php while ( have_posts() ) : the_post(); ?>
  <!-- début de la boucle ------ -->
  <!-- Galerie  ---------------------------------------------- -->
  <div class="bloc_visuels_WP">
   <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
	$url = $thumb['0']; ?>
   <!-- parallaxe ---------------------------------------------- -->
   <div class="visuel_article_WP">
    <img src="<?php echo $url; ?>" data-speed="0.4">
   </div>
   <!-- <div id="gallery-info_single">
   </div> -->
  </div>
  <div class="conteneur_article_WP fond_blanc">
   <div id="titre_article_WP" class="article_WP texte_blanc fond_jaune T-3">
    <?php the_title(); ?>
   </div>
   <div id="corps_article_WP" class="article_WP T-5  interligne_-2">
    <?php the_content(); ?>
   </div>
  </div>
 </div>

 <!-- NAVIGATION précédent / suivant ----------------------------------------------  -->
 <nav class="ref_precedent_suivant">
	<?php
	$prev_post = get_previous_post();
	if($prev_post) {
	   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
	   echo '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" "><div id="position_fleche_gauche" class="fleche_gauche"></div></a>';
	}

	$next_post = get_next_post();
	if($next_post) {
	   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
	   echo '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" "><div id="position_fleche_droite" class="fleche_droite"></div></a>';
		}
	?>
	
 </nav>
 <!-- fin navigation -------------------------------- -->
 
 </article>
 <?php endwhile; // end of the loop. ?>
</div>
<!-- #content -->

</div>
<?php get_footer(); ?>
