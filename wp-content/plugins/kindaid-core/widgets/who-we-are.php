<?php
class kindAid_Who_We_Are extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_who_we_are';
    }

    public function get_title(): string {
        return esc_html__('Who We Are', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['who we are', 'home 01 hero', 'kindaid'];
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
                'default' => esc_html__('Who we Are', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Helping others <span>Improves</span> World', 'kindaid-core'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Content', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Ensures that kids living in poverty access to life-changing benefits like medical care, educational.', 'kindaid-core'),
            ]
        );

        $this->end_controls_section();
        // Content Section End

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

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Info List', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon_style',
            [
                'label' => esc_html__('Select Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon_font',
                'options' => [
                    'icon_font' => esc_html__('Icon', 'textdomain'),
                    'image_icon' => esc_html__('Image', 'textdomain'),
                    'svg_icon' => esc_html__('SVG', 'textdomain'),
                ],
            ]
        );

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-smile',
                    'library' => 'fa-solid',
                ],
                'condition' => [
                    'icon_style' => 'icon_font',
                ],
            ]
        );

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Image Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'icon_style' => 'image_icon',
                ],
            ]
        );

        $repeater->add_control(
            'svg',
            [
                'label' => esc_html__('SVG Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('', 'kindaid-core'),
                'condition' => [
                    'icon_style' => 'svg_icon',
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Fundraising', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'content',
            [
                'label' => esc_html__('Content', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Discover the inspiring stories of individuals and communities transformed by our programs.', 'kindaid-core'),
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Info List', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__('Fundraising', 'kindaid-core'),
                        'content' => esc_html__('Discover the inspiring stories of individuals and communities transformed by our programs.', 'kindaid-core'),
                    ],
                    [
                        'title' => esc_html__('Donation making', 'kindaid-core'),
                        'content' => esc_html__('Discover the inspiring stories of individuals and communities transformed by our programs.', 'kindaid-core'),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

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
                'default' => esc_html__('Button Text', 'kindaid-core'),
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

        $image_url = !empty($settings['image']['id']) ? wp_get_attachment_image_url($settings['image']['id'], 'full') : $settings['image']['url'];
        $image_alt = !empty($settings['image']['id']) ? get_post_meta($settings['image']['id'], '_wp_attachment_image_alt', true) : '';

        if (!empty($settings['button_url'])) {
            $this->add_link_attributes('button_arg', $settings['button_url']);
            $this->add_render_attribute('button_arg', 'class', 'tp-btn tp-btn-animetion tp-btn-secondary-white');
        }

        ?>

        <div class="tp-about-area fix p-relative">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="tp-about-2-thumb">
                            <?php if (!empty($image_url)): ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tp-about-2-content-wrap ml-30 pt-165 pb-170 tp-bg-mulberry p-relative">
                            <img class="tp-about-2-map" src="assets/img/about/about-2/map.png" alt="">
                            <div class="row">
                                <div class="offset-xxl-5 col-xxl-5 offset-xl-4 col-xl-7">
                                    <div class="tp-about-2-content-inner mr-30">
                                        <div class="tp-about-2-info mb-40">
                                            <?php if (!empty($settings['sub_title'])): ?>
                                                <span
                                                    class="tp-section-subtitle tp-section-subtitle-yellow d-inline-block mb-15 wow fadeInUp"
                                                    data-wow-duration=".9s"
                                                    data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']); ?></span>
                                            <?php endif; ?>

                                            <?php if (!empty($settings['title'])): ?>
                                                <h2 class="tp-section-title tp-section-title-white mb-30 wow fadeInUp"
                                                    data-wow-duration=".9s" data-wow-delay=".4s">
                                                    <?php echo kd_kses($settings['title']); ?>
                                                </h2>
                                            <?php endif; ?>

                                            <?php if (!empty($settings['description'])): ?>
                                                <p class="tp-about-2-dec wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                                    <?php echo kd_kses($settings['description']); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="tp-about-list-wrapper wow fadeInUp" data-wow-duration=".9s"
                                            data-wow-delay=".6s">
                                            <?php
                                            foreach ($settings['list'] as $item):
                                                if (!empty($item['image'])) {
                                                    $image_url = !empty($item['image']['id']) ? wp_get_attachment_image_url($item['image']['id'], 'full') : $item['image']['url'];
                                                    $image_alt = !empty($item['image']['id']) ? get_post_meta($item['image']['id'], '_wp_attachment_image_alt', true) : '';
                                                }
                                                ?>
                                                <div class="tp-about-list mb-15">
                                                    <div class="tp-about-list-icon">
                                                        <?php
                                                        if ($item['icon_style'] == 'icon_font'):
                                                            \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);
                                                        elseif ($item['icon_style'] == 'image_icon'):
                                                            ?>
                                                            <img src="<?php echo esc_url($image_url); ?>"
                                                                alt="<?php echo esc_attr($image_alt); ?>">
                                                            <?php
                                                        else:
                                                            echo kd_kses($item['svg']);
                                                        endif
                                                        ?>
                                                    </div>
                                                    <div class="tp-about-list-text">
                                                        <?php if (!empty($item['title'])): ?>
                                                            <h3 class="tp-about-list-title"><?php echo esc_html($item['title']); ?></h3>
                                                        <?php endif; ?>
                                                        <?php if (!empty($item['content'])): ?>
                                                            <p><?php echo kd_kses($item['content']); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            <div class="tp-about-btn mt-40 wow fadeInUp" data-wow-duration=".9s"
                                                data-wow-delay=".7s">
                                                <?php if (!empty($item['button_url'])): ?>
                                                    <a <?php echo $this->get_render_attribute_string('button_arg'); ?>>
                                                        <span
                                                            class="btn-text"><?php echo esc_html($settings['button_text']); ?></span>
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
$widgets_manager->register(new \kindAid_Who_We_Are());