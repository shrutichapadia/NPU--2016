<?php

$duration = 60*60*24*7;
session_set_cookie_params($duration, '/');
session_start();

if(empty($_SESSION['shop_cart'])){
    $_SESSION['shop_cart']=array();
}
$books = array();
$books['123456789'] = array('title' => 'C#', 'price' => '49.50');
$books['567575778'] = array('title' => 'Java', 'price' => '59.50');
$books['151515565'] = array('title' => 'PHP', 'price' => '39.50');

// Include cart functions
//require_once('/controllers/admin/cart.php');
$action = filter_input(INPUT_POST, 'action');
if($action === NULL){
    $action= filter_input(INPUT_GET, 'action');
    if($action === null){
        $action ='add_book';
    }
}
include_once "models/Page_data.php";
$pageData = new PageData();
$pageData->title = "NPU Book Store";
$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');

//connect to database
include_once "db/dbcontext.php";
$db = DBContext::getDB();

$pageData->navigation = include_once "views/navigation_front.php";
$navigationIsClicked = isset($_GET["controller"]);
if ($navigationIsClicked) {
    $controller = $_GET["controller"];
} else {
    $controller = "guest";
}
$pageData->content = include_once "controllers/$controller/index.php";
include_once "views/page.php";

if($action =='add'){
    $isbn = filter_input(INPUT_POST, 'isbn');
    $bookqty = filter_input(INPUT_POST, 'bookqty');
    
    add_book($isbn,$bookqty);
    include('cart_view.php');
    
} else if ($action == 'update'){
    $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY );

    foreach($new_qty_list as $isbn=> $qty){
    if($_SESSION['shop_cart'][$isbn]['qty'] != $qty){
            update_book($isbn, $qty);
        }
    }
include('cart_view.php');}
 elseif ($action == 'show_cart') {
    include('cart_view.php');
} else if ($action == 'add_book') {
    include('add_book_view.php');
} else if ($action == 'empty_cart') {
    unset($_SESSION['shop_cart']);
    include('cart_view.php');
}
if($action =='checkout'){
    include('checkout.php');
}