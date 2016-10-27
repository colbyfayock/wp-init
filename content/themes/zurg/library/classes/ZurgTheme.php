<?
/*
 * Clean Wordpress Head
 * --
 * Cleans up default additions to wp_head
 */

class ZurgTheme extends Zurg {

    public function __construct() {

        // add_action( 'init', array( $this, 'setup_custom_background' ) );

    }

    public function setup_custom_background() {
        
        // WP custom background

        $settings = array(
            'default-image' => '',  // background image default
            'default-color' => '', // background color default (dont add the #)
            'wp-head-callback' => '_custom_background_cb',
            'admin-head-callback' => '',
            'admin-preview-callback' => ''
        );

        add_theme_support( 'custom-background', $settings );

    }

}

new ZurgTheme();