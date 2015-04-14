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
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoVSM.png" width="200px" />
		</div>
		<!-- liens vers page php par icones ---------------------------------------------->
		<p class="T-2">La Vie sur MAP</p>
		<span class="interligne_-3 T-5"> Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.</span>
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
