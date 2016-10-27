<?
/*
 * Configure site images
 */

class ZurgImages extends Zurg {

    public function __construct() {

        // WP Thumbnails (sizes handled in functions.php)
        // default thumb size

        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 125, 125, true );
        
        add_filter( 'init', array( $this, 'setup_custom_image_sizes' ) );

        add_filter( 'the_content', array( $this, 'clean_image_tags' ) );

    }


    public function setup_custom_image_sizes() {

        // To call a different size, simply change the text
        // inside the thumbnail function.

        // For example, to call the 300 x 100 sized image,
        // we would use the function:
        // the_post_thumbnail( 'zurg-thumb-300x300' )
        // for the 600 x 150 image:
        // the_post_thumbnail( 'zurg-thumb-600x150' )

        add_image_size( 'zurg-thumb-600x150', 600, 150, true );
        add_image_size( 'zurg-thumb-300x300', 300, 300, true );

        add_filter( 'image_size_names_choose', array( $this, 'register_custom_image_size_names' ) );

    }
    

    public function register_custom_image_size_names( $sizes ) {

        $sizes_custom = array(
            'zurg-thumb-600x150' => __('Custom Size 1'),
            'zurg-thumb-300x300' => __('Custom Size 2'),
        );
        
        return array_merge( $sizes, $sizes_custom );

    }


    // Remove the p from around imgs
    // -----
    // http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/

    public function clean_image_tags($content){
        return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    }

}

new ZurgImages();