<?php

/**
 * Sanitize markup for front-end display.
 *
 */


/**
 * Get All Posts
 * @param mixed $post_type
 */
function get_all_post($post_type = 'post') {
    $posts = get_posts([
        'post_type' => $post_type,
        'orderby' => 'name',
        'order' => 'ASC',
        'posts_per_page' => -1,
    ]);

    $posts_list = [];

    foreach ($posts as $post) {
        $posts_list[$post->ID] = $post->post_title;
    }
    return $posts_list;
}


/**
 * Get All Taxonomy 
 *
 * @param string $category
 * @return array
 */
function tp_all_tax($category = 'category') {
    $categories = get_categories([
        'taxonomy' => $category,
        'orderby' => 'name',
        'order' => 'ASC',
    ]);

    $cat_list = [];
    foreach ($categories as $cat) {
        $cat_list[$cat->slug] = $cat->name;
    }

    return $cat_list;
}
function kd_kses($tag = '') {
    $allowed_html = [
        'a' => [
            'class' => [],
            'href' => [],
            'title' => [],
            'target' => [],
            'rel' => [],
        ],
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path' => array(
            'd' => true,
            'fill' => true,
            'stroke' => true,
            'stroke-width' => true,
            'stroke-linecap' => true,
            'stroke-linejoin' => true,
            'opacity' => true,
        ),
        'b' => [],
        'blockquote' => [
            'cite' => [],
        ],
        'cite' => [
            'title' => [],
        ],
        'code' => [],
        'del' => [
            'datetime' => [],
            'title' => [],
        ],
        'div' => [
            'class' => [],
            'title' => [],
            'style' => [],
        ],
        'dl' => [],
        'dt' => [],
        'em' => [],
        'h1' => [],
        'h2' => [],
        'h3' => [],
        'h4' => [],
        'h5' => [],
        'h6' => [],
        'i' => [
            'class' => [],
        ],
        'img' => [
            'alt' => [],
            'class' => [],
            'height' => [],
            'src' => [],
            'width' => [],
        ],
        'li' => array(
            'class' => array(),
        ),
        'ol' => array(
            'class' => array(),
        ),
        'p' => array(
            'class' => array(),
        ),
        'q' => array(
            'cite' => array(),
            'title' => array(),
        ),
        'span' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'iframe' => array(
            'width' => array(),
            'height' => array(),
            'scrolling' => array(),
            'frameborder' => array(),
            'allow' => array(),
            'src' => array(),
        ),
        'strike' => array(),
        'br' => array(),
        'strong' => array(),
    ];

    return wp_kses($tag, $allowed_html);
}


/**
 * donation_single_template
 * @param mixed $template
 */
function donation_single_template($template) {
    if (is_singular('campaign')) {
        $new_template = __DIR__ . '/single-donation.php';

        if ('' != $new_template) {
            return $new_template;
        }
    }

    return $template;
}

add_filter('template_include', 'donation_single_template');