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

<div id="conteneur_au-dela" class="conteneur_boite">
			<!-- contenu boite principale ------------------------------------------------>
			<div  id="cellule_au-dela_gauche" class="cellule_au-dela">
						<!-- présentation de l'entité ---------------------------------------------- -->
						<!-- 	<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoVSM.png" width="100px" />
						</div> -->
						<!-- liens vers page php par icones ---------------------------------------------->
						<p class="T-2">AMA</p>
						<span class="interligne_-3 T-5"> Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.</span>
			</div>
			<div  id="cellule_au-dela_droite" class="cellule_au-dela">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
						<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'perspective', 'posts_per_page' => 3, 'order' => 'ASC', 'sorte' => 'ama', 'paged' => $paged);
				$the_query = new WP_Query( $args ); 
			?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
									<div class="visuel_au-dela">
												<span class="titre_au-dela T-4"><?php the_title(); ?></span>
												<figure>
															<?php the_post_thumbnail('miniature-article'); ?>
												</figure>
												<figcaption>
												</figcaption>
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
<!-- boite principale Consilium ------------------------------------------------>

<div id="conteneur_au-dela" class="conteneur_boite">
			<!-- contenu boite principale ------------------------------------------------>
			<div class="bande_colo fond_jaune alignleft">
			</div>
			<div  id="cellule_au-dela_gauche" class="cellule_au-dela">
						<!-- présentation de l'entité ---------------------------------------------- -->
						<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoVSM.png" width="100px" />
						</div>
						<!-- liens vers page php par icones ---------------------------------------------->
						<p class="T-2">Consilium</p>
						<span class="interligne_-3 T-5"> Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.</span>
			</div>
			<div  id="cellule_au-dela_droite" class="cellule_au-dela">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
						<?php 
				$args = array( 'post_type' => 'perspective', 'posts_per_page' => 3, 'order' => 'ASC', 'sorte' => 'consilium');
				$the_query = new WP_Query( $args ); 
			?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<span class="arrow title">
						<a href="<?php the_permalink(); ?>">
									<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
												<?php the_title(); ?>
									</div>
									<?php the_post_thumbnail('miniature-article'); ?>
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
<! ---------------------------------------------------------------------------------------------------------------------- -->
<!-- boite principale Focus on ------------------------------------------------>

<div id="conteneur_au-dela" class="conteneur_boite">
			<!-- contenu boite principale ------------------------------------------------>
			<div class="bande_colo fond_jaune alignleft">
			</div>
			<div  id="cellule_au-dela_gauche" class="cellule_au-dela">
						<!-- présentation de l'entité ---------------------------------------------- -->
						<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoVSM.png" width="100px" />
						</div>
						<!-- liens vers page php par icones ---------------------------------------------->
						<p class="T-2">Focus on</p>
						<span class="interligne_-3 T-5"> Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.</span>
			</div>
			<div  id="cellule_au-dela_droite" class="cellule_au-dela">
						
						<!-- Début de la Boucle-------------------------------------------------->
						
						<?php 
				$args = array( 'post_type' => 'perspective', 'posts_per_page' => 3, 'order' => 'ASC', 'sorte' => 'focus-on');
				$the_query = new WP_Query( $args ); 
			?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<span class="arrow title">
						<a href="<?php the_permalink(); ?>">
									<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
												<?php the_title(); ?>
									</div>
									<?php the_post_thumbnail('miniature-miniature'); ?>
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
<! ---------------------------------------------------------------------------------------------------------------------- -->

<!-- #content -->
</div>
<!-- #primary -->

<?php get_footer(); ?>
