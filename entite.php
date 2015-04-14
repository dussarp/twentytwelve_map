<?php
// template name: entité
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

<!-- boite principale GROUPE ------------------------>

<div id="conteneur_entite" class="conteneur_boite">
			<!-- contenu boite principale ------------------------>
			<div class="bande_colo fond_jaune alignleft">
			</div>
			<div  id="cellule_entite_gauche" class="cellule_entite">
						<!-- présentation de l'entité ------------------------->
						<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/groupemap.png" width="300px" />
						</div>
						<!-- liens vers page php par icones ----------------------->
						
			</div>
			<div  id="cellule_entite_droite" class="cellule_entite">
						<div id="corps_cellule_entite_premier" class="interligne_-3 T-5">
									Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.
									Ta nihillate ipsae corestis re molut que eum quiatendis illa delesti am rem. Recabor escipitatqui que volupta cusandu ntiatem exera volore occatio nsequi in re velist, ute nonsequi ipsam re, adi beriam harci sus doluptiam, cusciis sequiam qui corum fugiatu risquas pelest, untia nit vellacc uptatis ute pora nusam harciumquide dolest vid et laudi utatur, tet, nonem rerepedit qui odiciis alit, omnimo voluptur? Bus porro mi, qui doluptium inci qui sit, conseque quos nonsequ aspicium ad ea cor millab invenis as quiduntusa inctent.
									Us voluptati odignim inienite percit, seria nonsendenet veligenditae corae pres doluptatet liquia nam expero exped quid quae et exerovid estiur, sinimus molore perovitia dollab il est ute velliti ut exceror essitatem sequaecepre prerfer rovides volora pliae nost audiatiis mi, sequo totasperum quae. Evenis quiamus dent.
						</div>
						<!-- ASSOCIES ------------------------->
						<div id="conteneur_A">
									<div class="titre_cellule__membre">
												<!--icone fonction --------------------------->
												<div id="icone_fonction">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_28.png" width="80%">
												</div>
												<div id="fonction_organigramme" class="T-4">
															Les associés
												</div>
									</div>
									<!-- Début de la Boucle associés------------------------->				
									<!-- on recupere la liste des associés -->
									<?php $args = array(
										'orderby' => 'title',
										'order'   => 'ASC',
										'cat' => '55'
									); ?>
									<?php $query = new WP_Query($args); ?>
									<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
									<!-- Affiche la miniature -------------->
									<!-- on regarde si les associés appartiennent à une catégorie en particulier-->
									<?php if ( in_category( 'membresgroupemap' )) { ?>
									<div class="cellule_membre_organigramme">
												<div id="miniature" class="ref_vignette">
															<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('miniature-slide'); ?>
															</a>
												</div>
												<!-- Légende ------------------------->
												<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
															<?php the_title(); ?>														
												</div>
									</div>
									<?php } ?>
									<?php endwhile; ?>
									<?php endif; ?>
						</div>
						<!-- Fin de La Boucle -->
						
						<div id="conteneur_B">
									<div class="titre_cellule__membre">
												<div id="icone_fonction" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_29.png" width="80%">
												</div>
												<div id="fonction_organigramme" class="T-4">
															Le comité de direction
												</div>
									</div>
									<!-- DIRECTION ------------------------->
									<div id="" class="conteneur_portraits">
												<!--icone fonction --------------------------->
												
												<!-- Début de la Boucle direction ------------------------->

												<!-- on recupere la liste des groupemap -->
												<?php $query = new WP_Query( 'cat=62' ); ?>
									
												<?php if ( $query->have_posts() ) : while (  $query->have_posts() ) :  $query->the_post(); ?>
												<!-- Affiche la miniature -------------->
												<!-- on regarde si les membres appartiennent aussi à la direction -->
												<?php if ( in_category( 'directiongm' )) { ?>
												<div id="" class="cellule_membre_organigramme">
													<div id="miniature" class="ref_vignette">
														<a href="<?php the_permalink(); ?>">
																	<?php the_post_thumbnail('miniature-slide'); ?>
														</a>
													</div>
													<!-- Légende ------------------------->
													<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
																<?php the_title(); ?>
													</div>
												</div>
												<?php } ?>
												<?php endwhile; else: ?>
												<?php endif; ?>
									</div>
						</div>
						<!-- Fin de La Boucle-->
						<div id="conteneur_A">
									<div id="" class="titre_cellule__membre">
												<div id="fonction_organigramme" class="T-4">
															L'équipe
												</div>
												<div id="" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoNAV_21.png"  width="40%"/>
												</div>
									</div>
						</div>
						<div id="conteneur_B">
									<div class="titre_cellule__membre">
												<div id="fonction_organigramme" class="T-4">
															L'organigramme fonctionnel
												</div>
												<div id="" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_43.png" width="40%"  />
												</div>
									</div>
						</div>
			</div>
