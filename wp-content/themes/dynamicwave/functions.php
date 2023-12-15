<?php

/* 
 include css function
 */
function dynamicwave_style (){
    
    wp_enqueue_style('Bootstrap', get_template_directory_uri().'/Frontend/css/bootstrap.css', array(), 'v.1.0');
    wp_enqueue_style('Responsive', get_template_directory_uri().'/Frontend/css/responsive.css', array(''), 'v.1.0');        
    wp_enqueue_style('Style', get_template_directory_uri().'/Frontend/css/style.css', array(), 'v.1.0');  
    wp_enqueue_style('Stylee', get_template_directory_uri().'/style.css', array(), 'v.1.0');
    wp_enqueue_script('font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css', array(), 'v2.1.1', true);
   wp_enqueue_script('font-Awesome', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap', array(), 'v1.0', true);
   
   wp_enqueue_script('font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/css/all.min.css', array(), 'v5.15.4', true);
}

add_action('wp_enqueue_scripts', 'dynamicwave_style');

function dynamicwave_scripts (){
    wp_enqueue_script('jQuery', get_template_directory_uri().'/Frontend/js/jquery-3.4.1.min.js', array(), 'v3.4.1', true);
    wp_enqueue_script('Bootstrap', get_template_directory_uri().'/Frontend/js/bootstrap.js', array('jQuery'), 'v4.3.1', true);
       
    wp_enqueue_script('Circle js', get_template_directory_uri().'/frontend/js/circle.min.js', array('jQuery'), 'v0.0.6', true); 
    wp_enqueue_script('Custom js', get_template_directory_uri().'/frontend/js/custom.js', array('jQuery'), '1,0', true);
  
}

add_action('wp_enqueue_scripts', 'dynamicwave_scripts');

function dynamicwave_support (){
    
    //titlr support
    add_theme_support( 'title-tag' );
    
    //logo support
    add_theme_support( 'custom-logo', array (
                'height'               => 28,
		'width'                => 88,
		'flex-height'          => false,
		'flex-width'           => false
		/*'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, */
         
    ));
    
    //featured picture dupport
    add_theme_support( 'post-thumbnails' );
    
    //add image suport
    add_image_size( 'news_list', 463, 307, true );
    add_image_size( 'team_list', 273, 355, true );
    add_image_size( 'single_team', 558, 725, true );
    
    //menu support
    register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-menu' => __( 'Social Menu' )
     )
   );
 
}
    

add_action('after_setup_theme', 'dynamicwave_support');
add_action('init', 'dynamicwave_support');

function dynamicwave_create_post_type() {
    register_post_type('slider_services', array(
        'labels' => array(
            'name' => 'SliderServices',
            'singular_name' => 'SliderService',
            'plural_name' => 'SliderServices',
            'all_items' => 'All Services',
            'add_new' => 'Add New Services',
            'add_new_item' => 'Add New Slider Services Item',
            'new_item' => 'New Slider Services',
            'edit' => 'Edit',
            'edit_item' => 'Edit Slider Service Item',
            'view' => 'View Slider Service',
            'view_item' => 'View Slider Service Item',
            'featured_image' => 'Featured image for this Service'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 17,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'),
        'taxonomies' => array('post_tag'), // Add this line to enable tags
    ));
}

add_action('init', 'dynamicwave_create_post_type');

//code for creating - calling options page
require get_template_directory() . '/inc/options.php';