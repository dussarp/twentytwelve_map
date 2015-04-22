<?php
// template name: actus
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

<div id="primary" class="site-content">
			<?php query_posts('posts_per_page=1&post_type=actus&gamme=actualites'); ?>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- nouvelle actu -------------------------- -->
			<!-- image -------------------------- -->
			<div id="image_actu_bandeau">
						<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('miniature-bandeau'); ?>
						</a>
			</div>
			<!-- boite actus principales -------------------------- -->
			<div class="actus_principales">
						<!-- totem -------------------------- -->
						<div class="totem_actu fond_gris_fonce">
						</div>
						<div class="titre_actu fond_jaune texte_blanc interligne_-2 T-2">
									<?php the_title(); ?>
						</div>
						<div id="content-actu" class="texte_blanc fond_gris_clair interligne_-3 T-5">
									<?php the_content(); ?>
									
									<!-- Affiche la Date. -->
									<p id="date_actu" class="texte_blanc T-6"> mise à jour le
												<?php the_date(); ?>
									</p>
						</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
</div>

<!-- anciennes actus -------------------------- -->

<div id="conteneur_anciennes_actus">
			<!--<div style="  text-align: center;
  margin-bottom: 75px;
  
  text-transform: uppercase;" class="T-1 texte_jaune">précédemment, sur MAP</div>-->
			<?php query_posts('posts_per_page=3&post_type=actus&gamme=anciennes-actus'); ?>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div id="" class="cellule_anciennes_actus">
						<a href="<?php the_permalink(); ?>">
									<p id="titre_anciennes_actus" class="texte_gris_fonce T-3">
												<?php the_title(); ?>
									</p>
									<!-- Affiche la Date. -->
									<p id="date_anciennes_actus" class="T-6"> mise à jour le
												<?php the_date(); ?>
									</p>
									<?php the_post_thumbnail('miniature-actus'); ?>
						</a>
			</div>
			<?php endwhile; ?>
			<?php else: ?>
			<article> Désolé, il n'y à rien à afficher :( </article>
			<?php endif; ?>
</div>
<!-- #content -->
<!-- #primary -->

</div>
<?php get_footer(); ?>
