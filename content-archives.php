<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
	<h1>CONTENT ARCHIVES</h1>
	
	<a href="<?php the_permalink(); ?>">
		<div id="visuel_au-dela">
			<figure>
				<?php the_post_thumbnail('miniature-actus'); ?>
			</figure>
			<figcaption><span><?php the_title(); ?></span></figcaption>
		</div>
	</a>
