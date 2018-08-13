<?php

define( 'THEME_FOLDER_CONTROLLER', 'theme-controller/' );
define( 'THEME_FOLDER_VIEWS',      'theme-views/html/' );


/* ******************* *\
 *
 *   PLUGIN MANAGMENT
 *
\* ******************* */

// DEFINE NEEDED PLUGINS
require_once 'lib/plugin-managment/plugins.php';

// === Test Plugins ===
define( "IS_UNYSON_ACTIVE", is_plugin_active( 'unyson/unyson.php' ) ); // IS_UNYSON_ACTIVE => true | false



/* ******************* *\
 *
 *   Template Enginge
 *
\* ******************* */

require_once 'lib/template-engine/mustache-config.php';



/* ******************* *\
 *
 *        HELPER
 *
\* ******************* */

require_once 'lib/helper/debug.php';
require_once 'lib/helper/theme_controller.php';
require_once 'lib/helper/theme_get_folder.php';
require_once 'lib/helper/theme_output_buffer.php';
require_once 'lib/helper/theme_setup.php';
require_once 'lib/helper/theme_view.php';



/* ******************* *\
 *
 *        SETUP
 *
\* ******************* */

theme_include_files( '/lib/setup/' ); // Inkludiert alle Files aus '/lib/setup/'



/* ******************* *\
 *
 *  CONTENT FUNCTIONS
 *
\* ******************* */

// Allgemeine Website Dinger
theme_include_files( '/lib/content/', '__get_' );

// Post/Beitrag bezogene Daten
theme_include_files( '/lib/content/post/', '__get_' );
