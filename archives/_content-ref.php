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

<div id="primary" class="site-content">
<!-- section menus REF ----------------------------------------------- -->
<nav id="site-navigation" class="main-navigation fond_gris_fonce" role="navigation">
			<button class="menu-toggle">
			<?php _e( 'Menu', 'twentytwelve' ); ?>
			</button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>">
						<?php _e( 'Skip to content', 'twentytwelve' ); ?>
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
</nav>
<!-- fin menu REF ------------------------------------------------>

<!-- début du contenu de la page -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<div class="featured-post">
						<?php _e( 'Featured post', 'twentytwelve' ); ?>
			</div>
			<?php endif; ?>
			<div class="visuel_principal"><!---------------------image de fond  ---------------------------------->
						<?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail('visuel-maxi');
			endif; ?>
			</div>
			
			<!-------------------------------------------------------------------------------------------------------------------------------->
			
			<section class="fiche_reference">
						<!-- .entry-header -->
						<?php if ( is_search() ) : // Only display Excerpts for Search ?>
						<div class="entry-summary">
									<?php the_excerpt(); ?>
						</div>
						<!-- .entry-summary -->
						<?php else : ?>
						<div >
									<!-- contenu -->
									<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
									<?php the_meta(); ?>
									<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
						</div>
						<!-- .entry-content ---------------------------------------------------------------->
						<?php endif; ?>
			</section>
			<footer class="entry-meta">
						<?php twentytwelve_entry_meta(); ?>
						<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
						<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
						<div class="author-info">
									<div class="author-avatar">
												<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
									</div>
									<!-- .author-avatar -->
									<div class="author-description">
												<h2>
															<?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?>
												</h2>
												<p>
															<?php the_author_meta( 'description' ); ?>
												</p>
												<div class="author-link">
															<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
																		<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
															</a>
												</div>
												<!-- .author-link	-->
									</div>
									<!-- .author-description -->
						</div>
						<!-- .author-info -->
						<?php endif; ?>
			</footer>
			<!-- .entry-meta -->
</article>
<!-- #post fin de l'article -->

