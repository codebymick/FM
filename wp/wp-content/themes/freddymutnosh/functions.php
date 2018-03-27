<?php

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');
/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

//-register menus
function register_my_menus() {
	register_nav_menus(
		array(
			'main' => __( 'TopMenu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

function wpdocs_custom_excerpt_length( $length ) {
    return 32;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// enqueue styles + scripts
function freddyMutnosh_enqueue_styles() {
	wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i', array(), null);
	wp_enqueue_style('mmenu', get_bloginfo('template_url').'/_assets/jquery.mmenu/jquery.mmenu.all.css', array(), null, 'screen');
	wp_enqueue_style('core', get_bloginfo('template_url').'/style.css', array(), null, 'screen');
	wp_enqueue_style('slick', get_bloginfo('template_url').'/_assets/slick/slick.css', array(), null, 'screen');


	wp_enqueue_script('jquery');

	wp_enqueue_script('mmenu', get_bloginfo('template_url').'/_assets/jquery.mmenu/jquery.mmenu.all.js', array('jquery'), false, true);
  //wp_enqueue_script('json', get_bloginfo('template_url').'/_assets/json.js', array('jquery'), false, true);

  wp_enqueue_script('js-test', get_bloginfo('template_url').'/_assets/_js/js-test.js', array('jquery'), false, true);
  wp_enqueue_script('jQueryForm', get_bloginfo('template_url').'/_assets/_js/jquery.form.min-test.js', array('jquery'), false, true);
  wp_enqueue_script('scripts-test', get_bloginfo('template_url').'/_assets/_js/scripts-test.js', array('jquery'), false, true);
  wp_enqueue_script('localscroll', get_bloginfo('template_url').'/_assets/_js/localscroll.js', array('jquery'), false, true);
  wp_enqueue_script('parallax', get_bloginfo('template_url').'/_assets/_js/parallax.js', array('jquery'), false, true);
  wp_enqueue_script('embed', get_bloginfo('template_url').'/_assets/_js/wp-embed-test.js', array('jquery'), false, true);
  wp_enqueue_script('core', get_bloginfo('template_url').'/_assets/_js/script.js', array('jquery'), false, true);


}
add_action('wp_enqueue_scripts', 'freddyMutnosh_enqueue_styles');



//Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> [...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
// CUSTOM POST TYPES
function samples_custom_post_types() {

	    // cutomer loyalty quotes - Samples
		$labels = array(
			'name'               => _x( 'Samples', 'post type general name', 'freddy-mutnosh'),
			'singular_name'      => _x( 'Sample', 'post type singular name', ''),
			'menu_name'          => _x( 'Samples', 'admin menu', 'freddy-mutnosh'),
			'name_admin_bar'     => _x( 'Samples', 'add new on admin bar', 'freddy-mutnosh'),
			'add_new'            => _x( 'New Sample', 'book', 'freddy-mutnosh'),
			'add_new_item'       => __( 'New Sample add', 'freddy-mutnosh'),
			'new_item'           => __( 'New Sample', 'freddy-mutnosh'),
			'edit_item'          => __( 'Sample edit', 'freddy-mutnosh'),
			'view_item'          => __( 'Sample view', 'freddy-mutnosh'),
			'all_items'          => __( 'All Samples', 'freddy-mutnosh'),
			'search_items'       => __( 'Samples search', 'freddy-mutnosh'),
			'parent_item_colon'  => __( 'Parent Sample', 'freddy-mutnosh'),
			'not_found'          => __( 'No sample found', 'freddy-mutnosh'),
			'not_found_in_trash' => __( 'No sampe found', 'freddy-mutnosh')
		);
		$args = array(
			'labels'             => $labels,
			'description'        => __('All current FreddyMutnosh Samples', 'freddy-mutnosh'),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'Samples'),
			'capability_type'    => 'page',
			'has_archive'        => false,
			'hierarchical'       => true,
			'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'page-attributes')
		);
		register_post_type('Samples', $args);

}

add_action('init', 'samples_custom_post_types');

?>
