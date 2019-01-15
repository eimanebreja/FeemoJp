<?php
require_once('class-wp-bootstrap-navwalker.php');

function wpb_theme_setup() {

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

}

add_action('after_setup_theme','wpb_theme_setup');




// Require Materialize Custom Nav Walker Class
require_once get_template_directory() . '/wp_materialize_navwalker.php';

register_nav_menus(
    array(
        'Primary'   =>  __( 'Primary Menu', 'THEMENAME' ),
        // Register the Primary menu and Drawer menu
        // Theme uses wp_nav_menu() in TWO locations.
        // Copy and paste the line above right here if you want to make another menu,
        // just change the 'primary' to another name
    )
);

function set_excerpt_length() {
    return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => 'Sidebar',
        'after_widget' => 'Sidebar',
    )
    );
}

add_action('widgets_init','wpb_init_widgets');

function my_nav_wrap() {
  
    $wrap  = '<ul id="%1$s" class="%2$s">';
    
   
    $wrap .= '%3$s';
    
    
    $wrap .= '  <li style="text-align:center"><a class="dropdown-trigger" href="#!" data-target="dropdown2">ABOUT</a></li>';
    
  
    $wrap .= '</ul>';
  
    return $wrap;
  }
?>