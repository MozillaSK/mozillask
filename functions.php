<?php
function register_mozillask_menus() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'mozillask' ) );
  register_nav_menu( 'sidebar', __( 'Sidebar Menu', 'mozillask' ) );
}
add_action( 'after_setup_theme', 'register_mozillask_menus' );

function register_mozillask_widget_areas() {
  register_sidebar( array(
    'name'          => 'Left sidebar',
    'id'            => 'left_sidebar',
    'before_widget' => '<div class="left-sidebar-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => 'Right sidebar',
    'id'            => 'right_sidebar',
    'before_widget' => '<div class="infopanel-top"><div class="infopanel-bottom">',
    'after_widget'  => '</div></div></div>',
    'before_title'  => '<div class="nadpis">',
    'after_title'   => '</div><div class="infopanel male">',
  ) );
}
add_action( 'widgets_init', 'register_mozillask_widget_areas' );
?>

