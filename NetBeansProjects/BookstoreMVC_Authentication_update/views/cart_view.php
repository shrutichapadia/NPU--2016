<!DOCTYPE html>

<!--


Student Info: Name=Chapadia Shruti, ID=15574CS

Subject: CS526(B)_HWNo3_Summer_2016

Author: shruti

Filename: cart_view.php

Date and Time: Jul 28, 2016 10:14:01 PM

Project Name: BookstoreMVC_Authentication_update


-->

<html>
    <head>
        <meta charset="UTF-8">
        <title> NPU Bookstore </title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>

        <header>
            <h1>NPU Bookstore</h1>
        </header>
        <section id="main">

            <h1>Your Cart</h1>
            <?php if (!isset($_SESSION['shop_cart']) || count($_SESSION['shop_cart']) == 0) : ?>
                <p>There are no books in your cart.</p>
            <?php else: ?>
                <form action="." method="post">
                    <input type="hidden" name="action" value="update"/>
                    <table>
                        <tr id="cart_header">
                            <th>Book</th>
                            <th>Book Price</th>
                            <th>Quantity</th>
                            <th>Book Total</th>
                        </tr>

                        <?php
                        foreach ($_SESSION['shop_cart'] as $isbn => $book) :
                            $price = number_format($book['price'], 2);
                            $total = number_format($book['total'], 2);
                            ?>
                            <tr>
                                <td>
                                    <?php echo $book['title']; ?>
                                </td>
                                <td>
                                    $<?php echo $price; ?>
                                </td>
                                <td>
                                    <input type="text"
                                           name="newqty[<?php echo $isbn; ?>]"
                                           value="<?php echo $book['qty']; ?>"/>
                                </td>
                                <td>
                                    $<?php echo $total; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3"><b>Subtotal</b></td>
                            <td>$<?php echo get_subtotal(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <input type="submit" value="Update Cart"/>
                            </td>
                        </tr>
                    </table>
                    <p>Click "Update Cart" to update quantities in your
                        cart. Enter a quantity of 0 to remove a book.
                    </p>
                </form>
            <?php endif; ?>
            <p><a href=".?action=add_book">Add Book</a></p>
            <p><a href=".?action=empty_cart">Empty Cart</a></p>

        </section>
        <label>Checkout</label>
        <input id="continueCheckout" type="hidden" action="checkout_button" value="checkout_botton"> 
    </body>
</html>
