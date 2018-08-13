<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['default_item_widths'] = array(
	'1_6' => array(
		'title'          => '1/3',
		'backend_class'  => 'fw-col-sm-4',
		'frontend_class' => 'uk-width-medium-1-3',
	),
	'3_6' => array(
		'title'          => '2/3',
		'backend_class'  => 'fw-col-sm-8',
		'frontend_class' => 'uk-width-medium-2-3',
	),
	'6_6' => array(
		'title'          => '3/3',
		'backend_class'  => 'fw-col-sm-12',
		'frontend_class' => 'uk-width-medium-1-1',
	),
);

$cfg['grid.row.class'] = 'uk-grid';