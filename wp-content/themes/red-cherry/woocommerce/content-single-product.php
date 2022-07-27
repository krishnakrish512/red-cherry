<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>

<!-- 
			=============================================
				Product Details One
			============================================== 
			-->
<div class="product-details-one mt-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 order-lg-2">
                <div class="tab-content product-img-tab-content h-auto bg-transparent">

                    <?php
                                            $image_ids = $product->get_gallery_image_ids();

                                            if (empty($image_ids)) {
                                                $image_ids = [$product->get_image_id()];

                                            } else {
                                                array_unshift($image_ids, $product->get_image_id());
                                            }

                                            foreach ($image_ids as $image_id):
                                                $image = wp_get_attachment_image_url($image_id, 'full');
//                                                $image = getResizedImage($image);
                                                ?>
                    <div class="tab-pane fade show active h-100" id="img1" role="tabpanel">
                        <a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center"
                            data-fancybox="" href="<?= wp_get_attachment_image_url('full') ?>" tabindex="-1">
                            <img src="<?= wp_get_attachment_image_url('full') ?>" alt="" class="m-auto">
                        </a>
                    </div>
                    <?php endforeach;?>
                    <div class="tab-pane fade h-100" id="img2" role="tabpanel">
                        <a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center"
                            data-fancybox="" href="<?= wp_get_attachment_image_url($image_id, 'full') ?>" tabindex="-1">
                            <img src="<?= wp_get_attachment_image_url($image_id, 'full') ?>" alt="" class="m-auto">
                        </a>
                    </div>
                    <div class="tab-pane fade h-100" id="img3" role="tabpanel">
                        <a class="fancybox h-100 w-100 d-flex align-items-center justify-content-center"
                            data-fancybox="" href="<?= wp_get_attachment_image_url($image_id, 'full') ?>" tabindex="-1">
                            <img src="<?= wp_get_attachment_image_url($image_id, 'full') ?>" alt="" class="m-auto">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 order-lg-1">
                <ul class="nav nav-tabs flex-lg-column product-img-tab" id="myTab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#img1" type="button"
                            role="tab" aria-selected="true"><img
                                src="<?= wp_get_attachment_image_url($image_id, 'full') ?>" alt=""
                                class="m-auto"></button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#img2" type="button" role="tab"
                            aria-selected="false"><img src="<?= wp_get_attachment_image_url($image_id, 'full') ?>"
                                alt="" class="m-auto"></button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#img3" type="button" role="tab"
                            aria-selected="false"><img src="<?= wp_get_attachment_image_url($image_id, 'full') ?>"
                                alt="" class="m-auto"></button>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-3">
                <div class="product-info ps-xxl-5 md-mt-50">
                    <!-- <div class="stock-tag">In Stock</div> -->
                    <h3 class="product-name"><?php the_title(); ?></h3>

                    <div class="price"><?php echo $product->get_price_html(); ?></div>
                    <!-- <p class="availability">38 Piece Available </p> -->
                    <p class="description-text"><?php the_excerpt(); ?></p>
                    <?php if ($product->is_in_stock()) : ?>

                    <div class="customize-order">
                        <div class="row">
                            <div class="col-xxl-11">
                                <!-- <form class="cart mb-0 " method="post" enctype='multipart/form-data'> -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <div class="quantity mt-25">
                                            <h6>Quantity</h6>
                                            <div class="button-group style-none d-flex align-items-center">

                                                <?php woocommerce_template_single_add_to_cart();?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div> <!-- /.customize-order -->
                    <?php endif; ?>

                </div> <!-- /.product-info -->
            </div>
        </div>
        <?php $product_tabs = apply_filters('woocommerce_product_tabs', array());
                        if (isset($product_tabs['reviews'])) {
//                            var_dump($product_tabs);
                            unset($product_tabs['reviews']);
//                           var_dump($product_tabs);
                        }
                        ?>
        <?php if (!empty($product_tabs)) : ?>
        <div class="product-review-tab mt-150 lg-mt-100">
            <ul class="nav nav-tabs" role="tablist">
                <?php foreach ($product_tabs as $key => $product_tab) : ?>
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#item<?php echo esc_attr($key); ?>" type="button" role="tab"
                        aria-selected="true"><?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?></button>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content mt-50 lg-mt-20">
                <?php foreach ($product_tabs as $key => $product_tab) : ?>
                <div class="tab-pane fade show active" id="item<?php echo esc_attr($key); ?>" role="tabpanel">
                    <div class="row gx-5">
                        <div class="col-xl-6">
                            <!-- <h5>Specifications:</h5> -->
                            <p><?php
                                                if (isset($product_tab['callback'])) {
                                                    call_user_func($product_tab['callback'], $key, $product_tab);
                                                }
                                                ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div> <!-- /.product-review-tab -->
        <?php endif ;?>

        <div class="vcamp-feature-section-ten border-bottom mt-60 pb-50 lg-pb-20">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style-ten text-center mb-40">
                        <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_84.svg" alt=""
                                class="tran3s"></div>
                        <h4>Free Delivery within <br>3 days.</h4>
                    </div> <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style-ten text-center mb-40">
                        <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_85.svg" alt=""
                                class="tran3s"></div>
                        <h4>7 Days refund <br> policy.</h4>
                    </div> <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style-ten text-center mb-40">
                        <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_86.svg" alt=""
                                class="tran3s"></div>
                        <h4>Secure payment <br> methods</h4>
                    </div> <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style-ten text-center mb-40">
                        <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_87.svg" alt=""
                                class="tran3s"></div>
                        <h4>Store pickup <br>facility.</h4>
                    </div> <!-- /.card-style-ten -->
                </div>
            </div>
        </div> <!-- /.vcamp-feature-section-ten -->
    </div>
