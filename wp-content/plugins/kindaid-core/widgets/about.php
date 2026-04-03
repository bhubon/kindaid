<?php
class kindAid_About extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_about';
    }

    public function get_title(): string {
        return esc_html__('About', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['about', 'home 01 hero', 'kindaid'];
    }

    protected function register_controls(): void {
        $this->register_control_section();
        $this->register_style_section();
    }

    protected function register_control_section() {
        // Content Tab Start

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Title & Content', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About foundation', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Helping Each <br> Other can Make <span>World</span><br> Better', 'kindaid-core'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => esc_html__('Content', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('To ensure a sustainable future we believe there is an urgent need to make change happen faster and at greater scale than what we witness today.', 'kindaid-core'),
            ]
        );

        $this->end_controls_section();

        // Image Section Start
        $this->start_controls_section(
            'image_section',
            [
                'label' => esc_html__('Image', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();
        // Image Section End


        // Button Section Start
        $this->start_controls_section(
            'button_section',
            [
                'label' => esc_html__('Button', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button Text', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Discover More', 'kindaid-core'),
            ]
        );

        $this->add_control(
            'button_url',
            [
                'label' => esc_html__('Button Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();
        // Button Section End

        // Client Info Section Start
        $this->start_controls_section(
            'info_section',
            [
                'label' => esc_html__('Info', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'number',
            [
                'label' => esc_html__('Number', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('50k', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'info_content',
            [
                'label' => esc_html__('Info Content', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Trust by Clients and<br> Organizations', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'info_image',
            [
                'label' => esc_html__('Choose Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();
        // Client Info Section End
    }

    protected function register_style_section() {
        // Style Tab Start

        // For Section
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section Style', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'bg_color',
            [
                'label' => esc_html__('Sub Title Color', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .el-bg' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_padding',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        //For sub-title
        $this->start_controls_section(
            'section_sub_title_style',
            [
                'label' => esc_html__('Sub Title', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .el-sub-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sub_title_margin',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'sub_title_padding',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typography',
                'selector' => '{{WRAPPER}} .el-sub-title',
            ]
        );

        $this->end_controls_section();

        // For title
        $this->start_controls_section(
            'section_title_style',
            [
                'label' => esc_html__('Title', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .el-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'title_mark_color',
            [
                'label' => esc_html__('Title Mark Color', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .el-title span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_padding',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .el-title',
            ]
        );

        $this->end_controls_section();


        // For Content
        $this->start_controls_section(
            'section_content_style',
            [
                'label' => esc_html__('Content', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'content_color',
            [
                'label' => esc_html__('Color', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .el-content' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'content_margin',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'content_padding',
            [
                'label' => esc_html__('Margin', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .el-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'selector' => '{{WRAPPER}} .el-content',
            ]
        );

        $this->end_controls_section();

        // Style Tab End
    }

    protected function render(): void {
        $settings = $this->get_settings_for_display();

        if (!empty($settings['image'])):
            $image_url = !empty($settings['image']['id']) ? wp_get_attachment_image_url($settings['image']['id'], 'full') : $settings['image']['url'];
            $image_alt = !empty($settings['image']['id']) ? get_post_meta($settings['image']['id'], '_wp_attachment_image_alt', true) : '';
        endif;

        if (!empty($settings['info_image'])):
            $info_image_url = !empty($settings['info_image']['id']) ? wp_get_attachment_image_url($settings['info_image']['id'], 'full') : $settings['info_image']['url'];
            $info_image_alt = !empty($settings['info_image']['id']) ? get_post_meta($settings['imainfo_imagege']['id'], '_wp_attachment_image_alt', true) : '';
        endif;

        if (!empty($settings['button_url'])) {
            $this->add_link_attributes('button_arg', $settings['button_url']);
            $this->add_render_attribute('button_arg', 'class', 'tp-btn tp-btn-secondary tp-btn-animetion');
        }
        ?>


        <div class="tp-about-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6">
                        <div class="tp-about-thumb mr-80 h-100">
                            <?php if (!empty($image_url)): ?>
                                <img class="w-100" src="<?php echo esc_url($image_url); ?>"
                                    alt="<?php echo esc_attr($image_alt); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6">
                        <div class="tp-about-content tp-about-2-text pt-80 pb-80 mr-100">
                            <?php if (!empty($settings['sub_title'])): ?>
                                <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s"
                                    data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($settings['title'])): ?>
                                <h2 class="tp-section-title mb-35 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                    <?php echo kd_kses($settings['title']); ?>
                                </h2>
                            <?php endif; ?>
                            <div class="tp-about-dec-wrap wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="tp-about-dec">
                                            <?php if (!empty($settings['content'])): ?>
                                                <p class="mb-40"><?php echo kd_kses($settings['content']); ?></p>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['button_text'])): ?>
                                                <a <?php echo $this->get_render_attribute_string('button_arg'); ?>>
                                                    <span class="btn-text"><?php echo esc_html($settings['button_text']); ?></span>
                                                    <span class="btn-icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 7H13" stroke="currentColor" stroke-width="1.8"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="tp-about-user pl-20">
                                            <?php if (!empty($settings['number'])): ?>
                                                <h4><?php echo esc_html($settings['number']); ?></h4>
                                            <?php endif; ?>
                                            <?php if (!empty($settings['info_content'])): ?>
                                                <p class="mb-20"><?php echo kd_kses($settings['info_content']); ?></p>
                                            <?php endif; ?>
                                            <?php if (!empty($info_image_url)): ?>
                                                <img src="<?php echo esc_url($info_image_url); ?>"
                                                    alt="<?php echo esc_attr($info_image_alt); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
$widgets_manager->register(new \kindAid_About());