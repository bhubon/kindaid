<?php
class Kindaid_Footer_Newsletter_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'kindaid_footer_newsletter',
            __('Kindaid Footer Newsletter', 'kindaid'),
            array('description' => __('Display footer logo, newsletter, and social links', 'kindaid'))
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

        $logo = !empty($instance['logo']) ? esc_url($instance['logo']) : '';
        $info = !empty($instance['info']) ? esc_html($instance['info']) : '';
        $newsletter_shortcode = !empty($instance['newsletter_shortcode']) ? esc_html($instance['newsletter_shortcode']) : '';
        $social1 = !empty($instance['social1']) ? esc_url($instance['social1']) : '';
        $social2 = !empty($instance['social2']) ? esc_url($instance['social2']) : '';
        $social3 = !empty($instance['social3']) ? esc_url($instance['social3']) : '';
        $social4 = !empty($instance['social4']) ? esc_url($instance['social4']) : '';
        $linkedin_url = !empty($instance['linkedin_url']) ? esc_url($instance['linkedin_url']) : '';
        ?>

        <?php if ($logo): ?>
            <div class="tp-footer-logo mb-25">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo $logo; ?>" alt="">
                </a>
            </div>
        <?php endif; ?>

        <?php if ($info): ?>
            <p class="tp-footer-dec mb-15"><?php echo $info; ?></p>
        <?php endif; ?>

        <?php if ($newsletter_shortcode): ?>
        <div class="tp-footer-subscribe p-relative mb-30">
            <?php echo do_shortcode($newsletter_shortcode); ?>
        </div>
        <?php endif; ?>

        <div class="tp-footer-social">

            <?php if ($social1): ?>
                <a href="<?php echo $social1; ?>"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>

            <?php if ($social2): ?>
                <a href="<?php echo $social2; ?>"><i class="fab fa-x-twitter"></i></a>
            <?php endif; ?>

            <?php if ($social3): ?>
                <a href="<?php echo $social3; ?>"><i class="fas fa-globe"></i></a>
            <?php endif; ?>

            <?php if ($social4): ?>
                <a href="<?php echo $social4; ?>"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>

            <?php if ($linkedin_url): ?>
                <a href="<?php echo $linkedin_url; ?>"><i class="fab fa-linkedin"></i></a>
            <?php endif; ?>

        </div>

        <?php
        echo $args['after_widget'];
    }

    /* ==========================
       BACK-END FORM
    ========================== */
    public function form($instance) {

        $logo = !empty($instance['logo']) ? esc_url($instance['logo']) : '';
        $info = !empty($instance['info']) ? esc_textarea($instance['info']) : '';
        $newsletter_shortcode = !empty($instance['newsletter_shortcode']) ? esc_textarea($instance['newsletter_shortcode']) : '';
        $social1 = !empty($instance['social1']) ? esc_attr($instance['social1']) : '';
        $social2 = !empty($instance['social2']) ? esc_attr($instance['social2']) : '';
        $social3 = !empty($instance['social3']) ? esc_attr($instance['social3']) : '';
        $social4 = !empty($instance['social4']) ? esc_attr($instance['social4']) : '';
        $linkedin_url = !empty($instance['linkedin_url']) ? esc_attr($instance['linkedin_url']) : '';
        ?>

        <p>
            <label>Logo Upload:</label>
            <input type="text" class="widefat kindaid-upload-field" name="<?php echo $this->get_field_name('logo'); ?>"
                value="<?php echo esc_attr($logo); ?>">
            <button type="button" class="button kindaid-upload-button">Upload</button>
        </p>

        <p>
            <label>Footer Info:</label>
            <textarea class="widefat" rows="4"
                name="<?php echo $this->get_field_name('info'); ?>"><?php echo esc_textarea($info); ?></textarea>
        </p>

        <p>
            <label>Footer Newsletter Shortcode:</label>
            <input class="widefat" type="text"
                name="<?php echo $this->get_field_name('newsletter_shortcode'); ?>" value="<?php echo esc_textarea($newsletter_shortcode); ?>">
                
        </p>

        <p><label>Facebook URL:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('social1'); ?>"
                value="<?php echo $social1; ?>">
        </p>

        <p><label>Twitter/X URL:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('social2'); ?>"
                value="<?php echo $social2; ?>">
        </p>

        <p><label>Website URL:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('social3'); ?>"
                value="<?php echo $social3; ?>">
        </p>

        <p><label>Instagram URL:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('social4'); ?>"
                value="<?php echo $social4; ?>">
        </p>

        <p><label>LinkedIn URL:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('linkedin_url'); ?>"
                value="<?php echo $linkedin_url; ?>">
        </p>

        <?php
    }

    /* ==========================
       SAVE DATA
    ========================== */
    public function update($new_instance, $old_instance) {

        $instance = array();

        $instance['logo'] = !empty($new_instance['logo'])
            ? esc_url_raw($new_instance['logo'])
            : '';

        $instance['info'] = !empty($new_instance['info'])
            ? sanitize_text_field($new_instance['info'])
            : '';

        $instance['newsletter_shortcode'] = !empty($new_instance['newsletter_shortcode'])
            ? sanitize_text_field($new_instance['newsletter_shortcode'])
            : '';

        // Allow # and normal URLs
        $instance['social1'] = !empty($new_instance['social1']) ? sanitize_text_field($new_instance['social1']) : '';
        $instance['social2'] = !empty($new_instance['social2']) ? sanitize_text_field($new_instance['social2']) : '';
        $instance['social3'] = !empty($new_instance['social3']) ? sanitize_text_field($new_instance['social3']) : '';
        $instance['social4'] = !empty($new_instance['social4']) ? sanitize_text_field($new_instance['social4']) : '';
        $instance['linkedin_url'] = !empty($new_instance['linkedin_url']) ? sanitize_text_field($new_instance['linkedin_url']) : '';

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
function register_Kindaid_footer_newsletter_widget() {
    register_widget('Kindaid_Footer_Newsletter_Widget');
}
add_action('widgets_init', 'register_Kindaid_footer_newsletter_widget');