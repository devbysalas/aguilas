<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aguilas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'aguilas' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'aguilas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aguilas_widgets_init' );