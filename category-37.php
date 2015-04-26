<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="publication" class="site-content">

		<?php global $query_string; // récupère la requête initiale générée par WordPress
query_posts( $query_string . '&posts_per_page=16' ); if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
			<div class="conteneur_tri_presse">
						<div id="vignette_tri_presse"  class="cellule_tri_presse">
			
								<?php the_post_thumbnail('miniature-publication'); ?>
							
						</div>
						
						<div class="cellule_tri_presse fond_gris_clair texte_blanc">
						<div id="champs" class="T-7 tete texte_jaune" style="text-transform: uppercase;">
									<?php the_field('projet_concerne'); ?>
						</div>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
												<div id="titre_tri_presse" class="T-4">
															<?php the_title(); ?>
												</div>
												<div id="champs" class="T-5">
															<?php the_field('nom_support_publi'); ?> /
															<?php the_field('date_paru'); ?> /
															<?php the_field('support_publi'); ?>
															<?php the_field('lien_externe'); ?>
												</div>
									</a>
						</div>
						<?php /*?><?php the_date(); ?> - <?php $category = get_the_category(); echo $category[0]->cat_name;?><?php */?>
			</div>
			<?php endwhile; ?>
			</div>
			<?php else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
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
</section>
<?php get_footer(); ?>
