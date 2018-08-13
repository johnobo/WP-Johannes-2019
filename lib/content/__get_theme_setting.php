<?php

/**
 * Bekommt eine Unyson Theme Setting
 *
 * @param  string $id       Setting-Field-ID
 * @param  mixed  $fallback Optional. Fallback Wert der zurück gegeben wird
 *
 * @return mixed            Settings-Field-Value
 */
function __get_theme_setting( $id, $fallback = NULL ){
	if( !IS_UNYSON_ACTIVE & !$id ) {
		return $fallback;
	}

	$value = fw_get_db_settings_option( $id );
	return ( !is_null( $value ) ) ? $value : $fallback;
}
