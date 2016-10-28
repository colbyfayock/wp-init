<?
/*
 * WP Posts Setup
 */

class ZurgContent extends Zurg {

    public function __construct() {

        add_action( 'init', array( $this, 'setup_post_formats' ) );
        add_filter( 'excerpt_more', 'clean_excerpt_links' );
        add_filter( 'excerpt_length', array( $this, 'get_excerpt_length' ), 999 );

        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    }


    public function setup_post_formats() {

        // Adding post format support

        $formats = array(
            'aside',    // title less blurb
            'gallery',  // gallery of images
            'link',     // quick link to other site
            'image',    // an image
            'quote',    // a quick quote
            'status',   // a Facebook like status update
            'video',    // video
            'audio',    // audio
            'chat'      // chat transcript
        );

        add_theme_support( 'post-formats', $formats );

    }


    // Clean excerpt links
    // --
    // Removes […] to a Read More link

    public function clean_excerpt_links($more) {
        global $post;
        return '...  '
            . '<a class="excerpt-read-more" href="' . get_permalink($post->ID) . '" title="Read' . get_the_title($post->ID) . '">'
                . 'Read More'
            . '</a>';
    }


    public function get_excerpt_length( $length ) {
        return 20;
    }


    // Numeric pagination
    // --
    // Creates page number pagination

    public function get_pagination() {

        global $wp_query;
        $bignum = 999999999;

        if ( $wp_query->max_num_pages <= 1 ) return;

        $settings = array(
            'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
            'format'       => false,
            'total'        => $wp_query->max_num_pages,
            'current'      => max( 1, get_query_var('paged') ),
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 3,
            'prev_next'    => true,
            'prev_text'    => 'Prev',
            'next_text'    => 'Next',
            'type'         => 'list',
            'add_args'     => false,
            'add_fragment' => false
        );

        return paginate_links( $settings );

    }

}

new ZurgContent();