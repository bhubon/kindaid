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
         * If you're building a theme based on kindaid, use a find and replace
         * to change 'kindaid' to the name of your theme in all the template files
         */
        load_theme_textdomain('kindaid', get_template_directory() . '/languages');

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
            'main-menu' => __('Main Menu', 'kindaid'),
            'footer-menu' => __('Footer Menu', 'kindaid'),
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

        add_theme_support( "wp-block-styles" );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "align-wide" );

        remove_theme_support('widgets-block-editor');
    }
endif; // kindaid_setup
add_action('after_setup_theme', 'kindaid_setup');

// Disable Gutenberg for posts and pages
add_filter('use_block_editor_for_post', '__return_false', 10);


/**
 * Add a sidebar.
 */
function kindaid_widgets() {
    // Blog Sidebar
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'kindaid'),
        'id' => 'blog-sidebar',
        'description' => __('Widgets in this area will be shown on Blog Sidebar.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-widget-sidebar mb-20 %2$s" >',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-widget-main-title mb-35">',
        'after_title' => '</h3>',
    ));
    // Footer Style 01
    register_sidebar(array(
        'name' => __('Footer 1 :  Widgets : 1', 'kindaid'),
        'id' => 'footer-1-widget-1',
        'description' => __('Widgets in this area will be shown on Footer 1 : Widget : 1.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-40 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".3s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1 :  Widgets : 2', 'kindaid'),
        'id' => 'footer-1-widget-2',
        'description' => __('Widgets in this area will be shown on Footer 1 : Widget : 2.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-75 mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".4s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1 :  Widgets : 3', 'kindaid'),
        'id' => 'footer-1-widget-3',
        'description' => __('Widgets in this area will be shown on Footer 1 : Widget : 4.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-col-2 mb-50 wow fadeInUp%2$s" data-wow-duration=".9s" data-wow-delay=".5s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1 :  Widgets : 4', 'kindaid'),
        'id' => 'footer-1-widget-4',
        'description' => __('Widgets in this area will be shown on Footer 1 : Widget : 4.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-50 bg-position wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".6s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));

    // Footer Style 02
    register_sidebar(array(
        'name' => __('Footer 2 :  Widgets : 1', 'kindaid'),
        'id' => 'footer-2-widget-1',
        'description' => __('Widgets in this area will be shown on Footer 2 : Widget : 1.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget mb-40 mr-70 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".3s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2 :  Widgets : 2', 'kindaid'),
        'id' => 'footer-2-widget-2',
        'description' => __('Widgets in this area will be shown on Footer 2 : Widget : 2.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-30 mb-50 wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".4s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2 :  Widgets : 3', 'kindaid'),
        'id' => 'footer-2-widget-3',
        'description' => __('Widgets in this area will be shown on Footer 2 : Widget : 4.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-75 tp-footer-col-2 mb-50 wow fadeInUp%2$s" data-wow-duration=".9s" data-wow-delay=".5s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2 :  Widgets : 4', 'kindaid'),
        'id' => 'footer-2-widget-4',
        'description' => __('Widgets in this area will be shown on Footer 2 : Widget : 4.', 'kindaid'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget ml-75 tp-footer-col-2 mb-50  wow fadeInUp %2$s" data-wow-duration=".9s" data-wow-delay=".6s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="tp-footer-title mb-15">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'kindaid_widgets');


add_action('wp_enqueue_scripts', 'kindaid_scripts');
function kindaid_scripts() {
    wp_enqueue_style('kindaid-fonts',kindaid_fonts_url(), array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0','all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0','all');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '1.0.0','all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0','all');
    wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '1.0.0','all');
    wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0','all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array('bootstrap', 'spacing'), '1.0.0','all');
    wp_enqueue_style('kindaid-style', get_stylesheet_uri());

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

/*
Register Fonts
 */
function kindaid_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'kindaid' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Libre+Baskerville:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
    }
    return $font_url;
}

//KindAid Require Files
include_once get_template_directory() . '/include/theme-helper.php';
// include_once get_template_directory() . '/include/footer-info.php';
// include_once get_template_directory() . '/include/footer-contact-info.php';
// include_once get_template_directory() . '/include/footer-newsletter.php';
// include_once get_template_directory() . '/include/footer-contact-info-2.php';
// include_once get_template_directory() . '/include/blog-author.php';
// include_once get_template_directory() . '/include/blog-recent-post.php';
// include_once get_template_directory() . '/include/blog-banner.php';
include_once get_template_directory() . '/include/nav-walker.php';
include_once get_template_directory() . '/include/breadcrumb.php';

if (function_exists('tpmeta_field')) {
    include_once get_template_directory() . '/include/kindaid-metafields.php';
}

function kindaid_kirki() {
    if (class_exists('Kirki')) {
        include_once get_template_directory() . '/include/kindaid-kirki.php';
    }
}
add_action('init', 'kindaid_kirki');


/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function kindaid_sidebar_search($form) {
    $form = '<div class="tp-widget-search mb-20">
        <form method="get" action="' . home_url('/') . '" >
            <input type="text" name="s" id="s" placeholder="' . esc_attr('Search...') . '" value="' . get_search_query() . '"  />
            <button type="submit">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                        stroke="#121018" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M19.0004 19.0004L14.6504 14.6504" stroke="#121018" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </form>
    </div>';

    return $form;
}
add_filter('get_search_form', 'kindaid_sidebar_search');


// kindaid blog pagination
function kindaid_blog_pagination() {
    $pages = paginate_links([
        'type' => 'array',
        'prev_text' => __('<i class="far fa-arrow-left"></i>', 'kindaid'),
        'next_text' => __('<i class="far fa-arrow-right"></i>', 'kindaid'),
    ]);

    if ($pages) {
        echo "<ul>";
        foreach ($pages as $page) {
            echo "<li>$page</li>";
        }
        echo "</ul>";
    }
}