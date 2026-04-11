<?php
class kindAid_Image_Box extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_image_box';
    }

    public function get_title(): string {
        return esc_html__('Image Box', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['image box', 'home 01 hero', 'kindaid'];
    }

    protected function register_controls(): void {
        $this->register_control_section();
        $this->register_style_section();
    }

    protected function register_control_section() {

        // Content Tab Start
        $this->start_controls_section(
            'box_section',
            [
                'label' => esc_html__('Icon Content', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
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

        $this->add_control(
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

        $this->add_control(
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

        $this->add_control(
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

        $this->add_control(
            'bg_image',
            [
                'label' => esc_html__('Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Child Assistance', 'kindaid-core'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Content', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Education is the first to independence child.', 'kindaid-core'),
            ]
        );

        $this->add_control(
            'box_url',
            [
                'label' => esc_html__('Box URL', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();
        // Content Section End


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
                'label' => esc_html__('Section Color', 'kindaid-core'),
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

        if (!empty($settings['image'])) {
            $image_url = !empty($settings['image']['id']) ? wp_get_attachment_image_url($settings['image']['id'], 'full') : $settings['image']['url'];
            $image_alt = !empty($settings['image']['id']) ? get_post_meta($settings['image']['id'], '_wp_attachment_image_alt', true) : '';
        }

        if (!empty($settings['bg_image'])) {
            $bg_image_url = !empty($settings['bg_image']['id']) ? wp_get_attachment_image_url($settings['bg_image']['id'], 'full') : $settings['bg_image']['url'];
            $bg_image_alt = !empty($settings['bg_image']['id']) ? get_post_meta($settings['bg_image']['id'], '_wp_attachment_image_alt', true) : '';
        }
        ?>
        <div class="tp-service-3-item fix icon-anime-wrap position-relative wow fadeInUp" data-wow-duration=".9s"
            data-wow-delay=".3s">
            <div class="tp-service-3-thumb position-relative">
                <?php if(!empty($bg_image_url)): ?>
                <img class="w-100" src="<?php echo esc_url($bg_image_url); ?>" alt="<?php echo esc_attr($bg_image_alt); ?>">
                <?php endif; ?>
            </div>
            <div class="tp-service-3-top">
                <span class="tp-service-icon icon-anime mb-25 d-inline-block">
                    <?php
                    if ($settings['icon_style'] == 'icon_font'):
                        \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);
                    elseif ($settings['icon_style'] == 'image_icon'):
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                        <?php
                    else:
                        echo kd_kses($settings['svg']);
                    endif
                    ?>
                </span>
                <?php if (!empty($settings['title'])): ?>
                    <?php if (!empty($settings['box_url'])): ?>

                        <h3 class="tp-service-title text-uppercase mb-15"><a href="<?php echo esc_url($settings['box_url']); ?>"
                                class="common-underline"><?php echo kd_kses($settings['title']) ?></a></h3>
                    <?php else: ?>
                        <h3 class="tp-service-title text-uppercase mb-15">
                            <?php echo kd_kses($settings['title']) ?>
                        </h3>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="tp-service-3-dec">
                <?php if (!empty($settings['description'])): ?>
                    <p class="mb-0"><?php echo kd_kses($settings['description']); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
}
$widgets_manager->register(new \kindAid_Image_Box());