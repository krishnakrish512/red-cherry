<?php

$include_files = [
    "src/setup.php",
    "src/acf.php",
    "src/product.php",
    "src/helper.php",
    "src/ajax_product.php",
    // "src/woocommerce_hooks.php",

];

array_walk( $include_files, function ( $file ) {
    if ( ! locate_template( $file, true, true ) ) {
        trigger_error( sprintf( "Could not find %s", $file ), E_USER_ERROR );
    }
} );

unset( $include_files );

// svg support
// function edf_mime_types($mimes) {
// 	$mimes['svg'] = 'image/svg+xml';
// 	return $mimes;
// }
// add_filter('upload_mimes', 'edf_mime_types');


