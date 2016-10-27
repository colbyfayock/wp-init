<?
/*
 * Admin area and functions to change the dashboard
 */

class ZurgAdmin extends Zurg {

    public function __construct() {
        add_filter( 'login_headerurl', array( 'ZurgAdmin', 'set_login_logo_url' ) );
        add_filter( 'login_headertitle', array( 'ZurgAdmin', 'set_login_logo_alt' ) );
    }

    // Change primary login screen logo to home

    public function set_login_logo_url() {
        return home_url();
    }

    // changing the alt text on the logo to show your site name

    public function set_login_logo_alt() {
        return get_option( 'blogname' );
    }

}

new ZurgAdmin();