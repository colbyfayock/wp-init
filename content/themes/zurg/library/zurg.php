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

        add_action( 'after_setup_theme', array( $this, 'launch_theme' ), 16 );

    }

    public function launch_theme() {

        require_once( 'classes/ZurgAdmin.php' );
        require_once( 'classes/ZurgCustomSettings.php' );
        require_once( 'classes/ZurgTheme.php' );

        require_once( 'classes/ZurgWrapper.php' );
        require_once( 'classes/ZurgHead.php' );
        require_once( 'classes/ZurgMenus.php' );
        require_once( 'classes/ZurgSidebars.php' );        
        require_once( 'classes/ZurgSearch.php' );
        require_once( 'classes/ZurgContent.php' );
        require_once( 'classes/ZurgImages.php' );
        require_once( 'classes/ZurgShortcodes.php' );

        require_once( 'classes/ZurgHelpers.php' );

    }

}

new Zurg();