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
<style>
	.cellule_au-dela a {position:relative; display:block; float:left; width:25%; margin-right:10px; height:265px; overflow:hidden;}
	.cellule_au-dela a #visuel_au-dela {width:100%;}
	.cellule_au-dela a figcaption{display:none;}
	.cellule_au-dela a:hover figcaption{display:block;background: rgba(0,0,0,0.3); position: absolute;top: 0px;height: 100%;color: white; width:100%;}
	.cellule_au-dela a figcaption span{padding: 20px;display: block;font-size: 21px;}
	.cellule_au-dela a figcaption span.pdf{display:block; width:100%; position:absolute; bottom:0px; background:#cc2200; text-align:left; color:#fff; font-size:16px;}
</style>
<div class="conteneur_AD fond_jaune">
			<!-- contenu boite principale ------------------------------------------------>
			<div  id="cellule_au-dela_gauche" class="cellule_au-dela">
				<!-- présentation de l'entité ---------------------------------------------- -->
				<!-- 	<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoVSM.png" width="100px" />
				</div> -->
				<!-- liens vers page php par icones ---------------------------------------------->
				<p class="T-2 texte_blanc">les Ateliers Métropolitains de l'Architecture</p>
				<span class="interligne_-3 T-5"> Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.</span>
			</div>
				<!-- Cellule droite -------------------------------------------------->
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
					<div id="visuel_au-dela">
						<figure>
							<?php the_post_thumbnail('miniature-actus'); ?>
						</figure>
						<figcaption><span><?php the_title(); ?></span></figcaption>
					</div>
				</a>
				<?php endwhile; ?>
				<?php else:  ?>
				<p>
							<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
				</p>
				<?php endif; ?>
				
				<a href="<?php echo get_post_type_archive_link( 'perspective' ); ?>?type=ama">
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
								<figure>
									<?php the_post_thumbnail('miniature-actus'); ?>
								</figure>
								<figcaption><span><?php the_title(); ?></span></figcaption>
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
						
						<!-- Début de la Boucle -------------------------------------------------->
						
						<?php 
				$args = array( 'post_type' => 'perspective', 'posts_per_page' => 3, 'order' => 'ASC', 'sorte' => 'focus');
				$the_query = new WP_Query( $args ); 
				
				
			?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<!-- check if attachments -->				
					<?php if ( $attachments = get_children( array(
						'post_type' => 'attachment',
						'post_mime_type' => array('application/doc','application/pdf'),
						'numberposts' => 1,
						'post_status' => null,
						'post_parent' => $post->ID
						))) { ?>
						
						<?php foreach ($attachments as $attachment) { ?>
							<a href="<?php echo wp_get_attachment_url( $attachment->ID ); ?>">
								<div id="visuel_au-dela">
									<figure>
										<?php the_post_thumbnail('miniature-actus'); ?>
									</figure>
									<figcaption><span><?php the_title(); ?></span><span class="pdf"> > PDF document</span></figcaption>
								</div>
							</a>
					
						<?php } ?>
						
						<!-- if no attachment -->
						<?php }else{ ?>
							<a href="<?php the_permalink(); ?>">
								<div id="visuel_au-dela">
									<figure>
										<?php the_post_thumbnail('miniature-actus'); ?>
									</figure>
									<figcaption><span><?php the_title(); ?></span></figcaption>
								</div>
							</a>
						<?php } ?>
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
