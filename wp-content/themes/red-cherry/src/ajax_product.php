<?php
function ecommerce_add_cart_ajax_callback() {
    $quantity = ( $_POST['quantity'] ) ? $_POST['quantity'] : 1;
    if ( is_array( $quantity ) ) {
        foreach ( $quantity as $item ) {
            WC()->cart->add_to_cart( $item['id'], $item['quantity'] );
        }
        woocommerce_mini_cart();
        die();
    }

    $product_id   = $_POST['product_id'];
    $variation    = ( $_POST['variation'] ) ? json_decode( stripslashes( $_POST['variation'] ), true ) : [];
    $variation_id = ( $_POST['variation_id'] ) ? $_POST['variation_id'] : null;


    if ( ! isset( $_POST['variation_id'] ) && isset( $_POST['variation'] ) ) {
        $product_data_store = new WC_Product_Data_Store_CPT();
        $product            = new WC_Product( $product_id );
        $variation_id       = $product_data_store->find_matching_product_variation( $product, $variation );
    }

    WC()->cart->add_to_cart( $product_id, $quantity, $variation_id, $variation );

    woocommerce_mini_cart();

    die();
}

add_action( 'wp_ajax_nopriv_ecommerce_add_cart_ajax', 'ecommerce_add_cart_ajax_callback' );
add_action( 'wp_ajax_ecommerce_add_cart_ajax', 'ecommerce_add_cart_ajax_callback' );

function ecommerce_cart_meta_ajax_callback() {

	?>
<strong><?= WC()->cart->get_cart_contents_count() ?></strong>

<?php



	die();

}



add_action( 'wp_ajax_nopriv_ecommerce_cart_meta_ajax', 'ecommerce_cart_meta_ajax_callback' );

add_action( 'wp_ajax_ecommerce_cart_meta_ajax', 'ecommerce_cart_meta_ajax_callback' );


function ecommerce_quick_view_ajax_callback() {
    $product_id = $_POST['product_id'];

    get_product_quick_view_html( $product_id );

    die();
}

add_action( 'wp_ajax_nopriv_ecommerce_quick_view_ajax', 'ecommerce_quick_view_ajax_callback' );
add_action( 'wp_ajax_ecommerce_quick_view_ajax', 'ecommerce_quick_view_ajax_callback' );

