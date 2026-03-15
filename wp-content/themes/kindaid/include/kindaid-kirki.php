<?php

// Kirki
new \Kirki\Panel(
	'kindaid_panel',
	[
		'priority' => 10,
		'title' => esc_html__('KindAid Options', 'kindaid'),
		'description' => esc_html__('KindAid Theme Options', 'kindaid'),
	]
);

//Header Info Section
function header_info_section() {
	new \Kirki\Section(
		'header_info_section',
		[
			'title' => esc_html__('Header Info', 'kindaid'),
			'description' => esc_html__('Header Info Section Description.', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings' => 'header_global',
			'label' => esc_html__('Select Your Defailt Header', 'kindaid'),
			'section' => 'header_info_section',
			'default' => 'header-global-1',
			'placeholder' => esc_html__('Choose an option', 'kindaid'),
			'choices' => [
				'header-global-1' => esc_html__('Header 1', 'kindaid'),
				'header-global-2' => esc_html__('Header 2', 'kindaid'),
				'header-global-3' => esc_html__('Header 3', 'kindaid'),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings' => 'header_right_switch',
			'label' => esc_html__('Header Right Info Switch', 'kindaid'),
			'description' => esc_html__('Header Right Switch', 'kindaid'),
			'section' => 'header_info_section',
			'default' => 'off',
			'choices' => [
				'on' => esc_html__('Enable', 'kindaid'),
				'off' => esc_html__('Disable', 'kindaid'),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'button_text',
			'label' => esc_html__('Button Text', 'kindaid'),
			'section' => 'header_info_section',
			'default' => esc_html__('Donate Now', 'kindaid'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'button_url',
			'label' => esc_html__('Button URL', 'kindaid'),
			'section' => 'header_info_section',
			'default' => esc_html__('#', 'kindaid'),
			'priority' => 10,
		]
	);
}
header_info_section();

//Header Logo Section
function header_logo_kirki() {
	new \Kirki\Section(
		'header_logo_section',
		[
			'title' => esc_html__('Header Logo', 'kindaid'),
			'description' => esc_html__('Header Logo.', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings' => 'logo',
			'label' => esc_html__('Main Logo', 'kindaid'),
			'description' => esc_html__('The saved value will be the URL.', 'kindaid'),
			'section' => 'header_logo_section',
			'default' => get_template_directory_uri() . '/assets/img/logo/logo.png',
		]
	);

	new \Kirki\Field\Image(
		[
			'settings' => 'logo-transparent',
			'label' => esc_html__('Transparent Logo', 'kindaid'),
			'description' => esc_html__('The saved value will be the URL.', 'kindaid'),
			'section' => 'header_logo_section',
			'default' => get_template_directory_uri() . '/assets/img/logo/logo-yellow.png',
		]
	);
}
header_logo_kirki();

//Header Offcanvas Section
function header_offcanvas_kirki() {
	new \Kirki\Section(
		'header_offcanvas_section',
		[
			'title' => esc_html__('Offcanvas Logo', 'kindaid'),
			'description' => esc_html__('Offcanvas Logo.', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings' => 'offcanvas_logo',
			'label' => esc_html__('Offcanvas Logo', 'kindaid'),
			'description' => esc_html__('The saved value will be the URL.', 'kindaid'),
			'section' => 'header_offcanvas_section',
			'default' => get_template_directory_uri() . '/assets/img/logo/logo.png',
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_title',
			'label' => esc_html__('Offcanvas Title', 'kindaid'),
			'section' => 'header_offcanvas_section',
			'default' => esc_html__('Hello There!', 'kindaid'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Textarea(
		[
			'settings' => 'offcanvas_desc',
			'label' => esc_html__('Offcanvas Description', 'kindaid'),
			'section' => 'header_offcanvas_section',
			'default' => esc_html__('Lorem ipsum dolor sit amet, consect etur adipiscing elit.', 'kindaid'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'offcanvas_gallery',
			'label' => esc_html__('Offcanvas Gallery Item', 'kindaid'),
			'section' => 'header_offcanvas_section',
			'priority' => 10,
			'fields' => [
				'offcanvas_image' => [
					'type' => 'image',
					'label' => esc_html__('Offcanvas Image', 'kindaid'),
					'description' => esc_html__('Offcanvas Image', 'kindaid'),
					'default' => '',
				],
			],
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'offcanvas_info',
			'label' => esc_html__('Offcanvas Info Item', 'kindaid'),
			'section' => 'header_offcanvas_section',
			'priority' => 10,
			'fields' => [
				'offcanvas_info_name' => [
					'type' => 'text',
					'label' => esc_html__('Offcanvas Info Item', 'kindaid'),
					// 'description' => esc_html__('Offcanvas Info Item Here', 'kindaid'),
					'default' => '',
				],
				'offcanvas_info_url' => [
					'type' => 'text',
					'label' => esc_html__('Offcanvas Item Url', 'kindaid'),
					// 'description' => esc_html__('Offcanvas Item Url Here', 'kindaid'),
					'default' => '',
				],
			],
		]
	);
}
header_offcanvas_kirki();

//Header Social Section
function header_social_section() {
	new \Kirki\Section(
		'header_social_section',
		[
			'title' => esc_html__('Header Social', 'kindaid'),
			'description' => esc_html__('Social Section', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'fb_url',
			'label' => esc_html__('Facebook URL', 'kindaid'),
			'section' => 'header_social_section',
			'default' => esc_html__('#', 'kindaid'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'tw_url',
			'label' => esc_html__('Twitter URL', 'kindaid'),
			'section' => 'header_social_section',
			'default' => esc_html__('#', 'kindaid'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'inst_url',
			'label' => esc_html__('Instagram URL', 'kindaid'),
			'section' => 'header_social_section',
			'default' => esc_html__('#', 'kindaid'),
			'priority' => 10,
		]
	);
}
header_social_section();

//Footer Copyright Section
function footer_copyright_kirki() {
	new \Kirki\Section(
		'footer_section',
		[
			'title' => esc_html__('Footer', 'kindaid'),
			'description' => esc_html__('Here footer settings will place.', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);


	new \Kirki\Field\Select(
		[
			'settings' => 'footer_global',
			'label' => esc_html__('Select Your Defailt Footer', 'kindaid'),
			'section' => 'footer_section',
			'default' => 'footer-global-1',
			'placeholder' => esc_html__('Choose an option', 'kindaid'),
			'choices' => [
				'footer-global-1' => esc_html__('Footer 1', 'kindaid'),
				'footer-global-2' => esc_html__('Footer 2', 'kindaid'),
			],
		]
	);

	new \Kirki\Field\Image(
		[
			'settings' => 'footer_bg_image',
			'label' => esc_html__('Footer Background Image', 'kindaid'),
			'description' => esc_html__('Footer Background image will be here', 'kindaid'),
			'section' => 'footer_section',
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'footer_copyright',
			'label' => esc_html__('Footer Copyright', 'kindaid'),
			'description' => esc_html__('The saved value will be the URL.', 'kindaid'),
			'section' => 'footer_section',
			'default' => esc_html__('© 2026 Charity. is Proudly Powered by Aqlova', 'kindaid'),
		]
	);
}
footer_copyright_kirki();

//Blog Section
function blog_section_kirki() {
	new \Kirki\Section(
		'blog_section',
		[
			'title' => esc_html__('Blog', 'kindaid'),
			'description' => esc_html__('Here blog settings will place.', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings' => 'blog_cate_switch',
			'label' => esc_html__('Blog Category Switch', 'kindaid'),
			'description' => esc_html__('Blog Category Switch', 'kindaid'),
			'section' => 'blog_section',
			'default' => 'off',
			'choices' => [
				'on' => esc_html__('Enable', 'kindaid'),
				'off' => esc_html__('Disable', 'kindaid'),
			],
		]
	);
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings' => 'blog_meta_author_switch',
			'label' => esc_html__('Blog Meta Author Switch', 'kindaid'),
			'description' => esc_html__('Blog Meta Author Switch', 'kindaid'),
			'section' => 'blog_section',
			'default' => 'on',
			'choices' => [
				'on' => esc_html__('Enable', 'kindaid'),
				'off' => esc_html__('Disable', 'kindaid'),
			],
		]
	);
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings' => 'blog_meta_date_switch',
			'label' => esc_html__('Blog Meta Date Switch', 'kindaid'),
			'description' => esc_html__('Blog Meta Date Switch', 'kindaid'),
			'section' => 'blog_section',
			'default' => 'on',
			'choices' => [
				'on' => esc_html__('Enable', 'kindaid'),
				'off' => esc_html__('Disable', 'kindaid'),
			],
		]
	);
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings' => 'blog_meta_comment_switch',
			'label' => esc_html__('Blog Meta Comment Switch', 'kindaid'),
			'description' => esc_html__('Blog Meta Comment Switch', 'kindaid'),
			'section' => 'blog_section',
			'default' => 'on',
			'choices' => [
				'on' => esc_html__('Enable', 'kindaid'),
				'off' => esc_html__('Disable', 'kindaid'),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'blog_btn_text',
			'label' => esc_html__('Blog Button', 'kindaid'),
			'description' => esc_html__('The saved value will be the URL.', 'kindaid'),
			'section' => 'blog_section',
			'default' => esc_html__('Read More', 'kindaid'),
		]
	);


	// $blog_meta_author_switch = get_theme_mod('blog_meta_author_switch', true);
	// $blog_meta_date_switch = get_theme_mod('blog_meta_date_switch', true);
	// $blog_meta_comment_switch = get_theme_mod('blog_meta_comment_switch', true);
}
blog_section_kirki();

//Breadcrumb Section
function breadcrumb_section_kirki() {
	new \Kirki\Section(
		'breadcrumb_section',
		[
			'title' => esc_html__('Breadcrumb', 'kindaid'),
			'description' => esc_html__('Here Breadcrumb settings will place.', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings' => 'breadcrumb_switch',
			'label' => esc_html__('Breadcrumb Switch', 'kindaid'),
			'description' => esc_html__('Breadcrumb Switch', 'kindaid'),
			'section' => 'breadcrumb_section',
			'default' => 'on',
			'choices' => [
				'on' => esc_html__('Enable', 'kindaid'),
				'off' => esc_html__('Disable', 'kindaid'),
			],
		]
	);
}
breadcrumb_section_kirki();

//404 Section
function error_section_kirki() {
	new \Kirki\Section(
		'error_section',
		[
			'title' => esc_html__('404 Error', 'kindaid'),
			'description' => esc_html__('Here 404 page settings will place.', 'kindaid'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => '404_error',
			'label' => esc_html__('404 Text ', 'kindaid'),
			'section' => 'error_section',
			'default' => esc_html__('404', 'kindaid'),
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => '404_error_subtitle',
			'label' => esc_html__('404 Subtitle ', 'kindaid'),
			'section' => 'error_section',
			'default' => esc_html__('Oops! Page not found', 'kindaid'),
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'error_content',
			'label' => esc_html__('404 Content ', 'kindaid'),
			'section' => 'error_section',
			'default' => esc_html__('Whoops, this is embrassing. Looks like the page you are looking for was not found.', 'kindaid'),
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'error_btn_text',
			'label' => esc_html__('404 Button Text ', 'kindaid'),
			'section' => 'error_section',
			'default' => esc_html__('Back To Home', 'kindaid'),
		]
	);
}
error_section_kirki();