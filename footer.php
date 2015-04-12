<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div>

<!-- section pied de page -->

<footer>
			<!--  id="colophon" role="contentinfo" -->
			<!-- sommaire -->
			
			<div class="conteneur_sommaire fond_gris_fonce">
						<div id="tableau_sommaire" class="tableau" >
									<!--e----------------------------- ligne-------------------------------------- -->
									<div class="ligne texte_blanc">
												<!-- ---------------------  cellule-------------------------------------------- -->
												<div id="cellule_icone_sommaire" class="cellule">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_16.png" />
												</div>
												<div id="cellule_sommaire" class="cellule">
															<div class="T-5 interligne_-2">
																		<p class="T-3">le groupe</p>
																		Son organisation, ses spécificités, les agences qui la composent et surtout ceux qui la font pour vous.
															</div>
												</div>
												<!-- ---------------------  cellule-------------------------------------------- -->
												<div id="cellule_icone_sommaire" class="cellule">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_17.png"/>
												</div>
												<div id="cellule_sommaire" class="cellule">
															<div class="T-5 interligne_-2">
																		<p class="T-3">projets</p>
																		En cours, tout juste livrés ou depuis longtemps emblématiques, voici quelques projets pami les plus significatifs.
															</div>
												</div>
												<!-- ---------------------  cellule-------------------------------------------- -->
												<div id="cellule_icone_sommaire" class="cellule">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_18.png"/>
												</div>
												<div id="cellule_sommaire" class="cellule">
															<div class="T-5 interligne_-2">
																		<p class="T-3">presse</p>
																		Un florilège des publications consacrées à l’agence ou ses projets.
															</div>
												</div>
									</div>
									<!-- -----------------------------------ligne-------------------------------- -->
									<div class="ligne texte_blanc">
												<!-- ---------------------  cellule-------------------------------------------- -->
												<div id="cellule_icone_sommaire" class="cellule">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_18.png"  />
												</div>
												<div id="cellule_sommaire" class="cellule">
															<div class="T-5 interligne_-2">
																		<p class="T-3">plus loin</p>
																		Le groupe s’interroge, questionne, se projète et scrute la galaxie des nouveaux outils.
															</div>
												</div>
												<!-- ---------------------  cellule-------------------------------------------- -->
												<div id="cellule_icone_sommaire" class="cellule">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_20.png" />
												</div>
												<div id="cellule_sommaire" class="cellule">
															<div class="T-5 interligne_-2">
																		<p class="T-3">bonus</p>
																		Il y a de la vie sur map, elle y est polyymorphe, turbulente et pleine de surprises.
															</div>
												</div>
												<!-- ---------------------  cellule-------------------------------------------- -->
												<div id="cellule_icone_sommaire" class="cellule">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logo_22_08.png"  width="60px"/>
												</div>
												<div id="cellule_sommaire" class="cellule">
															<div class="T-5 interligne_-2">
																		<p class="T-3">rechercher</p>
															</div>
												</div>
									</div>
						</div>
			</div>
			<div class="conteneur_contact fond_gris_fonce">
						<div id="tableau_contact" class="tableau" >
									<!--e----------------------------- ligne-------------------------------------- -->
									<div class="ligne texte_blanc">
												<!-- ligne----------------------- contacts du groupe et agences -------------------------------------------- -->
												<div class="ligne texte_blanc">
															<!-- ---------------------  cellule-------------------------------------------- -->
															<div id="cellule_icone_sommaire" class="cellule">
																		<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/groupeMapblanc.png"  width="100px" />
															</div>
															<div id="cellule_sommaire" class="cellule ">
																		<p class="T-5 interligne_-2"> Le Groupe MAP rassemble en son sein deux agences à l'expertise reconnue, basées à Marseille et à Paris. </p>
															</div>
															<!-- ---------------------  cellule-------------------------------------------- -->
															<div id="cellule_icone_sommaire" class="cellule">
																		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/mapBlanc.png" width="100px" />
															</div>
															<div id="cellule_sommaire" class="cellule">
																		<p class="T-5 interligne_-2"> 4 Place Sadi Carnot<br/>
																					13002 Marseille<br/>
																					Tél. 04 950 942 00<br/>
																					Fax. 04 950 942 00 </p>
															</div>
															<!-- ---------------------  cellule-------------------------------------------- -->
															<div id="cellule_icone_sommaire" class="cellule ">
																		<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/becard-mapBlanc.png" width="100px"/>
															</div>
															<div id="cellule_sommaire" class="fin cellule">
																		<p class="T-5 interligne_-2"> 30 rue Ligner<br/>
																					75020 Paris<br/>
																					Tél. 01 55 25 45 70 </p>
															</div>
												</div>
									</div>
						</div>
			</div>
			<div class="conteneur_contact fond_gris_fonce">
						<div id="tableau_contact" class="tableau" >
									<!--e----------------------------- ligne-------------------------------------- -->
								
												<div class="ligne texte_blanc">
															<!-- ---------------------  cellule-------------------------------------------- -->
															<div id="cellule_icone_sommaire" class="cellule">
																		<p class="T-5">Tweeter</p>
															</div>
															<!-- ---------------------  cellule-------------------------------------------- -->
															<div id="cellule_icone_sommaire" class="cellule">
																		<p class="T-5">nous contacter.</p>
															</div>
															<!-- ---------------------  cellule-------------------------------------------- -->
															<div id="cellule_icone_sommaire" class="cellule">
																		<p class="T-5"> français / anglais<br/>
																					mentions légales</p>
															</div>
												</div>
									</div>
						</div>
			</div>
</footer>
<!--	</div> -->
<!--	<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div> .site-info -->
</footer>
<!-- #colophon -->

<!-- #page -->

<?php wp_footer(); ?>

<!-- fin section pied de page -->
</body></html>