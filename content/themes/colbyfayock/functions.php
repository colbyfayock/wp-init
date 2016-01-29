<?php

add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url');
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Autoversion files
// Ex: style.1362807796.css
function auto_version($file) {
    $home = '/home/colbz/colbyfayock.com/' . $GLOBALS["TEMPLATE_RELATIVE_URL"];
    $dev = '..' . $GLOBALS["TEMPLATE_RELATIVE_URL"];

    if(!file_exists($home . $file)) {
        if(!file_exists($dev . $file)) {
            return $GLOBALS["TEMPLATE_RELATIVE_URL"] . $file;
        } else {
            $devMode = true;
        }
    }

    $mtime = filemtime((!empty($devMode) ? $dev : $home) . $file);
    $file = preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
    return (!empty($devMode) ? $dev : $GLOBALS["TEMPLATE_RELATIVE_URL"]) . $file;
}

function auto_version_cdn($file) {
    $home = '/home/colbz/cdn.colbyfayock.com';
    $dev = '..' . $GLOBALS["TEMPLATE_RELATIVE_URL"] . '/_cdn';

    if(!file_exists($home . $file)) {
        if(!file_exists($dev . $file)) {
            return 'http://cdn.colbyfayock.com' . $file;
        } else {
            $devMode = true;
        }
    }

    $mtime = filemtime((!empty($devMode) ? $dev : $home) . $file);
    $file = preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
    return (!empty($devMode) ? $dev : 'http://cdn.colbyfayock.com') . $file;
}


// Theme wrapper

function zurg_template_path() {
	return Zurg_Wrapping::$main_template;
}

function zurg_template_base() {
	return Zurg_Wrapping::$base;
}


class Zurg_Wrapping {

	/**
	 * Stores the full path to the main template file
	 */
	static $main_template;

	/**
	 * Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
	 */
	static $base;

	static function wrap( $template ) {
		self::$main_template = $template;

		self::$base = substr( basename( self::$main_template ), 0, -4 );

		if ( 'index' == self::$base )
			self::$base = false;

		$templates = array( 'wrapper.php' );

		if ( self::$base )
			array_unshift( $templates, sprintf( 'wrapper-%s.php', self::$base ) );

		return locate_template( $templates );
	}
}

add_filter( 'template_include', array( 'Zurg_Wrapping', 'wrap' ), 99 );


add_filter('next_posts_link_attributes', 'next_link_attribute');
add_filter('previous_posts_link_attributes', 'previous_link_attribute');

function next_link_attribute() {
    return 'class="next-post-link"';
}
function previous_link_attribute() {
    return 'class="previous-post-link"';
}


// Returns <body> class describing current page

function getBodyClass() {
    if ( is_home() && get_query_var('paged') < 2 ) {
        $class = 'home';
    } else {
        $class = 'not-home';
    }
    if ( is_page() ) $class .= ' page';
    if ( is_single() ) $class .= ' single';
    if ( is_archive() ) $class .= ' archive';

    return $class;
}