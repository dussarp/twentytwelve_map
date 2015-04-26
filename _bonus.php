<?php
/**
 Template name:bonus
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package web2feel
 * @since web2feel 1.0
 */

 ?>
get_header(); ?>
<!-- début section centre haut -->
<!-- boite principale AMA ------------------------------------------------>

<div class="conteneur_AD fond_jaune">
			<!-- contenu boite principale ------------------------------------------------>
	<div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoVSM.png" width="150px" />
		</div>
		<!-- liens vers page php par icones ---------------------------------------------->
		<p class="T-2">La Vie Sur MAP</p>
		<span class="interligne_-3 T-5"> Qu'il s'agisse d'architecture ou d'urbanisme, de course ou de célébration, l'étrange tribut des Mapiens s'active souvent en groupe. Et si l'antopologue reste dubitatif, les faits sont pour le moins indéniables: il y a de la vie sur Map. </span>
	</div>
	<div  id="cellule_entite_droite" class="cellule_entite">
				<!-- Cellule droite -------------------------------------------------->
			<div  id="cellule_au-dela_droite" class="cellule_au-dela">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
				<?php 
		$args = array( 'post_type' => 'bonus', 'posts_per_page' => 2, 'order' => 'ASC', 'genre' => 'la-vie-sur-map');
		$the_query = new WP_Query( $args ); 
	?>
	<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<span class="arrow title">
		<a href="<?php the_permalink(); ?>">
			<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7"><?php the_title(); ?>		</div>
			<?php the_post_thumbnail('miniature-tri'); ?>
		</a>
	</span>
	<?php endwhile; ?>
	<?php else:  ?>
	<p>
				<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
	</p>
	<?php endif; ?>
									<div id="plus_au-dela">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/plus_11.png"/>

									</div>
						</a>
			</div>
</div>

<! ---------------------------------------------------------------------------------------------------------------------- -->
<!-- boite principale Consilium ------------------------------------------------>

<div class="conteneur_AD fond_gris_clair">
			<!-- contenu boite principale ------------------------------------------------>
			<div  id="cellule_au-dela_gauche" class="cellule_au-dela">
						<!-- présentation de l'entité ---------------------------------------------- -->
						<p class="T-2 texte_blanc">Consilium</p>
						<span class="interligne_-3 T-5"> Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.</span>
			</div>
								<!-- Droite ------------------------------------------------->
			<div  id="cellule_au-dela_droite" class="cellule_au-dela">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
						<?php 
				$args = array( 'post_type' => 'perspective', 'posts_per_page' => 3, 'order' => 'ASC', 'sorte' => 'consilium');
				$the_query = new WP_Query( $args ); 
			?>
						<?php if ( $the_query->have_posts() ) : ?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
									<div id="visuel_au-dela">
												<!--<span class="titre_au-dela T-4"><?php the_title(); ?></span>-->
												<figure>
															<?php the_post_thumbnail('miniature-actus'); ?>
												</figure>
												<!--<figcaption>
												</figcaption>-->
									</div>
						</a>
						<?php endwhile; ?>
					
						<?php endif; ?>
			</div>
</div>
<! ---------------------------------------------------------------------------------------------------------------------- -->
<!-- boite principale Focus on ------------------------------------------------>

<div class="conteneur_AD fond_jaune">
			<!-- contenu boite principale ------------------------------------------------>

			<div  id="cellule_au-dela_gauche" class="cellule_au-dela">
						<!-- présentation de l'entité ---------------------------------------------- -->
						<!-- liens vers page php par icones ---------------------------------------------->
						<p class="T-2 texte_blanc">Focus</p>
						<span class="interligne_-3 T-5"> Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.</span>
			</div>
			<div  id="cellule_au-dela_droite" class="cellule_au-dela">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
						<?php 
				$args = array( 'post_type' => 'perspective', 'posts_per_page' => 3, 'order' => 'ASC', 'sorte' => 'focus');
				$the_query = new WP_Query( $args ); 
			?>
						<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
									<div id="visuel_au-dela">
												<!--<span class="titre_au-dela T-4"><?php the_title(); ?></span>-->
												<figure>
															<?php the_post_thumbnail('miniature-actus'); ?>
												</figure>
												<!--<figcaption>
												</figcaption>-->
									</div>
						</a>
						<?php endwhile; ?>
						<?php else:  ?>
						<p>
									<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
						</p>
						<?php endif; ?>
			</div>
</div>
<! ---------------------------------------------------------------------------------------------------------------------- -->

<!-- #content -->
</div>
<!-- #primary -->

<?php get_footer(); ?>