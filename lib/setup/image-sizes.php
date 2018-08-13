<?php



function theme_image_sizes() {
    add_image_size( 'opengraph_thumb', 1200, 630, array( 'center', 'center' ) );
}
add_action( 'after_setup_theme', 'theme_image_sizes' );




function theme_image_sizes_admin( $sizes ) {
    return array_merge( $sizes, array(
        'opengraph_thumb' => __( 'Opengraph Preview (1200x630)' ),
    ) );
}
add_filter( 'image_size_names_choose', 'theme_image_sizes_admin' );
