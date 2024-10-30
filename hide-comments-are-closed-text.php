<?php
/**
 * Plugin Name: Hide "Comments are closed" Text
 * Plugin URI: http://tell.com.sg/hide-comments-are-closed.zip
 * Description: This plugin hide the text "Comments are closed" in comment section of post.
 * Author: Arshad Hussain
 * Version: 1.0.0
 * Author URI: http://hussainarsh.blogspot.in
 */

add_filter( 'gettext', 'hide_comments_are_closed', 20, 3 );

function hide_comments_are_closed( $translated_text, $untranslated_text, $domain ) {
	if ( 'Comments are closed.' == $untranslated_text ) {
		return '';
	}
	return $translated_text;
}
