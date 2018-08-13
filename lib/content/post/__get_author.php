<?php

/**
 * Gibt Autoren Daten als Array zurück
 *
 * @param  string|int $author_id   ID des Nutzers
 *
 * @return array                   Array mit Author Daten
 */
function __get_author( $author_id, $avatar_default = '404' ){
	if( !$author_id ){ return false; }
	$author = get_user_by( 'id', $author_id );

	$author_data = [];
	if( $author ){
		$avatar_args = [
			'default' => $avatar_default,
		];
		$author_data = [
			'id'            => $author->ID,
			'avatar_url'    => get_avatar_url( $author->ID, $avatar_args ),
			'name_login'    => $author->data->user_login,
			'name_nice'     => $author->data->user_nicename,
			'name_display'  => $author->data->display_name,
			'email'         => $author->data->user_email,
			'capabilities'  => $author->caps,
		];
	}
	return $author_data;
}
