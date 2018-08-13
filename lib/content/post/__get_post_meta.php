<?php

/**
 * Gibt Post Meta zurück, oder ein Fallback
 *
 * @param  string      $key      Optional. Value/Option Key welches zurück gegeben werden soll
 * @param  mixed       $fallback Optional. Fallbackwert, falls Key nicht existiert
 * @param  string|int  $id       Optional. ID des Beitrags. Default: Akuteller Beitrag.
 * @param  boolean     $single   Optional. Soll einzelner Wert zurück gegeben werden. Default: true
 * @param  string      $group    Optional. Plugins/Frameworks speichern ihre Werte vllt in Sub-Arrays. Default: 'fw_options' (unyson)
 *
 * @see get_post_meta()                    Wordpress Funktion
 *
 * @return mixed            [description]
 */
function __get_post_meta( $key = NULL, $fallback = NULL, $id = NULL, $single = true, $group = 'fw_options' ){
	global $post;
	$post_id   = ( is_null( $id ) | !$id ) ? $post->ID : $id;
	$meta_key  = ( $group ) ? $group : '';

	$post_meta = get_post_meta( $post_id, $meta_key, $single );

	if( is_null( $key ) | !$key ) {
		// ...
	} else {
		$post_meta = ( array_key_exists( $key, $post_meta ) ) ? $post_meta[$key] : $fallback;
	};

	return $post_meta;
}
