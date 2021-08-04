<?php
add_action( 'woocommerce_check_cart_items', 'check_total' );
function check_total() {
  if( is_cart() || is_checkout() ) {
    global $woocommerce, $product;
​
    $total_quantity = 0;
    $max_quantity = 2;
​
    foreach ( $woocommerce->cart->cart_contents as $product ) {
      if ( has_term( 'bolsones', 'product_cat', $product['product_id'] )) {
        $total_quantity += $product['quantity'];
      }
    }
​
    if ($total_quantity > $max_quantity) {
      wc_add_notice( sprintf( '<p>Solo puedes comprar 2 productos de bolsones, en cualquiera de sus pesos.</p>', $total_quantity), 'error' );
    }
  }
}
