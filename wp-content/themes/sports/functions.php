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


//FIXTURES & RESULTS
function fix_result(){


	$args= array(
	//'post_type' => 'slider',
	'label' => 'FIXTURES & RESULTS',
	'description' => 'service',
	'public' => true,
	 'query_var' => true,
	'menu_position' => 4,
	'supports' => array('title','editor', 'thumbnail'),
	'has_archive' => true

	);

	register_post_type('fix_result',$args);

}

add_action('after_setup_theme', 'fix_result');

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
function home() {
    register_sidebar( array(
        'name'          => __( 'Home_page Sidebar', 'textdomain' ),
        'id'            => 'home_page_sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div class="widget wid-post">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sub-title"><h2>',
        'after_title'   => '</h2></div>',
    ) );
}
add_action( 'widgets_init', 'home' );


function my_sidebar(){


register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'textdomain' ),
        'id'            => 'right-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div class="widget wid-post">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="wid-header"><h5>',
        'after_title'   => '</h5></div><br>',
    ) );

}

add_action( 'widgets_init', 'my_sidebar' );


function gallery(){


register_sidebar( array(
        'name'          => __( 'gallery', 'textdomain' ),
        'id'            => 'gallery',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1>',
        'after_title'   => '</h1><br>',
    ) );


}

add_action( 'widgets_init', 'gallery' );


//Events
function Events(){


	$args= array(
	//'post_type' => 'slider',
	'label' => 'Events',
	'description' => 'Events',
	'public' => true,
	'menu_position' => 4,
	'rewrite' => false,
	'supports' => array('title','editor', 'thumbnail','comments'),
	'has_archive' => true

	);

	register_post_type('Events',$args);

}

add_action('after_setup_theme', 'Events');



//videos widget

function videos(){


register_sidebar( array(
        'name'          => __( 'Videos', 'textdomain' ),
        'id'            => 'videos',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1>',
        'after_title'   => '</h1><br>',
    ) );


}

add_action( 'widgets_init', 'videos' );


//video custo post
function Videos2(){


	$args= array(
	//'post_type' => 'slider',
	'label' => 'Videos',
	'description' => 'Videos',
	'public' => true,
	'menu_position' => 4,
	'rewrite' => false,
	'supports' => array('title','editor', 'thumbnail','comments'),
	'has_archive' => true

	);

	register_post_type('videos',$args);

}

add_action('after_setup_theme', 'Videos2');


//pagi
function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}

function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


//Players
function Players(){


	$args= array(
	//'post_type' => 'slider',
	'label' => 'Players',
	'description' => 'players',
	'public' => true,
	'rewrite' => false,
	 'query_var' => true,
	'menu_position' => 4,
	'supports' => array('title','editor', 'thumbnail'),
	'has_archive' => true

	);

	register_post_type('players',$args);

}

add_action('after_setup_theme', 'Players');

//categories
function categories(){


register_sidebar( array(
        'name'          => __( 'categories', 'textdomain' ),
        'id'            => 'categories',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1>',
        'after_title'   => '</h1><br>',
    ) );


}

add_action( 'widgets_init', 'categories' );