<?php

function kindaid_logo() {
    $kindaid_logo_url = get_theme_mod('logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
    ?>
    <a href="<?php echo home_url('/'); ?>"><img data-width="108" src="<?php echo esc_url($kindaid_logo_url); ?>" alt="<?php echo bloginfo(); ?>"></a>
    <?php
}
function kindaid_offcanvas_logo() {
    $kindaid_offcanvas_logo_url = get_theme_mod('offcanvas_logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
    ?>
    <a href="<?php echo home_url('/'); ?>"><img data-width="108" src="<?php echo esc_url($kindaid_offcanvas_logo_url); ?>" alt="<?php echo bloginfo(); ?>"></a>
    <?php
}