<?php
class Kindaid_Blog_Recent_Post extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'Kindaid_Blog_Recent_Post',
            __('Kindaid Blog Post Thumb', 'kindaid'),
            array('description' => __('Display footer Contact Image, url, info links', 'kindaid'))
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

        $title = !empty($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';
        $order = !empty($instance['order']) ? esc_attr($instance['order']) : 'DESC';
        $posts_per_page = !empty($instance['posts_per_page']) ? esc_attr($instance['posts_per_page']) : 5;


        if (!empty($title)) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        }


        $post_args = [
            'post_type' => 'post',
            'post_status' => ['publish'],
            'posts_per_page' => $posts_per_page,
            'order' => $order,
            'orderby' => 'date'
        ];
        $query = new \WP_Query($post_args);

        ?>

        <?php
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                ?>
                <div class="tp-widget-post-list mb-15">
                    <div class="tp-widget-post-thumb">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="tp-widget-post-content">
                        <span><i class="far fa-clock"></i> <?php echo get_the_date(); ?></span>
                        <h4 class="tp-widget-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <?php
        echo $args['after_widget'];
    }

    /* ==========================
       BACK-END FORM
    ========================== */
    public function form($instance) {
        $title = !empty($instance['title']) ? esc_attr($instance['title']) : '';
        $order = !empty($instance['order']) ? esc_attr($instance['order']) : '';
        $posts_per_page = !empty($instance['posts_per_page']) ? esc_attr($instance['posts_per_page']) : '';
        ?>

        <p>
            <label>Title:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title'); ?>"
                value="<?php echo esc_textarea($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('order'); ?>">Order:</label>
            <select class="widefat" name="<?php echo $this->get_field_name('order') ?>"
                id="<?php echo $this->get_field_id('order') ?>">
                <option value="DESC" <?php selected($order, 'DESC'); ?>>Descending (Latest First)</option>
                <option value="ASC" <?php selected($order, 'ASC'); ?>>Ascending (Oldest First)</option>
            </select>
        </p>

        <p>
            <label>Posts Per Page:</label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('posts_per_page'); ?>"
                value="<?php echo esc_textarea($posts_per_page); ?>">
        </p>



        <?php
    }

    /* ==========================
       SAVE DATA
    ========================== */
    public function update($new_instance, $old_instance) {

        $instance = array();

        $instance['title'] = !empty($new_instance['title'])
            ? $new_instance['title']
            : '';

        $instance['order'] = !empty($new_instance['order'])
            ? sanitize_text_field($new_instance['order'])
            : '';

        $instance['posts_per_page'] = !empty($new_instance['posts_per_page'])
            ? sanitize_text_field($new_instance['posts_per_page']) : '';

        return $instance;
    }

    /* ==========================
       ADMIN JS
    ========================== */
    public function print_widget_script() {
        ?>

        <?php
    }
}

/* REGISTER WIDGET */
function register_kindaid_blog_recent_post() {
    register_widget('Kindaid_Blog_Recent_Post');
}
add_action('widgets_init', 'register_kindaid_blog_recent_post');