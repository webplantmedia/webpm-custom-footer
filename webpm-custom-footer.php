<?php
/*
Plugin Name: WebPM Custom Footer
Plugin URI: https://webplantmedia.com
Description: An easy to use plugin that adds a custom footer.
Author: Web Plant Media
Author URI: http://webplantmedia.com/
Version: 1.8
License: GPLv2 or later
*/
add_filter( 'genesis_footer_creds_text', 'webpm_custom_footer_creds_text' );
function webpm_custom_footer_creds_text( $creds_text ) {
	return '[footer_copyright before="Copyright "] &middot; Site crafted with care by <a href="https://webplantmedia.com/">Web&nbsp;Plant&nbsp;Media</a>,&nbsp;LLC &middot; [footer_loginout]';
}
