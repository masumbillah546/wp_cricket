<?php


 //style.css
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri("css/style.css") );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );



//Register Menu Location
register_nav_menus( [ 
	'primary' => __( 'Primary Menu' ),
	'social_menu' => __( 'Social Menu' )
] );




//featured image
function add_theme_setup(){
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_theme_setup');


//slider
function slider(){


	$args= array(
	//'post_type' => 'slider',
	'label' => 'Sliders',
	'description' => 'Hold our Slider entries',
	'public' => true,
	'menu_position' => 5,
	'supports' => array('title','thumbnail'),
	'has_archive' => true

	);

	register_post_type('sliders',$args);

}

add_action('after_setup_theme', 'slider');


//service
function service(){


	$args= array(
	//'post_type' => 'slider',
	'label' => 'Service',
	'description' => 'service',
	'public' => true,
	'menu_position' => 4,
	'supports' => array('title','editor'),
	'has_archive' => true

	);

	register_post_type('service',$args);

}

add_action('after_setup_theme', 'service');

//sidebar

function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );



/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


function my_sidebar(){


register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'textdomain' ),
        'id'            => 'right-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );


}