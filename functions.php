<?php
/**
 * Black Swan functions and definitions
 *
 * @package Black Swan
 */

add_filter('show_admin_bar', '__return_false');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}

if ( ! function_exists( 'black_swan_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function black_swan_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Black Swan, use a find and replace
	 * to change 'black-swan' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'black-swan', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'black-swan' ),
		'footer' => __( 'Footer Menu', 'black-swan' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote',
	) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'black_swan_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // black_swan_setup
add_action( 'after_setup_theme', 'black_swan_setup' );

/**
 * Enqueue scripts and styles.
 */
function black_swan_scripts() {
	wp_enqueue_style( 'black-swan-style', get_stylesheet_uri() );

	wp_enqueue_style( 'black-swan-awesome-font', get_template_directory_uri() . '/inc/font-awesome.min.css' );

	wp_enqueue_script( 'black-swan-svg4everyone', get_template_directory_uri() . '/js/svg4everybody.ie8.min.js', '', false, false);

	wp_enqueue_script( 'black-swan-modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', '', false, false);

	wp_enqueue_script( 'black-swan-app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'black_swan_scripts' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function black_swan_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'black-swan' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer big widget', 'black-swan' ),
		'id'            => 'footer-big-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Medium Widget', 'black-swan' ),
		'id'            => 'footer-medium-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Small Widget', 'black-swan' ),
		'id'            => 'footer-small-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'black_swan_widgets_init' );


/**
 * Numbered Pagination
 *
 * @link http://www.wpexplorer.com/pagination-wordpress-theme/
 *
 */
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '<  Prev  ' : '<  Prev ';
		$next_arrow = is_rtl() ? 'Next  >' : 'Next  >';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}	
}


/**
 * ReduxFramework
 *
 * @link http://docs.reduxframework.com/core/advanced/embed/
 *
 */
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/sample/CS-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/CS-config.php' );
}


/**
 * Add SVG upload support
 *
 * @link https://wordpress.org/support/topic/svg-upload-not-allowed
 *
 */
add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes ( $existing_mimes=array() ) {
	// add the file extension to the array
	$existing_mimes['svg'] = 'mime/type';
        // call the modified list of extensions
	return $existing_mimes;
}

/**
 * Add Sidebar Classes
 *
 * Here's a working example you can post in your themes functions.php file 
 * to add a sidebar class to the output of body_class.
 * 
 * @link https://codex.wordpress.org/Function_Reference/body_class
 * 
 */
add_action( 'wp_head', create_function( '', 'ob_start();' ) );
add_action( 'get_sidebar', 'my_sidebar_class' );
add_action( 'wp_footer', 'my_sidebar_class_replace' );
 
function my_sidebar_class( $name = '' ) {
	static $class = 'withsidebar';
	if ( ! empty( $name ) ) {
		$class .= ' sidebar-' . $name;
	}
	my_sidebar_class_replace( $class );
}
 
function my_sidebar_class_replace( $c = '' ) {
	static $class = '';
	if ( ! empty( $c ) ) {
		$class = $c;
	} else {
		echo str_replace( '<body class="', '<body class="' . $class . ' ', ob_get_clean() );
		ob_start();
	}
}


function black_swan_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
			
			<div class="thecomment">
						
				<!-- <div class="author-img">
					<?php echo get_avatar($comment,$args['avatar_size']); ?>
				</div> -->
				<span class="reply">
						<?php comment_reply_link(array_merge( $args, array('reply_text' => __('<span class="comment-replay">R</span>', 'solopine'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
						<?php edit_comment_link(__('Edit', 'solopine')); ?>
				</span>
				
				<div class="comment-text">
					
					<span class="author"><?php echo get_comment_author_link(); ?></span>
					<span class="date"><?php printf(__('%1$s at %2$s', 'solopine'), get_comment_date(),  get_comment_time()) ?></span>
					<?php if ($comment->comment_approved == '0') : ?>
						<em><i class="icon-info-sign"></i> <?php _e('Comment awaiting approval', 'solopine'); ?></em>
						<br />
					<?php endif; ?>
					<?php comment_text(); ?>
				</div>
						
			</div>
			
			
		</li>
		
		<?php 
	}



