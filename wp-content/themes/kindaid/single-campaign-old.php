<?php
get_header();
$post_center = is_active_sidebar('blog-sidebar') ? '' : 'justify-content-center';


$campaign = charitable_get_campaign(get_the_ID());

$goal_amount = charitable_format_money($campaign->get_goal());
$donated_amount = charitable_format_money($campaign->get_donated_amount());
$button_text = $campaign->get('donate_button_text', true);
$percentage = $campaign->get_percent_donated_raw();
$percentage = $percentage . '%';

add_filter('charitable_donation_form_user_fields', 'remove_address_city_fields');
function remove_address_city_fields($fields) {

    if (isset($fields['address'])) {
        unset($fields['address']);
    }

    if (isset($fields['address_2'])) {
        unset($fields['address_2']);
    }

    if (isset($fields['city'])) {
        unset($fields['city']);
    }

    if (isset($fields['state'])) {
        unset($fields['state']);
    }

    if (isset($fields['postcode'])) {
        unset($fields['postcode']);
    }

    if (isset($fields['country'])) {
        unset($fields['country']);
    }

    if (isset($fields['phone'])) {
        unset($fields['phone']);
    }

    return $fields;
}
?>

<div class="tp-event-details-area pt-115 pb-90">
    <div class="container container-1424">
        <div class="row">
            <div class="col-xl-8">
                <div class="tp-causes-details mb-30">
                    <div class="tp-causes-details-thumb">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="tp-donation-form">
                        <div class="tp-donation-form-wrap">
                            <h3 class="tp-donation-form-title mb-35"><?php the_title(); ?></h3>
                            <div class="tp-donation-progress-main">
                                <div class="row">
                                    <div class="col-10">
                                        <h5 class="tp-donation-progress-label mb-5">
                                            <?php echo esc_html($donated_amount); ?>
                                            <?php echo esc_html__('pledged of', 'kindaid'); ?>
                                            <span><?php echo esc_html($goal_amount); ?></span>
                                        </h5>
                                    </div>
                                    <div class="col-2 text-end">
                                        <span
                                            class="tp-donation-progress-number"><?php echo esc_html($percentage); ?></span>
                                    </div>
                                </div>
                                <div class="tp-donation-progress mt-10 mb-30">
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                            data-wow-delay=".05s" style="width: <?php echo esc_html($percentage); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="tp-donation-filter-custom mt-40">
                                    <?php echo do_shortcode('[charitable_donation_form]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-donation-info-wrap ">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="tp-event-sidebar ml-65">
                    <?php dynamic_sidebar('donation-sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();