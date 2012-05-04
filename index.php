<!Doctype html><title><?php wp_title(); ?></title>
<?php

t5_option_dump( 'sidebars_widgets' );
t5_option_dump( 'widget_t5_demo_widget' );
t5_option_dump( 'widget_rss' );

global $wp_registered_sidebars;
print '<pre>' . htmlspecialchars( print_r( $wp_registered_sidebars, TRUE ) ) . '</pre>';

/*
dynamic_sidebar( 'head' );
*/
dynamic_sidebar( 'top-widget' );
dynamic_sidebar( 'bottom-widget' );