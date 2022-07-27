<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords"
        content="Digital marketing agency, Digital marketing company, Digital marketing services, sass, software company">
    <meta name="description" content="vCamp Creative Personal Service HTML Template designed for personal service.">
    <meta property="og:site_name" content="vCamp">
    <meta property="og:url" content="https://heloshape.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Red Cherry">
    <meta name='og:image' content='images/assets/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#202020">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#202020">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#202020">
    <title>Red Cherry</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Andika+New+Basic:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">


</head>
<?php wp_head(); ?>

<body>
    <div class="main-page-wrapper">


        <?php $Header = get_field('header', 'option') ?>

        <!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
        <header class="theme-main-menu sticky-menu theme-menu-one">
            <div class="inner-content">

                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();
                } ?>

                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo"><a href="<?= get_home_url(); ?>"><img src="<?= $logo ?>" alt="" width="90"></a>
                    </div>
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">

                            <!-- <ul class="navbar-nav"> -->

                            <?php
                               wp_nav_menu(array(
                                   'theme_location' => 'primary',
                                    // 'container' => 'navbar-nav',
                                    'menu_class' => 'navbar-nav nav-item',
                                 )); ?>



                            <!-- </ul> -->
                            <div class="mobile-content d-block d-lg-none">
                                <form action="<?= get_home_url() ?>" class="search-form">
                                    <input type="text" placeholder="Search here..">
                                    <button><i class="bi bi-search"></i></button>
                                </form>

                                <div class="address-block">
                                    <h4 class="title">Our Address</h4>
                                    <p><?= $Header['address'] ?></p>
                                    <p>Urgent issue? call us at <br><a
                                            href="tel:<?= $Footer['phone_number'] ?>"><?= $Footer['phone_number'] ?></a>
                                    </p>
                                </div>
                            </div> <!-- /.mobile-content -->
                        </div>
                    </nav>
                    <div class="right-widget d-flex align-items-center">
                        <div class="d-none d-sm-block">
                            <?php
                        if (!is_user_logged_in()):
                            ?>

                            <a href="<?= get_permalink(get_option('woocommerce_myaccount_page_id')) ?>"
                                class="d-flex align-items-center login-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_01.svg"
                                    alt="">
                                <span>Sign In</span>
                            </a>
                            <?php
                        endif;
                        if (is_user_logged_in()):
                            ?>
                            <a href="<?= get_permalink(get_option('woocommerce_myaccount_page_id')) ?>"
                                class="d-flex align-items-center login-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_01.svg"
                                    alt="">
                                <span>Log In</span>
                            </a>
                            <?php endif; ?>
                        </div>

                        
                        <div id="top-cart" class="cart-group-wrapper md-space-fix">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_71.svg"
                                    alt="" class="m-auto">
                                <span class="item-count"><?= WC()->cart->get_cart_contents_count() ?></span>
                            </button>


                            <div class="dropdown-menu dropdown-menu-end">
                                <?php woocommerce_mini_cart(); ?>

                            </div>
                        </div>
                        <button class="sidebar-nav-button d-none d-lg-block" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img
                                src="images/icon/icon_68.svg" alt=""></button>
                    </div> <!-- /.right-widget -->
                </div>
            </div> <!-- /.inner-content -->
        </header> <!-- /.theme-main-menu -->