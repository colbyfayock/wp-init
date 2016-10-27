<?
/*
 * Configure site images
 */

class ZurgImages extends Zurg {

    public function __construct() {

        // To call a different size, simply change the text
        // inside the thumbnail function.

        // For example, to call the 300 x 100 sized image,
        // we would use the function:
        // the_post_thumbnail( 'zurg-thumb-300x100' )
        // for the 600 x 150 image:
        // the_post_thumbnail( 'zurg-thumb-600x150' )

        add_image_size( 'zurg-thumb-600x150', 600, 159, true );
        add_image_size( 'zurg-thumb-300x100', 300, 300, true );

        add_filter( 'image_size_names_choose', array($this, 'set_custom_image_sizes') );
        
        add_filter( 'the_content', array($this, 'clean_image_tags') );

    }
    

    public function set_custom_image_sizes( $sizes ) {

        $sizes_custom = array(
            'zurg-thumb-600x150' => __('600px by 150px'),
            'zurg-thumb-300x100' => __('300px by 100px'),
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