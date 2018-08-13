<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/*
 *  METABOX:
 *  VIDEO META BOX
 */

$options = array(

	'lh_use_video_as_thumb' => array(
	    'type'  => 'switch',
	    'value' => 'no',
	    'label' => __(' Video als Vorschaubild nutzen?', '{domain}'),
	    'desc'  => __('Soll statt einem Thumbnail, das Video als Vorschau gezeigt werden?', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	    
	    'left-choice' => array(
	        'value' => 'yes',
	        'label' => __('Video als Vorschau nutzen', '{domain}'),
	    ),
	    'right-choice' => array(
	        'value' => 'no',
	        'label' => __('Bild als Vorschau nutzen', '{domain}'),
	    ),
	),

	'lh_video_url' => array(
		'type'  => 'text',
		'value' => '',
		'label' => __('Video Url', '{domain}'),
		'desc'  => __('Link zum Video', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
	),


);
