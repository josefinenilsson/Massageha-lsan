<?php 
// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array( 'post', 'treatment' ) );

	 // Set custom thumbnail dimensions
	set_post_thumbnail_size( 0, 0, true );
    
    // Add theme support for document Title tag
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'custom_theme_features' );

// Register Theme Features
function top_header_image()  {

	// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => 'http://dev.massagehalsan.se/wp-content/uploads/2015/12/top_image_massage.jpg',
		'width'                  => 100,
		'height'                 => 0,
		'flex-width'             => true,
		'flex-height'            => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $header_args );
}
add_action( 'after_setup_theme', 'top_header_image' );


// Register Custom Post Type
function custom_post_treatment() {

	$labels = array(
		'name'                  => _x( 'Behandling', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Behandling', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Behandlingar', 'text_domain' ),
		'name_admin_bar'        => __( 'Behandlingar', 'text_domain' ),
		'archives'              => __( 'Arkiv', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Alla behandlingar', 'text_domain' ),
		'add_new_item'          => __( 'Lägg till ny behandling', 'text_domain' ),
		'add_new'               => __( 'Lägg till ny behandling', 'text_domain' ),
		'new_item'              => __( 'Ny behandling', 'text_domain' ),
		'edit_item'             => __( 'Redigera behandling', 'text_domain' ),
		'update_item'           => __( 'Uppdatera behandling', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Hittades ej', 'text_domain' ),
		'not_found_in_trash'    => __( 'Hittades ej i papperskorgen', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Behandling', 'text_domain' ),
		'description'           => __( 'Olika behandlingar', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'treatment_type'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'rewrite' => array('slug' => 'behandling'),
	);
	register_post_type( 'treatment', $args );

}
add_action( 'init', 'custom_post_treatment', 0 );

// Register Custom Taxonomy
function treatments_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Behandlingstyper', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Behandlingstyp', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Behandlingstyper', 'text_domain' ),
		'all_items'                  => __( 'Alla Behandlingstyper', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Ny Behandlingstyp', 'text_domain' ),
		'add_new_item'               => __( 'Lägg till Behandlingstyp', 'text_domain' ),
		'edit_item'                  => __( 'Redigera Behandlingstyp', 'text_domain' ),
		'update_item'                => __( 'Uppdatera Behandlingstyp', 'text_domain' ),
		'view_item'                  => __( 'Visa Behandlingstyp', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'behandlingar',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'treatment_type', array( 'treatment' ), $args );

}
add_action( 'init', 'treatments_taxonomy', 0 );

// Add custom title function
function rw_title( $title, $sep, $seplocation )
{
    global $page, $paged;
    // Don't affect in feeds.
    if ( is_feed() )
        return $title;
    // Add the blog name
    if ( 'right' == $seplocation )
        $title .= get_bloginfo( 'name' );
    else
        $title = get_bloginfo( 'name' ) . $title;
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_front_page() ) )
        $title .= " {$sep} {$site_description}";
    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
        $title = sprintf( __( 'Page %s', 'dbt' ), max( $paged, $page ) ) . " {$sep} " . $title;
    return $title;
}
add_filter( 'wp_title', 'rw_title', 10, 3 );


?>

