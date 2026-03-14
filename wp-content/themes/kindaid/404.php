<?php get_header(); ?>
<div class="tp-error-page-area pt-120 pb-120">
    <div class="container container-1424">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-9">
                <div class="tp-error-box text-center">
                    <h2 class="tp-error-title" >404</h2>
                    <h4 class="tp-error-subtitle mb-15">Oops! Oage not found</h4>
                    <div class="row justify-content-center mb-15">
                        <div class="col-lg-7">
                            <p>Whoops, this is embrassing. Looks like the page you are looking for was not found.</p>
                        </div>
                    </div>
                    <div class="tp-postbox-btn">
                        <a class="tp-btn tp-btn-animetion mr-5 mb-10"
                            href="<?php echo home_url('/'); ?>">
                            <span class="btn-text">Back to home</span>
                            <span class="btn-icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();