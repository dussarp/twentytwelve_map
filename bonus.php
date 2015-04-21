<?php
/**
 Template name:Bonus
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
<?php get_header(); ?>
<!-- boite principale GROUPE ------------------------------------------------>
<div id="conteneur_entite" class="conteneur_boite">
	<!-- contenu boite principale ------------------------------------------------>
	<div class="bande_colo fond_jaune alignleft">
	</div>
	<div  id="cellule_entite_gauche" class="cellule_entite">
		<!-- présentation de l'entité ---------------------------------------------- -->
		<div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoVSM.png" width="150px" />
		</div>
		<!-- liens vers page php par icones ---------------------------------------------->
		<p class="T-2">La Vie Sur MAP</p>
		<span class="interligne_-3 T-5"> Qu'il s'agisse d'architecture ou d'urbanisme, de course ou de célébration, l'étrange tribut des Mapiens s'active souvent en groupe. Et si l'antopologue reste dubitatif, les faits sont pour le moins indéniables: il y a de la vie sur Map. </span>
	</div>
	<div  id="cellule_entite_droite" class="cellule_entite">
				
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
					
	</div>
</div>

<!-- #primary -->

<?php get_footer(); ?>
