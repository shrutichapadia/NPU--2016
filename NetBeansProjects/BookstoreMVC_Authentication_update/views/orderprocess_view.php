<!DOCTYPE html>

<!--


Student Info: Name=Chapadia Shruti, ID=15574CS

Subject: CS526(B)_HWNo3_Summer_2016

Author: shruti

Filename: orderprocess_view.php

Date and Time: Jul 30, 2016 12:05:10 PM

Project Name: BookstoreMVC_Authentication_update


-->


<h1>Order Processing Status</h1>
<div id="main">
    <h2>Order Status</h2>
    <?php foreach($order as $order) : ?>
        <ul>
            <li>
                <a href="?controller=admin&order_no=<?php echo $order->getNo(); ?>">
                    <?php echo $order->getStatus(); ?>
                    
                </a>
            </li>
        </ul>
    <?php endforeach; ?>
    
    <h4> Email Confirmation </h4>
    mail($to,$order_no, $subject, $message)
</div>
<