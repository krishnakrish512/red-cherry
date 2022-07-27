<?php


function get_single_product_html($product_id)
{
    $product = wc_get_product($product_id);
    ?>



<div class="product-block-two">
    <?php
            $image = wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>
    <div class="img-holder">
        <a href="<?= $product->get_permalink() ?>" class="d-flex align-items-center justify-content-center h-100">
            <img src="<?= $image ?>" alt="" class="product-img tran4s">
        </a>
        <a href="<?= $product->add_to_cart_url() ?>" class="cart-icon" data-product_id="<?= $product->get_id() ?>"
            data-product-type="<?= $product->get_type() ?>" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
    </div> <!-- /.img-holder -->
    <div class="product-meta">
        <a href="<?= $product->get_permalink() ?>" class="product-title"><?= $product->get_name() ?></a>

        <div class="price"><?= $product->get_price_html() ?></div>
    </div> <!-- /.product-meta -->
</div> <!-- /.product-block-two -->


<?php
}




function get_best_selling_product_html($product_id)
{
    $product = wc_get_product($product_id);
    ?>



<div class="product-block-three">
    <?php
            $image = wp_get_attachment_image_url($product->get_image_id(), 'full'); ?>
    <div class="img-holder">
        <a href="<?= $product->get_permalink() ?>" class="d-flex align-items-center justify-content-center h-100">
            <img src="<?= $image ?>" alt="" class="product-img tran4s">
        </a>
        <a href="<?= $product->add_to_cart_url() ?>" class="cart-icon" data-product_id="<?= $product->get_id() ?>"
            data-product-type="<?= $product->get_type() ?>" title="Add To Cart"><i class="bi bi-cart-check"></i></a>
    </div> <!-- /.img-holder -->
    <div class="product-meta">
        <a href="<?= $product->get_permalink() ?>" class="product-title"><?= $product->get_name() ?></a>

        <div class="price"><?= $product->get_price_html() ?></div>
    </div> <!-- /.product-meta -->
</div> <!-- /.product-block-two -->


<?php
}