<?php
if (!function_exists('kindaid_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function kindaid_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on twentyfifteen, use a find and replace
         * to change 'twentyfifteen' to the name of your theme in all the template files
         */
        load_theme_textdomain('twentyfifteen', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(825, 510, true);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'twentyfifteen'),
            'social' => __('Social Links Menu', 'twentyfifteen'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ));

        // $color_scheme  = twentyfifteen_get_color_scheme();
        // $default_color = trim( $color_scheme[0], '#' );

        // Setup the WordPress core custom background feature.
        // add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
        // 	'default-color'      => $default_color,
        // 	'default-attachment' => 'fixed',
        // ) ) );

        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        // add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );
    }
endif; // kindaid_setup
add_action('after_setup_theme', 'kindaid_setup');


add_action('wp_enqueue_scripts', 'kindaid_scripts');
function kindaid_scripts() {
    wp_enqueue_style('kindaid-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '1.0.0');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0');
    wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '1.0.0');
    wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array('bootstrap', 'spacing'), '1.0.0');

    // 2. Bootstrap (Depends on jQuery)
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap-min.js', array('jquery'), '5.0.0', true);
    // 3. Third-party Plugins
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.0', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array('jquery'), '1.0', true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array(), '1.0', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array('jquery'), '1.0', true);
    wp_enqueue_script('range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', array('jquery'), '1.0', true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), '1.0', true);
    wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true);
    // 4. Initializers & Main (These usually depend on all the above)
    wp_enqueue_script('slider-init', get_template_directory_uri() . '/assets/js/slider-init.js', array('jquery', 'swiper-bundle'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-js'), '1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


//KindAid Require Files
include_once get_template_directory() . '/include/theme-helper.php';

function kindaid_kirki() {
    if (class_exists('Kirki')) {
        include_once get_template_directory() . '/include/kindaid-kirki.php';
    }
}
add_action('init', 'kindaid_kirki');