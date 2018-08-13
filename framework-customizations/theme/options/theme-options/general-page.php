<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/*
 *  OPTIONEN FÜR DEN ALLGEMEINEN
 *  SEITEN HEADER
 */

$options = array(

	'lh_general_page' => array(
		'title'   => __( 'Allgemeine Einstellungen', 'unyson' ),
		'type' => 'tab',
		'options' => array(
			'lh_social' => array(
				'title'   => __( 'Einstellungen für den Footer', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					// === Liste aller Social Channels
					'lh_social_channels' => array(
						'type'  => 'addable-box',
						'value' => array(),
						'label' => __('Social Channels', '{domain}'),
						'desc'  => __('Deine Kanäle im Social-Media', '{domain}'),
						'help'  => __('Füge hier alle Kanäle ein, die du mit deiner Seite verbunden haben möchtest.', '{domain}'),
						
						'box-options' => array(
							'lh_sc_name' => array( // Social Channel Name
							    'type'  => 'text',
							    'value' => 'Deine Seite auf Social Media',
							    'label' => __('Channel Name', '{domain}'),
							    'desc'  => __('Der Titel deines Social Channels', '{domain}'),
							    'help'  => __('Z.b.: Tims Modeleisenbahn auf Facebook', '{domain}'),
							),
							'lh_sc_icon' => array( // Social Channel : Icon
							    'type'  => 'icon-v2',
							    'preview_size' => 'medium',
							    'modal_size' => 'large',
							    'label' => __('Icon', '{domain}'),
							    'desc'  => __('Das Icon zum Channel', '{domain}'),
							    'help'  => __('Welches Icon soll mit dem Channel verbunden sein? Die Icons kommen von Font-Awesome. ', '{domain}'),
							),
							'lh_sc_link' => array( // Social Channel Link
							    'type'  => 'text',
							    'value' => '',
							    'label' => __('Dein Channel', '{domain}'),
							    'desc'  => __('der Link zu deinem Channel, mit https:// angeben', '{domain}'),
							    'help'  => __('Der direkte Link zu deinem Channel, mit https://www. und allem.', '{domain}'),
							),
						),
						
						'template' => 'Channel: {{- lh_sc_name }}', // box title
						
						'limit' => 0, 
						'add-button-text' => __('Add', '{domain}'),
						'sortable' => true,
					)
					
				)
			),
		)
	)

);
