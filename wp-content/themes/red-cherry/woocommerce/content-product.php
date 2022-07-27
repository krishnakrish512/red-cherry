<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<?php
if (is_shop() || is_archive()):
    ?>
<!-- <div class="product col-md-4 col-sm-6 sf-dress" <?php wc_product_class('', $product); ?>> -->
    <?php endif; ?>
    <!-- <div class="row"> -->
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        // do_action('woocommerce_before_shop_loop_item'); ?>

        <div class="col-xl-4 col-md-6" data-aos="fade-up">
            <div class="product-block-three mb-45">
                <?php $image = wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>
                <div class="img-holder">
                    <a href="<?= $product->get_permalink() ?>"
                        class="d-flex align-items-center justify-content-center h-100">
                        <img src="<?= $image ?>" alt="" class="product-img tran4s">
                    </a>
                    <a href="<?= $product->add_to_cart_url() ?>" class="cart-icon" title="Add To Cart"><i
                            class="bi bi-cart-check"></i></a>
                </div> <!-- /.img-holder -->
                <div class="product-meta ">
                    <a href="<?= $product->get_permalink() ?>">
                        <?php
                    /**
                     * Hook: woocommerce_shop_loop_item_title.
                     *
                     * @hooked woocommerce_template_loop_product_title - 10
                     */
                    do_action('woocommerce_shop_loop_item_title');
                    ?>
                    </a>
                    <div class="price">
                        <?php
                /**
                 * Hook: woocommerce_after_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_rating - 5
                 * @hooked woocommerce_template_loop_price - 10
                 */
                do_action('woocommerce_after_shop_loop_item_title');
                ?>


                    </div>
                </div> <!-- /.product-meta -->
            </div> <!-- /.product-block-three -->
        </div>
        <?php
        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        //    do_action('woocommerce_after_shop_loop_item');
        //
        ?>
    <!-- </div> -->
    <?php
if (is_shop() || is_archive()):
    ?>
<!-- </div> -->
<?php
endif;