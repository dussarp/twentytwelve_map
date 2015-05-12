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
<style>
	#menu-footer li{display:inline-block; width:33%; vertical-align:top;}
	div.inner-cat{padding:10px 50px; float:left; margin-bottom:30px;}
	#menu-footer li a{background-repeat: no-repeat;background-position: top left; display:block;padding-left:80px; height:50px; line-height:50px; color:#fff; font-size: 1.5rem;}
	#menu-footer li.map_menu01 a{background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_16.png);}
	#menu-footer li.map_menu02 a{background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_17.png);}
	#menu-footer li.map_menu03 a{background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_18.png);}
	#menu-footer li.map_menu04 a{background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_19.png);}
	#menu-footer li.map_menu05 a{background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logoNAV_20.png);}
	#menu-footer li.search a{background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logo_22_08.png);}
	#menu-footer li span.desc{displayblock; padding-left:80px; float:left; color:#fff; font-size: 0.85rem; letter-spacing: 0.05rem; line-height: 1.8rem;}
	
	div.footer-search{float:right; width:33%; display:none;}
	div.footer-search span{display:block; width:100%; float:left; color:#fff; font-size:1.5rem; height:50px; line-height:50px;}
	div.footer-search img{height:50px; float:left; padding-right:20px;}
	div.footer-search form label, div.footer-search form #searchsubmit{display:none;}
	div.footer-search form{display:block; float:left; padding-left:70px;}
	footer .fond_gris_fonce{float:left;}
</style>

<script>
jQuery(document).ready(function(){
	$("div.footer-search").appendTo("#menu-footer").show();
})
</script>

<footer>
	<div class="conteneur_sommaire fond_gris_fonce">
	
		<!-- Menu automatique -->
		<?php 
		
		// Selection de la position du menu à sélectionner
		$menu_name = 'primary';
		
		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

		$menu_items = wp_get_nav_menu_items($menu->term_id);
	  
		//$search = get_search_form();
		
		$menu_list = '<ul id="menu-footer">';

		foreach ( (array) $menu_items as $key => $menu_item ) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$class = $menu_item->classes[0];
			$description = $menu_item->description;
			$menu_list .= '<li class="'.$class.'"><div class="inner-cat"><a href="' . $url . '">' . $title . '</a><span class="desc">'.$description.'</span></div></li>';
		}
		
		$menu_list .= '</ul>';
		
		}
		
		//On affiche le resultat du menu
		echo $menu_list;
		
		?>
	
		<!-- ajout composant search -->
		<div class="footer-search">
			<div class="inner-cat">
				<span class="search-title"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu/logo_22_08.png" />Recherche</span>
				<?php get_search_form()?>
			</div>
		</div>
	</div>
	<!-- sommaire -->

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
						<p class="T-6 interligne_-3"> Le Groupe MAP : <br/>deux agences à l'expertise reconnue,<br/> à Marseille et Paris. </p>
					</div>
					<!-- ---------------------  cellule-------------------------------------------- -->
					<div id="cellule_icone_sommaire" class="cellule">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/mapBlanc.png" width="100px" />
					</div>
					<div id="cellule_sommaire" class="cellule">
						<p class="T-6 interligne_-3"> 4 Place Sadi Carnot<br/>
						13002 Marseille<br/>
						Tél. 04 950 942 00<br/>
						Fax. 04 950 942 00 </p>
					</div>
					<!-- ---------------------  cellule-------------------------------------------- -->
					<div id="cellule_icone_sommaire" class="cellule ">
						<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/becard-mapBlanc.png" width="100px"/>
					</div>
					<div id="cellule_sommaire" class="fin cellule">
						<p class="T-6 interligne_-3"> 30 rue Ligner<br/>
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

</footer>

<!-- #page -->

<?php wp_footer(); ?>

<!-- fin section pied de page -->
</body></html>