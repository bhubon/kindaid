<?php
class kindAid_Blog_Post extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_blog_post';
    }

    public function get_title(): string {
        return esc_html__('Blog Post', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['blog', 'home 01 hero', 'kindaid'];
    }

    protected function register_controls(): void {
        $this->register_control_section();
        $this->register_style_section();
    }

    protected function register_control_section() {

        // Heading Tab Start
        $this->start_controls_section(
            'heading_section',
            [
                'label' => esc_html__('Title & Content', 'kindaid-core'),
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
                'options' => tp_all_tax(),
            ]
        );

        $this->add_control(
            'post_in',
            [
                'label' => esc_html__('Post In', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => get_all_post(),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'post_not_in',
            [
                'label' => esc_html__('Post Not In', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => get_all_post(),
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
            'post_type' => ['post'],
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
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => (array) $settings['post_cat'],
                    'operator' => 'IN',
                    'include_children' => true,
                ],
            ];
        }

        $query = new \WP_Query($args);
        ?>
        <div class="tp-blog-area tp-blog-style pt-115 pb-90 fix p-relative">
            <div class="container container-1324">
                <div class="row">
                    <?php
                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            $post_date = get_the_date();
                            $categories = get_the_category();

                            ?>
                            <div class="col-xl-4 col-md-6">
                                <div class="tp-blog-item tp-event p-relative mb-30 wow fadeInUp" data-wow-duration=".9s"
                                    data-wow-delay=".3s">
                                    <div class="tp-blog-thumb tp-event-img fix mb-25">
                                        <?php the_post_thumbnail(); ?>
                                        <div class="tp-event-date">
                                            <span><?php echo esc_html(date('M', strtotime($post_date))); ?></span>
                                            <h4><?php echo esc_html(date(('j'), strtotime($post_date))); ?></h4>
                                        </div>
                                    </div>
                                    <div class="tp-blog-content">
                                        <div class="tp-blog-cat mb-5 d-flex">
                                            <?php
                                            if (!empty($categories)) {
                                                $limited_categores = array_slice($categories, 0, 2);
                                                foreach ($limited_categores as $category) {
                                                    ?>
                                                    <span class="dvdr"><a
                                                            href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a></span>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <h3 class="tp-blog-title"><a href="<?php the_permalink(); ?>"
                                                class="common-underline"><?php the_title(); ?></a></h3>
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
        <?php
    }
}
$widgets_manager->register(new \kindAid_Blog_Post());