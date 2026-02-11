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
}
header_offcanvas_kirki();