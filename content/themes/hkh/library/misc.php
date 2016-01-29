<?

// Clean excerpt links
// --
// Removes read more link, keeps ...

function cleanExcerptLinks($more) {
    global $post;
    return '...';
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

    if ( $sort && $sort != '' ) {
        function cmp($a, $b) {
            return strcmp($a[$sort], $b[$sort]);
        }

        usort($children, "cmp");
    }

    return $children;
}