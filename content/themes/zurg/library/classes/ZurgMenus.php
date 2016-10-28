<?
/*
 * Register menus
 */

class ZurgMenus extends Zurg {

    public function __construct() {

        add_action( 'init', array( $this, 'register_menus' ) );

    }


    public function register_menus() {

        add_theme_support( 'menus' );

        register_nav_menus(
            array(
                'primary-nav'  => __( 'Primary Navigation' ),   // main nav in header
                'footer-links' => __( 'Footer Links' ) // secondary nav in footer
            )
        );

    }


    // Navigation Menu
    // --
    // Displays a navigation menu created in the Appearance → Menus panel
    // wp_nav_menu($array)
    // http://codex.wordpress.org/Function_Reference/wp_nav_menu

    public function get_primary_nav($depth = 0) {

        $settings = array(
            'theme_location'  => 'primary-nav',
            'menu'            => false,
            'container'       => false,
            'container_class' => false,
            'container_id'    => false,
            'menu_class'      => false,
            'menu_id'         => false,
            'echo'            => true,
            'fallback_cb'     => array('ZurgMenus', 'get_primary_nav_backup'),
            'before'          => false,
            'after'           => false,
            'link_before'     => false,
            'link_after'      => false,
            'items_wrap'      => '<ul class="cf">%3$s</ul>',
            'depth'           => !empty($depth) && $depth > 0 ? $depth : 0,
            'walker'          => false
        );

        wp_nav_menu($settings);

    }


    // Backup Primary Navigation Pages Menu
    // --
    // Displays a list of WordPress Pages as links
    // Fallback for primary navigation
    // $args: array containing prevous settings
    // wp_page_menu($array)
    // http://codex.wordpress.org/Function_Reference/wp_page_menu

    public function get_primary_nav_backup($depth = 0) {

        $args = func_get_args();

        $settings = array(
            'depth'       => $args[0]['depth'],
            'sort_column' => 'menu_order, post_title',
            'menu_class'  => false,
            'include'     => false,
            'exclude'     => false,
            'echo'        => true,
            'show_home'   => false,
            'link_before' => false,
            'link_after'  => false,
        );

        add_filter('wp_page_menu', array('ZurgMenus', 'clean_page_menu'));

        wp_page_menu( $settings );

    }


    // Footer links
    // --
    // Displays a navigation menu created in the Appearance > Menus panel
    // wp_nav_menu($array)
    // http://codex.wordpress.org/Function_Reference/wp_nav_menu

    public function get_footer_links($depth = 0) {

        $settings = array(
            'theme_location'  => 'footer-links',
            'menu'            => false,
            'container'       => false,
            'container_class' => false,
            'container_id'    => false,
            'menu_class'      => false,
            'menu_id'         => false,
            'echo'            => true,
            'fallback_cb'     => array('ZurgMenus', 'get_footer_links_backup'),
            'before'          => false,
            'after'           => false,
            'link_before'     => false,
            'link_after'      => false,
            'items_wrap'      => '<ul class="cf">%3$s</ul>',
            'depth'           => !empty($depth) ? $depth : 0,
            'walker'          => false
        );

        wp_nav_menu($settings);
    }


    // Backup Footer Links Pages Menu
    // --
    // Displays a list of WordPress Pages as links
    // Fallback for secondary navigation
    // $args: array containing prevous settings
    // wp_page_menu($array)
    // http://codex.wordpress.org/Function_Reference/wp_page_menu

    public function get_footer_links_backup() {

        $args = func_get_args();

        $settings = array(
            'depth'       => $args[0]['depth'],
            'sort_column' => 'menu_order, post_title',
            'menu_class'  => false,
            'include'     => false,
            'exclude'     => false,
            'echo'        => true,
            'show_home'   => false,
            'link_before' => false,
            'link_after'  => false,
        );

        add_filter('wp_page_menu', array('ZurgMenus', 'clean_page_menu'));

        wp_page_menu( $settings );

    }


    public function clean_page_menu($menu) {
        return preg_replace( array( '#^<div[^>]*>#', '#</div>$#' ), '', $menu );
    }

}

new ZurgMenus();