<?php
$post_video_url = function_exists('tpmeta_field') ? tpmeta_field('kindaid_post_format_video') : '';
$overlay = $post_video_url ? 'tp-postbox-thumb-overlay' : '';
if (is_single()):
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class("tp-postbox-item mb-30"); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="tp-postbox-thumb <?php echo esc_attr($overlay); ?> mb-30">
                <?php the_post_thumbnail(); ?>
                <?php if (!empty($post_video_url)): ?>
                    <div class="tp-postbox-video">
                        <a class="popup-video" href="<?php echo esc_url($post_video_url); ?>">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.24635e-08 1.80425C2.3978e-08 1.01881 0.863951 0.539969 1.53 0.956249L14.6432 9.152C15.2699 9.54367 15.2699 10.4563 14.6432 10.848L1.53 19.0438C0.863949 19.46 4.46728e-07 18.9812 4.28243e-07 18.1958L4.24635e-08 1.80425Z"
                                    fill="#0E0F11" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="tp-postbox-content p-0">
            <?php echo get_template_part('templates/blog/blog-category'); ?>
            <h2 class="tp-postbox-title mb-15"><?php the_title(); ?></h2>
            <?php echo get_template_part('templates/blog/blog-meta'); ?>

            <div class="tp-post-box-details-content mb-40">
                <?php the_content(); ?>
            </div>

            <?php if (has_tag()): ?>
                <div class="tp-blog-tag-social">
                    <div class="row">
                        <div class="col-xl-8">
                            <?php kindaid_post_tags(); ?>
                        </div>
                        <div class="col-xl-4">
                            <?php kindaid_blog_share(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </article>

<?php else: ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class("tp-postbox-item mb-30"); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="tp-postbox-thumb <?php echo esc_attr($overlay); ?>">
                <?php the_post_thumbnail(); ?>
                <?php if (!empty($post_video_url)): ?>
                    <div class="tp-postbox-video">
                        <a class="popup-video" href="<?php echo esc_url($post_video_url); ?>">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.24635e-08 1.80425C2.3978e-08 1.01881 0.863951 0.539969 1.53 0.956249L14.6432 9.152C15.2699 9.54367 15.2699 10.4563 14.6432 10.848L1.53 19.0438C0.863949 19.46 4.46728e-07 18.9812 4.28243e-07 18.1958L4.24635e-08 1.80425Z"
                                    fill="#0E0F11" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
                <?php echo get_template_part('templates/blog/blog-category'); ?>
            </div>
        <?php endif; ?>
        <div class="tp-postbox-content pt-30">
            <?php echo get_template_part('templates/blog/blog-meta'); ?>
            <h2 class="tp-postbox-title mb-15">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <?php the_excerpt(); ?>
            <?php echo get_template_part('templates/blog/blog-btn'); ?>
        </div>
    </article>
<?php endif; ?>