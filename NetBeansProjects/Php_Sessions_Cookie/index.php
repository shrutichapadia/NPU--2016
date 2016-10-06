
<?php

//session timing and duration management


$duration = 60*60*24*365;
session_set_cookie_params($duration,'/');
session_start();

//create a cart array
if(empty($_SESSION['shopping_cart'])){
        $_SESSION['shopping_cart'] = array();
}


// Create books table

$book = array();

$book['908765'] = array('title' => 'java', 'price' => '50.50');
$book['908766'] = array('title' => 'javaScript', 'price' => '25.50');
$book['909969'] = array('title' => 'C++', 'price' => '30.50');
$book['912345'] = array('title' => 'AngularJS', 'price' => '29.50');


require_once('cart.php');

// to performe action

$action = filter_input(INPUT_POST, 'action');
if($action ===NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action ===NULL){
        $action = 'show_add_book';
        
    }
}

//add and update cart

if($action == 'add'){
    $isbn = filter_input(INPUT_POST, 'isbn');
    $bookqantity = filter_input(INPUT_POST, 'bookquantity');
    add_book($isbn, $bookqantity);
    include ('cart_view.php');
    
} else if ($action == 'update'){
    $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    
    foreach($new_qty_list as $isbn =>$qty){
        if($_SESSION['shop_cart']['qty'] != $qty){
            update_book($isbn, $qty);
        }
    }
    include ('cart_view.php');
} else if($action == 'show_cart'){
    include('cart_view.php');
} else if($action == 'show_add_book'){
    include('add_book_view.php');
    
} else if ($action == 'empty_cart'){
    include('cart_view.php');
}

?>


