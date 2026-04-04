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

                                <div class="tp-donation-filter-radio mt-30 mb-30">
                                    <h6 class="tp-donation-form-label-title mb-20">Select Payment Method</h6>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check  tp-checkout-payment-item">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Test Donation
                                            </label>
                                        </div>
                                        <div class="form-check tp-checkout-payment-item">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Offline Donation
                                            </label>
                                        </div>
                                        <div class="form-check tp-checkout-payment-item">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios3" value="option2">
                                            <label class="form-check-label" for="exampleRadios3">
                                                Credit Card
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-donation-form-info tp-contact-form">
                                    <h6 class="tp-donation-form-label-title mb-15">Personal Info</h6>
                                    <form action="#">
                                        <div class="row align-items-end">
                                            <div class="col-md-6 mb-20">
                                                <label class="tp-form-label">Fast Name</label>
                                                <input class="tp-input" type="text" placeholder="Jhon">
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label class="tp-form-label">Last Name</label>
                                                <input class="tp-input" type="text" placeholder="Doe">
                                            </div>
                                            <div class="col-md-12 mb-35">
                                                <label class="tp-form-label">Your Email</label>
                                                <input class="tp-input" type="email" placeholder="help@example.net">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="tp-donation-amount mb-10">Donation Total:
                                                    <span>$100.00</span>
                                                </div>
                                                <button class="tp-btn tp-btn-donation tp-btn-animetion mr-5 mb-10"
                                                    type="submit">
                                                    <span class="btn-text">Donate Now</span>
                                                    <span class="btn-icon">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 7H13" stroke="currentColor" stroke-width="1.8"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7 1L13 7L7 13" stroke="currentColor"
                                                                stroke-width="1.8" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tp-donation-social mb-10">
                                                    <span class="tp-donation-social-title mb-10 d-block">Share
                                                        This</span>
                                                    <div class="tp-footer-social">
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="18" viewBox="0 0 12 18" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="14" viewBox="0 0 16 14" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="9.99991" cy="9.99991" r="8.38077"
                                                                    stroke="currentColor" stroke-width="1.5" />
                                                                <path
                                                                    d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                        <a href="#">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z"
                                                                    stroke="currentColor" stroke-width="1.5" />
                                                                <path d="M13.251 4.75391L13.242 4.75391"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-donation-info-wrap ">
                        <h2 class="tp-donation-form-title mb-10">How the program works</h2>
                        <p class="mb-30">Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus
                            scelerisque. Et ligula ullamcorper malesuada proin libero nunc. Quis vel eros donec ac odio
                            tempor. Cursus in hac habitasse platea. Phasellus egestas tellus rutrum tellus pellentesque
                            eu. Non diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Auctor urna
                            nunc id cursus metus aliquam eleifend. Sed turpis tincidunt id aliquet risus feugiat.</p>
                        <div class="row gx-20">
                            <div class="col-md-6">
                                <div class="tp-donation-info-thumb mb-30">
                                    <img class="w-100" src="assets/img/causes/details/thumb-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tp-donation-info-thumb mb-30">
                                    <img class="w-100" src="assets/img/causes/details/thumb-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <h2 class="tp-donation-form-title mb-10">Summary</h2>
                        <p class="mb-35">Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus
                            scelerisque. Et ligula ullamcorper malesuada proin libero nunc. Quis vel eros donec ac odio
                            tempor. Cursus in hac habitasse platea. Phasellus egestas tellus rutrum tellus pellentesque
                            eu.</p>
                        <div class="tp-causes-quote mb-20">
                            <svg width="36" height="33" viewBox="0 0 36 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.56 16.68C10.56 16.68 12.8 17.4 14.28 18.84C15.8 20.28 16.56 22.24 16.56 24.72C16.56 27.04 15.78 28.96 14.22 30.48C12.7 32 10.76 32.76 8.4 32.76C6.12 32.76 4.14 31.84 2.46 30C0.82 28.12 0 25.38 0 21.78C0 17.9 0.56 14.48 1.68 11.52C2.8 8.56 4.42 6.12 6.54 4.2C8.7 2.24 11.32 0.880001 14.4 0.119998C14.68 0.0399995 14.9 0.0399995 15.06 0.119998C15.22 0.16 15.32 0.26 15.36 0.419998C15.36 0.58 15.3 0.720003 15.18 0.840003C15.1 0.96 14.94 1.06 14.7 1.14C11.9 1.9 9.64 3.1 7.92 4.74C6.24 6.34 5.02 8.08 4.26 9.96C3.54 11.84 3.18 13.54 3.18 15.06C3.18 15.58 3.3 15.98 3.54 16.26C3.82 16.54 4.3 16.68 4.98 16.68H7.56ZM26.64 16.62C29.64 16.62 31.88 17.34 33.36 18.78C34.88 20.22 35.64 22.16 35.64 24.6C35.64 26.92 34.86 28.86 33.3 30.42C31.78 31.94 29.84 32.7 27.48 32.7C25.2 32.7 23.22 31.78 21.54 29.94C19.9 28.06 19.08 25.3 19.08 21.66C19.08 17.82 19.64 14.42 20.76 11.46C21.88 8.5 23.5 6.06 25.62 4.14C27.78 2.18 30.4 0.82 33.48 0.0600028C33.76 -0.0200009 33.98 -0.0200009 34.14 0.0600028C34.3 0.0999999 34.4 0.199999 34.44 0.360002C34.44 0.52 34.38 0.659999 34.26 0.78C34.18 0.900001 34.02 1 33.78 1.08C30.98 1.84 28.74 3.04 27.06 4.68C25.38 6.28 24.16 8.02 23.4 9.9C22.64 11.78 22.26 13.48 22.26 15C22.26 15.48 22.4 15.88 22.68 16.2C22.96 16.48 23.42 16.62 24.06 16.62H26.64Z"
                                    fill="#620035" />
                            </svg>
                            <p>““We believe in empowering and<br>
                                Equipping local leaders. We help people<br>
                                who are helping people.”</p>
                        </div>
                        <p>Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Et ligula
                            ullamcorper malesuada proin libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac
                            habitasse platea. Phasellus egestas tellus rutrum tellus pellentesque eu.</p>
                    </div>
                    <div class="tp-donation-reply-form mt-60">
                        <h2 class="tp-donation-form-title mb-45">Leave a Reply</h2>
                        <div class="tp-donation-form-info tp-contact-form">
                            <h6 class="tp-donation-form-label-title mb-15">Personal Info</h6>
                            <form action="#">
                                <div class="row align-items-end">
                                    <div class="col-md-6 mb-20">
                                        <label class="tp-form-label">Your Name</label>
                                        <input class="tp-input" type="text" placeholder="Jhon">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label class="tp-form-label">Your Email</label>
                                        <input class="tp-input" type="email" placeholder="hello@gmail.com">
                                    </div>
                                    <div class="col-md-12 mb-10">
                                        <label class="tp-form-label">Your Comments *</label>
                                        <textarea class="tp-input tp-textarea"
                                            placeholder="Comments here..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="tp-contact-remember mb-30">
                                            <input name="checkbox" class="tp-checkbox tp-form-label" id="remeber"
                                                type="checkbox">
                                            <label for="remeber">Save my name, email, and website in this browser for
                                                the next time I comment.</label>
                                        </div>
                                        <button class="tp-btn tp-btn-donation tp-btn-animetion mr-5 mb-10"
                                            type="submit">
                                            <span class="btn-text">Post Comment</span>
                                            <span class="btn-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 7H13" stroke="currentColor" stroke-width="1.8"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="tp-event-sidebar ml-65">
                    <div class="tp-widget-sidebar mb-20">
                        <h3 class="tp-widget-main-title mb-25">Categories</h3>
                        <div class="tp-widget-cat">
                            <ul>
                                <li><a href="#">Ecology<span>(3)</span></a></li>
                                <li><a href="#">Medical<span>(2)</span></a></li>
                                <li><a href="#">Ecology<span>(3)</span></a></li>
                                <li><a href="#">Children<span>(5)</span></a></li>
                                <li><a href="#">Education<span>(7)</span></a></li>
                                <li><a href="#">Animals<span>(3)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tp-widget-sidebar mb-20">
                        <h3 class="tp-widget-main-title mb-35">Upcoming Events</h3>
                        <div class="tp-widget-post-list mb-15">
                            <div class="tp-widget-post-thumb">
                                <a href="events-details.html"><img src="assets/img/events/thumb.jpg" alt=""></a>
                            </div>
                            <div class="tp-widget-post-content">
                                <span><i class="far fa-clock"></i> Aug 1, 2021</span>
                                <h4 class="tp-widget-post-title">
                                    <a href="events-details.html">Learn exactly how we made event</a>
                                </h4>
                            </div>
                        </div>
                        <div class="tp-widget-post-list mb-15">
                            <div class="tp-widget-post-thumb">
                                <a href="events-details.html"><img src="assets/img/events/thumb-2.jpg" alt=""></a>
                            </div>
                            <div class="tp-widget-post-content">
                                <span><i class="far fa-clock"></i> Aug 1, 2021</span>
                                <h4 class="tp-widget-post-title">
                                    <a href="events-details.html">Help with GlobalCharity</a>
                                </h4>
                            </div>
                        </div>
                        <div class="tp-widget-post-list">
                            <div class="tp-widget-post-thumb">
                                <a href="events-details.html"><img src="assets/img/events/thumb-3.jpg" alt=""></a>
                            </div>
                            <div class="tp-widget-post-content">
                                <span><i class="far fa-clock"></i> Aug 1, 2021</span>
                                <h4 class="tp-widget-post-title">
                                    <a href="events-details.html">Healthy Food for Growing</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="tp-widget-support bg-position mb-20" data-img-bg="assets/img/events/details/ad.jpg">
                        <div class="tp-widget-sidebar">
                            <span class="tp-section-subtitle mb-15 d-inline-block" data-color="#ffcf4e">Support
                                Counts</span>
                            <h2 class="tp-widget-support-title">Let’s helps<br> other with your charity</h2>
                        </div>
                        <a class="tp-btn tp-btn-secondary-white text-capitalize tp-btn-animetion w-100 justify-content-center"
                            href="donate.html">
                            <span class="btn-icon">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.15195 0.500138C6.71895 0.517281 7.26794 0.6157 7.79984 0.79554H7.85294C7.88894 0.812539 7.91594 0.831328 7.93394 0.848328C8.13283 0.911853 8.32093 0.983431 8.50093 1.08185L8.84293 1.23395C8.97793 1.30553 9.13992 1.43884 9.22992 1.49342C9.31992 1.54621 9.41892 1.60079 9.49992 1.66253C10.4998 0.902906 11.7139 0.491334 12.9649 0.500138C13.5328 0.500138 14.0998 0.579912 14.6389 0.759751C17.9607 1.83342 19.1577 5.45704 18.1578 8.62436C17.5908 10.2429 16.6638 11.7201 15.4498 12.9271C13.7119 14.6002 11.8048 16.0854 9.75192 17.3649L9.52692 17.5L9.29292 17.3559C7.23284 16.0854 5.31496 14.6002 3.56088 12.9181C2.3549 11.7111 1.42701 10.2429 0.851011 8.62436C-0.165978 5.45704 1.03101 1.83342 4.38887 0.740961C4.64987 0.651489 4.91897 0.588859 5.18897 0.553965H5.29696C5.54986 0.517281 5.80096 0.500138 6.05296 0.500138H6.15195ZM14.1709 3.3276C13.8019 3.20145 13.3969 3.39918 13.2619 3.77496C13.1359 4.15075 13.3339 4.56232 13.7119 4.69563C14.2888 4.91037 14.6749 5.47494 14.6749 6.10035V6.12808C14.6578 6.33297 14.7199 6.53071 14.8459 6.68281C14.9719 6.83491 15.1609 6.92349 15.3589 6.94228C15.7279 6.93244 16.0428 6.63807 16.0698 6.2614V6.15492C16.0968 4.90142 15.3328 3.76602 14.1709 3.3276Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="btn-text">Donate for life</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tp-blog-post-area pt-120 pb-80 d-none">
    <div class="container container-1424">
        <div class="row <?php echo esc_attr($post_center); ?> ">
            <div class="col-xl-9 col-lg-8">
                <div class="tp-postbox-wrapper tp-postbox-details-wrap mr-85 mb-40">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>
                            <?php
                            echo get_template_part('templates/content', get_post_format());
                            ?>
                            <?php
                        endwhile;
                    else:
                        ?>
                        <p>Post Not Found</p>
                        <?php
                    endif;
                    ?>
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>

                    <?php if ($prev_post || $next_post): ?>
                        <div class="tp-blog-navigation-wrap mb-35 mt-90">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-lg-6 col-md-6">
                                    <?php if ($next_post): ?>
                                        <div class="tp-blog-navigation mb-30">
                                            <a href="<?php echo get_permalink($prev_post->ID); ?>">
                                                <i class="far fa-arrow-left"></i>
                                                <div class="tp-blog-navigation-text">
                                                    <span>Previous Post</span>
                                                    <h4 class="tp-blog-navigation-title">
                                                        <?php echo get_the_title($prev_post->ID); ?>
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-6">
                                    <?php if ($next_post): ?>
                                        <div class="tp-blog-navigation mb-30 text-end">
                                            <a class="justify-content-end" href="<?php echo get_permalink($next_post->ID); ?>">
                                                <div class="tp-blog-navigation-text">
                                                    <span>Next Post</span>
                                                    <h4 class="tp-blog-navigation-title">
                                                        <?php echo get_the_title($next_post->ID); ?>
                                                    </h4>
                                                </div>
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php get_template_part('templates/biography'); ?>

                    <?php
                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;
                    ?>

                </div>
            </div>
            <?php if (is_active_sidebar('blog-sidebar')): ?>
                <div class="col-xl-3 col-lg-4">
                    <div class="tp-blog-sidebar mb-40">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();