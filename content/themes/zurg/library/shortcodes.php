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
 *    return 'shortcode';
 *
 * }
 * add_shortcode( 'get_shortcode', 'shortcode' );
 */


// Returns Vimeo embed wrapped in a fitvid container

function vimeoEmbed( $atts ){

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

add_shortcode( 'vimeo', 'vimeoEmbed' );


// Returns Youtube embed wrapped in a fitvid container

function youtubeEmbed( $atts ){

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

add_shortcode( 'youtube', 'youtubeEmbed' );