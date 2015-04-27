<?php
	/* template name : references */
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
<style>
/* Smartphones */

@media (min-width : 320px) and (max-width : 480px) {

div#tableau_ref_categorie div.cellule
{
	width: 100%;
}
}

/* Tablets */
@media (min-width : 481px) and (max-width : 1024px) {

div#tableau_ref_categorie div.cellule
{
	width: 33%;
}
}


</style>
<script>
	jQuery(document).ready(function(){
		//les cellules ont la meme taille
		$('.cellule').matchHeight();
		
		// On affiche certains projects avant leur categorie
		
	})
</script>
<div id="primary" class="site-content">
 <!-- Tableau -->
 <div id="tableau_ref_categorie" class="tableau fond_gris_clair">
  <!-- Accroche + cellule vide de distribution -->
  <div id="accroche" class="cellule fond_jaune texte_blanc">
   <?php if ( have_posts() ) : while( have_posts() ) : the_post();
						 the_content();
					endwhile; endif; ?>
  </div>
  <div id="accroche" class="cellule fond_blanc">
  </div>
  <!-- Recupération Sous catégorie Références -->
  <?php 
				// 18 = logement, trié par référence
				$cat_args=array(
				  'orderby' => 'slug',
				  'order' => 'ASC',
				  'child_of' => '18' //http://mapgroupe.fr/wp-admin/edit-tags.php?action=edit&taxonomy=category&tag_ID=18&post_type=post
				   );
				$categories = get_categories($cat_args); 
				foreach ($categories as $category) {
					//on recupere seulement les categories dont le parent est "références"
					$parentCateg = $category->category_parent; ?>
  <?php if ($parentCateg == '18'): ?>
  <?php $categNumber = strstr($category->slug,'_',true) ?>
  <!-- affichage des titres -->
  <div id="cellule_num_<?php echo $categNumber?>" class="cellule">
   <a href="<?php echo get_category_link( $category->cat_ID ) ?>">
    <!-- retrouve le numéro de la categ depuis la référence -->
    <div id="num_categorie" class="T-1 texte_jaune">
     <?php echo $categNumber ?>
    </div>
    <div id="titre_sous_categorie" class="T-5 texte_blanc">
     <?php echo $category->name; ?>
    </div>
   </a>
  </div>
  <!-- affichage des images -->
  <?php 

						$parentCat = $category->cat_ID;
						$cat_subcat=array(
						  'orderby' => 'slug',
						  'order' => 'ASC',
						  'child_of' => $category->cat_ID
						   );
						
						$subcategories = get_categories($cat_subcat); 
						
						foreach ($categories as $sub) {
						
							// affiche la liste des sous-rubriques
							$parentCateg = $sub->category_parent;
							if ($parentCateg == $parentCat){
							$args = array( 'cat' =>$sub->cat_ID, 'posts_per_page' => 3);
							$the_query = new WP_Query( $args ); 
							
							$subargs = array( 'cat' =>$sub->cat_ID, 'posts_per_page' => 1);
							$retrieve_sub_item = new WP_Query( $subargs ); 
							?>
  <!-- boucle sur les sous-categories -->
  <?php if ( $retrieve_sub_item->have_posts() ) : ?>
  <?php while ( $retrieve_sub_item->have_posts() ) : $retrieve_sub_item->the_post(); ?>
  <div class="cellule project">
   <a class="titre_ref_enfant T-4" href="<?php echo get_category_link($sub->cat_ID); ?>">
    <?php echo $sub->name; ?>
   </a>
   <a href="<?php the_permalink(); ?>">
    <figure class="miniature_ref_enfant">
     <?php the_post_thumbnail('miniature-slide'); ?>
    </figure>
   </a>
  </div>
  <?php endwhile; ?>
  <?php endif ?>
  <!-- endif -->
  
  <?php } ?>
  <?php } ?>
  <?php endif ?>
  <?php } ?>
 </div>
 
</div>


</div>
</div>

<!-- #primary -->

<?php get_footer(); ?>
