<?php
class kindAid_Testkmonial extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_testimonial';
    }

    public function get_title(): string {
        return esc_html__('Testimonial', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['testimonial', 'home 01 hero', 'kindaid'];
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
                'label' => esc_html__('Select Layout', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'layout-1',
                'options' => [
                    'layout-1' => esc_html__('Layout 01', 'textdomain'),
                    'layout-2' => esc_html__('Layout 02', 'textdomain'),
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'heading_section',
            [
                'label' => esc_html__('Title & Content', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_layout' => 'layout-2',
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Sub Title Here', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Title Here', 'kindaid-core'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Content', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('', 'kindaid-core'),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Testimonial List', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'subject',
            [
                'label' => esc_html__('Subject', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Helping others improves!', 'kindaid-core'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'review_text',
            [
                'label' => esc_html__('Content', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Health care are essential for a child\'s growth.', 'kindaid-core'),
            ]
        );

        $repeater->add_control(
            'name',
            [
                'label' => esc_html__('Name', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Arc Joan', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'desgination',
            [
                'label' => esc_html__('Designation', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Verified Buyer', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Avatar', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Services List', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'subject' => esc_html__('Helping others improves!', 'kindaid-core'),
                        'review_text' => __('“Their transparency and commitment to making<br>
                        a real difference is unmatched. I’m proud to support a<br> cause that brings hope”', 'kindaid-core'),
                        'name' => esc_html__('Arc Joan', 'kindaid-core'),
                        'desgination' => esc_html__('Verified Buyer', 'kindaid-core'),
                    ],
                    [
                        'subject' => esc_html__('Helping business improves!', 'kindaid-core'),
                        'review_text' => __('“Their transparency and commitment to making<br>
                        a real difference is unmatched. I’m proud to support a<br> cause that brings hope”', 'kindaid-core'),
                        'name' => esc_html__('John Doe', 'kindaid-core'),
                        'desgination' => esc_html__('Marketing Manager', 'kindaid-core'),
                    ],
                ],
                'title_field' => '{{{ subject }}}',
            ]
        );

        $this->end_controls_section();


        // Image Section Start
        $this->start_controls_section(
            'image_section',
            [
                'label' => esc_html__('Image', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_layout' => 'layout-2',
                ],
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

        $this->add_control(
            'image_02',
            [
                'label' => esc_html__('Choose Image 02', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();
        // Image Section End


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

        <?php if ($settings['design_layout'] == 'layout-2'): ?>

            <?php
            if (!empty($settings['image'])):
                $image_url = !empty($settings['image']['id']) ? wp_get_attachment_image_url($settings['image']['id'], 'full') : $settings['image']['url'];
                $image_alt = !empty($settings['image']['id']) ? get_post_meta($settings['image']['id'], '_wp_attachment_image_alt', true) : '';
            endif;

            if (!empty($settings['image_02'])):
                $image_02_url = !empty($settings['image_02']['id']) ? wp_get_attachment_image_url($settings['image_02']['id'], 'full') : $settings['image_02']['url'];
                $image_02_alt = !empty($settings['image_02']['id']) ? get_post_meta($settings['image_02']['id'], '_wp_attachment_image_alt', true) : '';
            endif;
                ?>

            <div class="tp-testimonial-area tp-testimonal-3-style fix p-relative">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="tp-about-2-thumb">
                                <?php if(!empty($image_url)): ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="tp-about-2-content-wrap ml-30 pt-195 pb-195 tp-bg-mulberry p-relative">
                                 <?php if(!empty($image_02_url)): ?>
                                    <img class="tp-about-2-map" src="<?php echo esc_url($image_02_url); ?>" alt="<?php echo esc_attr($image_02_alt); ?>">
                                <?php endif; ?>
                                <div class="row">
                                    <div class="offset-xxl-4 col-xxl-6 offset-xl-4 col-xl-7">
                                        <div class="tp-about-2-content-inner mr-50">
                                            <div class="tp-about-2-info mb-60">
                                                <?php if (!empty($settings['sub_title'])): ?>
                                                <span
                                                    class="tp-section-subtitle tp-section-subtitle-yellow d-inline-block mb-15 wow fadeInUp"
                                                    data-wow-duration=".9s" data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']) ?></span>
                                                <?php endif; ?>

                                                <?php if (!empty($settings['title'])): ?>
                                                <h2 class="tp-section-title tp-section-title-white mb-30 wow fadeInUp"
                                                    data-wow-duration=".9s" data-wow-delay=".4s"><?php echo kd_kses($settings['title']) ?></h2>
                                                <?php endif; ?>

                                                <?php if (!empty($settings['description'])): ?>
                                                    <p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                                        <?php echo kd_kses($settings['description']); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="tp-testimonal-3-wrap">
                                                <div class="swiper-container tp-testimonal-3-slider-active">
                                                    <div class="swiper-wrapper">
                                                        <?php foreach ($settings['list'] as $item):
                                                            if (!empty($item['image'])) {
                                                                $image_url = !empty($item['image']['id']) ? wp_get_attachment_image_url($item['image']['id'], 'full') : $item['image']['url'];
                                                                $image_alt = !empty($item['image']['id']) ? get_post_meta($item['image']['id'], '_wp_attachment_image_alt', true) : '';
                                                            }
                                                            ?>
                                                            <div class="swiper-slide">
                                                                <div class="tp-testimonal">
                                                                    <div class="tp-testimonal-star mb-20">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                    <?php if (!empty($item['review_text'])): ?>
                                                                        <h4 class="tp-testimonal-dec" data-color="#fcf8ec">
                                                                            <?php echo kd_kses($item['review_text']); ?></h4>
                                                                    <?php endif; ?>
                                                                    <div class="tp-testimonal-user mt-50">
                                                                        <div class="tp-testimonal-img">
                                                                            <?php if (!empty($image_url)): ?>
                                                                                <img src="<?php echo esc_url($image_url); ?>"
                                                                                    alt="<?php echo esc_attr($image_alt); ?>">
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="tp-testimonal-bio">
                                                                            <?php if (!empty($item['name'])): ?>
                                                                            <h4 class="tp-testimonal-name"><?php echo esc_html($item['name']); ?></h4>
                                                                            <?php endif; ?>

                                                                            <?php if (!empty($item['designation'])): ?>
                                                                                <span><?php echo esc_html($item['designation']); ?></span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <div class="tp-testimonal-3-pagination mt-70"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <div class="tp-testimonial-area">
                <div class="container container-1324 p-relative">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-11 text-center">
                            <div class="swiper-container tp-testimonal-slider-active">
                                <div class="swiper-wrapper">
                                    <?php foreach ($settings['list'] as $item):
                                        if (!empty($item['image'])) {
                                            $image_url = !empty($item['image']['id']) ? wp_get_attachment_image_url($item['image']['id'], 'full') : $item['image']['url'];
                                            $image_alt = !empty($item['image']['id']) ? get_post_meta($item['image']['id'], '_wp_attachment_image_alt', true) : '';
                                        }
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="tp-testimonal">
                                                <div class="tp-testimonal-star mb-5">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <?php if (!empty($item['subject'])): ?>
                                                    <span
                                                        class="tp-testimonal-label mb-20 d-inline-block"><?php echo esc_html($item['subject']); ?></span>
                                                <?php endif; ?>

                                                <?php if (!empty($item['review_text'])): ?>
                                                    <h4 class="tp-testimonal-dec"><?php echo kd_kses($item['review_text']); ?></h4>
                                                <?php endif; ?>

                                                <div class="tp-testimonal-user mt-40">
                                                    <div class="tp-testimonal-img">
                                                        <?php if (!empty($image_url)): ?>
                                                            <img src="<?php echo esc_url($image_url); ?>"
                                                                alt="<?php echo esc_attr($image_alt); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="tp-testimonal-bio">
                                                        <?php if (!empty($item['name'])): ?>
                                                            <h4 class="tp-testimonal-name"><?php echo esc_html($item['name']); ?></h4>
                                                        <?php endif; ?>

                                                        <?php if (!empty($item['designation'])): ?>
                                                            <span><?php echo esc_html($item['designation']); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-testimonial-arrow text-start text-md-end">
                        <button class="tp-test-arrow-prev tp-test-arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 7H1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="tp-test-arrow-next tp-test-arrow">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.00049 7H13.0005" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7.00049 1L13.0005 7L7.00049 13" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php
    }
}
$widgets_manager->register(new \kindAid_Testkmonial());