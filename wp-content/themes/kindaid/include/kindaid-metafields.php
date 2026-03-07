<?php

function kindaid_metafields($meta_boxes) {
    $meta_boxes[] = array(
        'metabox_id' => 'kindaid-metafields',
        'title' => esc_html__('Page Options', 'textdpmain'),
        'post_type' => 'page', // page, custom post type name
        'context' => 'normal',
        'priority' => 'core',
        'fields' => array(
            array(

                'label' => esc_html__('Header Layout', 'kindaid'),
                'id' => "header-from-page",
                'type' => 'select',
                'options' => array(
                    'blank_header' => __('Select Your Header','kindaid'),
                    'header-page-1' => __('Header One','kindaid'),
                    'header-page-2' => __('Header Two','kindaid'),
                    'header-page-3' => __('Header Three','kindaid'),
                ),
                'placeholder' => __('Select an item','kindaid'),
                'conditional' => array(),
                'default' => '',
                'multiple' => false
            ),
            array(

                'label' => esc_html__('Footer Layout', 'kindaid'),
                'id' => "footer-from-page",
                'type' => 'select',
                'options' => array(
                    'blank_footer' => __('Select Your Footer','kindaid'),
                    'footer-page-1' => __('Footer One','kindaid'),
                    'footer-page-2' => __('Footer Two','kindaid'),
                ),
                'placeholder' => __('Select an item','kindaid'),
                'conditional' => array(),
                'default' => '',
                'multiple' => false
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('tp_meta_boxes', 'kindaid_metafields');

?>