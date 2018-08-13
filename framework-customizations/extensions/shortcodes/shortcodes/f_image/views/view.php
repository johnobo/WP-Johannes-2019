<?php
 
/*
 * V A R I A B L E S 
 */
 
// Title       : $atts["f_item_title"]
// Choice      : $atts["f_item_types"]["f_item_type"] ( string >> "post | post-by-image | image" )
//
//     Post : Post ID   : $atts["f_item_types"]["post"]["f_item_post"][0]
//
//     Post by Image : Image ID   : $atts["f_item_types"]["post-by-image"]["f_item_post_image"]["attachment_id"]
//     Post by Image : Image URL  : $atts["f_item_types"]["post-by-image"]["f_item_post_image"]["url"]
//
//     Image : Image ID   : $atts["f_item_types"]["image"]["f_item_image"]["attachment_id"]
//     Image : Image URL  : $atts["f_item_types"]["image"]["f_item_image"]["url"]




/*
 * F U N C T I O N S 
 */

$module_choice = $atts["f_item_types"]["f_item_type"];
$blog_title    = get_bloginfo('name');

switch ( $module_choice ) {
	// BEITRAG
	case 'post':
		$id              = $atts["f_item_types"]["post"]["f_item_post"][0];
		$thumb_id        = get_post_thumbnail_id( $id );
		$image_post      = get_post( $thumb_id );
		$link            = get_permalink( $id );
		$image_url_large = wp_get_attachment_image_src( $thumb_id, 'large' )[0];
		$title           = get_the_title( $id );
		$image_alt       = $image_post->post_excerpt;
		
		break;
	
	// BILD AUS BEITRAG
	case 'post-by-image':
		$id              = $atts["f_item_types"]["post-by-image"]["f_item_post_image"]["attachment_id"];
		$image_post      = get_post( $id );
		$associated_post = get_post( $image_post->post_parent );
		$link            = ( $associated_post ) ? get_permalink( $associated_post->ID ) : get_permalink( $id ); // Falls eskeinen parent Post gibt, fallback direkt aufs bild
		$image_url_large = wp_get_attachment_image_src( $id, 'large' )[0];
		$title           = $associated_post->post_title;
		$image_alt       = $image_post->post_excerpt;
		
		break;
	
	// BILD DIREKT
	case 'image':
		$id              = $atts["f_item_types"]["image"]["f_item_image"]["attachment_id"];
		$image_post      = get_post( $id );
		$link            = get_permalink( $id );
		$image_url_large = wp_get_attachment_image_src( $id, 'large' )[0];
		$title           = $image_post->post_title;
		$image_alt       = $image_post->post_excerpt;
		
		break;
	
	default:
		$id              = false;
		$link            = false;
		$image_url_large = false;
		$title           = false;
		$image_alt       = false;
		break;
}

/*
 * T E M P L A T E
 */
 
?>

 
	<figure id="f-post-id-<?php echo $id; ?>" style="" class="f-image f-image__wrapper wp-caption">
		<a href="<?php echo $link; ?>" class="f-image__link"  title="<?php echo $title; ?> | <?php echo $blog_title; ?>">
			<img src="<?php echo $image_url_large; ?>" class="" alt="<?php echo $image_alt; ?>"/>
			<figcaption class="f-image__caption wp-caption-text">
				<?php echo $title; ?>
			</figcaption>
		</a>
	</figure>