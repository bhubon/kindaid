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
                    'blank_header' => __('Select Your Header', 'kindaid'),
                    'header-page-1' => __('Header One', 'kindaid'),
                    'header-page-2' => __('Header Two', 'kindaid'),
                    'header-page-3' => __('Header Three', 'kindaid'),
                ),
                'placeholder' => __('Select an item', 'kindaid'),
                'conditional' => array(),
                'default' => '',
                'multiple' => false
            ),
            array(

                'label' => esc_html__('Footer Layout', 'kindaid'),
                'id' => "footer-from-page",
                'type' => 'select',
                'options' => array(
                    'blank_footer' => __('Select Your Footer', 'kindaid'),
                    'footer-page-1' => __('Footer One', 'kindaid'),
                    'footer-page-2' => __('Footer Two', 'kindaid'),
                ),
                'placeholder' => __('Select an item', 'kindaid'),
                'conditional' => array(),
                'default' => '',
                'multiple' => false
            ),
        ),
    );


    $meta_boxes[] = array(
        'metabox_id' => 'post_format_gallery_metafields',
        'title' => esc_html__('Post Gallery', 'donafund'),
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'core',
        'fields' => array(
            array(

                'label' => esc_html__('Post Gallery Images', 'textdomain'),
                'id' => "kindaid_post_format_gallery",
                'type' => 'gallery',
                'default' => '',
                'conditional' => array(),
            ),
        ),
        'post_format' => 'gallery' // if u want to bind with post formats
    );


    $meta_boxes[] = array(
        'metabox_id' => 'post_format_video_metafields',
        'title' => esc_html__('Post Video URL', 'donafund'),
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'core',
        'fields' => array(
            array(
                'label' => esc_html__('Video Format', 'donafund'),
                'id' => "kindaid_post_format_video",
                'type' => 'text',
                'placeholder' => esc_html__('Video url here', 'donafund'),
                'default' => '',
                'conditional' => array()
            ),
        ),
        'post_format' => 'video' // if u want to bind with post formats
    );


    $meta_boxes[] = array(
        'metabox_id' => 'post_format_audio_metafields',
        'title' => esc_html__('Post Audio URL', 'donafund'),
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'core',
        'fields' => array(
            array(
                'label' => esc_html__('Audio Format', 'donafund'),
                'id' => "kindaid_post_format_audio",
                'type' => 'text',
                'placeholder' => esc_html__('Audio url here', 'donafund'),
                'default' => '',
                'conditional' => array()
            ),
        ),
        'post_format' => 'audio' // if u want to bind with post formats
    );

    return $meta_boxes;
}

add_filter('tp_meta_boxes', 'kindaid_metafields');

?>