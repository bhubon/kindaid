<?php
class kindAid_Charity_Slider extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_charity_slider';
    }

    public function get_title(): string {
        return esc_html__('Charity Slider', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['charity Slider', 'home 01 hero', 'kindaid'];
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


        // Heading Tab Start
        $this->start_controls_section(
            'heading_section',
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
                'default' => esc_html__('Start donating poor people', 'kindaid-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Featured Campaigns', 'kindaid-core'),
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

        $this->add_control(
            'text_align',
            [
                'label' => esc_html__('Alignment', 'textdomain'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'textdomain'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'textdomain'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'textdomain'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .tp-align' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
        // Heading Section End

        // Content Tab Start
        $this->start_controls_section(
            'post_section',
            [
                'label' => esc_html__('Charity Slider', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'post_number',
            [
                'label' => esc_html__('Post Number', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__(3, 'kindaid-core'),
            ]
        );

        $this->add_control(
            'post_cat',
            [
                'label' => esc_html__('Select Post Category', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'label_block' => true,
                'options' => tp_all_tax('campaign_category'),
            ]
        );

        $this->add_control(
            'post_in',
            [
                'label' => esc_html__('Post In', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => get_all_post('campaign'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'post_not_in',
            [
                'label' => esc_html__('Post Not In', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => get_all_post('campaign'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'post_order',
            [
                'label' => esc_html__('Order', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'ASC',
                'options' => [
                    'ASC' => esc_html__('ASC', 'textdomain'),
                    'DESC' => esc_html__('DESC', 'textdomain'),
                ],
            ]
        );

        $this->add_control(
            'post_order_by',
            [
                'label' => esc_html__('Order By', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'date',
                'options' => [
                    'ID' => esc_html__('Post ID', 'textdomain'),
                    'author' => esc_html__('Post Author', 'textdomain'),
                    'title' => esc_html__('title', 'textdomain'),
                    'date' => esc_html__('Date', 'textdomain'),
                    'modified' => esc_html__('Last Modied Date', 'textdomain'),
                    'parent' => esc_html__('Parent ID', 'textdomain'),
                    'rand' => esc_html__('Random', 'textdomain'),
                    'comment_count' => esc_html__('Comment Count', 'textdomain'),
                    'menu_order' => esc_html__('Menu Order', 'textdomain'),
                ],
            ]
        );

        $this->add_control(
            'post_content_word',
            [
                'label' => esc_html__('Content Word Count', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__(9, 'kindaid-core'),
            ]
        );

        $this->end_controls_section();
        // Heading Section End


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

        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = [
            'post_type' => ['campaign'],
            'post_status' => ['publish'],
            'posts_per_page' => $settings['post_number'],
            'order' => $settings['post_order'],
            'orderby' => $settings['post_order_by'],
            'post__in' => $settings['post_in'],
            'post__not_in' => $settings['post_not_in'],
            'paged' => $paged,
        ];

        if (!empty($settings['post_cat'])) {
            $args['tax_query'] = [
                [
                    'taxonomy' => 'campaign_category',
                    'field' => 'slug',
                    'terms' => (array) $settings['post_cat'],
                    'operator' => 'IN',
                    'include_children' => true,
                ],
            ];
        }

        $query = new \WP_Query($args);
        ?>

        <?php if ($settings['design_layout'] == 'layout-02'): ?>
            <div class="tp-causes-area tp-causes-2-style fix p-relative">
                <div class="container container-1324">
                    <div class="row align-items-end">
                        <div class="col-md-9">
                            <div class="tp-section-info mb-50 p-relative">
                                <?php if (!empty($settings['sub_title'])): ?>
                                    <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s"
                                        data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']) ?></span>
                                <?php endif; ?>

                                <?php if (!empty($settings['title'])): ?>
                                    <h2 class="tp-section-title mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                        <?php echo kd_kses($settings['title']) ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if (!empty($settings['description'])): ?>
                                    <p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                        <?php echo kd_kses($settings['description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tp-causes-arrow-wrap mb-50 text-md-end wow fadeInUp" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <button class="tp-causes-prev">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 7H1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button class="tp-causes-next">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                            <div class="swiper tp-causes-slider-active">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($query->have_posts()):
                                        while ($query->have_posts()):
                                            $query->the_post();
                                            $campaign = charitable_get_campaign(get_the_ID());

                                            $goal_amount = charitable_format_money($campaign->get_goal());
                                            $donated_amount = charitable_format_money($campaign->get_donated_amount());
                                            $button_text = $campaign->get('donate_button_text', true);
                                            $percentage = $campaign->get_percent_donated_raw() . '%';
                                            ?>

                                            <div class="swiper-slide">
                                                <div class="tp-causes-wrap mb-30">
                                                    <div class="tp-causes-inner">
                                                        <div class="tp-causes-thumb fix mb-25">
                                                            <?php the_post_thumbnail(); ?>
                                                        </div>
                                                        <div class="tp-causes-content">
                                                            <h3 class="tp-causes-title mb-10">
                                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                            </h3>
                                                            <p class="tp-causes-dec mb-0">
                                                                <?php echo wp_trim_words(get_the_content(), $settings['post_content_word']); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="tp-causes-button">
                                                        <div class="tp-progress mb-10">
                                                            <div class="tp-progress-top d-flex justify-content-between mb-5">
                                                                <span><?php echo esc_html__('Donation', 'kindaid'); ?></span>
                                                                <label><?php echo esc_html($percentage); ?></label>
                                                            </div>
                                                            <div class="progress" role="progressbar">
                                                                <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                                                    data-wow-delay=".1s"
                                                                    style="width: <?php echo esc_attr($percentage); ?>"></div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="tp-causes-amount">
                                                                    <label><?php echo esc_html__('Goals:', 'kindaid'); ?></label>
                                                                    <span><?php echo esc_html($goal_amount); ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="tp-causes-amount text-end">
                                                                    <label><?php echo esc_html__('Raised:', 'kindaid'); ?></label>
                                                                    <span><?php echo esc_html($donated_amount); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php if (!empty($button_text)): ?>
                                                            <a class="tp-btn tp-btn-animetion mt-20 tp-btn-mulberry w-100 justify-content-center"
                                                                href="<?php the_permalink(); ?>">
                                                                <span class="btn-text"><?php echo esc_html($button_text); ?></span>
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
                                            </div> <?php endwhile;
                                        wp_reset_postdata(); // Important: Always reset after a custom query
                                    else:
                                        echo '<p>No Post Found</p>';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif ($settings['design_layout'] == 'layout-03'): ?>

            <div class="tp-causes-area tp-causes-3-style pt-115 pb-115 fix p-relative" data-bg-color="#f0e8d1">
                <div class="container container-1424">
                    <div class="row align-items-end">
                        <div class="col-md-9">
                            <div class="tp-section-info mb-50 p-relative">

                                <?php if (!empty($settings['sub_title'])): ?>
                                    <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s"
                                        data-wow-delay=".3s"><?php echo esc_html($settings['sub_title']) ?></span>
                                <?php endif; ?>

                                <?php if (!empty($settings['title'])): ?>
                                    <h2 class="tp-section-title mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                        <?php echo kd_kses($settings['title']) ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if (!empty($settings['description'])): ?>
                                    <p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                        <?php echo kd_kses($settings['description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tp-causes-arrow-wrap mb-50 text-md-end wow fadeInUp" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <button class="tp-causes-prev">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 7H1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button class="tp-causes-next">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-1424">
                    <div class="row">
                        <div class="col-12 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="swiper-container tp-causes-3-slider-active">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($query->have_posts()):
                                        while ($query->have_posts()):
                                            $query->the_post();
                                            $campaign = charitable_get_campaign(get_the_ID());

                                            $goal_amount = charitable_format_money($campaign->get_goal());
                                            $donated_amount = charitable_format_money($campaign->get_donated_amount());
                                            $button_text = $campaign->get('donate_button_text', true);
                                            $percentage = $campaign->get_percent_donated_raw();
                                            $percentage = $percentage . '%';
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="tp-causes-wrap mb-30">
                                                    <div class="tp-causes-inner">
                                                        <div class="tp-causes-thumb fix mb-25">
                                                            <?php the_post_thumbnail(); ?>
                                                        </div>
                                                        <div class="tp-causes-content">
                                                            <div class="tp-causes-border">
                                                                <h3 class="tp-causes-title mb-10"><a
                                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                </h3>
                                                                <p class="tp-causes-dec mb-20">
                                                                    <?php echo wp_trim_words(get_the_content(), $settings['post_content_word']); ?>
                                                                </p>
                                                            </div>
                                                            <div class="tp-progress mb-10 mt-20">
                                                                <div class="tp-progress-top d-flex justify-content-between mb-5">
                                                                    <span><?php echo esc_html__('Donation', 'kindaid'); ?></span>
                                                                    <label><?php echo esc_html($percentage); ?></label>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Example with label"
                                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                                                        data-wow-delay=".1s"
                                                                        style="width:<?php echo esc_attr($percentage); ?>">"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="tp-causes-amount">
                                                                        <label><?php echo esc_html__('Goals:', 'kindaid'); ?></label>
                                                                        <span><?php echo esc_html($goal_amount); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="tp-causes-amount text-end">
                                                                        <label><?php echo esc_html__('Raised:', 'kindaid'); ?></label>
                                                                        <span><?php echo esc_html($donated_amount); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if (!empty($button_text)): ?>
                                                        <div class="tp-causes-button">
                                                            <a class="tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center"
                                                                href="<?php the_permalink(); ?>">
                                                                <span class="btn-text"><?php echo esc_html($button_text); ?></span>
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
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php
                                        endwhile;
                                    else:
                                        echo '<p>No Post Found</p>';
                                    endif;
                                    ?>

                                </div>
                            </div>
                            <div class="tp-causes-3-all text-center pt-30 wow fadeInUp" data-wow-duration=".9s"
                                data-wow-delay=".4s">
                                <p class="mb-0">All our efforts are made possible<br> only because of your support.
                                    <a class="tp-btn-animetion" href="causes.html">
                                        <span class="btn-text mr-10">See all Causes</span>
                                        <span class="btn-icon">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>

            <div class="tp-causes-area fix p-relative">
                <div class="container container-1424">
                    <div class="row align-items-end">
                        <div class="col-md-9">
                            <div class="tp-section-info mb-50 p-relative">
                                <?php if (!empty($settings['sub_title'])): ?>
                                    <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s"
                                        data-wow-delay=".3s">
                                        <?php echo esc_html($settings['sub_title']) ?>
                                    </span>
                                <?php endif; ?>

                                <?php if (!empty($settings['title'])): ?>
                                    <h2 class="tp-section-title mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                        <?php echo kd_kses($settings['title']) ?>
                                    </h2>
                                <?php endif; ?>

                                <?php if (!empty($settings['description'])): ?>
                                    <p class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                                        <?php echo kd_kses($settings['description']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tp-causes-arrow-wrap mb-50 text-md-end wow fadeInUp" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <button class="tp-causes-prev">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 7H1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button class="tp-causes-next">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                            <div class="swiper tp-causes-slider-active">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($query->have_posts()):
                                        while ($query->have_posts()):
                                            $query->the_post();
                                            $campaign = charitable_get_campaign(get_the_ID());

                                            $goal_amount = charitable_format_money($campaign->get_goal());
                                            $donated_amount = charitable_format_money($campaign->get_donated_amount());
                                            $button_text = $campaign->get('donate_button_text', true);
                                            $percentage = $campaign->get_percent_donated_raw();
                                            $percentage = $percentage . '%';
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="tp-causes-wrap">
                                                    <div class="tp-causes-inner">
                                                        <div class="tp-causes-thumb fix mb-25">
                                                            <?php the_post_thumbnail(); ?>
                                                        </div>
                                                        <div class="tp-causes-content">
                                                            <div class="tp-causes-border">
                                                                <h3 class="tp-causes-title mb-10"><a
                                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                                <p class="tp-causes-dec mb-20">
                                                                    <?php echo wp_trim_words(get_the_content(), $settings['post_content_word']); ?>
                                                                </p>
                                                            </div>
                                                            <div class="tp-progress mb-10 mt-20">
                                                                <div class="tp-progress-top d-flex justify-content-between mb-5">
                                                                    <span><?php echo esc_html__('Donation', 'kindaid'); ?></span>
                                                                    <label><?php echo esc_html($percentage); ?></label>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Example with label"
                                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                                                        data-wow-delay=".1s"
                                                                        style="width: <?php echo esc_attr($percentage); ?>"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="tp-causes-amount">
                                                                        <label><?php echo esc_html__('Goals:', 'kindaid'); ?></label>
                                                                        <span><?php echo esc_html($goal_amount); ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="tp-causes-amount text-end">
                                                                        <label><?php echo esc_html__('Raised:', 'kindaid'); ?></label>
                                                                        <span><?php echo esc_html($donated_amount); ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if (!empty($button_text)): ?>
                                                        <div class="tp-causes-button">
                                                            <a class="tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center"
                                                                href="<?php the_permalink(); ?>">
                                                                <span class="btn-text"><?php echo esc_html($button_text); ?></span>
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
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php
                                        endwhile;
                                    else:
                                        echo '<p>No Post Found</p>';
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php
    }
}
$widgets_manager->register(new \kindAid_Charity_Slider());