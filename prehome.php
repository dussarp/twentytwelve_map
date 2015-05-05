<?php
// template name: bienvenue
 ?>
<?php
/**
 * Prehome
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<!-- tableau -->

<!-- fin tableau -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
			<div class="conteneur_gm_prehome">
						<div >
									<a href="http://mapgroupe.fr/mapactus//">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/groupemap.png" style="width:300px; margin-right:30px;"/>
									</a>
						</div>
			</div>
			<div class="conteneur_logos_agence_prehome">
						<div style="float:left; display:inline-block; width:150px;" >
									<a href="http://map-architecture.mapgroupe.fr/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/map.png" style="width:200px;" />
									</a>
						</div>
						<div style="float:right; display:inline-block; width:150px;">
									<a href="http://becard-map.mapgroupe.fr/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/abm.png" style="width:200px;"/>
									</a>
						</div>
			</div>
</div>

<!-- #content -->
<!-- #primary -->

</div>
</body>
