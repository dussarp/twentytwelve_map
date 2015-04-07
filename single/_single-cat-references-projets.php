<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<section id="primary" class="site-content">
<div id="content" role="main">
<?php if ( have_posts() ) : ?>
<style>
	div.ref-content{float:left;position:relative; width:100%}
	div.ref-background{position:relative;float:left; width:100%}
	div.ref-background img{width:100%;}
	div.ref-description{position:fixed; top:200px; left:20px; z-index:10!important;width:30%;}
	div.ref-map{float:left; width:30%; height:300px; margin:20px;}
	div#static-description{float:left; width:30%;}
	div#gallery-info{float:left; width:30%; height:300px;}
	div.gallery{display:none;}
	.parallax-window {min-height: 1200px; background: transparent;position:relative;float:left; width:100%;}
	.parallax-mirror{z-index:10!important}
	div#static-description{padding:20px;}

</style>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<?php while ( have_posts() ) : the_post(); ?>
<div class="ref-content">
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
$url = $thumb['0']; ?>
	<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $url; ?>" data-speed="0.4"></div>
	<div class="ref-description">
		<?php the_content(); ?>
	</div>
</div>
	<?php if(get_field('adresse_projet')!= '') : ?>
	<script>
		jQuery(document).ready(function(){
			$(".ref-map").gmap3({
				marker:{
				  address: "<?php echo get_field('adresse_projet'); ?>",
				  data: "<?php the_title(); ?>",
				  options:{
					 draggable: false
					},
				  events:{
					mouseover: function(marker, event, context){
					var map = $(this).gmap3("get"),
					infowindow = $(this).gmap3({get:{name:"infowindow"}});
					if (infowindow){
					  infowindow.open(map, marker);
					  infowindow.setContent(context.data);
					} else {
					  $(this).gmap3({
						infowindow:{
						  anchor:marker, 
						  options:{content: context.data}
						}
					  });
					}
					},
					mouseout: function(){
						var infowindow = $(this).gmap3({get:{name:"infowindow"}});
						if (infowindow){
						  infowindow.close();
						}
					}
				}
				},
				map:{
				  options:{
					zoom: 16
				  }
				}, 
				
			});
		})
	</script>
	<div id="static-description"></div>
	<div class="ref-map"></div>
	
	<?php endif;?>
	<script>
		jQuery(document).ready(function(){
			$('div.gallery').appendTo('#gallery-info').show();
			 $('html, body').animate({
				scrollTop:250
			}, 500);
			$('#static-description').width( $('div.ref-description').width());
			$('#static-description').height( $('div.ref-description').height());
		
			$('.ref-map').waypoint(function(direction){ // no offset on the way down
			   if(direction == 'down') {
				$('div.ref-description').appendTo('#static-description').show().css({'position':'initial','width':'100%'});
				}else{
				   $('div.ref-description').css({'position':'fixed','width':'30%'}).appendTo('#static-description').show();
				   //$('#static-description').html('');
				}
			},{offset:'25%'});
		})
	</script>
	<div id="gallery-info"></div>
	<?php 
		function get_the_subcategory()
		{
			$categories = get_the_category();
			// get the sub category if we have them
			foreach ($categories as $cat)
			{
			$parent = $cat->category_parent;
			if ($parent != 0 )
			{
				$sub_cat_ID = $cat->cat_ID;
			}
			}
			if (!$sub_cat_ID)
			{
				return false;
			}
			else
			{
				return $sub_cat_ID;
			}
		}
		
		function get_next_subcategory_post_link()
		{
			$cat_ID = get_the_subcategory();
			if($cat_ID != false)
			{
				$args = array(
				'numberposts'     => 1000,
				'category'        => $cat_ID,
				'orderby'         => 'post_date',
				'order'           => 'DESC' );
				$list = get_posts($args);
				$current = false;
			foreach($list as $post)
			{
				if($current == true)
				{
					return get_permalink($post->ID);
				}
				if($post->ID == get_the_ID())
				{
					$current = true;
				}
				else
				{}
			}
			}
			else
			{
				return "#error";
			}
		}
		
		function get_previous_subcategory_post_link()
		{
			$cat_ID = get_the_subcategory();
			$args = array(
			'numberposts'     => 1000,
			'category'        => $cat_ID,
			'orderby'         => 'post_date',
			'order'           => 'ASC' );
			$list = get_posts($args);
			$current = false;
			foreach($list as $post)
			{
				if($current == true)
				{
					return get_permalink($post->ID);
				}
				if($post->ID == get_the_ID())
				{
					$current = true;
				}
				else
				{}
			}
		}
	
	?>
<nav class="nav-single">
<?php
	$previous = get_previous_subcategory_post_link();
	$next = get_next_subcategory_post_link();
?>
<?php if($previous != false) { ?>
	<span class="nav-previous"><a href="<?php echo $previous; ?>"><< PREVIOUS</a></span>
<?php } ?>
<?php if($next != false) { ?>
	<span class="nav-next"><a href="<?php echo $next; ?>">NEXT >></a></span>
<?php }  ?>

</nav>

<?php endwhile; ?>

<?php else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>