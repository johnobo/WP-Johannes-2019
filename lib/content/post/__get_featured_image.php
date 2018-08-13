<?php

/**
 * Gibt ein Array mit dem Featured Image Daten zurück
 *
 * @param  object $post WP_POST Objekt.
 * @param  string $size Optional. Bildgröße. Default: 'large'
 *
 * @return array        Daten zum Bild als Array
 */
function __get_featured_image( $post, $size = 'large' ){
	if( !$post ){ return false; }

	$image_data = [];
	$image_id   = get_post_thumbnail_id( $post->ID );
	if( $image_id ){
		$image_data = [
			'url'       => wp_get_attachment_image_src( $image_id, $size )[0],
			'title'     => get_the_title( $image_id ),
			'excertp'   => get_the_excerpt( $image_id ),
			'permalink' => get_permalink( $image_id ),
		];
	}

	return $image_data;
}
