<?php
	/**
	 * ReduxFramework Sample Config File
	 * For full documentation, please visit: http://docs.reduxframework.com/
	 */

	if ( ! class_exists( 'Redux' ) ) {
		return;
	}


	// This is your option name where all the Redux data is stored.
	$opt_name = "CS_redux";


	/*
	 *
	 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
	 *
	 */

	$sampleHTML = '';
	if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
		Redux_Functions::initWpFilesystem();

		global $wp_filesystem;

		$sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
	}

	// Background Patterns Reader
	$sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
	$sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
	$sample_patterns      = array();

	if ( is_dir( $sample_patterns_path ) ) {

		if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
			$sample_patterns = array();

			while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

				if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
					$name              = explode( '.', $sample_patterns_file );
					$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
					$sample_patterns[] = array(
						'alt' => $name,
						'img' => $sample_patterns_url . $sample_patterns_file
					);
				}
			}
		}
	}

	/*
	 *
	 * --> Action hook examples
	 *
	 */

	// If Redux is running as a plugin, this will remove the demo notice and links
	//add_action( 'redux/loaded', 'remove_demo' );

	// Function to test the compiler hook and demo CSS output.
	// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
	//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

	// Change the arguments after they've been declared, but before the panel is created
	//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

	// Change the default value of a field after it's been set, but before it's been useds
	//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

	// Dynamically add a section. Can be also used to modify sections/fields
	//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');


	/**
	 * ---> SET ARGUMENTS
	 * All the possible arguments for Redux.
	 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
	 * */

	$theme = wp_get_theme(); // For use with some settings. Not necessary.

	$args = array(
		// TYPICAL -> Change these values as you need/desire
		'opt_name'             => $opt_name,
		// This is where your data is stored in the database and also becomes your global variable name.
		'display_name'         => $theme->get( 'Name' ),
		// Name that appears at the top of your panel
		'display_version'      => $theme->get( 'Version' ),
		// Version that appears at the top of your panel
		'menu_type'            => 'menu',
		//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
		'allow_sub_menu'       => true,
		// Show the sections below the admin menu item or not
		'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
		'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
		// You will need to generate a Google API key to use this feature.
		// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
		'google_api_key'       => '',
		// Set it you want google fonts to update weekly. A google_api_key value is required.
		'google_update_weekly' => false,
		// Must be defined to add google fonts to the typography module
		'async_typography'     => true,
		// Use a asynchronous font on the front end or font string
		//'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
		'admin_bar'            => true,
		// Show the panel pages on the admin bar
		'admin_bar_icon'       => 'dashicons-admin-generic',
		// Choose an icon for the admin bar menu
		'admin_bar_priority'   => 50,
		// Choose an priority for the admin bar menu
		'global_variable'      => '',
		// Set a different name for your global variable other than the opt_name
		'dev_mode'             => false,
		// Show the time the page took to load, etc
		'update_notice'        => true,
		// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
		'customizer'           => false,
		// Enable basic customizer support
		//'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
		//'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

		// OPTIONAL -> Give you extra features
		'page_priority'        => null,
		// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
		'page_parent'          => 'themes.php',
		// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
		'page_permissions'     => 'manage_options',
		// Permissions needed to access the options panel.
		'menu_icon'            => '',
		// Specify a custom URL to an icon
		'last_tab'             => '',
		// Force your panel to always open to a specific tab (by id)
		'page_icon'            => 'icon-themes',
		// Icon displayed in the admin panel next to your menu_title
		'page_slug'            => '',
		// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
		'save_defaults'        => true,
		// On load save the defaults to DB before user clicks save or not
		'default_show'         => false,
		// If true, shows the default value next to each field that is not the default value.
		'default_mark'         => '',
		// What to print by the field's title if the value shown is default. Suggested: *
		'show_import_export'   => false,
		// Shows the Import/Export panel when not used as a field.

		// CAREFUL -> These options are for advanced use only
		'transient_time'       => 60 * MINUTE_IN_SECONDS,
		'output'               => true,
		// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
		'output_tag'           => true,
		// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
		// 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

		// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
		'database'             => '',
		// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
		'system_info'          => false,
		// REMOVE

		//'compiler'             => true,

		// HINTS
		'hints'                => array(
			'icon'          => 'el el-question-sign',
			'icon_position' => 'right',
			'icon_color'    => 'lightgray',
			'icon_size'     => 'normal',
			'tip_style'     => array(
				'color'   => 'light',
				'shadow'  => true,
				'rounded' => false,
				'style'   => '',
			),
			'tip_position'  => array(
				'my' => 'top left',
				'at' => 'bottom right',
			),
			'tip_effect'    => array(
				'show' => array(
					'effect'   => 'slide',
					'duration' => '500',
					'event'    => 'mouseover',
				),
				'hide' => array(
					'effect'   => 'slide',
					'duration' => '500',
					'event'    => 'click mouseleave',
				),
			),
		)
	);

	// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
	// $args['admin_bar_links'][] = array(
	//     'id'    => 'redux-docs',
	//     'href'  => 'http://docs.reduxframework.com/',
	//     'title' => __( 'Documentation', 'redux-framework-demo' ),
	// );

	// $args['admin_bar_links'][] = array(
	//     //'id'    => 'redux-support',
	//     'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
	//     'title' => __( 'Support', 'redux-framework-demo' ),
	// );

	// $args['admin_bar_links'][] = array(
	//     'id'    => 'redux-extensions',
	//     'href'  => 'reduxframework.com/extensions',
	//     'title' => __( 'Extensions', 'redux-framework-demo' ),
	// );

	// // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
	// $args['share_icons'][] = array(
	//     'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
	//     'title' => 'Visit us on GitHub',
	//     'icon'  => 'el el-github'
	//     //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
	// );
	// $args['share_icons'][] = array(
	//     'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
	//     'title' => 'Like us on Facebook',
	//     'icon'  => 'el el-facebook'
	// );
	// $args['share_icons'][] = array(
	//     'url'   => 'http://twitter.com/reduxframework',
	//     'title' => 'Follow us on Twitter',
	//     'icon'  => 'el el-twitter'
	// );
	// $args['share_icons'][] = array(
	//     'url'   => 'http://www.linkedin.com/company/redux-framework',
	//     'title' => 'Find us on LinkedIn',
	//     'icon'  => 'el el-linkedin'
	// );

	// // Panel Intro text -> before the form
	// if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
	//     if ( ! empty( $args['global_variable'] ) ) {
	//         $v = $args['global_variable'];
	//     } else {
	//         $v = str_replace( '-', '_', $args['opt_name'] );
	//     }
	//     $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
	// } else {
	//     $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
	// }

	// // Add content after the form.
	// $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

	Redux::setArgs( $opt_name, $args );

	/*
	 * ---> END ARGUMENTS
	 */


	/*
	 * ---> START HELP TABS
	 */

	// $tabs = array(
	//     array(
	//         'id'      => 'redux-help-tab-1',
	//         'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
	//         'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
	//     ),
	//     array(
	//         'id'      => 'redux-help-tab-2',
	//         'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
	//         'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
	//     )
	// );
	// Redux::setHelpTab( $opt_name, $tabs );

	// // Set the help sidebar
	// $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
	// Redux::setHelpSidebar( $opt_name, $content );


	/*
	 * <--- END HELP TABS
	 */


	/*
	 *
	 * ---> START SECTIONS
	 *
	 */

	/*

		As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


	 */


	// -> START General Settings
	Redux::setSection( $opt_name, array(
		'title' => __( 'Important Settings', 'redux-framework-demo' ),
		'id'    => 'CS-general',
		'desc'  => __( '', 'redux-framework-demo' ),
		'icon'  => 'el el-exclamation-sign'
	) );

	Redux::setSection( $opt_name, array(
		'title'      => __( 'Add logo', 'redux-framework-demo' ),
		'id'         => 'CS-add-logo',
		'subsection' => true,
		'desc'       => __( '', 'redux-framework-demo' ),
		'fields'     => array(
			array(
				'id'       => 'CS-add-logo-field',
				'type'     => 'media',
				'url'      => true,
				'title'    => __( 'Website logo', 'redux-framework-demo' ),
				'compiler' => 'true',
				'mode'     => false, // Can be set to false to allow any media type, or can also be set to any mime type.
				'desc'     => __( 'The demo sites logo is 26px high SVG file.', 'redux-framework-demo' ),
				'subtitle' => __( 'To work on all screens today and tomorrow, we highly recommend to use SVG-images.', 'redux-framework-demo' ),
				//'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
				//'hint'      => array(
				//    'title'     => 'Hint Title',
				//    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
				//)
			),
		)
	) );
	Redux::setSection( $opt_name, array(
		'title'      => __( 'Add favicon', 'redux-framework-demo' ),
		'id'         => 'CS-add-favicon',
		'subsection' => true,
		'desc'       => __( '', 'redux-framework-demo' ),
		'fields'     => array(
			array(
				'id'       => 'CS-add-favicon-iso',
				'type'     => 'media',
				'url'      => true,
				'title'    => __( 'Favicon that is .ISO', 'redux-framework-demo' ),
				'compiler' => 'true',
				'mode'     => false, // Can be set to false to allow any media type, or can also be set to any mime type.
				'desc'     => __( '', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				//'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
				//'hint'      => array(
				//    'title'     => 'Hint Title',
				//    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
				//)
			),
			array(
				'id'       => 'CS-add-favicon-png',
				'type'     => 'media',
				'url'      => true,
				'title'    => __( 'Favicon that is .PNG', 'redux-framework-demo' ),
				'compiler' => 'true',
				'mode'     => false, // Can be set to false to allow any media type, or can also be set to any mime type.
				'desc'     => __( '', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				//'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
				//'hint'      => array(
				//    'title'     => 'Hint Title',
				//    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
				//)
			),
		)
	) );
	Redux::setSection( $opt_name, array(
		'title'      => __( 'Add social infomation', 'redux-framework-demo' ),
		'id'         => 'CS-social',
		'subsection' => true,
		'desc'       => __( 'Enter your social media usernames. Icons will not show if left blank.', 'redux-framework-demo' ),
		'fields'     => array(
			array(
				'id'          => 'CS-facebook',
				'type'        => 'text',
				'title'       => __( 'Facebook', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
			array(
				'id'          => 'CS-googleplus',
				'type'        => 'text',
				'title'       => __( 'Google Plus', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
			array(
				'id'          => 'CS-instagram',
				'type'        => 'text',
				'title'       => __( 'Instagram', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
			array(
				'id'          => 'CS-pinterest',
				'type'        => 'text',
				'title'       => __( 'Pinterest', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
			array(
				'id'          => 'CS-tumblr',
				'type'        => 'text',
				'title'       => __( 'Tumblr', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
			array(
				'id'          => 'CS-twitter',
				'type'        => 'text',
				'title'       => __( 'Twitter', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
			array(
				'id'          => 'CS-youtube',
				'type'        => 'text',
				'title'       => __( 'Youtube', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
			array(
				'id'          => 'CS-rss',
				'type'        => 'text',
				'title'       => __( 'RSS', 'redux-framework-demo' ),
				'subtitle'    => __( '', 'redux-framework-demo' ),
				'desc'        => __( '', 'redux-framework-demo' ),
			),
		)
	) );











	// -> START Layout Settings
	Redux::setSection( $opt_name, array(
		'title' => __( 'Layout Settings', 'CS-redux-framework' ),
		'id'    => 'CS-ss',
		'desc'  => __( '', 'redux-framework-demo' ),
		'icon'  => 'el el-screen'
	) );

	Redux::setSection( $opt_name, array(
		'title'      => __( 'Homepage layout', 'redux-framework-demo' ),
		'id'         => 'CS-21332112',
		'subsection' => true,
		'desc'       => __( '', 'redux-framework-demo' ),
		'fields'     => array(
			array(
				'id'       => 'CS-321312312',
				'type'     => 'media',
				'url'      => true,
				'title'    => __( 'Homepage Layout', 'redux-framework-demo' ),
				'compiler' => 'true',
				'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
				'desc'     => __( 'The demo sites logo is: 214 x 26px', 'redux-framework-demo' ),
				'subtitle' => __( 'To work on all screens today and tomorrow, we highly recommend to use SVG-images.', 'redux-framework-demo' ),
				'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
				//'hint'      => array(
				//    'title'     => 'Hint Title',
				//    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
				//)
			),
			array(
				'id'       => 'CS-homepage-sidebar',
				'type'     => 'checkbox',
				'title'    => __( 'Enable sidebar on homepage', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'desc'     => __( '', 'redux-framework-demo' ),
				'default'  => '1'// 1 = on | 0 = off
			),
		)
	) );
	Redux::setSection( $opt_name, array(
		'title'      => __( 'Post layout', 'redux-framework-demo' ),
		'id'         => 'CS-3131dsds2231',
		'subsection' => true,
		'desc'       => __( '', 'redux-framework-demo' ),
		'fields'     => array(
			array(
				'id'       => 'CS-single-sidebar',
				'type'     => 'checkbox',
				'title'    => __( 'Enable sidebar on posts', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'desc'     => __( '', 'redux-framework-demo' ),
				'default'  => '0'// 1 = on | 0 = off
			),
		)
	) );
	Redux::setSection( $opt_name, array(
			'title'      => __( 'Category layout', 'redux-framework-demo' ),
			'id'         => 'CS-323211312',
			'subsection' => true,
			'desc'       => __( '', 'redux-framework-demo' ),
			'fields'     => array(
				array(
				'id'       => 'CS-233211321',
				'type'     => 'textarea',
				'title'    => __( 'Textarea Option - HTML Validated Custom', 'redux-framework-demo' ),
				'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
				'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
				'default'  => 'Default 11Text',
				),
			)
		) );
	Redux::setSection( $opt_name, array(
			'title'      => __( 'Archive layout', 'redux-framework-demo' ),
			'id'         => 'CS-32213ss21312',
			'subsection' => true,
			'desc'       => __( '', 'redux-framework-demo' ),
			'fields'     => array(
				array(
				'id'       => 'CS-2332ds113321',
				'type'     => 'textarea',
				'title'    => __( 'Textarea Option - HTML Validated Custom', 'redux-framework-demo' ),
				'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
				'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
				'default'  => 'hello world2',
				),
			)
		) );










	// -> START Section Settings
		Redux::setSection( $opt_name, array(
			'title' => __( 'Section Settings', 'CS-redux-framework' ),
			'id'    => 'CS-section',
			'desc'  => __( '', 'redux-framework-demo' ),
			'icon'  => 'el el-screen'
		) );

		Redux::setSection( $opt_name, array(
			'title'      => __( 'Header', 'redux-framework-demo' ),
			'id'         => 'CS-213213312',
			'subsection' => true,
			'desc'       => __( '', 'redux-framework-demo' ),
			'fields'     => array(
				array(
				    'id'       => 'CS-header-fixed',
				    'type'     => 'checkbox',
				    'title'    => __( 'Make the header fixed', 'redux-framework-demo' ),
				    'subtitle' => __( 'Make sure that the header is fixed at the top when you scroll down the page.', 'redux-framework-demo' ),
				    'desc'     => __( '', 'redux-framework-demo' ),
				    'default'  => '1'// 1 = on | 0 = off
				),
				array(
				    'id'       => 'CS-header-search',
				    'type'     => 'checkbox',
				    'title'    => __( 'Enable search', 'redux-framework-demo' ),
				    'subtitle' => __( '', 'redux-framework-demo' ),
				    'desc'     => __( '', 'redux-framework-demo' ),
				    'default'  => '1'// 1 = on | 0 = off
				),
				array(
				    'id'       => 'CS-header-social-buttons',
				    'type'     => 'checkbox',
				    'title'    => __( 'Enable social icons', 'redux-framework-demo' ),
				    'subtitle' => __( '', 'redux-framework-demo' ),
				    'desc'     => __( '', 'redux-framework-demo' ),
				    'default'  => '1'// 1 = on | 0 = off
				),
				array(
					'id'       => 'CS-header-social',
					'type'     => 'sorter',
					'title'    => 'Share button manger',
					'subtitle' => 'You can add multiple drop areas or columns.',
					'compiler' => 'true',
					'options'  => array(
						'enabled'  => array(
							'facebook'      => 'Facebook',
							'twitter'       => 'Twitter',
							'google-plus'   => 'Google plus',
							'instagram'     => 'Instagram',
							'tumblr'        => 'Tumblr',
							'pinterest'       => 'Pinterest',
							'youtube'       => 'Youtube',
							'rss'           => 'RSS',
							),
						'disabled' => array(
							
							),
					),
				),
			)
		) );
		Redux::setSection( $opt_name, array(
				'title'      => __( 'Post - Classic layout', 'redux-framework-demo' ),
				'id'         => 'CS-31321231',
				'subsection' => true,
				'desc'       => __( '', 'redux-framework-demo' ),
				'fields'     => array(
					array(
					'id'       => 'CS-classic-share',
					'type'     => 'sorter',
					'title'    => 'Share button manger',
					'subtitle' => 'You can add multiple drop areas or columns.',
					'compiler' => 'true',
					'options'  => array(
						'enabled'  => array(
							'facebook'      => 'Facebook',
							'twitter'       => 'Twitter',
							'google-plus'   => 'Google plus',
							),
						'disabled' => array(
							'pinterest'     => 'Pinterest',
							'comments'      => 'Comments'
							),
					),
					),
				)
			) );
		Redux::setSection( $opt_name, array(
				'title'      => __( 'Post - Grid layout', 'redux-framework-demo' ),
				'id'         => 'CS-3132ds1231',
				'subsection' => true,
				'desc'       => __( '', 'redux-framework-demo' ),
				'fields'     => array(
					array(
					'id'       => 'CS-232ds13123',
					'type'     => 'media',
					'title'    => __( 'Add Favicon', 'redux-framework-demo' ),
					'desc'     => __( '', 'redux-framework-demo' ),
					'subtitle' => __( ' ', 'redux-framework-demo' ) . '<a href="http://en.wikipedia.org/wiki/Favicon" target="_blank">http://en.wikipedia.org/wiki/Favicon</a>',
					),
				)
			) );
		Redux::setSection( $opt_name, array(
				'title'      => __( 'Single Post', 'redux-framework-demo' ),
				'id'         => 'CS-31231',
				'subsection' => true,
				'desc'       => __( '', 'redux-framework-demo' ),
				'fields'     => array(
					array(
					'id'       => 'CS-single-post-share',
					'type'     => 'sorter',
					'title'    => 'Share button manger',
					'subtitle' => 'You can add multiple drop areas or columns.',
					'compiler' => 'true',
					'options'  => array(
						'enabled'  => array(
							'facebook'      => 'Facebook',
							'twitter'       => 'Twitter',
							'google-plus'   => 'Google plus',
							),
						'disabled' => array(
							'pinterest'     => 'Pinterest',
							'comments'      => 'Comments'
							),
					),
					),
				)
			) );
		Redux::setSection( $opt_name, array(
				'title'      => __( 'Page', 'redux-framework-demo' ),
				'id'         => 'CS-322311312',
				'subsection' => true,
				'desc'       => __( '', 'redux-framework-demo' ),
				'fields'     => array(
					array(
					'id'       => 'CS-2321313213123',
					'type'     => 'media',
					'title'    => __( 'Add Favicon', 'redux-framework-demo' ),
					'desc'     => __( '', 'redux-framework-demo' ),
					'subtitle' => __( ' ', 'redux-framework-demo' ) . '<a href="http://en.wikipedia.org/wiki/Favicon" target="_blank">http://en.wikipedia.org/wiki/Favicon</a>',
					),    
				)
			) );
		Redux::setSection( $opt_name, array(
				'title'      => __( 'Footer', 'redux-framework-demo' ),
				'id'         => 'CS-footer',
				'subsection' => true,
				'desc'       => __( '', 'redux-framework-demo' ),
				'fields'     => array(
					array(
					'id'        => 'CS-footer-copy',
					'type'      => 'text',
					'title'     => __( 'Footer copy Text', 'redux-framework-demo' ),
					'subtitle'  => __( 'The text at the bottom of the website.', 'redux-framework-demo' ),
					'desc'      => __( 'Copy and paste: ©', 'redux-framework-demo' ),
					'placeholder' => 'Copyright © 2015 Black Swan. All rights reserved.',
					'text_hint' => array(
						'title'   => 'Remember',
						'content' => 'Copyright © 2015 Your Company. All rights reserved.'
						)
					),
				)
			) );










	// -> START Custom Code
	Redux::setSection( $opt_name, array(
		'title' => __( 'Custom Code', 'CS-redux-framework' ),
		'id'    => 'CS-custom',
		'desc'  => __( '', 'redux-framework-demo' ),
		'icon'  => 'el el-wrench'
	) );

	Redux::setSection( $opt_name, array(
		'title'      => __( 'Custom CSS', 'redux-framework-demo' ),
		'id'         => 'CS-21322311312',
		'subsection' => true,
		'desc'       => __( '', 'redux-framework-demo' ),
		'fields'     => array(
			array(
				'id'       => 'CS-321323211312',
				'type'     => 'media',
				'url'      => true,
				'title'    => __( 'Homepage Layout', 'redux-framework-demo' ),
				'compiler' => 'true',
				'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
				'desc'     => __( 'The demo sites logo is: 214 x 26px', 'redux-framework-demo' ),
				'subtitle' => __( 'To work on all screens today and tomorrow, we highly recommend to use SVG-images.', 'redux-framework-demo' ),
				'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
				//'hint'      => array(
				//    'title'     => 'Hint Title',
				//    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
				//)
			),
		)
	) );
	Redux::setSection( $opt_name, array(
			'title'      => __( 'Custom javascript', 'redux-framework-demo' ),
			'id'         => 'CS-31321321231',
			'subsection' => true,
			'desc'       => __( '', 'redux-framework-demo' ),
			'fields'     => array(
				array(
				'id'       => 'CS-23321312123',
				'type'     => 'media',
				'title'    => __( 'Add Favicon', 'redux-framework-demo' ),
				'desc'     => __( '', 'redux-framework-demo' ),
				'subtitle' => __( ' ', 'redux-framework-demo' ) . '<a href="http://en.wikipedia.org/wiki/Favicon" target="_blank">http://en.wikipedia.org/wiki/Favicon</a>',
			),
			)
		) );
	Redux::setSection( $opt_name, array(
			'title'      => __( 'Custom PHP', 'redux-framework-demo' ),
			'id'         => 'CS-31321231231',
			'subsection' => true,
			'desc'       => __( '', 'redux-framework-demo' ),
			'fields'     => array(
				array(
				'id'       => 'CS-23332112123',
				'type'     => 'media',
				'title'    => __( 'Add Favicon', 'redux-framework-demo' ),
				'desc'     => __( '', 'redux-framework-demo' ),
				'subtitle' => __( ' ', 'redux-framework-demo' ) . '<a href="http://en.wikipedia.org/wiki/Favicon" target="_blank">http://en.wikipedia.org/wiki/Favicon</a>',
			),
			)
		) );










	// -> START Colors
	$section = array(
			'icon'   => 'el el-list-alt',
			'title'  => __( 'Colors', 'redux-framework-demo' ),
			'fields' => array(
				array(
				'id'       => 'opt-dsalink-color',
				'type'     => 'link_color',
				'title'    => __( 'Links Color Option', 'redux-framework-demo' ),
				'subtitle' => __( 'Only color validation can be done on this field type', 'redux-framework-demo' ),
				'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
				//'regular'   => false, // Disable Regular Color
				//'hover'     => false, // Disable Hover Color
				//'active'    => false, // Disable Active Color
				//'visited'   => true,  // Enable Visited Color
				'default'  => array(
					'regular' => '#aaa',
					'hover'   => '#bbb',
					'active'  => '#ccc',
				)
			),
			),
		);
		Redux::setSection( $opt_name, $section );

	/*
	 * <--- END SECTIONS
	 */

	/**
	 * This is a test function that will let you see when the compiler hook occurs.
	 * It only runs if a field    set with compiler=>true is changed.
	 * */
	function compiler_action( $options, $css, $changed_values ) {
		echo '<h1>The compiler hook has run!</h1>';
		echo "<pre>";
		print_r( $changed_values ); // Values that have changed since the last save
		echo "</pre>";
		//print_r($options); //Option values
		//print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
	}

	/**
	 * Custom function for the callback validation referenced above
	 * */
	if ( ! function_exists( 'redux_validate_callback_function' ) ) {
		function redux_validate_callback_function( $field, $value, $existing_value ) {
			$error   = false;
			$warning = false;

			//do your validation
			if ( $value == 1 ) {
				$error = true;
				$value = $existing_value;
			} elseif ( $value == 2 ) {
				$warning = true;
				$value   = $existing_value;
			}

			$return['value'] = $value;

			if ( $error == true ) {
				$return['error'] = $field;
				$field['msg']    = 'your custom error message';
			}

			if ( $warning == true ) {
				$return['warning'] = $field;
				$field['msg']      = 'your custom warning message';
			}

			return $return;
		}
	}

	/**
	 * Custom function for the callback referenced above
	 */
	if ( ! function_exists( 'redux_my_custom_field' ) ) {
		function redux_my_custom_field( $field, $value ) {
			print_r( $field );
			echo '<br/>';
			print_r( $value );
		}
	}

	/**
	 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
	 * Simply include this function in the child themes functions.php file.
	 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
	 * so you must use get_template_directory_uri() if you want to use any of the built in icons
	 * */
	function dynamic_section( $sections ) {
		//$sections = array();
		$sections[] = array(
			'title'  => __( 'Section via hook', 'redux-framework-demo' ),
			'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
			'icon'   => 'el el-paper-clip',
			// Leave this as a blank section, no options just some intro text set above.
			'fields' => array()
		);

		return $sections;
	}

	/**
	 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
	 * */
	function change_arguments( $args ) {
		//$args['dev_mode'] = true;

		return $args;
	}

	/**
	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
	 * */
	function change_defaults( $defaults ) {
		$defaults['str_replace'] = 'Testing filter hook!';

		return $defaults;
	}

	// Remove the demo link and the notice of integrated demo from the redux-framework plugin
	function remove_demo() {

		// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
		if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
			remove_filter( 'plugin_row_meta', array(
				ReduxFrameworkPlugin::instance(),
				'plugin_metalinks'
			), null, 2 );

			// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
			remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
		}
	}
