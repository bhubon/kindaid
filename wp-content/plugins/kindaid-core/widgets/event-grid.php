<?php

class kindAid_Event_Post extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_event_grid';
    }

    public function get_title(): string {
        return esc_html__('Event Post', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['event grid', 'kindaid'];
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
                'label' => esc_html__('Select Event Layout', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'layout-01',
                'options' => [
                    'layout-01' => esc_html__('Layout Grid', 'textdomain'),
                    'layout-02' => esc_html__('Layout List', 'textdomain'),
                    'layout-03' => esc_html__('Layout Image Hover', 'textdomain'),
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        // Heading Tab Start
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Event Grid', 'kindaid-core'),
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
                'options' => tp_all_tax('etn_category'),
            ]
        );

        $this->add_control(
            'post_in',
            [
                'label' => esc_html__('Post In', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => get_all_post('etn'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'post_not_in',
            [
                'label' => esc_html__('Post Not In', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => get_all_post('etn'),
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
            'show_pagination',
            [
                'label' => esc_html__('Show Pagination', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'textdomain'),
                'label_off' => esc_html__('Hide', 'textdomain'),
                'return_value' => 'yes',
                'default' => 'yes',
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
            'post_type' => ['etn'],
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
                    'taxonomy' => 'etn_category',
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
            <div class="tp-causes-area fix p-relative">
                <div class="container container-1324">
                    <div class="row align-items-end">
                        <div class="col-lg-12">
                            <div class="tp-event-2-wrap">
                                <?php
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                        $query->the_post();

                                        $event_id = get_the_ID();
                                        $etn_event_location = get_post_meta($event_id, 'etn_event_location', true);
                                        $start_date = get_post_meta($event_id, 'etn_start_date', true);
                                        $start_time = get_post_meta($event_id, 'etn_start_time', true);
                                        $end_time = get_post_meta($event_id, 'etn_end_time', true);

                                        ?>
                                        <div class="tp-event-2-item mb-10 d-flex align-items-center justify-content-between flex-wrap wow fadeInUp"
                                            data-wow-duration=".9s" data-wow-delay=".3s">
                                            <div class="tp-event-2-left d-flex align-items-center flex-wrap">
                                                <div class="tp-event-2-date mb-25 mr-45">
                                                    <h4 class="mb-0"><?php echo esc_html(date('d', strtotime($start_date))); ?></h4>
                                                    <span><?php echo esc_html(date('M, Y ', strtotime($start_date))); ?></span>
                                                    <h4></h4>
                                                </div>
                                                <div class="tp-event-2-thumb mr-40 fix d-inline-block mb-25">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                                <div class="tp-event-2-content mb-25">
                                                    <h3 class="tp-event-2-title mb-5"><a href="<?php the_permalink(); ?>"
                                                            class="common-underline"><?php the_title(); ?></a></h3>
                                                    <div class="tp-event-meta">
                                                        <span class="mr-20">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                                                    stroke="#454449" stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449"
                                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <?php echo esc_html($start_time); ?> - <?php echo esc_html($end_time); ?>
                                                        </span>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                                                    stroke="#454449" stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449"
                                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <?php echo esc_html($etn_event_location['address']); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-event-2-link mb-25">
                                                <a class="tp-event-2-btn tp-btn-animetion" href="<?php the_permalink(); ?>">
                                                    <span class="btn-icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 7H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($settings['design_layout'] == 'layout-03'): ?>
            <div class="tp-event-area tp-event-4-style fix p-relative">
                <div class="container container-1424">
                    <div class="row align-items-end">
                        <div class="col-lg-12">
                            <div class="tp-event-2-wrap">
                                <?php
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                        $query->the_post();

                                        $event_id = get_the_ID();
                                        $etn_event_location = get_post_meta($event_id, 'etn_event_location', true);
                                        $start_date = get_post_meta($event_id, 'etn_start_date', true);
                                        $start_time = get_post_meta($event_id, 'etn_start_time', true);
                                        $end_time = get_post_meta($event_id, 'etn_end_time', true);

                                        ?>
                                        <div class="tp-event-2-item d-flex align-items-center justify-content-between flex-wrap position-relative wow fadeInUp"
                                            data-wow-duration=".9s" data-wow-delay=".3s">
                                            <div class="tp-event-4-thumb bg-position" data-img-bg="<?php the_post_thumbnail_url(); ?>">
                                            </div>
                                            <div class="tp-event-2-left d-flex align-items-center flex-wrap mr-30">
                                                <div class="tp-event-2-date mb-25 mr-130">
                                                    <h4 class="mb-0"><?php echo esc_html(date('d', strtotime($start_date))); ?></h4>
                                                    <span><?php echo esc_html(date('M, Y ', strtotime($start_date))); ?></span>
                                                </div>
                                                <div class="tp-event-2-content mb-25">
                                                    <h3 class="tp-event-2-title mb-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    <div class="tp-event-meta">
                                                        <span class="mr-20">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                                                    stroke="#454449" stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449"
                                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <?php echo esc_html($start_time); ?> - <?php echo esc_html($end_time); ?>
                                                        </span>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                                                    stroke="#454449" stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449"
                                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <?php echo esc_html($etn_event_location['address']); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-event-2-link mb-25">
                                                <a class="tp-event-2-btn tp-btn-animetion" href="<?php the_permalink(); ?>">
                                                    <span class="btn-icon">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 10H19" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M10 1L19 10L10 19" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="tp-event-area fix p-relative">
                <div class="container container-1424">
                    <div class="row">
                        <?php
                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();

                                $event_id = get_the_ID();
                                $etn_event_location = get_post_meta($event_id, 'etn_event_location', true);
                                $start_date = get_post_meta($event_id, 'etn_start_date', true);
                                $start_time = get_post_meta($event_id, 'etn_start_time', true);
                                $end_time = get_post_meta($event_id, 'etn_end_time', true);

                                ?>
                                <div class="col-xl-4 col-md-6">
                                    <div class="tp-event p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="tp-event-img fix">
                                            <?php the_post_thumbnail(); ?>
                                            <div class="tp-event-date">
                                                <span><?php echo esc_html(date('M', strtotime($start_date))); ?></span>
                                                <h4><?php echo esc_html(date('d', strtotime($start_date))); ?></h4>
                                            </div>
                                        </div>
                                        <div class="tp-event-content">
                                            <div class="tp-event-meta mb-5">
                                                <span class="mr-20">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path
                                                            d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                                            stroke="#454449" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <?php echo esc_html($start_time); ?> - <?php echo esc_html($end_time); ?>
                                                </span>
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none">
                                                        <path
                                                            d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                                            stroke="#454449" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#454449" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <?php echo esc_html($etn_event_location['address']); ?>
                                                </span>
                                            </div>
                                            <h3 class="tp-event-title"><a href="<?php the_permalink(); ?>"
                                                    class="common-underline"><?php the_title(); ?></a></h3>
                                            <div class="tp-event-link mt-15">
                                                <a class="tp-btn tp-btn-nopading tp-btn-animetion" href="<?php the_permalink(); ?>">
                                                    <span class="btn-text"><?php echo esc_html__('View event', 'kindaid'); ?></span>
                                                    <span class="btn-icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 7H13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                        else:
                            echo '<p>No Post Found</p>';
                        endif;

                        ?>
                    </div>

                    <div class="row">
                        <?php if ($settings['show_pagination']): ?>
                            <div class="col-12">
                                <div class="tp-pagination text-center mt-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                    <?php
                                    echo paginate_links([
                                        'total' => $query->max_num_pages,
                                        'current' => $paged,
                                        'type' => 'list',
                                        'prev_text' => '<i class="far fa-arrow-left"></i>',
                                        'next_text' => '<i class="far fa-arrow-right"></i>',
                                        'end_size' => 1,
                                        'mid_size' => 1,
                                    ]);
                                    ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php
    }
}
$widgets_manager->register(new \kindAid_Event_Post());