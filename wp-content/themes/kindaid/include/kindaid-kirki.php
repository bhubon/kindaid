<?php

// Kirki
new \Kirki\Panel(
	'kindaid_panel',
	[
		'priority' => 10,
		'title' => esc_html__('KindAid Options', 'kirki'),
		'description' => esc_html__('KindAid Theme Options', 'kirki'),
	]
);

//Header Info Section
function header_info_section() {
	new \Kirki\Section(
		'header_info_section',
		[
			'title' => esc_html__('Header Info', 'kirki'),
			'description' => esc_html__('Header Info Section Description.', 'kirki'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings' => 'header_right_switch',
			'label' => esc_html__('Header Right Info Switch', 'kirki'),
			'description' => esc_html__('Header Right Switch', 'kirki'),
			'section' => 'header_info_section',
			'default' => 'off',
			'choices' => [
				'on' => esc_html__('Enable', 'kirki'),
				'off' => esc_html__('Disable', 'kirki'),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'button_text',
			'label' => esc_html__('Button Text', 'kirki'),
			'section' => 'header_info_section',
			'default' => esc_html__('Donate Now', 'kirki'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'button_url',
			'label' => esc_html__('Button URL', 'kirki'),
			'section' => 'header_info_section',
			'default' => esc_html__('#', 'kirki'),
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
			'title' => esc_html__('Header Logo', 'kirki'),
			'description' => esc_html__('Header Logo.', 'kirki'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings' => 'logo',
			'label' => esc_html__('Main Logo', 'kirki'),
			'description' => esc_html__('The saved value will be the URL.', 'kirki'),
			'section' => 'header_logo_section',
			'default' => get_template_directory_uri() . '/assets/img/logo/logo.png',
		]
	);
}
header_logo_kirki();

//Header Offcanvas Section
function header_offcanvas_kirki() {
	new \Kirki\Section(
		'header_offcanvas_section',
		[
			'title' => esc_html__('Offcanvas Logo', 'kirki'),
			'description' => esc_html__('Offcanvas Logo.', 'kirki'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings' => 'offcanvas_logo',
			'label' => esc_html__('Offcanvas Logo', 'kirki'),
			'description' => esc_html__('The saved value will be the URL.', 'kirki'),
			'section' => 'header_offcanvas_section',
			'default' => get_template_directory_uri() . '/assets/img/logo/logo.png',
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_title',
			'label' => esc_html__('Offcanvas Title', 'kirki'),
			'section' => 'header_offcanvas_section',
			'default' => esc_html__('Hello There!', 'kirki'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Textarea(
		[
			'settings' => 'offcanvas_desc',
			'label' => esc_html__('Offcanvas Description', 'kirki'),
			'section' => 'header_offcanvas_section',
			'default' => esc_html__('Lorem ipsum dolor sit amet, consect etur adipiscing elit.', 'kirki'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'offcanvas_gallery',
			'label' => esc_html__('Offcanvas Gallery Item', 'kirki'),
			'section' => 'header_offcanvas_section',
			'priority' => 10,
			'fields' => [
				'offcanvas_image' => [
					'type' => 'image',
					'label' => esc_html__('Offcanvas Image', 'kirki'),
					'description' => esc_html__('Offcanvas Image', 'kirki'),
					'default' => '',
				],
			],
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'offcanvas_info',
			'label' => esc_html__('Offcanvas Info Item', 'kirki'),
			'section' => 'header_offcanvas_section',
			'priority' => 10,
			'fields' => [
				'offcanvas_info_name' => [
					'type' => 'text',
					'label' => esc_html__('Offcanvas Info Item', 'kirki'),
					// 'description' => esc_html__('Offcanvas Info Item Here', 'kirki'),
					'default' => '',
				],
				'offcanvas_info_url' => [
					'type' => 'text',
					'label' => esc_html__('Offcanvas Item Url', 'kirki'),
					// 'description' => esc_html__('Offcanvas Item Url Here', 'kirki'),
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
			'title' => esc_html__('Header Social', 'kirki'),
			'description' => esc_html__('Social Section', 'kirki'),
			'panel' => 'kindaid_panel',
			'priority' => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'fb_url',
			'label' => esc_html__('Facebook URL', 'kirki'),
			'section' => 'header_social_section',
			'default' => esc_html__('#', 'kirki'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'tw_url',
			'label' => esc_html__('Twitter URL', 'kirki'),
			'section' => 'header_social_section',
			'default' => esc_html__('#', 'kirki'),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'inst_url',
			'label' => esc_html__('Instagram URL', 'kirki'),
			'section' => 'header_social_section',
			'default' => esc_html__('#', 'kirki'),
			'priority' => 10,
		]
	);
}
header_social_section();