<?php

/* === OPTIONS === */

$template_dircetory = get_template_directory() . '/' . THEME_FOLDER_VIEWS;

$mustache_loader_options =  array(
	'extension' => '.html'
);


/* MUSTACHE AUTO LOADER - DON'T CHANGE THIS */
require 'Mustache/Autoloader.php';
Mustache_Autoloader::register();


/* Mustache Engine Ignite */
$theme_view = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader( $template_dircetory, $mustache_loader_options ),
));


$theme_view->addHelper( 'id-to', [

    'author' => function( $id ) {
    	$author_name = get_the_author_meta( 'login', $id );
		return $author_name;
	},

	'permalink' => function( $id ) {
    	$post_link = get_the_permalink( $id );
		return $post_link;
	},
]);
