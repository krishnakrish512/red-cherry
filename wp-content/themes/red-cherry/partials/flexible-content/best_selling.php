<!--
			=====================================================
				Product Section Three
			=====================================================
			-->
<div class="product-section-three mt-130 pt-130 pb-150 lg-mt-100 lg-pt-80 lg-pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-sm-8">
                <div class="title-style-six text-center text-sm-start xs-pb-20">
                    <h2 class="title">Best Selling</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-4 d-flex justify-content-center justify-content-sm-end">
                <ul class="slider-arrows product-slider-arrow-one d-flex style-none">
                    <li class="prev_p3 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
                    <li class="next_p3 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
$args = array(
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 5,
);
$bset_selling_products = get_posts($args);

?>

    <div class="box-layout mt-90 lg-mt-40">
        <div class="product_slider_three product_slider_space">
            <?php
				foreach ( $bset_selling_products as $product_id ):?>
            <div class="item">
                <?php
					echo get_single_product_html($product_id);?>
            </div>
            <?php endforeach;?>

        </div>
    </div> <!-- /.box-layout -->
</div> <!-- /.product-section-three -->