<?php
/**
 * Plugin Name: KindAid Core
 * Description: KindAid Core plugin for widgets.
 * Version:     1.0.0
 * Author:      Bhubon Nil
 * Author URI:  https://developers.elementor.com/
 * Text Domain: kindaid-core
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */


/**
 * WP Custom Widgets
 */
require_once(__DIR__ . '/include/wp-widgets/blog-author.php');
require_once(__DIR__ . '/include/wp-widgets/blog-banner.php');
require_once(__DIR__ . '/include/wp-widgets/blog-recent-post.php');
require_once(__DIR__ . '/include/wp-widgets/footer-contact-info.php');
require_once(__DIR__ . '/include/wp-widgets/footer-contact-info-2.php');
require_once(__DIR__ . '/include/wp-widgets/footer-info.php');
require_once(__DIR__ . '/include/wp-widgets/footer-newsletter.php');
require_once(__DIR__ . '/include/wp-widgets/event-recent-post.php');

/**
 * KindAid Core Helper
 */
require_once(__DIR__ . '/include/kindaid-core-helper.php');

/**
 * Elementor Custom Widget
 * @param mixed $widgets_manager
 * @return void
 */
function register_hello_world_widget($widgets_manager) {

	require_once(__DIR__ . '/widgets/blog_post.php');
	require_once(__DIR__ . '/widgets/heading.php');
	require_once(__DIR__ . '/widgets/hero.php');
	require_once(__DIR__ . '/widgets/fact.php');
	require_once(__DIR__ . '/widgets/services-list.php');
	require_once(__DIR__ . '/widgets/faq.php');
	require_once(__DIR__ . '/widgets/join.php');
	require_once(__DIR__ . '/widgets/step.php');
	require_once(__DIR__ . '/widgets/call_us.php');
	require_once(__DIR__ . '/widgets/button.php');
	require_once(__DIR__ . '/widgets/brand.php');
	require_once(__DIR__ . '/widgets/team.php');
	require_once(__DIR__ . '/widgets/slider.php');
	require_once(__DIR__ . '/widgets/icon-box.php');
	require_once(__DIR__ . '/widgets/image-box.php');
	require_once(__DIR__ . '/widgets/about.php');
	require_once(__DIR__ . '/widgets/who-we-are.php');
	require_once(__DIR__ . '/widgets/testimonial.php');
	require_once(__DIR__ . '/widgets/gallery.php');
	require_once(__DIR__ . '/widgets/mision-vision.php');


	if (class_exists('Charitable')) {
		require_once(__DIR__ . '/widgets/charity_grid.php');
		require_once(__DIR__ . '/widgets/charity_slider.php');
		require_once(__DIR__ . '/widgets/charity_support.php');
	}

	require_once(__DIR__ . '/widgets/event-grid.php');
}
add_action('elementor/widgets/register', 'register_hello_world_widget');

/**
 * Elementor Kindaid Core Widget Category Register
 * @param mixed $elements_manager
 * @return void
 */
function kindadid_code_elementor_widget_categories($elements_manager) {

	$elements_manager->add_category(
		'kindaid_core',
		[
			'title' => esc_html__('Kindaid Core', 'kindaid-core'),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action('elementor/elements/categories_registered', 'kindadid_code_elementor_widget_categories');