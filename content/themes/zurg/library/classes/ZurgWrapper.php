<?
/*
 * Theme wrapper
 * --
 * http://scribu.net/wordpress/theme-wrappers.html
 */

class ZurgWrapper extends Zurg {

    public function __construct() {
        add_filter( 'template_include', array( $this, 'wrap' ), 99 );
    }

    // Stores the full path to the main template file
    
    static $main_template;

    // Stores the base name of the template file; e.g. 'page' for 'page.php' etc.

    static $base;

    static function wrap( $template ) {

        self::$main_template = $template;

        self::$base = substr( basename( self::zurg_template_path() ), 0, -4 );

        if ( 'index' == self::$base ) {
            self::$base = false;
        }

        $templates = array( 'wrapper.php' );

        if ( self::$base ) {
            array_unshift( $templates, sprintf( 'wrapper-%s.php', self::$base ) );
        }

        return locate_template( $templates );

    }

    public function zurg_template_path() {
        return self::$main_template;
    }

    public function zurg_template_base() {
        return self::$base;
    }

}

new ZurgWrapper();