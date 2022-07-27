<?php
function red_cherry_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    add_theme_support('woocommerce');


    register_nav_menus([
        'primary' => 'Primary',
        'footer'=> 'Footer'
    ]);
    add_image_size('category-thumb', 350, 250, true);
    add_image_size('thumb-crazy', 375, 275, true);

}

add_action('after_setup_theme', 'red_cherry_setup');

function red_cherry_scripts()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css');
    
    
    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/vendor/jquery.min.js', [], '1.0', true);
    wp_enqueue_script('bundle-script', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], '1.0', true);
    wp_enqueue_script('aos-script', get_template_directory_uri() . '/assets/vendor/aos-next/dist/aos.js', [], '1.0', true);
    wp_enqueue_script('min-script', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', [], '1.0', true);
    wp_enqueue_script('counterup-script', get_template_directory_uri() . '/assets/vendor/jquery.counterup.min.js', [], '1.0', true);
    wp_enqueue_script('wayponits-script', get_template_directory_uri() . '/assets/vendor/jquery.waypoints.min.js', [], '1.0', true);
    wp_enqueue_script('fancybox-script', get_template_directory_uri() . '/assets/vendor/fancybox/dist/jquery.fancybox.min.js', [], '1.0', true);
    wp_enqueue_script('validator-script', get_template_directory_uri() . '/assets/vendor/validator.js', [], '1.0', true);
    wp_enqueue_script('intltelinput-script', get_template_directory_uri() . '/assets/vendor/intl-tel/build/js/intlTelInput.min.js', [], '1.0', true);
    wp_enqueue_script('selectize-script', get_template_directory_uri() . '/assets/vendor/selectize.js/selectize.min.js', [], '1.0', true);
    wp_enqueue_script('isotope-script', get_template_directory_uri() . '/assets/vendor/isotope.pkgd.min.js', [], '1.0', true);
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/theme.js', [], '1.0', true);

     wp_enqueue_script('woocommerce-custom-script', get_template_directory_uri() . '/assets/js/woocommerce-custom.js', [], '1.0', true);

    wp_localize_script('woocommerce-custom-script', 'es',
        [
            'ajax_url' => admin_url('admin-ajax.php')
        ]);


}

add_action('wp_enqueue_scripts', 'red_cherry_scripts');
