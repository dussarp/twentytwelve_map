<?php
// template name: entité groupe map
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

<!----------------------- 1 ------------------------------------------------>

<div id="_1" class="rubrique_entite">
			<div class="cellule_entite_gauche">
						<div class="bande_colo fond_jaune alignleft">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/groupemap.png" width="250px" style="padding-left:50px"/>
						</div>
			</div>
			<!------------------------- 2 ---------------------------------------------->
			<div class="cellule_entite_droite">
						<div class="corps_cellule_entite interligne_-3 T-5">
									Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.
									Ta nihillate ipsae corestis re molut que eum quiatendis illa delesti am rem. Recabor escipitatqui que volupta cusandu ntiatem exera volore occatio nsequi in re velist, ute nonsequi ipsam re, adi beriam harci sus doluptiam, cusciis sequiam qui corum fugiatu risquas pelest, untia nit vellacc uptatis ute pora nusam harciumquide dolest vid et laudi utatur, tet, nonem rerepedit qui odiciis alit, omnimo voluptur? Bus porro mi, qui doluptium inci qui sit, conseque quos nonsequ aspicium ad ea cor millab invenis as quiduntusa inctent.
									Us voluptati odignim inienite percit, seria nonsendenet veligenditae corae pres doluptatet liquia nam expero exped quid quae et exerovid estiur, sinimus molore perovitia dollab il est ute velliti ut exceror essitatem sequaecepre prerfer rovides volora pliae nost audiatiis mi, sequo totasperum quae. Evenis quiamus dent.
						</div>
			</div>
</div>
<!-------------------------- 3 --------------------------------------------->
<div id="_3" class="rubrique_entite">
			<div class="cellule_entite_gauche">
						<div id="fonction_organigramme" class="T-3 texte_gris_clair">
									Les administrateurs
						</div>
						<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_28.png" width="20px"/>
						</div>
			</div>
			<!-------------------------- 4 --------------------------------------------->
			<div class="cellule_entite_droite">
						<div class="conteneur_A">
									<!--associés groupe map ------------------------------------------------------------------------->
									
									<!-- Début de la Boucle associés---->
									<!-- on recupere la liste des associés -->
									<?php $args = array(
 'orderby' => 'title',
 'order'   => 'ASC',
 'cat' => '52', 
 'posts_per_page'=> '1000' ); ?>
									<?php $query = new WP_Query($args); ?>
									<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
									<!-- Affiche la miniature -------------->
									<!-- on regarde si les membres appartiennent à une catégorie en particulier-->
									<?php if ( in_category( 'assos-gm' )) { ?>
									<div class="cellule_membre_organigramme">
												<div class="organi_vignette">
															<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('miniature-slide'); ?>
															</a>
												</div>
												<!-- Légende ---->
												<div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
															<?php the_field('prenom'); ?>
															<br/>
															<?php the_field('nom'); ?>
												</div>
									</div>
									<?php } ?>
									<?php endwhile; ?>
									<?php endif; ?>
						</div>
			</div>
			
			<!-- Fin de La Boucle -->
			
			<!-- Début de la Boucle ADMINISTRATEURS DU GROUPE ---->
			<!-- on recupere la liste des associés -->
			<?php $args = array(
 'orderby' => 'title',
 'order'   => 'ASC',
 'cat' => '52',
 'posts_per_page'=> '1000'
                                                                                                                                             ); ?>
			<?php $query = new WP_Query($args); ?>
			<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
			<!-- Affiche la miniature -------------->
			<!-- on regarde si les associés appartiennent à une catégorie en particulier-->
			<?php if ( in_category( 'admin-gm' )) { ?>
			<div class="cellule_membre_organigramme">
						<div class="organi_vignette">
									<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail('miniature-slide'); ?>
									</a>
						</div>
						<!-- Légende ---->
						<div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
									<?php the_field('prenom'); ?>
									<br/>
									<?php the_field('nom'); ?>
						</div>
			</div>
			<?php } ?>
			<?php endwhile; ?>
			<?php endif; ?>
</div>
<!-- Fin de La Boucle -->

<!--------------------------- 5 -------------------------------------------->

