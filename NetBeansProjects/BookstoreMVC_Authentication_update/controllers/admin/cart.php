<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: cart.php

 * Date and Time: Jul 29, 2016 9:39:15 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


function add_book($isbn, $quantity) {
    global $books;
    if ($quantity < 1) return;

    // If book already exists in cart, update quantity
    if (isset($_SESSION['shop_cart'][$isbn])) {
        $quantity += $_SESSION['shop_cart'][$isbn]['qty'];
        update_book($isbn, $quantity);
        return;
    }

    // Add book
    $price = $books[$isbn]['price'];
    $total = $price * $quantity;
    $book = array(
        'title' => $books[$isbn]['title'],
        'price' => $price,
        'qty'  => $quantity,
        'total' => $total
    );
    $_SESSION['shop_cart'][$isbn] = $book;
}

// Update an book in the cart
function update_book($isbn, $quantity) {
    global $books;
    $quantity = (int) $quantity;
    if (isset($_SESSION['shop_cart'][$isbn])) {
        if ($quantity <= 0) {
            unset($_SESSION['shop_cart'][$isbn]);
        } else {
            $_SESSION['shop_cart'][$isbn]['qty'] = $quantity;
            $total = $_SESSION['shop_cart'][$isbn]['price'] *
                     $_SESSION['shop_cart'][$isbn]['qty'];
            $_SESSION['shop_cart'][$isbn]['total'] = $total;
        }
    }
}

// Get cart subtotal
function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['shop_cart'] as $book) {
        $subtotal += $book['total'];
    }
    $subtotal = number_format($subtotal, 2);
    return $subtotal;
}


?>