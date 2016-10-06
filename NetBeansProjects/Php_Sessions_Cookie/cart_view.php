<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        ?>
    </body>
</html>


<!--if($action == 'add'){
    $isbn = filter_input(INPUT_POST, 'isbn');
    $bookqantity = filter_input(INPUT_POST, 'bookquantity');
    add_book($isbn, $bookqantity);
    include ('cart_view.php');
 else if ($action == 'update'){
    $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    
    foreach($new_qty_list as $isbn =>$qty){
        if($_SESSION['shop_cart']['qty'] != $qty){
            update_book($isbn, $qty);
        }
    }
    include ('cart_view.php');
} else if($action == 'show_cart'){
    include('cart_view.php');

emptycart too

-->