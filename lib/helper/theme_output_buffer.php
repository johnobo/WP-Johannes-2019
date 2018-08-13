<?php

/**
 * Speichert Output in eine Variable
 *
 * Damit kann man Funktionen aufrufen, die ein Echo haben und
 * alles per return auf einer eigenen Variable speichern.
 *
 * @param  function  $call_function   Die Funktion die auferufen werden soll (nicht der Name)
 * @param  array     $args            Optional. Argumente die der Funktion übergeben werden sollen.
 *
 * @return string    Erzeugte Ausgabe
 */
function theme_output_buffer( $call_function, $param0 = NULL, $param1 = NULL, $param2 = NULL, $param3 = NULL, $param4 = NULL ){
	ob_start();
	$call_function( $param0, $param1, $param2, $param3, $param4 );
	$contents = ob_get_contents();
	ob_end_clean();

	return $contents;
}
