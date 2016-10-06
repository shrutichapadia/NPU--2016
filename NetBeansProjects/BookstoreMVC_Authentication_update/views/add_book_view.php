<!DOCTYPE html>




<!-- * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: add_book_view.php

 * Date and Time: Jul 27, 2016 10:05:21 AM

 * Project Name: BookstoreMVC_Authentication_update-->







<h1>Add Book Page</h1>
<div id="main">
    <form action="?controller=admin&action=add_book" method="post">
        <input type="hidden" name="action" value="add_book" />

        <label>Publisher:</label>
        <select name="publisher_id">
            <?php foreach ($publishers as $publisher) : ?>
                <option value="<?php echo $publisher->getID(); ?>">
                    <?php echo $publisher->getName(); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br />
        <label>ISBN:</label>
        <input type=text" name="isbn" /> 
        <br />
        <label>Title:</label>
        <input type=text" name="book_title" /> 
        <br />
        <label>Price:</label>
        <input type=text" name="book_price" /> 
        <select>
        <?php 
        foreach ($books as $isbn => $book):
            $price = number_format($book['price'],2);
        $title = $book['title'];
        $book = $title . '($' . $price .')';
        ?>
        <option value="<?php echo $isbn; ?>">
            <?php echo $book; ?>
        </option>
            <?php
        endforeach;
        ?>
        </select>
        <br />
        <label>Quantity:</label>
        <select name="bookqty">
            <?php 
            for($i=1; $i<=10; $i++):?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>
            
            </option>
       <?php endfor; ?>
        </select>
        <label>&nbsp;</label>
        <input type="submit" value="Add Book" name="addbook_submitted" /> 
        <br />
    </form>
    <form>
        <p><a href=".?action=shop_cart">View Cart </a></p>
    </form>
</div>