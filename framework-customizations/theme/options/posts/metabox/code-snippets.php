<?php

if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/*
 *  METABOX:
 *  CODE SNIPPETS META BOX
 */

$options = array(

	'lh_use_snippet_as_thumb' => array(
	    'type'  => 'switch',
	    'value' => 'no',
	    'label' => __(' Code als Vorschaubild nutzen?', '{domain}'),
	    'desc'  => __('Soll statt einem Thumbnail, das erste Snippet-Code angezeigt werden', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	    
	    'left-choice' => array(
	        'value' => 'yes',
	        'label' => __('Code als Vorschau nutzen', '{domain}'),
	    ),
	    'right-choice' => array(
	        'value' => 'no',
	        'label' => __('Bild als Vorschau nutzen', '{domain}'),
	    ),
	),

	'lh_code_snippets' => array(
	    'type' => 'addable-popup',
	    'value' => array(),
	    
	    'label' => __('Code Snippets', '{domain}'),
	    'desc'  => __('Add code snippets you want to display, first snippet is used for preview', '{domain}'),
	    'template' => '{{- snippet_title }}',
	    'popup-title' => 'Code Snippet',
	    'size' => 'medium', 
	    'limit' => 0, // limit the number of popup`s that can be added
	    'add-button-text' => __('Add Snippet', '{domain}'),
	    'sortable' => true,
	    
	    'popup-options' => array(
	        'snippet_code' => array(
			    'type'  => 'textarea',
			    'value' => '',
			    'label' => __('Code Snippet', '{domain}'),
			    'desc'  => __('Paste your code here. Converter for special characters: https://mothereff.in/html-entities', '{domain}'),
			    'help'  => __('Help tip', '{domain}'),
			),
	        'encode_code' => array(
				'type'  => 'switch',
				'value' => true,
				'label' => __('Zu HTML Entities konvertieren', '{domain}'),
				'desc'  => __('Bestimmt, ob Sonderzeichen durch HTML Entities ersetzt werden', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => true,
					'label' => __('Ja, Code encodieren', '{domain}'),
				),
				'right-choice' => array(
					'value' => false,
					'label' => __('Nein, Code unverändert lassen', '{domain}'),
				),
			),
	        'snippet_title' => array(
			    'type'  => 'text',
			    'value' => '',
			    'label' => __('Title', '{domain}'),
			    'desc'  => __('The title below the code block.', '{domain}'),
			    'help'  => __('', '{domain}'),
			),
			'snippet_highlight' => array(
			    'type'  => 'select',
			    'value' => 'php',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Select Highlighter', '{domain}'),
			    'desc'  => __('Select the type of code you pasted', '{domain}'),
			    'help'  => __('', '{domain}'),
			    'choices' => array(
			        'php'        => 'PHP',
			        'javascript' => 'Javascript',
			        'apacheconf' => 'Apache',
			        'json'       => 'JSON',
			        'html'       => 'HTML',
			    ),
			),
			
	        'snippet_source' => array(
			    'type'  => 'text',
			    'value' => '',
			    'label' => __('Quelle', '{domain}'),
			    'desc'  => __('Optionale Quelle (Link) im Title', '{domain}'),
			    'help'  => __('', '{domain}'),
			),
	    ),
	),


);
