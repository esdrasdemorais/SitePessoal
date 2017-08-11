<?php
/**
 * Includes all of the WordPress Administration API files.
 *
 * @package WordPress
 * @subpackage Administration
 */

if ( ! defined('WP_ADMIN') ) {
	/*
	 * This file is being included from a file other than wpManut/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . get_locale() . '.mo' );
}

/** WordPress Bookmark Administration API */
require_once(ABSPATH . 'wpManut/includes/bookmark.php');

/** WordPress Comment Administration API */
require_once(ABSPATH . 'wpManut/includes/comment.php');

/** WordPress Administration File API */
require_once(ABSPATH . 'wpManut/includes/file.php');

/** WordPress Image Administration API */
require_once(ABSPATH . 'wpManut/includes/image.php');

/** WordPress Media Administration API */
require_once(ABSPATH . 'wpManut/includes/media.php');

/** WordPress Import Administration API */
require_once(ABSPATH . 'wpManut/includes/import.php');

/** WordPress Misc Administration API */
require_once(ABSPATH . 'wpManut/includes/misc.php');

/** WordPress Plugin Administration API */
require_once(ABSPATH . 'wpManut/includes/plugin.php');

/** WordPress Post Administration API */
require_once(ABSPATH . 'wpManut/includes/post.php');

/** WordPress Administration Screen API */
require_once(ABSPATH . 'wpManut/includes/screen.php');

/** WordPress Taxonomy Administration API */
require_once(ABSPATH . 'wpManut/includes/taxonomy.php');

/** WordPress Template Administration API */
require_once(ABSPATH . 'wpManut/includes/template.php');

/** WordPress List Table Administration API and base class */
require_once(ABSPATH . 'wpManut/includes/class-wp-list-table.php');
require_once(ABSPATH . 'wpManut/includes/list-table.php');

/** WordPress Theme Administration API */
require_once(ABSPATH . 'wpManut/includes/theme.php');

/** WordPress User Administration API */
require_once(ABSPATH . 'wpManut/includes/user.php');

/** WordPress Update Administration API */
require_once(ABSPATH . 'wpManut/includes/update.php');

/** WordPress Deprecated Administration API */
require_once(ABSPATH . 'wpManut/includes/deprecated.php');

/** WordPress Multisite support API */
if ( is_multisite() ) {
	require_once(ABSPATH . 'wpManut/includes/ms.php');
	require_once(ABSPATH . 'wpManut/includes/ms-deprecated.php');
}
