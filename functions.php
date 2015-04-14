<?php
/**
 * Twenty Twelve functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 625;

add_image_size( 'miniature-slide', 400, 400, true ); /* -----------------------------------------code ajouté -------------**/
add_image_size( 'miniature-article', 300, 300, false );
add_image_size( 'miniature-actus', 800, 800, true );
add_image_size( 'miniature-bandeau', 1920, 800, true );
add_image_size( 'miniature-galerie', 1920, 400, true );
add_image_size( 'visuel-maxi', 1920, 1200, false );
add_image_size( 'miniature-tri', 480, 240, true );
add_image_size( 'miniature-publication', 260, 160, true );

// Les bonus http://buzut.fr/2012/03/09/3-facons-davoir-plusieurs-pages-de-blog-avec-wordpress/
add_action('init', 'lesBonus_post_type');

function lesBonus_post_type() {
  register_post_type('bonus', array(
				'label' => __('lesBonus'),
				'singular_label' => __('bonus'),
				'public' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'exclude_from_search' => false,
				'has_archive' => true,
				'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'comments', 'revisions')
		));
		
  register_taxonomy('genre', 'bonus', array('hierarchical' => true, 'label' => 'Genre', 'query_var' => true, 'rewrite' => true));  
}

// Les Actus http://buzut.fr/2012/03/09/3-facons-davoir-plusieurs-pages-de-blog-avec-wordpress/
add_action('init', 'lesActus_post_type');

function lesActus_post_type() {
  register_post_type('actus', array(
				'label' => __('lesActus'),
				'singular_label' => __('actus'),
				'public' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'comments', 'revisions')
		));
		
  register_taxonomy('gamme', 'actus', array('hierarchical' => true, 'label' => 'Gamme', 'query_var' => true, 'rewrite' => true));  
}

// perspective http://buzut.fr/2012/03/09/3-facons-davoir-plusieurs-pages-de-blog-avec-wordpress/
add_action('init', 'lesPerspectives_post_type');

function lesPerspectives_post_type() {
  register_post_type('perspective', array(
				'label' => __('lesPerspectives'),
				'singular_label' => __('perspectives'),
				'public' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'comments', 'revisions')
		));
		
  register_taxonomy('sorte', 'perspective', array('hierarchical' => true, 'label' => 'Sorte', 'query_var' => true, 'rewrite' => true));  
}

/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelvechild_scripts_styles() {
	global $wp_styles;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Jquery
	wp_enqueue_script( 'twentytwelvechild-jquery', get_stylesheet_directory_uri() . '/js/jquery-1.11.2.min.js', array( 'jquery' ), '20140711', true );
	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'twentytwelvechild-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20140711', true );
	//Match height
	wp_enqueue_script( 'twentytwelvechild-matchHeight', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.js', array( 'jquery' ), '20140711', true );
	//map
	wp_enqueue_script( 'twentytwelvechild-gmap3', get_stylesheet_directory_uri() . '/js/gmap3.min.js', array( 'jquery' ), '20140711', true );
	//waypoint
	wp_enqueue_script( 'twentytwelvechild-waypoint', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), '20140711', true );
	//parallax
	wp_enqueue_script( 'twentytwelvechild-parallax', get_stylesheet_directory_uri() . '/js/parallax.min.js', array( 'jquery' ), '20140711', true );
	//BxSlider
	wp_enqueue_script( 'twentytwelvechild-bxslider', get_stylesheet_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '20140711', true );
}
add_action( 'wp_enqueue_scripts', 'twentytwelvechild_scripts_styles' );


/**
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, STYLESHEETPATH  . '/single');

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');

/**
* Single template function which will choose our template
*/

function my_single_template($single) {
global $wp_query, $post;
	/**
	* Checks for single template by category
	* Check by category slug and ID
	*/
	$categories = array();
	# fill $categories if any match
	foreach ((get_the_category()) as $cat)
	{
		$categories[] = $cat;
	}
	//Check if Categories exist
	if (!empty($categories)){
		foreach((array)get_the_category() as $cat){

		if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php')){
			return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
		}elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php')){
			return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
		}
	}
	//Else return custom post-type single
	}else{
		return $single;
	}
}
// new login logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo/groupemapBlanc.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
//new login css
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}

/* add_filter('single_template', 'single_template_terms');
function single_template_terms($template) {
    foreach( (array) wp_get_object_terms(get_the_ID(), get_taxonomies(array('public' => true, '_builtin' => false))) as $term ) {
        if ( file_exists(SINGLE_PATH . "/single-{$term->slug}.php") )
            return SINGLE_PATH . "/single-{$term->slug}.php";
    }
    return $template;
} */

add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
