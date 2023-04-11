<?php
/**
 * Blackcats Seguridad
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); /* Template Name: Portada */

// Get only the approved comments
$args = array(
	'status' => 'approve',
);

// The comment Query
$comments_query = new WP_Comment_Query();
$comments       = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {
	foreach ( $comments as $comment ) {
		echo '<p>' . $comment->comment_content . '</p>';
	}
} else {
	echo 'No comments found.';
}


get_footer(); 