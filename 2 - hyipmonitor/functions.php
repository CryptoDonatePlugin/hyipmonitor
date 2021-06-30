<?php


//------------------menu---------------------------------
function register_my_menus() {
register_nav_menus(array( 'header-menu' => __( 'Header Menu' ),'top-menu' => __( 'Top Menu' ),'footer-menu' => __( 'Footer Menu' )));
}

add_action( 'init', 'register_my_menus' );


//----------------thumbnails-----------------------------
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 260, 246 );
add_image_size( 'single-post', 260, 246 ); 
add_image_size( 'aktualnosci', 80, 80 ); 

add_action( 'after_setup_theme', 'wpse_50911_replace_img_shortcodes' );

/**
 * Replace the default shortcode handlers.
 *
 * @return void
 */
function wpse_50911_replace_img_shortcodes()
{
    remove_shortcode( 'gallery', 'gallery_shortcode' );
    add_shortcode( 'gallery', 'wpse_50911_gallery_shortcode' );

    remove_shortcode( 'caption', 'img_caption_shortcode' );
    remove_shortcode( 'wp_caption', 'img_caption_shortcode' );
    add_shortcode( 'caption', 'wpse_50911_caption_shortcode' );
    add_shortcode( 'wp_caption', 'wpse_50911_caption_shortcode' );
}

/**
 * Add the new attribute to the gallery.
 *
 * @param  array $attr Shortcode attributes
 * @return string
 */
function wpse_50911_gallery_shortcode( $attr )
{
    // Let WordPress create the regular gallery …
    $gallery = gallery_shortcode( $attr );
    // … and add the target attribute to all links.
    $gallery = str_replace( '<a ', '<a target="_blank" ', $gallery );

    return $gallery;
}

/**
 * Add the new attribute to the caption.
 *
 * @param  array  $attr    Shortcode attributes
 * @param  string $content Caption text
 * @return string
 */
function wpse_50911_caption_shortcode( $attr, $content = NULL )
{
    $caption = img_caption_shortcode( $attr, $content );
    $caption = str_replace( '<a ', '<a target="_blank" ', $caption );
    return $caption;
}
//----------------sidebars-----------------------------
function home_left_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Home-Left-Sidebar', 'hyipmonitor24h' ),
            'id' => 'home-left-sidebar',
            'description' => __( 'Home Left Sidebar', 'hyipmonitor24h' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'home_left_sidebar' );


function home_right_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Home-Right-Sidebar', 'hyipmonitor24h' ),
            'id' => 'home-right-sidebar',
            'description' => __( 'Home Right Sidebar', 'hyipmonitor24h' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'home_right_sidebar' );



?>