<?php
class kindAid_Charity_Support extends \Elementor\Widget_Base {

    public function get_name(): string {
        return 'kindaid_charity_support';
    }

    public function get_title(): string {
        return esc_html__('Charity Support', 'kindaid');
    }

    public function get_icon(): string {
        return 'eicon-code';
    }

    public function get_categories(): array {
        return ['kindaid_core'];
    }

    public function get_keywords(): array {
        return ['charity support', 'home 01 hero', 'kindaid'];
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


        // Heading Tab Start
        $this->start_controls_section(
            'heading_section',
            [
                'label' => esc_html__('Title & Content', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_layout' => 'layout-1',
                ],
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

        $this->end_controls_section();
        // Heading Section End


        // Button Section Start
        $this->start_controls_section(
            'button_section',
            [
                'label' => esc_html__('Button', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_layout' => 'layout-1',
                ],
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

        // Content Tab Start
        $this->start_controls_section(
            'post_section',
            [
                'label' => esc_html__('Charity Support', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'post_in',
            [
                'label' => esc_html__('Select Campaign', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => false,
                'options' => get_all_post('campaign'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'post_title_type',
            [
                'label' => esc_html__('Select Title & Description Type', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'post-title',
                'options' => [
                    'post-title' => esc_html__('Post Title & Description', 'textdomain'),
                    'custom-title' => esc_html__('Custom Title & Description', 'textdomain'),
                ],
                'label_block' => true,
                'condition' => [
                    'design_layout' => 'layout-1',
                ],
            ]
        );

        $this->add_control(
            'custom_title',
            [
                'label' => esc_html__('Custom Title', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Featured Campaigns', 'kindaid-core'),
                'condition' => [
                    'post_title_type' => 'custom-title',
                ]
            ]
        );

        $this->add_control(
            'custom_description',
            [
                'label' => esc_html__('Custom Description', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Help our organization by donating today! Donations go to making a difference for our cause.', 'kindaid-core'),
                'condition' => [
                    'post_title_type' => 'custom-title',
                ]
            ]
        );

        $this->add_control(
            'post_content_word',
            [
                'label' => esc_html__('Content Word Count', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__(9, 'kindaid-core'),
                'condition' => [
                    'post_title_type' => 'post-title',
                ]
            ]
        );

        $this->add_control(
            'secure_text',
            [
                'label' => esc_html__('Secure Text', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__(' 100% Secure Donation', 'kindaid-core'),
                'condition' => [
                    'design_layout' => 'layout-1',
                ],
            ]
        );

        $this->end_controls_section();
        // Heading Section End


    }

    protected function register_style_section() {

        // For title
        $this->start_controls_section(
            'section_percentage_text_style',
            [
                'label' => esc_html__('Percentage Text', 'kindaid-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'percentage_text_color',
            [
                'label' => esc_html__('Percentage Text Color', 'kindaid-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .el-percentage' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'percentage_typography',
                'selector' => '{{WRAPPER}} .el-percentage',
            ]
        );

        $this->end_controls_section();
    }

    protected function render(): void {
        $settings = $this->get_settings_for_display();

        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = [
            'post_type' => ['campaign'],
            'post_status' => ['publish'],
            'posts_per_page' => 1,
            'post__in' => $settings['post_in'],
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

        <?php if ($settings['design_layout'] == 'layout-2'): ?>

            <?php
            if (!empty($settings['button_url'])) {
                $this->add_link_attributes('button_arg', $settings['button_url']);
                $this->add_render_attribute('button_arg', 'class', 'tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center mb-10');
            }
            ?>


            <?php
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    $campaign = charitable_get_campaign(get_the_ID());

                    $goal_amount = charitable_format_money($campaign->get_goal());
                    $donated_amount = charitable_format_money($campaign->get_donated_amount());
                    $button_text = $campaign->get('donate_button_text', true);
                    $percentage_raw = $campaign->get_percent_donated_raw();
                    $percentage = round($percentage_raw). '%';
                    $donation_count = get_campaign_total_donation_count(get_the_ID());
                    $total_donation_count = $donation_count > 0 ? $donation_count : 0;
                    ?>

                    <div class="tp-help-progress">
                        <div class="tp-progress tp-cta-progress mb-15">
                            <h3 class="tp-cta-counter mb-5 el-percentage" ><?php echo esc_html($percentage); ?></h3>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo esc_attr($percentage_raw); ?>" aria-valuemin="0"
                                aria-valuemax="100">
                                <div class="progress-bar wow slideInLeft" data-wow-duration="2s" data-wow-delay=".1s" style="width: <?php echo esc_attr($percentage); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="tp-help-amount">
                                    <h4><span><?php echo esc_html__('Collection - ','kindaid'); ?></span><?php echo esc_html($donated_amount); ?></h4>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="tp-help-amount text-end">
                                    <h4><span><?php echo esc_html__('Goal - ','kindaid'); ?></span><?php echo esc_html($goal_amount); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>

        <?php else: ?>
            <?php
            if (!empty($settings['button_url'])) {
                $this->add_link_attributes('button_arg', $settings['button_url']);
                $this->add_render_attribute('button_arg', 'class', 'tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center mb-10');
            }
            ?>

            <div class="tp-mission-area">
                <div class="container container-1424">
                    <div class="tp-mission-spacing" style="background-color:#ffca24;">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="tp-mission-content mr-50">
                                    <?php if (!empty($settings['title'])): ?>
                                        <h2 class="tp-mission-title mb-20"><?php echo kd_kses($settings['title']) ?></h2>
                                    <?php endif; ?>

                                    <?php if (!empty($settings['description'])): ?>
                                        <p class="mb-45"><?php echo kd_kses($settings['description']); ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($settings['button_text'])): ?>
                                        <a class="tp-btn tp-btn-nopading tp-btn-animetion" href="causes.html">
                                            <span class="btn-text"><?php echo esc_html($settings['button_text']); ?></span>
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
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <?php
                                if ($query->have_posts()):
                                    while ($query->have_posts()):
                                        $query->the_post();
                                        $campaign = charitable_get_campaign(get_the_ID());

                                        $goal_amount = charitable_format_money($campaign->get_goal());
                                        $donated_amount = charitable_format_money($campaign->get_donated_amount());
                                        $button_text = $campaign->get('donate_button_text', true);
                                        $percentage_raw = $campaign->get_percent_donated_raw();
                                        $percentage = round($percentage_raw). '%';
                                        $donation_count = get_campaign_total_donation_count(get_the_ID());
                                        $total_donation_count = $donation_count > 0 ? $donation_count : 0;
                                        ?>
                                        <div class="tp-custom-donate-wrap" data-bg-color="#fcf8ec">
                                            <div class="tp-custom-donate-content text-center">
                                                <h3 class="tp-custom-donate-title mb-10">
                                                    <?php if ($settings['post_title_type'] == 'custom-title'): ?>
                                                        <?php echo esc_html($settings['custom_title']); ?>
                                                    <?php else: ?>
                                                        <?php the_title(); ?>
                                                    <?php endif ?>
                                                </h3>
                                                <p class="tp-custom-donate-dec mb-30">
                                                    <?php if ($settings['post_title_type'] == 'custom-title'): ?>
                                                        <?php echo kd_kses($settings['custom_description']); ?>
                                                    <?php else: ?>
                                                        <?php echo wp_trim_words(get_the_content(), $settings['post_content_word']); ?>
                                                    <?php endif ?>
                                                </p>
                                            </div>
                                            <div class="tp-custom-donate-inner">
                                                <div class="tp-custom-donate-count">
                                                    <ul>
                                                        <li>
                                                            <b><?php echo esc_html($donated_amount); ?></b>
                                                            <span><?php echo esc_html__('Raised:', 'kindaid'); ?></span>
                                                        </li>
                                                        <li>
                                                            <b><?php echo esc_html($total_donation_count); ?></b>
                                                            <span><?php echo esc_html__('Donations:', 'kindaid'); ?></span>
                                                        </li>
                                                        <li>
                                                            <b><?php echo esc_html($goal_amount); ?></b>
                                                            <span><?php echo esc_html__('Goals:', 'kindaid'); ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tp-custom-donate-progress mb-20">
                                                <div class="tp-progress mb-10">
                                                    <div class="progress" role="progressbar" aria-label="Example with label"
                                                        aria-valuenow="<?php echo esc_attr($percentage_raw); ?>" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                                            data-wow-delay=".1s" style="width: <?php echo esc_attr($percentage); ?>"></div>
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
                                            <div class="tp-custom-donate-button text-center">
                                                <?php if (!empty($button_text)): ?>
                                                    <a class="tp-btn tp-btn-animetion tp-btn-mulberry w-100 justify-content-center mb-10"
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
                                                <?php if (!empty($settings['secure_text'])): ?>
                                                    <span
                                                        class="tp-custom-donate-secure"><?php echo kd_kses($settings['secure_text']); ?></span>
                                                <?php endif; ?>
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
        <?php endif; ?>
    <?php
    }
}
$widgets_manager->register(new \kindAid_Charity_Support());