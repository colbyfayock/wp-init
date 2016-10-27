<?
/*
 * Clean Wordpress Head
 * --
 * Cleans up default additions to wp_head
 */

class ZurgHead extends Zurg {

    public function __construct() {

        add_action( 'init', array( $this, 'cleanup_head' ) );
        

        // Add RSS feed links

        add_theme_support('automatic-feed-links');


        // // Removes script and CSS file enqueueing for WP Plugin Contact Form 7
        // // Styles included in primary stylesheet

        // remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_scripts' );
        // remove_action( 'wp_enqueue_scripts', 'wpcf7_enqueue_styles' );

    }

    public function cleanup_head() {

        // EditURI link

        remove_action( 'wp_head', 'rsd_link' );


        // windows live writer

        remove_action( 'wp_head', 'wlwmanifest_link' );


        // index link

        remove_action( 'wp_head', 'index_rel_link' );


        // previous link

        remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );


        // start link

        remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );


        // links for adjacent posts

        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );


        // Remove WP version from RSS

        add_filter( 'the_generator', array( $this, 'remove_rss_version' ) );
        

        add_filter( 'gallery_style', array( $this, 'clean_galleries' ) );
        

        // WP version

        remove_action( 'wp_head', 'wp_generator' );
        

        // Removes query parameter added to style inserts

        add_filter( 'style_loader_src', array( $this, 'remove_version_query' ), 9999 );


        // Removes query parameter added to script inserts
        
        add_filter( 'script_loader_src', array( $this, 'remove_version_query' ), 9999 );

    }


    // Remove WP version from RSS

    public function remove_rss_version() {
        return '';
    }


    // Removes WP version added to CSS and JS by default

    public function remove_version_query( $src ) {
        return strpos( $src, 'ver=' ) ? remove_query_arg( 'ver', $src ) : $src;
    }


    // Removes injected CSS from gallery output

    public function clean_galleries($css) {
        return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
    }


}

new ZurgHead();