</div>
</div>
<!-- --------------------------boite pour contenu de  MAP ------------------------>
<div id="conteneur_entite" class="conteneur_boite">
			<!-- contenu boite principale ------------------------>
			<div class="bande_colo fond_gris_fonce alignleft">
			</div>
			<div  id="cellule_entite_gauche" class="cellule_entite">
						<!-- présentation de l'entité ------------------------->
						<div >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/map.png" width="150px" />
						</div>
						<br/>
						<a href="">
						</a>
			</div>
			<div  id="cellule_entite_droite" class="cellule_entite">
						<div id="corps_cellule_entite" class="interligne_-3 T-5">
									<div id="" class="alignright">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/pellicule_25.png" />
									</div>
									<div id="" class="T-4 cellule_pellicule">
												Map,<br/>
												c'est nous,<br/>
												pour vous.<br/>
												Venez-le découvrir <br/>
												en image...
									</div>
									Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.
									Ta nihillate ipsae corestis re molut que eum quiatendis illa delesti am rem. Recabor escipitatqui que volupta cusandu ntiatem exera volore occatio nsequi in re velist, ute nonsequi ipsam re, adi beriam harci sus doluptiam, cusciis sequiam qui corum fugiatu risquas pelest, untia nit vellacc uptatis ute pora nusam harciumquide dolest vid et laudi utatur, tet, nonem rerepedit qui odiciis alit, omnimo voluptur? Bus porro mi, qui doluptium inci qui sit, conseque quos nonsequ aspicium ad ea cor millab invenis as quiduntusa inctent.
									Us voluptati odignim inienite percit, seria nonsendenet veligenditae corae pres doluptatet liquia nam expero exped quid quae et exerovid estiur, sinimus molore perovitia dollab il est ute velliti ut exceror essitatem sequaecepre prerfer rovides volora pliae nost audiatiis mi, sequo totasperum quae. Evenis quiamus dent.
						</div>
						<div id="conteneur_A">
									<div class="titre_cellule__membre">
												<div id="icone_fonction" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_28.png" width="80%">
												</div>
												<div id="fonction_organigramme" class="T-4">
															Les associés
												</div>
									</div>
									<!-- ASSOCIES ------------------------->
									
									<!--icone fonction --------------------------->
									
									<!-- Début de la Boucle associés------------------------->
									
									<!-- on recupere la liste des associés -->
									<?php $query = new WP_Query( 'cat=55' ); ?>
									<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
									<!-- Affiche la miniature -------------->
									<div id="" class="cellule_membre_organigramme">
												<div id="miniature" class="ref_vignette">
															<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('miniature-slide'); ?>
															</a>
												</div>
												<!-- Légende ------------------------->
												<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
															<?php the_title(); ?>
												</div>
									</div>
									
									<!-- Fin de La Boucle (mais notez le "else:" - voir la suite).-->
									<?php endwhile; ?>
									
									<!-- Fin REELLE de La Boucle.-->
									<?php endif; ?>
						</div>
						<div id="conteneur_B">
									<div class="titre_cellule__membre">
										<div id="icone_fonction" class="">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_29.png" width="80%">
										</div>
										<div id="fonction_organigramme" class="T-4">
													Le comité de direction
										</div>
									</div>
									<!-- DIRECTION ------------------------->
									<div id="" class="conteneur_portraits">
												<!--icone fonction --------------------------->
												
												<!-- Début de la Boucle direction ------------------------->

												<!-- on recupere la liste des directionmap ->
												<?php $query = new WP_Query( 'cat=71' ); ?>
												<?php if ( $query->have_posts() ) : while (  $query->have_posts() ) :  $query->the_post(); ?>

												<!-- Affiche la miniature -------------->
												<div id="" class="cellule_membre_organigramme">
													<div id="miniature" class="ref_vignette">
																<a href="<?php the_permalink(); ?>">
																			<?php the_post_thumbnail('miniature-slide'); ?>
																</a>
													</div>
													<!-- Légende ------------------------->
													<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
																<?php the_title(); ?>
													</div>
												</div>
												
												<!-- Fin de La Boucle (mais notez le "else:" - voir la suite).-->
												<?php endwhile; ?>
												<?php endif; ?>
									</div>
						</div>
						<div id="conteneur_A">
									<!-- liens vers page php par icones ----------------------->
									<div id="" class="titre_cellule__membre">
												<div id="fonction_organigramme" class="T-4">
															L'équipe
												</div>
												<div id="" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoNAV_21.png"  width="40%"/>
												</div>
									</div>
						</div>
						<div id="conteneur_B">
									<div class="titre_cellule__membre">
												<div id="fonction_organigramme" class="T-4">
															L'organigramme fonctionnel
												</div>
												<div id="" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_43.png" width="40%"  />
												</div>
									</div>
						</div>
			</div>
</div>

