<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>

<header class="woocommerce-products-header">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

    <div class="inside-hero-two"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/media/img_79.jpg);margin-top: 140px;">
        <div class="container">
            <h2 class="page-title"><?php woocommerce_page_title(); ?></h2>
            <p>Get our all info and also can message us directly from here</p>
        </div>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape_24.svg" alt="" class="shapes shape-one"> -->
    </div>

    <!-- <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1> -->
    <?php endif; ?>
    <div class="product-section-five">
        <div class="box-layout">
            <div class="row gx-xxl-5">
                <div class="col-xl-3 col-lg-4">
                    <div class="shop-filter-sidebar mt-110 md-mt-10 md-mb-70">
                        <div class="search-area">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="bi bi-search"></i></button>
                            </form>
                        </div> <!-- /.search-area -->
                        <div class="accordion shop-filter-accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        Categories
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <ul class="style-none category-filter">
                                            <?php
										      $order = 'asc';
                                              $hide_empty = false;
                                              $cat_args = array(
                                                'orderby' => $orderby,
                                                'order' => $order,
                                                'hide_empty' => $hide_empty,
                                                );
                                               $product_categories = get_terms('product_cat', $cat_args);
											   foreach ($product_categories as $product_categorie):
                                             ?>
                                            <li class="nav-item mb-2">
                                                <a class=""
                                                    href="<?php echo get_term_link($product_categorie); ?>"><?php echo $product_categorie->name; ?></a>
                                            </li>
                                            <?php endforeach;?>
                                        </ul> <!-- /.category-filter -->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item d-none">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        Filter by Price
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <ul class="style-none price-filter-input">
                                            <li>
                                                <input type="checkbox" name="price" value="lowTohigh"
                                                    class="price-check-btn">
                                                <label>Price (Low > High)</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="price" value="highTolow"
                                                    class="price-check-btn">
                                                <label>Price (High > Low)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.shop-filter-accordion -->
                    </div> <!-- /.shop-filter-sidebar -->
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="shop-page-header d-sm-flex align-items-center justify-content-between">
                        <?php 
						if ( woocommerce_product_loop() ) {

							/**
							 * Hook: woocommerce_before_shop_loop.
							 *
							 * @hooked woocommerce_output_all_notices - 10
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
					      ?>

                        <ul class="shop-filter-one style-none d-sm-flex align-items-center">
                            <!-- <li class="ms-5">
                                <a href="#" class="theme-btn-five position-relative"> Shop by Wholesale</a>
                            </li> -->
                            <li class="ms-5 d-none">
                                <select class="theme-select-menu">
                                    <option value="Popularity">Popularity</option>
                                    <option value="Trending items">Trending items</option>
                                    <option value="Newest items">Newest items</option>
                                </select>
                            </li>
                        </ul>
                    </div> <!-- /.shop-page-header -->
                    <div class="products-wrapper mt-55 md-mt-30">
                        <div class="row">
                            <?php


	                           woocommerce_product_loop_start();

	                            if ( wc_get_loop_prop( 'total' ) ) {
		                                while ( have_posts() ) {
		                         	         the_post();

		                         	        /**
		 	                                 * Hook: woocommerce_shop_loop.
			                                  */
			                               do_action( 'woocommerce_shop_loop' );

			                                wc_get_template_part( 'content', 'product' );
		                                      }
	                                      }

	                                    woocommerce_product_loop_end();

	                                      /**
	                                      * Hook: woocommerce_after_shop_loop.
	                                       *
	                                      * @hooked woocommerce_pagination - 10
	                                         */
	                                       do_action( 'woocommerce_after_shop_loop' );
                                          } else {
	                                           /**
	                                         * Hook: woocommerce_no_products_found.
	                                            *
	                                           * @hooked wc_no_products_found - 10
	                                              */
	                                           do_action( 'woocommerce_no_products_found' );
                                        }
                                ?>
                        </div>
                    </div> <!-- /.products-wrapper -->
                </div>
            </div>
        </div> <!-- /.box-layout -->
    </div> <!-- /.product-section-five -->
<?php
	
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );