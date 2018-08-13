<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'lh_metabox_code' => array(
		'title'   => 'Code',
		'type'    => 'box',
		'options' => array(
			fw()->theme->get_options( 'posts/metabox/code-snippets' ),
		),
	),
	'lh_metabox_video' => array(
		'title'   => 'Video',
		'type'    => 'box',
		'options' => array(
			fw()->theme->get_options( 'posts/metabox/video-metabox' ),
		),
	),
);
