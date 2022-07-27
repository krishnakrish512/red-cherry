<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="inside-hero-nine">
    <div class="breadcrumb-area">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <nav class="breadcrumb-style-one mt-20">
                    <?php
		                  /**
		                  * woocommerce_before_main_content hook.
		                  *
		                  * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                        * @hooked woocommerce_breadcrumb - 20
		                 */
		                  do_action( 'woocommerce_before_main_content' );
                    ?>
                </nav>
                <div class="share-dropdown mt-20">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-expanded="false">
                        Share
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <ul class="d-flex justify-content-between social-icon style-none">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-email3"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.breadcrumb-area -->
</div> <!-- /.inside-hero-nine -->



<?php while ( have_posts() ) : the_post(); ?>

<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */