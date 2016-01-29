<?

// Clean excerpt links
// --
// Removes […] to a Read More link

function cleanExcerptLinks($more) {
    global $post;
    return '...  '
        . '<a class="excerpt-read-more" href="' . get_permalink($post->ID) . '" title="Read' . get_the_title($post->ID) . '">'
            . 'Read More'
        . '</a>';
}


// Numeric pagination
// --
// Creates page number pagination

function getPagination() {

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


// Get page children content
// --
// Returns an array of the current page (or ID)'s children

function getCurrentChildren($id = false, $sort = false) {

    if( $id == false ) return false;

    $args = array(
        'post_parent' => $id
    );

    $children = get_children( $args, ARRAY_A );

    if ( $sort === 'menu_order' ) {

        $currChildren = array();

        foreach( $children as $child ) {
            $currChildren[] = $child;
        }

        unset($children);
        $children = array();

        for ( $i = 0, $childLen = count($currChildren); $i < $childLen; $i++ ) {
            $children[$currChildren[$i]['menu_order']] = $currChildren[$i];
        }

        ksort($children);

    }

    return $children;

}