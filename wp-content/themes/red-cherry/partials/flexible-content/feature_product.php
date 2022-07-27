<!-- 
			=============================================
				Product Section Two
			============================================== 
			-->
<div class="product-section-two mt-170 lg-mt-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-sm-8">
                <div class="title-style-six text-center text-sm-start xs-pb-20">
                    <h2 class="title"><?php the_sub_field('title')?></h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-4 d-flex justify-content-center justify-content-sm-end">
                <ul class="slider-arrows product-slider-arrow-one d-flex style-none">
                    <li class="prev_p2 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
                    <li class="next_p2 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <?php $product_ids = get_sub_field( 'products' );?>

    <div class="box-layout mt-90 lg-mt-40">
        <div class="product_slider_two product_slider_space">

            <?php
				foreach ( $product_ids as $product_id ):?>
            <div class="item">
                <?php
					echo get_single_product_html($product_id);?>
            </div>
            <?php
				endforeach;
				?>

        </div> <!-- /.box-layout -->
    </div> <!-- /.product-section-two -->