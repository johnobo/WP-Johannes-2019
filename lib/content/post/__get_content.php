<?php

function __get_content( $post ){
	if( !$post ){ return false; }

	$output = apply_filters( 'the_content', $post->post_content );

	return $output;
}
