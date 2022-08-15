<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'curveflow', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'curveflow' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'curveflow' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'curveflow' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'curveflow' ),
	'button_url'  => 'https://wordpress.org/support/theme/curveflow/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'curveflow' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'curveflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'curveflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'curveflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'curveflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'curveflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'curveflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'curveflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'curveflow' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'curveflow' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'curveflow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'curveflow' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'curveflow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'curveflow' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'curveflow' ),
	'description'	=> esc_html__( 'Your blog heading', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'curveflow' ),
	'description'	=> esc_html__( 'Your blog subheading', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'curveflow' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> '18',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'curveflow' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Featured Category
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'curveflow' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'curveflow' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'curveflow' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '4',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'curveflow' ),
	'description'	=> esc_html__( '2 columns of widgets', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'curveflow' ),
	'description'	=> esc_html__( '2 columns of widgets', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Author Avatar
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-avatar',
	'label'			=> esc_html__( 'Author Avatar', 'curveflow' ),
	'description'	=> esc_html__( 'Circle images', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Comment Count
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'curveflow' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'curveflow' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'curveflow' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'curveflow' ),
		'categories'=> esc_html__( 'Related by categories', 'curveflow' ),
		'tags'		=> esc_html__( 'Related by tags', 'curveflow' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'curveflow' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'curveflow' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'curveflow' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'curveflow' ),
		'content'	=> esc_html__( 'Below content', 'curveflow' ),
	),
) );
// Header: Search
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'curveflow' ),
	'description'	=> esc_html__( 'Header search button', 'curveflow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'curveflow' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'curveflow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'curveflow' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'curveflow' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'curveflow' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'curveflow' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'curveflow' ),
	'description'	=> esc_html__( 'A short description of you', 'curveflow' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'curveflow' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'curveflow' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'curveflow' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'curveflow' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'curveflow' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'curveflow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'curveflow' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'curveflow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'curveflow' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'curveflow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'curveflow' ),
	'description'	=> esc_html__( 'Footer credit text', 'curveflow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'curveflow' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cr',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'curveflow' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'curveflow' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'curveflow' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'curveflow' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'curveflow' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'curveflow' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'curveflow' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'curveflow' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function curveflow_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'curveflow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'curveflow' ),
		'description'	=> esc_html__( '(is_home) Primary', 'curveflow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'curveflow' ),
	) );
	Kirki::add_field( 'curveflow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'curveflow' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'curveflow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'curveflow' ),
	) );
	Kirki::add_field( 'curveflow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'curveflow' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'curveflow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'curveflow' ),
	) );
	Kirki::add_field( 'curveflow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'curveflow' ),
		'description'	=> esc_html__( '(is_category) Primary', 'curveflow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'curveflow' ),
	) );
	Kirki::add_field( 'curveflow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'curveflow' ),
		'description'	=> esc_html__( '(is_search) Primary', 'curveflow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'curveflow' ),
	) );
	Kirki::add_field( 'curveflow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'curveflow' ),
		'description'	=> esc_html__( '(is_404) Primary', 'curveflow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'curveflow' ),
	) );
	Kirki::add_field( 'curveflow_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'curveflow' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'curveflow' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'curveflow' ),
	) );
	
 } 
add_action( 'init', 'curveflow_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'curveflow' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'curveflow' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'curveflow' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'curveflow' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'curveflow' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'curveflow' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'curveflow' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'curveflow' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'curveflow' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'curveflow' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'curveflow' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'curveflow' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'curveflow' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'curveflow' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'curveflow' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'curveflow' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'curveflow' ),
	'description'	=> esc_html__( 'Select font for the theme', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'curveflow' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'curveflow' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'curveflow' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'curveflow' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'curveflow' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'curveflow' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'curveflow' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'curveflow' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'curveflow' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'curveflow' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'curveflow' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'curveflow' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'curveflow' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'curveflow' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'curveflow' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'curveflow' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'curveflow' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'curveflow' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'curveflow' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'curveflow' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'curveflow' ),
		'arial'					=> esc_html__( 'Arial', 'curveflow' ),
		'georgia'				=> esc_html__( 'Georgia', 'curveflow' ),
		'verdana'				=> esc_html__( 'Verdana', 'curveflow' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'curveflow' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'curveflow' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '1080',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'curveflow' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '700',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'curveflow' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Header Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Layout Box Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-layout-box',
	'label'			=> esc_html__( 'Layout Box Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Layout Box Border Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-layout-box-border',
	'label'			=> esc_html__( 'Layout Box Border Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#000000',
) );
// Styling: Layout Box Border Width
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'layout-box-border-width',
	'label'			=> esc_html__( 'Layout Box Border Width', 'curveflow' ),
	'description'	=> esc_html__( 'The border around the website', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '8',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '30',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-sidebar',
	'label'			=> esc_html__( 'Sidebar Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Social Sidebar Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-social-sidebar',
	'label'			=> esc_html__( 'Social Sidebar Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Background Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Featured 2 Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-featured-2',
	'label'			=> esc_html__( 'Featured 2 Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#3bb0f0',
) );
// Styling: Featured 3 Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-featured-3',
	'label'			=> esc_html__( 'Featured 3 Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#3862ea',
) );
// Styling: Featured 4 Color
Kirki::add_field( 'curveflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-featured-4',
	'label'			=> esc_html__( 'Featured 4 Color', 'curveflow' ),
	'section'		=> 'styling',
	'default'		=> '#061a3a',
) );