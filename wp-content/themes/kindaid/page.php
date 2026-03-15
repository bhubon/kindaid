<?php
get_header();
$post_center = is_active_sidebar('blog-sidebar') ? '' : 'justify-content-center';
?>
<div class="tp-page-area pt-120 pb-80">
    <div class="container container-1424">
        <div class="tp-page-wrapper mr-85 mb-40">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    echo get_template_part('templates/content','page');
                endwhile;
            else:
                ?>
                <p>Page Post Not Found</p>
                <?php
            endif;
            ?>
        </div>
    </div>
</div>
<?php get_footer();