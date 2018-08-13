<?php

/*
 *  SEITENNAVIGATION MIT SEITENZAHLEN
 *
 *  Gibt einen HTML Strink zurück mit Seitenzahlen als Links
 *  in einem DIV-Wrapper 
 */
function jg_pagination_numbered( $is_nofollow = false ) {
	global $wp_query;

	/*
	 *  TEMPLATES
	 */
	$tpl_item = "
		<a href=\"%URL%\" class=\"f-pagination__page-item %ACTIVE%\" %NOFOLLOW% >%NUMBER%</a>
	 
	";

	$nofollow     = " rel=\"nofollow\" ";
	$class_active = " active ";

	/*
	 *  GET DATA
	 */
	$max_pages      = $wp_query->max_num_pages;
	// Aktuelle Seite: Seite 0 = Seite 1
	$current_page   = ( $wp_query->query_vars['paged'] ) ? $wp_query->query_vars['paged'] : 1;
	
	// Schreibe alle Seiten auf ein Array
	$items = [];
	for ( $i=1; $i <= $max_pages ; $i++ ) { 
		$items[$i] = [
			'url'        => get_pagenum_link( $i, false ),
			'is_current' => ( $i == $current_page ) ? true : false,
		];
	};
	
	/*
	 *  BUILD HTML
	 */
	$items_html = "";
	foreach ( $items as $key => $item) {
		// Alle Items zu einem Item-HMTL-String zusammenfügen	
		$tpl_data = [
			'%NUMBER%'   => $key,
			'%URL%'      => $item['url'],
			'%ACTIVE%'   => ( $item['is_current'] ) ? " active " : "",
			'%NOFOLLOW%' => ( $is_nofollow ) ? $class_active : "",
		];
		$items_html .= strtr( $tpl_item, $tpl_data );
	};
	
	
	return $items_html;
	
};