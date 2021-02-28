<?php
add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');
function register_my_widgets(){
    register_sidebar(array(
       'name' => 'Left sidebar',
        'id'=> 'left_sidebar',
        'description'=> 'Опис сайдбара',
        'before_widget'=>'<div class="widget %2$s">',
        'after_widget'=>"<div>\n",
        'before_title'=>'<h5 class="widget-title">',
        'after_title'=>"<h5>\n"
    ));
}
function theme_register_nav_menu(){
    register_nav_menu('top', 'Меню в шапці');
    register_nav_menu('bot', 'Меню в підвалі');
    register_nav_menu('social_links', 'Наші соцмережі');
};

function theme_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}

function theme_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js');
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
    wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
    wp_enqueue_script('query-migrate', get_template_directory_uri() . '/assets/js/query-migrate-1.2.1.min.js');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');
}

function acf_portfolio_item_block() {

    // check function exists
    if( function_exists('acf_register_block') ) {

        // register a portfolio item block
        acf_register_block(array(
            'name'				=> 'portfolio-item',
            'title'				=> __('Portfolio Item'),
            'description'		=> __('A custom block for portfolio items.'),
            'render_template'	=> 'template-parts/blocks/portfolio-item/block-portfolio-item.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'portfolio' ),
        ));
    }
}

add_action('acf/init', 'acf_portfolio_item_block');