</div> <!-- /.product-details-one -->

<?php $related_products = wc_get_related_products(get_the_ID());
            ?>
<?php if ($related_products) : ?>
<div class="related-product mt-150 lg-mt-100">
    <div class="container">
        <div class="border-bottom pb-150 lg-pb-60">
            <div class="row align-items-center justify-content-between pb-50">
                <div class="col-md-6 col-sm-8">

                    <div class="title-style-ten text-center text-sm-start xs-pb-30">
                        <h2 class="title">Releted Products</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 d-flex justify-content-center justify-content-sm-end">
                    <ul class="slider-arrows product-slider-arrow-one d-flex style-none">
                        <li class="prev_p4 slick-arrow ripple-btn" style=""><i class="bi bi-chevron-left"></i>
                        </li>
                        <li class="next_p4 slick-arrow ripple-btn" style=""><i class="bi bi-chevron-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product_slider_four product_slider_space">
                <?php foreach ($related_products

                              as $related_product) : ?>
                <?php
                            $post_object = get_post($related_product);
                            setup_postdata($GLOBALS['post'] =& $post_object);
                            $wc_related_product = wc_get_product($related_product); ?>
                <div class="item">
                    <div class="product-block-two">
                        <div class="img-holder">
                            <a href="<?php the_permalink(); ?>"
                                class="d-flex align-items-center justify-content-center h-100">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="product-img tran4s">
                            </a>
                            <a href="<?= $wc_related_product->add_to_cart_url() ?>" class="cart-icon"
                                title="Add To Cart" data-product_id="<?= $wc_related_product->get_id() ?>"><i
                                    class="bi bi-cart-check"></i></a>
                        </div> <!-- /.img-holder -->
                        <div class="product-meta">
                            <div class="d-lg-flex align-items-center justify-content-between">
                                <a href="<?php the_permalink(); ?>" class="product-title"><?php the_title() ?></a>

                            </div>
                            <div class="price"><?php echo $wc_related_product->get_price_html(); ?></div>
                        </div> <!-- /.product-meta -->
                    </div> <!-- /.product-block-two -->
                </div>

                <?php endforeach;
                        wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>
<?php endif;
            ?>