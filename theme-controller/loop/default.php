<?php
//
// CONTROLLER
//

global $post;
$view_data['posts'] = [];
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$view_data['posts'][] = [
			'id'       => $post->ID,
			'title'    => $post->post_title,
			'datum'     => 'hier kommen noch daten.',
			'excerpt'  => __get_excerpt( $post ),
			'content'  => __get_content( $post ),
			'author'   => __get_author( $post->post_author ),
			'link'     => get_the_permalink( $post->ID ),
			'status'   => $post->post_status,
			'image'    => __get_featured_image( $post ),
			'date'     => [
				'published' => $post->post_date,
				'modified'  => $post->post_modified,
			],
			'comments' => [
				'status' => $post->comment_status,
				'count'  => $post->comment_count,
			],
			'meta'     => __get_post_meta(),
		];
	}
} else {
}



//
// VIEW
//

theme_view( 'post/post', $view_data );
