<?php
// template name: references
 ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content ">
			
			<!-- tableau références rubriques  -------------------------------------------------->
			<div class="fond_gris_clair ">
						<!---------------------------------- accroche ------------------------------------------------ -->
						<div class="cellule_ref_categorie fond_jaune texte_blanc">
									<p  id="accroche" class="T-2 fonte_replica interligne_-2">Force<br/>
												du groupe <br/>
												& expertise <br/>
												de l'agence</p>
									<p id="accroche_sous-titre" class="T-4 ">Références significatives <br/>
												en cinq catégories majeures</p>
						</div>
						
						<!---------------------------------- automatisation des cellules -------------------------------------------------->
						<?php 
                // 18 = logement, trié par référence
                $cat_args=array(
                  'orderby' => 'slug',
                  'order' => 'ASC',
                  'child_of' => '18'
                   );
                $categories = get_categories($cat_args); 
                foreach ($categories as $category) {
                               //on recupere seulement les categories dont le parent est "références"
                               $parentCateg = $category->category_parent; ?>
						<?php if ($parentCateg == '18'): ?>
						<?php $categNumber = strstr($category->slug,'_',true) ?>
						<!-- affichage des titres ---------------------------------------------------------------------->
						<div id="cellule_num_<?php echo $categNumber?>" class="cellule_ref_categorie">
									<a href="<?php echo get_category_link( $category->cat_ID ) ?>">
												<!-- retrouve le numéro de la categ depuis la référence ---------------------------------->
												<p id="num_categorie" class="T-1 texte_jaune">
															<?php echo $categNumber ?>
												</p>
													<!-- nom de la catégorie------------------------------ ---------------------------------->
												<p id="titre_ref_categorie" class="T-5 texte_blanc">
															<?php echo $category->name; ?>
												</p>
									</a>
						</div>
						<!-- affichage des images ---------------------------------------------------------------------->
						<?php 
						  $args = array( 'cat' =>$category->cat_ID, 'posts_per_page' => 3);
								$the_query = new WP_Query( $args ); 
         ?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="cellule project_<?php echo $categNumber?> cellule_ref_categorie">
									<!--<span style="display:block; position:absolute; top:0; background:red; color:white"><?php echo $category->name; ?></span>-->
									<a href="<?php the_permalink(); ?>">
												<figure class="effect-apollo ">
															<?php the_post_thumbnail('miniature-slide'); ?>
															<figcaption></figcaption>
												</figure>
									</a>
						</div>
						<?php endwhile; ?>
						<?php else:  ?>
						<?php endif ?>
						<?php endif ?>
						<?php } ?>
			</div>
</div>

<!-- première boucle -->
<!-- #primary -->

<?php get_footer(); ?>
