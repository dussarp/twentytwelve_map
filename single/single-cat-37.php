<?php

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

div.site-content{position:relative;}
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

.article_WP
{
	width: 100%;
}
#conteneur_titres_article_publication
{
	padding: 30px;

}
#corps_article_WP
{
	width: 83% !important;
	padding-top: 30px;
	padding-right: 30px;
	padding-bottom: 30px;
	padding-left: 60px;
}
#titre_article_publication
{
	padding-top: 5px;
	padding-bottom: 8px;
}
.conteneur_article_publication
{
	width: 50%;
	padding: 0px;
	display: inline-block;
	float: right;
	margin: 0px !important;
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
						<div class="conteneur_article_publication fond_blanc">
									<div id="conteneur_titres_article_publication" class="article_WP texte_blanc fond_gris_clair T-3">
												<div class="T-6" style="text-transform: uppercase;">
															<?php the_field('projet_concerne'); ?>
												</div>
												<div id="titre_article_publication">
															<?php the_title(); ?>
												</div>
												<div class="T-5">
															<?php the_field('nom_support_publi'); ?>
															/
															<?php the_field('date_paru'); ?>
															/
															<?php the_field('support_publi'); ?>
															<?php the_field('lien_externe'); ?>
												</div>
									</div>
									<div id="corps_article_WP" class="article_WP T-5  interligne_-2">
												<?php the_content(); ?>
									</div>
						</div>

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
			</div>
			
			<!-- NAVIGATION précédent / suivant ----------------------------------------------  -->
			<nav class="ref_precedent_suivant">
				<?php
					$previous = get_previous_subcategory_post_link();
					$next = get_next_subcategory_post_link();
				?>
				<?php if($previous != false) { ?>
				<a href="<?php echo $previous; ?>">
					<div id="position_fleche_gauche" class="fleche_gauche"></div>
				</a>
				<?php } ?>
				<?php if($next != false) { ?>
				<a href="<?php echo $next; ?>">
					<div id="position_fleche_droite" class="fleche_droite"></div>
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
