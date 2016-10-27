<?
/*
 * Shortcodes
 * --
 * Can accept an argument which is a key=>value array of parameters passed in
 * Must return a string, replaces shortcode when rendered
 * --
 * function shortcode( $args ) {
 *
 *    // $args passed in as key => value array
 *    // return the result
 *
 *    extract( shortcode_atts( array(
 *        'param' => false
 *    ), $atts ) );
 *
 *    return 'shortcode - ' . $param;
 *
 * }
 * add_shortcode( 'get_shortcode', 'shortcode' );
 * Usage: [get_shortcode param="value"]
 */

class ZurgShortcodes extends Zurg {

    public function __construct() {

        add_shortcode( 'vimeo', array( $this, 'setup_vimeo' ) );
        add_shortcode( 'youtube', array( $this, 'setup_youtube' ) );

    }


    // Returns Vimeo embed wrapped in a fitvid container

    public function setup_vimeo( $atts ){

        extract( shortcode_atts( array(
            'id' => false
        ), $atts ) );

        if( $id !== false ) {
            $embed = '<p class="fitvid"><iframe src="//player.vimeo.com/video/' . $id . '" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>';
        } else {
            $embed = 'Oops, no video ID provided!';
        }

        return $embed;
    }


    // Returns Youtube embed wrapped in a fitvid container

    public function setup_youtube( $atts ){

        extract( shortcode_atts( array(
            'id' => false
        ), $atts ) );

        if( $id !== false ) {
            $embed = '<p class="fitvid"><iframe width="853" height="480" src="//www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe></p>';
        } else {
            $embed = 'Oops, no video ID provided!';
        }

        return $embed;
    }

}

new ZurgShortcodes();