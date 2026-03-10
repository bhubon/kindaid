<?php if (is_single()): ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class("tp-postbox-item mb-30"); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="tp-postbox-thumb mb-30">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <div class="tp-postbox-content p-0">
            <?php echo get_template_part('templates/blog/blog-category'); ?>
            <h2 class="tp-postbox-title mb-15"><?php the_title(); ?></h2>
            <?php echo get_template_part('templates/blog/blog-meta'); ?>

            <div class="tp-post-box-details-content mb-40">
                <?php the_content(); ?>
            </div>

            <?php if(has_tag()): ?>
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
    <?php if(has_post_thumbnail()): ?>
    <div class="tp-postbox-thumb">
        <?php the_post_thumbnail(); ?>
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