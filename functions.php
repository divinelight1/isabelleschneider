<?php
// featured photo support
add_theme_support( 'post-thumbnails' );

// add support for menu
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

// footer widget's initialization
function arphabet_widgets_init() {
    register_sidebar( array(
        'name'          => 'Contact1',
        'id'            => 'contact1',
        'before_widget' => '<div class="col-md-2 col-sm-12 footer-contact" style="padding-left: 0;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Contact2',
        'id'            => 'contact2',
        'before_widget' => '<div class="col-md-2 col-sm-12 footer-contact" style="padding-left: 0;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Contact3',
        'id'            => 'contact3',
        'before_widget' => '<div class="col-md-2 col-sm-12 footer-contact" style="padding-left: 0;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Contact4',
        'id'            => 'contact4',
        'before_widget' => '<div class="col-md-2 col-sm-12 footer-contact" style="padding-left: 0;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Contact5',
        'id'            => 'contact5',
        'before_widget' => '<div class="col-md-2 col-sm-12 footer-contact" style="padding-left: 0;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Copyright1',
        'id'            => 'copyright1',
        'before_widget' => '<div class="col-md-4 col-sm-12">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Copyright2',
        'id'            => 'copyright2',
        'before_widget' => '<div class="col-md-4 col-sm-12" style="text-align:center;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Copyright3',
        'id'            => 'copyright3',
        'before_widget' => '<div class="col-md-4 col-sm-12 impressum">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


 ?>
