<?php
// activate widget area sidebar
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name'=>'Sidebar Widgets',
'before_widget' => '<aside>',
'after_widget' => '</aside>',
'before_title' => '<h4 class="aside-header">',
'after_title' => '</h4>',
));
}

// activate widget area footer
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name'=>'Footer Widgets',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<p class="footer-header">',
'after_title' => '</p>',
));
}

add_theme_support( 'post-thumbnails' ); 
?>