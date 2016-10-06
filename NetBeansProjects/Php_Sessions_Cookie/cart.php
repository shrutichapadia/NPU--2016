<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// add a book to the cart

function add_book($isbn, $quantity){
    global $book;
    if($quantity <1)        
        return;
    //if books already in cart update quantity
    if(isset($_SESSION['shop_cart'][$isbn])) {
        $quantity +=$_SESSION['shop_cart'][$isbn]['qty'];
        update_book($isbn,$quantity);
        return;
    }
    
    //add book
    
    $price = $book[$isbn]['price'];
    $total = $price * $quantity;
    $book = array(
        'title'=>$book[$isbn]['title'],
        'price'=>$price,
        'qty'=> $quantity,
        'total' =>$total
    );
    $_SESSION['shop_cart'][$isbn]=$book;
    
}

//Update an book in the cart

function update_book($isbn,$quantity){
    global $book;
    $quantity = (int) $quantity;
    if(isset($_SESSION['shop_cart'][$isbn])){
        if($quantity <=0){
            unset($_SESSION['shop_cart'][$isbn]);
            
        } else{
            $_SESSION['shop_cart'][$isbn]['qty']= $quantity;
            $total = $_SESSION['shop_cart'][$isbn]['price']*
                    $_SESSION['shop_cart'][$isbn]['qty'];
            $_SESSION['shop_cart'][$isbn]['total'] = $total;
            
        }
    }
}

//cart subtotal

function get_subtotal(){
    $subtotal = 0;
    foreach($_SESSION['shop_cart']as $book){
        $subtotal+=$book['total'];
        
    }
    $subtotal = number_format($subtotal,2);
    return $subtotal;
        
    
}
?>