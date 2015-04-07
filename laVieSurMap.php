<?php
// template name: laVieSurMap
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

<section id="section_centre_haut" class="section_centre_haut">laVieSurMap.php
<?php get_sidebar(); ?>
<div id="primary" class="site-content">
			<div id="content" role="main">

<?php query_posts('posts_per_page=-1&post_type=bonus&tata'); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
      <?php the_post_thumbnail('miniature-article'); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
		
      <?php else: ?>
    
      <article>
        <h1>Désolé, il n'y à rien à afficher :(</h1>
      </article>

    <?php endif; ?>

		</div>
			<!-- #content -->
</div>
<!-- #primary -->

<?php get_footer(); ?>