<div id="_5" class="rubrique_entite">
			<div class="cellule_entite_gauche">
						
						<!--COMITE DIRECTEUR GROUPE MAP ------------------------------------------------------------------------->
						
						<!--  titre comite directeur ------>
						<div class="fonction_organigramme T-3 texte_gris_clair">
									Le comité directeur
						</div>
						<div >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_28.png"width="20px">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_29.png"width="20px">
						</div>
			</div>
			<!---------------------------- 6 ------------------------------------------->
			<div class="cellule_entite_droite">
						<div class="conteneur_A">
									<!--associés groupe map ------------------------------------------------------------------------->
									<div class="titre_cellule__membre">
												<div class="fonction_organigramme T-4">
															Les associés exécutifs
												</div>
									</div>
									<!-- Début de la Boucle associés---->
									<!-- on recupere la liste des associés -->
									<?php $args = array(
										'orderby' => 'title',
										'order'   => 'ASC',
										'cat' => '52',
										'posts_per_page'=> '1000'
									); ?>
									<?php $query = new WP_Query($args); ?>
									<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
									<!-- Affiche la miniature -------------->
									<!-- on regarde si les associés appartiennent à une catégorie en particulier-->
									<?php if ( in_category( 'assos-gm' )) { ?>
									<div class="cellule_membre_organigramme">
												<div class="organi_vignette">
															<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('miniature-slide'); ?>
															</a>
												</div>
												<!-- Légende ---->
												<div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
															<?php the_field('prenom'); ?>
															<br/>
															<?php the_field('nom'); ?>
												</div>
									</div>
									<?php } ?>
									<?php endwhile; ?>
									<?php endif; ?>
						</div>
						
						<!-- Fin de La Boucle -->
						<!--la direction ------------------------------------------------------------------------->
						<div class="conteneur_A">
									<div class="titre_cellule__membre">
												<div class="fonction_organigramme T-4">
															La direction
												</div>
									</div>
									<!-- Début de la Boucle DIRECTION---->
									
									<?php $args = array(
										'orderby' => 'title',
										'order'   => 'ASC',
										'cat' => '52',
										'posts_per_page'=> '1000'
									); ?>
									<?php $query = new WP_Query($args); ?>
									<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
									<!-- Affiche la miniature -------------->
									<!-- on regarde si les associés appartiennent à une catégorie en particulier-->
									<?php if ( in_category( 'directiongm' )) { ?>
									<div class="cellule_membre_organigramme">
												<div class="organi_vignette">
															<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('miniature-slide'); ?>
															</a>
												</div>
												<!-- Légende ---->
												<div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
															<?php the_field('prenom'); ?>
															<br/>
															<?php the_field('nom'); ?>
												</div>
									</div>
									<?php } ?>
									<?php endwhile; ?>
									<?php endif; ?>
						</div>
						<!-- Fin de La Boucle -->
			</div>
</div>
</div>
<!---------------------------- 7 ------------------------------------------->
<div id="_7" class="rubrique_entite">
			<div class="cellule_entite_gauche">
						<div id="fonction_organigramme" class="T-3 texte_gris_clair">
									Les moyens généraux
						</div>
						<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoNAV_21.png" width="100px"/>
						</div>
			</div>
			<!---------------------------- 8 ------------------------------------------->
			<div class="cellule_entite_droite">
						<!-- Début de la Boucle DIRECTION---->
						<!-- on recupere la liste des associés -->
						<?php $args = array(
										'orderby' => 'title',
										'order'   => 'ASC',
										'cat' => '52', // les associés
										'posts_per_page'=> '1000'
									); ?>
						<?php $query = new WP_Query($args); ?>
						<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
						<!-- Affiche la miniature -------------->
						<!-- on regarde si les associés appartiennent à une catégorie en particulier-->
						<?php if ( in_category( 'moyens-generaux-gm' )) { ?>
						<div class="cellule_membre_organigramme">
									<div class="organi_vignette">
												<a href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail('miniature-slide'); ?>
												</a>
									</div>
									<!-- Légende ---->
									<div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
												<?php the_field('prenom'); ?>
												<br/>
												<?php the_field('nom'); ?>
									</div>
						</div>
						<?php } ?>
						<?php endwhile; ?>
						<?php endif; ?>
			</div>
			<!-- Fin de La Boucle -->
</div>
<!-------------------------------- 9 --------------------------------------->
<div id="_9" class="rubrique_entite">
			<div class="cellule_entite_gauche">
						<div class="T-3 texte_gris_clair">
									L'organigramme fonctionnel
						</div>
						<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_43.png" width="30%" />
						</div>
			</div>
			<!-------------------------------- 10 --------------------------------------->
			<div class="cellule_entite_droite">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/organigramme/GMavril2015lt.jpg" width="60%" style="border-radius:3px" />
			</div>
</div>
<!--------------------------------- 11 -------------------------------------->
<div id="_11" class="rubrique_entite">
			<div class="cellule_entite_gauche">
						<div class="fonction_organigramme T-3 texte_gris_clair">
									Les agences membres<br/>
									du Groupe MAP
						</div>
			</div>
			<!---------------------------------- 12 ------------------------------------->
			<div class="cellule_entite_droite">
						<div style="padding-top:10px; display:inline-block; vertical-align:top;">
									<a href="http://mapgroupe.fr/map/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/map.png"style="width:150px; margin-right:30px;"/>
									</a>
						</div>
						<div style="display:inline-block;">
									<a href="http://mapgroupe.fr/abm/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/abm.png"width="150px"/>
									</a>
						</div>
			</div>
</div>
<?php get_footer(); ?>