<!-- --------------------------boite pour contenu de  ABM ------------------------>
<div id="conteneur_entite" class="conteneur_boite">
			<!-- contenu boite principale ------------------------>
			<div class="bande_colo fond_gris_clair alignleft">
			</div>
			<div  id="cellule_entite_gauche" class="cellule_entite">
						<!-- présentation de l'entité ------------------------->
						<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/abm.png" width="150px" />
						</div>
						<br/>
						<!--<a href="">
									<div id="icone_pellicule" class="cellule_pellicule">
												<img src="http://localhost/map_archi/wp-content/uploads/2015/03/pellicule_25.png" />
									</div>
									<div id="" class="T-4 cellule_pellicule">
												Map, c'est nous, pour vous. Venez-le découvrir en image...
									</div>
						</a>-->
			</div>
			<div  id="cellule_entite_droite" class="cellule_entite">
						<div id="corps_cellule_entite" class="interligne_-3 T-5">
									Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.
									Ta nihillate ipsae corestis re molut que eum quiatendis illa delesti am rem. Recabor escipitatqui que volupta cusandu ntiatem exera volore occatio nsequi in re velist, ute nonsequi ipsam re, adi beriam harci sus doluptiam, cusciis sequiam qui corum fugiatu risquas pelest, untia nit vellacc uptatis ute pora nusam harciumquide dolest vid et laudi utatur, tet, nonem rerepedit qui odiciis alit, omnimo voluptur? Bus porro mi, qui doluptium inci qui sit, conseque quos nonsequ aspicium ad ea cor millab invenis as quiduntusa inctent.
									Us voluptati odignim inienite percit, seria nonsendenet veligenditae corae pres doluptatet liquia nam expero exped quid quae et exerovid estiur, sinimus molore perovitia dollab il est ute velliti ut exceror essitatem sequaecepre prerfer rovides volora pliae nost audiatiis mi, sequo totasperum quae. Evenis quiamus dent.
						</div>
						<div id="conteneur_A">
									<div class="titre_cellule__membre">
												<div id="icone_fonction" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_28.png" width="80%">
												</div>
												<div id="fonction_organigramme" class="T-4">
															Les associés
												</div>
									</div>
									<!-- ASSOCIES ------------------------->
									
									<!--icone fonction --------------------------->
									
									<!-- Début de la Boucle associés------------------------->
									
									<!-- on recupere la liste des associés -->
									<?php $query = new WP_Query( 'cat=55' ); ?>
									<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
									<!-- Affiche la miniature -------------->
									<div id="" class="cellule_membre_organigramme">
												<div id="miniature" class="ref_vignette">
															<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('miniature-slide'); ?>
															</a>
												</div>
												<!-- Légende ------------------------->
												<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
															<?php the_title(); ?>
												</div>
									</div>
									
									<!-- Fin de La Boucle (mais notez le "else:" - voir la suite).-->
									<?php endwhile; else: ?>
									<?php endif; ?>
						</div>
						<div id="conteneur_B">
									<div class="titre_cellule__membre">
												<div id="icone_fonction" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_29.png" width="80%">
												</div>
												<div id="fonction_organigramme" class="T-4">
															Le comité de direction
												</div>
									</div>
									<!-- DIRECTION ------------------------->
									<div id="" class="conteneur_portraits">
												<!--icone fonction --------------------------->
												
												<!-- Début de la Boucle direction ------------------------->

												<!-- on recupere la liste des directionabm -->
												<?php $query = new WP_Query( 'cat=72' ); ?>
												<?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
												<!-- Affiche la miniature -------------->
												<div id="" class="cellule_membre_organigramme">
															<div id="miniature" class="ref_vignette">
																		<a href="<?php the_permalink(); ?>">
																					<?php the_post_thumbnail('miniature-slide'); ?>
																		</a>
															</div>
															<!-- Légende ------------------------->
															<div id="legende_nom" class="cellule_membre_organigramme interligne_-4 T-7">
																		<?php the_title(); ?>
															</div>
												</div>
												
												<!-- Fin de La Boucle (mais notez le "else:" - voir la suite).-->
												<?php endwhile; else: ?>
												<?php endif; ?>
									</div>
						</div>
						<div id="conteneur_A">
									<!-- liens vers page php par icones ----------------------->
									<div id="" class="titre_cellule__membre">
												<div id="fonction_organigramme" class="T-4">
															L'équipe
												</div>
												<div id="" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoNAV_21.png"  width="40%"/>
												</div>
									</div>
						</div>
						<div id="conteneur_B">
									<div  class="titre_cellule__membre">
												<div id="fonction_organigramme" class="T-4">
															L'organigramme fonctionnel
												</div>
												<div id="" class="">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_43.png" width="40%"  />
												</div>
									</div>
						</div>
			</div>
</div>
</div>
<?php get_footer(); ?>
