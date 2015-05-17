<?php
// template name: au-delà
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
<!-- début section centre haut -->
<!-- boite principale AMA ------------------------------------------------>

<div class="conteneur_AD_bonus fond_gris_clair texte_blanc">
			<!-- contenu boite principale ------------------------------------------------>
			<div  id="cellule_bonus_gauche" class="cellule_bonus">
						<!-- présentation de l'entité ---------------------------------------------- -->
						<!--	<div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoVSM.png" width="150px" />
		</div>-->
						<!-- liens vers page php par icones ---------------------------------------------->
						<p class="T-2 ">La Vie Sur MAP</p>
						<span class="interligne_-3 T-5"> Qu'il s'agisse d'architecture ou d'urbanisme, de courses ou de célébrations, l'étrange tribut des Mapiens s'active bien souvent en groupe. </span>
			</div>
			<!-- Cellule droite -------------------------------------------------->
			<div  id="cellule_bonus_droite" class="cellule_au-dela">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
				<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'bonus', 'posts_per_page' => 3, 'order' => 'ASC', 'genre' => 'la-vie-sur-map');
					$the_query = new WP_Query( $args ); 
				?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="item-link">
						
						<div id="visuel_au-dela">
							<figure>
								<?php the_post_thumbnail('miniature-actus'); ?>
							</figure>
							<figcaption><span><?php the_title(); ?></span></figcaption>
						</div>
								
					</a>
				<?php endwhile; ?>
				<?php endif; ?>
				<a href="<?php the_permalink(); ?>">
					<div id="plus_bonus">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/plus_11.png"/>
					</div>
				</a>
			</div>
</div>

<!-- boite principale trombino ------------------------------------------------>

<div class="conteneur_AD_bonus fond_gris_fonce texte_blanc">
			<!-- contenu boite principale ------------------------------------------------>
			<div  id="cellule_bonus_gauche" class="cellule_bonus">
						<!-- présentation de l'entité ---------------------------------------------- -->
						<p class="T-2 ">South Trombino</p>
						<span class="interligne_-3 T-5">Mapiennes et Mapiens, façon South Park</span>
			</div>
			<!-- Droite ------------------------------------------------->
			<div  id="cellule_bonus_droite" class="cellule_bonus">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
						<div id="visuel_bonus">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/images/trominoSouh.jpg" height="280px"/>
						</div>
			</div>
			</div>
			<!-- boite principale film ------------------------------------------------>
			
			<div class="conteneur_AD_bonus fond_gris_clair texte_blanc">
						<!-- contenu boite principale ------------------------------------------------>
						<a href="http://www.dailymotion.com/video/x268kad_map-harlem-shake_lifestyle" target="_blank">
									<div  id="cellule_bonus_gauche" class="cellule_bonus">
												<!-- présentation de l'entité ---------------------------------------------- -->
												<!-- liens vers page php par icones ---------------------------------------------->
												<p class="T-2">Harlem Shake</p>
												<span class="interligne_-3 T-5"> Une petite musique entrainante <br/>
												et soudain...</span>
									</div>
									<div  id="cellule_bonus_droite" class="cellule_bonus">
												
												<!-- Début de la Boucle-------------------------------------------------->
												
												<div id="visuel_bonus">
															<img src="http://mapgroupe.fr/wp-content/uploads/2015/04/harlemShake.jpg" height="300px">
												</div>
									</div>
						</a>
			</div>

			
			<!-- #content -->
</div>
<!-- #primary -->

<?php get_footer(); ?>
