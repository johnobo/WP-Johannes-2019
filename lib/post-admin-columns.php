<?php

add_filter( 'manage_posts_columns', 'set_custom_edit_book_columns' );
add_action( 'manage_posts_custom_column' , 'custom_book_column', 10, 2 );

function set_custom_edit_book_columns( $columns ) {
    unset( $columns['author'] );
    unset( $columns['tags'] );
	
    $columns['preview_type'] = __( 'Preview Type', 'your_text_domain' );

    return $columns;
}

function custom_book_column( $column, $post_id ) {
    switch ( $column ) {

        case 'preview_type' :
			
            $meta = get_post_meta( $post_id );
            $meta_unyson = unserialize( $meta["fw_options"][0] );
			
			$meta_preview_type = ( $meta_unyson["lh_use_snippet_as_thumb"] == 'yes' ) ? "Code-Vorschau" : "Bild-Vorschau";
			
			echo $meta_preview_type;
			
            break;

    }
}