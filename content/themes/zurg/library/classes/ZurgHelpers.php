<?
/*
 * Clean Wordpress Head
 * --
 * Cleans up default additions to wp_head
 */

class ZurgHelpers extends Zurg {

    // Remove WP version from RSS

    static function testingthis() {
        return 'asdf';
    }


    static function get_relative_url() {
        return wp_make_link_relative( get_bloginfo('template_url') );
    }


    // Autoversion files
    // Ex: style.1362807796.css

    static function auto_version($url){
        $path = pathinfo($url);
        $ver = '.'.filemtime($_SERVER['DOCUMENT_ROOT'].$url).'.';
        echo $path['dirname'].'/'.str_replace('.', $ver, $path['basename']);
    }
    

    static function get_google_analytics_id() {
        return !empty(get_option('zurg_settings_analytics')['google_analytics']) ? get_option('zurg_settings_analytics')['google_analytics'] : false;
    }

}