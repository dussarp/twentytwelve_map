<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<section id="primary" class="site-content">
<div id="content" role="main">
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
	<h1 class="archive-title">REFERENCES</h1>
</header>

<?php get_sidebar(); ?>
<div style="float:right">
<?php

// The Loop
while ( have_posts() ) : the_post(); ?>
<div class="entry">
<div class="cellule_tri_presse fond_jaune"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><?php the_time('F jS, Y') ?></div>
<div class="cellule_tri_presse"><?php the_post_thumbnail('miniature-tri'); ?></div>
<div class="cellule_tri_presse"><?php the_excerpt(); ?></div>

</div>

<?php endwhile; ?>
</div>
<?php else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>