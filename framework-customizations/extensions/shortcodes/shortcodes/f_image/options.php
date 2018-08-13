<?php

$options = array(
	// === INPUT : TITLE 
	'f_item_title' => array(
		'label' => __( 'Title', 'unyson' ),
		'type'  => 'text',
		'value' => '',
		'desc'  => "Der Titel wird nicht angezeigt.",
		'help'  => "Der Titel wird nicht angezeigt.",
	),
	
	// === INPUT : TYP WÄHLEN
	'f_item_types' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		
		// Select Picker
		'picker'       => array(
			'f_item_type' => array(
				'label'   => __( 'Wählen Sie den Beitragstypen', 'unyson' ),
				'type'    => 'select',
				'choices' => array(
					'post'           => __( 'Beitrag direkt auswählen', 'unyson' ),
					'post-by-image'  => __( 'Bild von Beitrag Auswählen', 'unyson' ),
					'image'          => __( 'Bild hochladen oder auswählen', 'unyson' ),
				),
				'desc'    => "Geben Sie an, ob ein Beitragsbild, ein Bild aus einem Beitrag oder separates Bild angezeigt werden soll.",
				'help'    => sprintf( "<b>%s :</b>\n<br/> %s \n<br/><hr> <b>%s :</b>\n<br/> %s \n<br/><hr> <b>%s :</b>\n<br/> %s \n<br/>",
									"Beitrag direkt auswählen",      "Wählen Sie einen Beitrag aus einer Liste aus und das passende Beitragsbild wird angezeigt. Es wird zum Beitrag geklinkt.",
									"Bild von Beitrag Auswählen",    "Wählen Sie ein Bild aus, welches zu einem Beitrag gehört. Dieses Bild wird dann angezeigt und es wird der Beitrag verlinkt sein, zu dem dieses Bild hochgeladen wurde.",
									"Bild hochladen oder auswählen", "Wählen Sie ein Bild aus oder laden Sie ein eigenes hoch, es wird auf die Bild-Seite gelinkt, jedoch nicht auf einen Beitrag."
				),
			)
		),
		
		// Auswahlmöglichkeiten
		'choices'      => array(
			// BEITRAG
			'post'  => array(
				'f_item_post' => array(
					'type'  => 'multi-select',
					'value' => array(),
					
					'label' => __('Beitrag wählen', '{domain}'),
					'desc'  => __('Suche nach dem Titel des Beitrages', '{domain}'),
					'help'  => __('Der Beitrag auf den der User kommt, wenn er auf das Bild klickt. Als Vorschau Bild wird das "Beitragsbild" hergenommen.', '{domain}'),

					'population' => 'posts',
					'source'     => 'post',
					 
					'prepopulate' => 25,
					'limit' => 1,
				),
			),
			
			// BILD AUS BEITRAG
			'post-by-image'  => array(
				'f_item_post_image' => array(
					'type'  => 'upload',
					'value' => array(),
					'label' => __('Bild von einem Beitrag wählen.', '{domain}'),
					'desc'  => __('Wählen Sie ein Bild aus, dass bereits zu einem Beitrag hochgeladen wurden', '{domain}'),
					'help'  => __('Wähle ein bestehendes Bild aus, welches bereits mit einem Beitrag in Verbindung steht. Dieses wird dann als Vorschaubild genommen und der Bersucher kommt auf den Beitrag', '{domain}'),
					
					'images_only' => true,
				),
			),
			
			// BILD DIREKT
			'image'  => array(
				'f_item_image' => array(
					'type'  => 'upload',
					'value' => array(),
					'label' => __('Bild von einem Beitrag wählen.', '{domain}'),
					'desc'  => __('Das Bild wird als Beitrag angezeigt, der Besucher kommt dann auf die Einzel-Bild-Ansicht.', '{domain}'),
					'help'  => __('Help tip', '{domain}'),
					
					'images_only' => true,
				),
			),
		),
		'show_borders' => false,
	), 
);

