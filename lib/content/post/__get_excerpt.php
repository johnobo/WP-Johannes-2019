<?php

/**
 * Gibt einen Excerpt String zurück
 *
 * @param  object  $post      Optional. Ein WP-Post-Objekt
 * @param  integer $max_words Maximale Anzahl an Worten, ist gut für SEO.
 *
 * @return string             Das Excerpt als String
 */
function __get_excerpt( $post, $max_words = 40 ) {
	if( !$post ) {
		global $post;
	}

	$output  = ( strlen( $post->post_excerpt ) > 0 ) ? $post->post_excerpt : $post->post_content;
	$output  = preg_replace( "/\r|\n/", "", strip_tags( $output ) );
	$output  = wp_trim_words( $output, $max_words );

	return $output;
}
