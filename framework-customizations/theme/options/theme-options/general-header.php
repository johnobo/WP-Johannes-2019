<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/*
 *  OPTIONEN FÜR DEN ALLGEMEINEN
 *  SEITEN HEADER
 */

$options = array(

	'lh_general_header' => array(
		'title'   => __( 'Header Optionen', 'unyson' ),
		'type' => 'tab',
		'options' => array(
			'lh_meta_header' => array(
				'title'   => __( 'Logo im Seitenkopf', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					// === Logo Primary Text 
					'lh_logo_primary' => array(
					    'type'  => 'text',
					    'value' => 'Primary Logo Text',
					    'label' => __('Logo Text (Primary)', '{domain}'),
					    'desc'  => __('', '{domain}'),
					    'help'  => __('', '{domain}'),
					),
					// === Logo Primary Text 
					'lh_logo_secondaray' => array(
					    'type'  => 'text',
					    'value' => 'Blog',
					    'label' => __('Logo Text (Secondary)', '{domain}'),
					    'desc'  => __('', '{domain}'),
					    'help'  => __('', '{domain}'),
					),
				)
			),
			
			
			'lh_menu_mobile' => array(
				'title'   => __( 'Mobiles Menü', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					// === Button Label
					'lh_mobile_menu_title' => array( 
					    'type'  => 'text',
					    'value' => 'Menü',
					    'label' => __('Button Label', '{domain}'),
					    'desc'  => __('Der Text, welcher auf dem Mobile-Menu-Button stehen soll.', '{domain}'),
					    'help'  => __('Z.b.: "Menü"', '{domain}'),
					),
					// === Button Icon
					'lh_mobile_menu_icon' => array( 
					    'type'  => 'icon-v2',
					    'preview_size' => 'medium',
					    'modal_size' => 'large',
					    'label' => __('Icon', '{domain}'),
					    'desc'  => __('Icon das im Button stehen soll', '{domain}'),
					    'help'  => __('', '{domain}'),
					),
				)
			),
		)
	),




);
