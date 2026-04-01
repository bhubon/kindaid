<?php
class Kindaid_Blog_Author extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'Kindaid_Blog_Author',
            __('Kindaid Blog Author', 'kindaid'),
            array('description' => __('Display blog author Image, url, info links', 'kindaid'))
        );

        add_action('admin_enqueue_scripts', array($this, 'enqueue_media'));
        add_action('admin_footer-widgets.php', array($this, 'print_widget_script'));
    }

    /* ==========================
       LOAD MEDIA LIBRARY
    ========================== */
    public function enqueue_media($hook) {
        if ($hook === 'widgets.php') {
            wp_enqueue_media();
        }
    }

    /* ==========================
       FRONT-END DISPLAY
    ========================== */
    public function widget($args, $instance) {

        echo $args['before_widget'];

        $bg_image = !empty($instance['bg_image']) ? esc_url($instance['bg_image']) : '';
        $designation = !empty($instance['designation']) ? esc_html($instance['designation']) : '';
        $name      = !empty($instance['name']) ? esc_attr($instance['name']) : '';
        $social1      = !empty($instance['social1']) ? esc_attr($instance['social1']) : '';
        $social2      = !empty($instance['social2']) ? esc_attr($instance['social2']) : '';
        $social3      = !empty($instance['social3']) ? esc_attr($instance['social3']) : '';
        $social4      = !empty($instance['social4']) ? esc_attr($instance['social4']) : '';
        ?>


        <div class="tp-widget-author text-center mb-20">
            <?php if(!empty($bg_image)): ?>
            <div class="tp-widget-author-thumb mb-35 pt-15">
                <img src="<?php echo esc_url($bg_image); ?>" alt="" />
            </div>
            <?php endif; ?>
            <div class="tp-widget-author-content">
                <span class="tp-widget-author-subtitle d-inline-block mb-5"><?php echo esc_html($designation); ?></span>
                <h3 class="tp-widget-author-title mb-15">
                    <a href="#"><?php echo esc_html($name); ?></a>
                </h3>
                <div class="tp-footer-social justify-content-center">
                    <?php if(!empty($social1)): ?>
                    <a href="<?php echo esc_url($social1) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if(!empty($social2)): ?>
                    <a href="<?php echo esc_url($social2) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if(!empty($social3)): ?>
                    <a href="<?php echo esc_url($social3) ?>">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.99991" cy="9.99991" r="8.38077" stroke="currentColor" stroke-width="1.5" />
                            <path
                                d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path
                                d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path
                                d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if(!empty($social4)): ?>
                    <a href="<?php echo esc_url($social4) ?>">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path
                                d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z"
                                stroke="currentColor" stroke-width="1.5" />
                            <path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php
        echo $args['after_widget'];
    }

    /* ==========================
       BACK-END FORM
    ========================== */
    public function form($instance) {

        $bg_image = !empty($instance['bg_image']) ? esc_url($instance['bg_image']) : '';
        $designation = !empty($instance['designation']) ? esc_attr($instance['designation']) : '';
        $name = !empty($instance['name']) ? esc_attr($instance['name']) : '';
        $social1      = !empty($instance['social1']) ? esc_attr($instance['social1']) : '';
        $social2      = !empty($instance['social2']) ? esc_attr($instance['social2']) : '';
        $social3      = !empty($instance['social3']) ? esc_attr($instance['social3']) : '';
        $social4      = !empty($instance['social4']) ? esc_attr($instance['social4']) : '';
        ?>

        <p>
            <label>Image Upload:</label>
            <input type="text" class="widefat kindaid-upload-field" name="<?php echo $this->get_field_name('bg_image'); ?>"
                value="<?php echo esc_attr($bg_image); ?>">
            <button type="button" class="button kindaid-upload-button">Upload</button>
        </p>

        <p><label>Designation:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('designation'); ?>"
                value="<?php echo $designation; ?>">
        </p>

        <p><label>Name:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('name'); ?>"
                value="<?php echo $name; ?>">
        </p>

        <p><label>Facebook URL:</label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('social1'); ?>"
                value="<?php echo $social1; ?>">
        </p>

        <p><label>Twitter/X URL:</label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('social2'); ?>"
                value="<?php echo $social2; ?>">
        </p>

        <p><label>Dribble URL:</label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('social3'); ?>"
                value="<?php echo $social3; ?>">
        </p>

        <p><label>Instagram URL:</label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('social4'); ?>"
                value="<?php echo $social4; ?>">
        </p>

        <?php
    }

    /* ==========================
       SAVE DATA
    ========================== */
    public function update($new_instance, $old_instance) {

        $instance = array();

        $instance['bg_image'] = !empty($new_instance['bg_image'])
            ? esc_url_raw($new_instance['bg_image'])
            : '';

        $instance['designation'] = !empty($new_instance['designation'])
            ? sanitize_text_field($new_instance['designation'])
            : '';

        $instance['name']      = !empty($new_instance['name']) ? sanitize_text_field($new_instance['name']) : '';
        // Allow # and normal URLs
        $instance['social1']      = !empty($new_instance['social1']) ? sanitize_text_field($new_instance['social1']) : '';
        $instance['social2']      = !empty($new_instance['social2']) ? sanitize_text_field($new_instance['social2']) : '';
        $instance['social3']      = !empty($new_instance['social3']) ? sanitize_text_field($new_instance['social3']) : '';
        $instance['social4']      = !empty($new_instance['social4']) ? sanitize_text_field($new_instance['social4']) : '';

        return $instance;
    }

    /* ==========================
       ADMIN JS
    ========================== */
    public function print_widget_script() {
        ?>
        <script>
            jQuery(document).ready(function ($) {

                function initUploader(widget) {
                    widget.find('.kindaid-upload-button').off('click').on('click', function (e) {
                        e.preventDefault();

                        var button = $(this);
                        var input = button.prev('.kindaid-upload-field');

                        var frame = wp.media({
                            title: 'Select or Upload Logo',
                            button: { text: 'Use this image' },
                            multiple: false
                        });

                        frame.on('select', function () {
                            var attachment = frame.state().get('selection').first().toJSON();
                            input.val(attachment.url).trigger('change');
                        });

                        frame.open();
                    });
                }

                $('.widget').each(function () {
                    initUploader($(this));
                });

                $(document).on('widget-added widget-updated', function (e, widget) {
                    initUploader($(widget));
                });

            });
        </script>
        <?php
    }
}

/* REGISTER WIDGET */
function register_kindaid_blog_author() {
    register_widget('Kindaid_Blog_Author');
}
add_action('widgets_init', 'register_kindaid_blog_author');