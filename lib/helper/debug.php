<?php 
/**
 * Debug Helper, der eine HTML Vardump Ausgabe erzeugt
 *
 * @param  mixed   $obj   Variable für den var_dump
 * @param  boolean $title Optional. Titel über der <pre> Ausgabe
 *
 * @return void
 */
function d( $obj, $title = false ){
	echo "<div class=\"debug\">";
	if( $title ) {
		echo "<h3 class=\"debug__title\">" . $title . "</h3>";
	}
	echo "<pre class=\"debug__print\">";
	var_dump( $obj );
	echo "</pre>";
	echo "</div>";
};
