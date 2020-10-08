<?php
/**** Theme support  ****/

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'menu d\'en-tête');
    register_nav_menu('header-left', 'menu des reseaux');
    remove_image_size('thumbnail');
    remove_image_size('thumb');
    remove_image_size('medium');
    remove_image_size('large');
    add_image_size('thumbnail', 240, 240, true);
    add_image_size('thumb', 100, 100, true);
    add_image_size('medium', 400, 250, true);
    add_image_size('large', 600, 250, true);
    add_image_size('xlarge', 815, 415, true);
});

/**** Custom Post Type ****/

function portfolio_CPT() {
    register_post_type('portfolio_blog', array(
        'labels' => array('name' =>'Blog', 'all_items' => 'Blog relatant de chaque projet réalisé'),
        'description' => 'Blog relatant de chaque projet réalisé',
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title',  'excerpt', 'thumbnail', 'editor'),
        'menu_position' => 3,
        'menu_icon' => 'dashicons-edit-large',
        'taxonomies' => array('post_tag')
    ));

    register_post_type('portfolio_projet', array(
        'labels' => array('name' =>'Projet', 'all_items' => 'Vos projets réalisés'),
        'description' => 'Les projets que vous avez réalisé',
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title',  'excerpt', 'thumbnail', 'editor'),
        'menu_position' => 4,
        'menu_icon' => 'dashicons-analytics',
        'taxonomies' => array('post_tag')
    ));

};
add_action('init', 'portfolio_CPT');

/**** CSS + Script ****/

add_action('wp_enqueue_scripts', function() {
    /**** Style ****/
    wp_register_style('roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    wp_register_style('ubuntu-font', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap');
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_register_style('mobile-style', get_template_directory_uri().'/css/mobile-style.css');
    wp_register_style('slick', get_template_directory_uri().'/css/slick.css');
    wp_register_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
    /**** Font ****/
    wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    wp_enqueue_style('ubuntu-font', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap');
    /**** CSS ****/
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/mobile-style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('mobile-style', get_stylesheet_uri());
    wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');

    /**** Script ****/
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js', array('jquery-3.5.1.min', 'slick.min'), false, true );
    wp_enqueue_script( 'jquery-3.5.1.min', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), false, true );
    wp_enqueue_script( 'slick.min', get_template_directory_uri().'/js/slick.min.js', array('jquery-3.5.1.min'), false, true );
});

// Limit number of projet posts on front page
function limit_projet_posts( $query ) {
    if (is_front_page() && $query->is_post_type_archive( 'portfolio_projet' )) {
        $query->set( 'posts_per_page', 3 );
        return;
    }
}
add_action( 'pre_get_posts', 'limit_projet_posts');

// Limit number of blog posts on front page
function limit_blog_posts( $query ) {
    if (is_front_page() && $query->is_post_type_archive( 'portfolio_blog' )) {
        $query->set( 'posts_per_page', 4 );
        return;
    }
}
add_action( 'pre_get_posts', 'limit_blog_posts');



// Removes some menus by page.
function wpdocs_remove_menus(){
    
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
   
}
add_action( 'admin_menu', 'wpdocs_remove_menus' );


add_filter('jpeg_quality', function($arg){return 100;});
?>