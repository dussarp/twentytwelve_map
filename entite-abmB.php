<?php
// template name: entité abm
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

<div class="conteneur_boite conteneur_entite">
 <!-- contenu boite principale ------------------------>
 <div class="bande_colo fond_gris_clair alignleft">
 </div>
 <div class="cellule_entite cellule_entite_gauche">
															La direction
												</div>
  <!-- présentation de l'entité ------------------------->
  <div>
 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/abm.png" width="250px" />
  </div>
  <!-- liens vers page php par icones ----------------------->
  
 </div>
 <div class="cellule_entite cellule_entite_droite">
															La direction
												</div>
  
 <div id="corps_cellule_entite" class="interligne_-3 T-5">
  Fuga. Tis volumenis idestrum, omnisi tecto volorro rersper istrum que iliberion natio. Et ellat quid mod quibusame expliqu untioreptasi cone nus, exceris vid quaest et ma voluptatibus am, ut experum aut eaquam landigent.
  Ta nihillate ipsae corestis re molut que eum quiatendis illa delesti am rem. Recabor escipitatqui que volupta cusandu ntiatem exera volore occatio nsequi in re velist, ute nonsequi ipsam re, adi beriam harci sus doluptiam, cusciis sequiam qui corum fugiatu risquas pelest, untia nit vellacc uptatis ute pora nusam harciumquide dolest vid et laudi utatur, tet, nonem rerepedit qui odiciis alit, omnimo voluptur? Bus porro mi, qui doluptium inci qui sit, conseque quos nonsequ aspicium ad ea cor millab invenis as quiduntusa inctent.
  Us voluptati odignim inienite percit, seria nonsendenet veligenditae corae pres doluptatet liquia nam expero exped quid quae et exerovid estiur, sinimus molore perovitia dollab il est ute velliti ut exceror essitatem sequaecepre prerfer rovides volora pliae nost audiatiis mi, sequo totasperum quae. Evenis quiamus dent.
 </div>
  <!--  ------------------------->

   
  <div class="conteneur_A">
   <!--COMITE DIRECTEUR GROUPE MAP ---------------------------------------------------------------------------------------------->
   <div class="titre_cellule__membre">
    <!--  titre comite directeur --------------------------->
    <div class="fonction_organigramme T-2" style="border-bottom:40px">
     Le comité directeur
    </div>
   </div>
   <div  class="conteneur_A">
    <!--fin comite directeur ---------------------------------------------------------------------------------------------->
    <!--associés groupe map ---------------------------------------------------------------------------------------------->
    <div class="titre_cellule__membre">
     <div class="icone_fonction">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_28.png" width="80%">
     </div>
     <div class="fonction_organigramme T-4">
      Les associés exécutifs
     </div>
    </div>
    <!-- Début de la Boucle associés------------------------->
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
    <?php if ( in_category( 'assos-exe-abm' )) { ?>
    <div class="cellule_membre_organigramme">
     <div class="organi_vignette">
      <a href="<?php the_permalink(); ?>">
       <?php the_post_thumbnail('miniature-slide'); ?>
      </a>
     </div>
     <!-- Légende ------------------------->
     <div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
      <?php the_title(); ?>
     </div>
    </div>
    <?php } ?>
    <?php endwhile; ?>
    <?php endif; ?>
   </div>
   <!-- Fin de La Boucle -->
   <!--la direction ---------------------------------------------------------------------------------------------->
   <div id="groupe_map" class="conteneur_B">
    <div class="titre_cellule__membre">
     <div class="icone_fonction" >
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_29.png" width="80%">
     </div>
     <div class="fonction_organigramme T-4">
      La direction
     </div>
    </div>
    <!-- Début de la Boucle DIRECTION------------------------->
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
    <?php if ( in_category( 'direction-abm' )) { ?>
    <div class="cellule_membre_organigramme">
     <div class="organi_vignette">
      <a href="<?php the_permalink(); ?>">
       <?php the_post_thumbnail('miniature-slide'); ?>
      </a>
     </div>
     <!-- Légende ------------------------->
     <div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
      <?php the_title(); ?>
     </div>
    </div>
    <?php } ?>
    <?php endwhile; ?>
    <?php endif; ?>
   </div>
   <!-- Fin de La Boucle -->
   <div class="conteneur_A espace_avant">
    <div class="titre_cellule__membre">
     <div id="fonction_organigramme" class="T-4">
     L'équipe
    </div>
    <div id="" class="">
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/logoNAV_21.png"  width="50%"/>
    </div>
    </div>
    
    <!-- Début de la Boucle DIRECTION------------------------->
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
    <?php if ( in_category( 'agence-map' )) { ?>
    <div class="cellule_membre_organigramme">
     <div class="organi_vignette">
    <!--  <a href="<?php the_permalink(); ?>">
       <?php the_post_thumbnail('miniature-slide'); ?>
      </a>-->
     </div>
     <!-- Légende ------------------------->
     <div class="cellule_membre_organigramme interligne_-4 T-7 legende_nom">
      <?php the_title(); ?>
     </div>
    </div>
    <?php } ?>
    <?php endwhile; ?>
    <?php endif; ?>
   </div>
   <!-- Fin de La Boucle -->
   
  </div>
  <div class="conteneur_B">
   <div class="titre_cellule__membre">
    <div id="fonction_organigramme" class="T-4">
     L'organigramme fonctionnel
    </div>
    <div id="" class="">
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/add/organigramme_43.png" width="30%"  />
    </div>
    <div >
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/organigramme/GMavril2015lt.jpg" width="50%" style="border-radius:3px"  />
    </div>
   </div>
  </div>
  <div class="conteneur_B espace_avant">
   <div class="titre_cellule__membre">
    <div class="fonction_organigramme T-4">
     Membre du groupe
    </div>
    <div >
     <div >
       <a href="http://mapgroupe.fr/abm/">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/groupemap.png" width="150px" />
      </a>
     </div>
    </div>
   </div>
  </div>
   <div class="conteneur_B espace_avant">
   <div class="titre_cellule__membre">
    <div class="fonction_organigramme T-4">
    Les membres du groupe
    </div>
    <div >
     <div >
      <a href="http://mapgroupe.fr/map/">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/map.png" style="width:150px; margin-right:30px; padding-top:20px" />
      </a>
      <a href="http://mapgroupe.fr/legroupe/">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/abm.png" width="150px" />
      </a>
     </div>
    </div>
   </div>
  </div>
 </div>

</div>
</div>
</div>
<?php get_footer(); ?>