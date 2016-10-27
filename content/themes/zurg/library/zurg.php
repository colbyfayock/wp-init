<?

// Zurg WP Theme Development
// --
// This hook is called during each page load, after
// the theme is initialized. It is generally used
// to perform basic setup, registration, and init
// actions for a theme.
// --
// http://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme

class Zurg {

    public function __construct() {

        require_once( 'classes/ZurgHelpers.php' );
        require_once( 'classes/ZurgHead.php' );
        new ZurgHead();

        require_once( 'theme-support.php' );
        require_once( 'misc.php' );

        require_once( 'classes/ZurgAdmin.php' );
        new ZurgAdmin();

        require_once( 'custom-settings.php' );

        require_once( 'classes/ZurgWrapper.php' );
        new ZurgWrapper();

        require_once( 'sidebar.php' );
        require_once( 'menus.php' );
        require_once( 'images.php' );
        require_once( 'shortcodes.php' );
        require_once( 'search.php' );
        // require_once( 'contact-form-7.php' );

        add_action( 'after_setup_theme', array('Zurg', 'launch_theme'), 16 );

    }

    public function launch_theme() {
        add_action( 'init', 'cleanupHead' ); // See head.php
        addThemeSupport(); // See theme-support.php
        add_action( 'widgets_init', 'registerSidebars' ); // See sidebar.php
        add_filter( 'get_search_form', 'getSearchForm' ); // See search.php
        add_filter( 'the_content', 'cleanImageTags' ); // See images.php
        add_filter( 'excerpt_more', 'cleanExcerptLinks' );
    }

}