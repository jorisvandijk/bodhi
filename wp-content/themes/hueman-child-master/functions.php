<?php
/* ------------------------------------------------------------------------- *
 *  Custom functions
/* ------------------------------------------------------------------------- */
	
	// Add your custom functions here, or overwrite existing ones. Read more how to use:
	// http://codex.wordpress.org/Child_Themes

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');