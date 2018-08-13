<?php

/**
 * Inkludiert Files aus einem Folder automatisch.
 *
 * Ich finde es einfach leichter, als ständig manuell ein
 * require_once hinzuzufügen fürde jede File
 *
 * @param  string $setup_folder     Optional. Path zu den Setup Files innerhalb des Themes
 * @param  array  $additional_files Optional. Weitere Files die man inkludiere möchte
 *
 * @see theme_get_files()
 * @see theme_require_once_files()
 *
 * @return void                     Diese Funktion gibt nichts zurück
 */
function theme_include_files( $sub_folder = '/', $file_prefix = '' ){
	$files = theme_get_files( $sub_folder, $file_prefix );
	theme_require_once_files( $files );
}

/**
 * Includes a set of files with require_once
 *
 * @param  array  $files Array with filepaths
 *
 * @return void   doesn't return shit
 */
function theme_require_once_files( $files = array() ){
	foreach ( $files as $key => $file_path ) {
		require_once $file_path;
	}
}



/**
 * Returns Array of files in Folder, in a given Path
 *
 * @param  string $sub_folder     Select Folder within the theme. Start and end with '/'
 * @param  string $file_prefix    Optional. A filename prefix, only includes files with this prefix, e.g.: 'init.'
 * @param  string $file_extension Optional. File extension like 'php' or 'css'
 *
 * @return array                  an array of files (absolute path + filename)
 */
function theme_get_files( $sub_folder = '/', $file_prefix = '', $file_extension = 'php' ) {
	$base_folder  = get_template_directory();
	$file_matches = glob( $base_folder . $sub_folder . $file_prefix . '*.' . $file_extension );
	return $file_matches;
}
