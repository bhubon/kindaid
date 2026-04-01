<?php
class kindAid_Brand extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_brand';
    }

    public function get_title(): string {
        return esc_html__('Brand', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['brand', 'home 01 hero', 'kindaid'];
    }

    protected function register_controls(): void {
        $this->register_control_section();
        $this->register_style_section();
    }

    protected function register_control_section() {


        $this->start_controls_section(
            'layout_section',
            [
                'label' => esc_html__('Layout', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'design_layout',
            [
                'label' => esc_html__('Select Button Layout', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'layout-01',
                'options' => [
                    'layout-01' => esc_html__('Layout 01', 'textdomain'),
                    'layout-02' => esc_html__('Layout 02', 'textdomain'),
                    'layout-03' => esc_html__('Layout 03', 'textdomain'),
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Brand List', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Image Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'url',
            [
                'label' => esc_html__('URL', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Brnad List', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        $this->end_controls_section();


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
        ?>

        <?php if ($settings['design_layout'] == 'layout-02'): ?>
            <?php if (!empty($settings['list'])): ?>
                <div class="tp-brand-area fix">
                    <div class="swiper-container tp-brand-2-slider-active">
                        <div class="swiper-wrapper slide-transtion">
                            <?php
                            foreach ($settings['list'] as $item):
                                if (!empty($item['image'])) {
                                    $image_url = !empty($item['image']['id']) ? wp_get_attachment_image_url($item['image']['id'], 'full') : $item['image']['url'];
                                    $image_alt = !empty($item['image']['id']) ? get_post_meta($item['image']['id'], '_wp_attachment_image_alt', true) : '';
                                }
                                ?>
                                <div class="swiper-slide">
                                    <div class="tp-brand-2-item">
                                        <a target="_blank" href="<?php echo esc_url($item['url']); ?>"><img
                                                src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"> </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php elseif ($settings['design_layout'] == 'layout-03'): ?>
            <?php if (!empty($settings['list'])): ?>
                <div class="tp-brand-area fix">
                    <div class="container-fluid container-1790">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-brand-3-wrap text-center">
                                    <div class="swiper-container tp-brand-3-slider-active">
                                        <div class="swiper-wrapper slide-transtion">
                                            <?php
                                            foreach ($settings['list'] as $item):
                                                if (!empty($item['image'])) {
                                                    $image_url = !empty($item['image']['id']) ? wp_get_attachment_image_url($item['image']['id'], 'full') : $item['image']['url'];
                                                    $image_alt = !empty($item['image']['id']) ? get_post_meta($item['image']['id'], '_wp_attachment_image_alt', true) : '';
                                                }
                                                ?>
                                                <div class="swiper-slide">
                                                    <div class="tp-brand-2-item">
                                                        <a target="_blank" href="<?php echo esc_url($item['url']); ?>">
                                                            <img src="<?php echo esc_url($image_url); ?>"
                                                                alt="<?php echo esc_attr($image_alt); ?>">
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>

            <?php if (!empty($settings['list'])): ?>
                <div class="tp-brand-area">
                    <div class="container container-1790">
                        <div class="swiper-container tp-brand-slider-active">
                            <div class="swiper-wrapper slide-transtion">
                                <?php
                                foreach ($settings['list'] as $item):
                                    if (!empty($item['image'])) {
                                        $image_url = !empty($item['image']['id']) ? wp_get_attachment_image_url($item['image']['id'], 'full') : $item['image']['url'];
                                        $image_alt = !empty($item['image']['id']) ? get_post_meta($item['image']['id'], '_wp_attachment_image_alt', true) : '';
                                    }
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="tp-brand-item">
                                            <a target="_blank" class="tp-brand-logo" href="<?php echo esc_url($item['url']); ?>">
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php endif; ?>
    <?php
    }
}
$widgets_manager->register(new \kindAid_Brand());