<!DOCTYPE html>




<!-- * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: login_view.php

 * Date and Time: Jul 27, 2016 10:06:41 AM

 * Project Name: BookstoreMVC_Authentication_update-->


 


<h1>Login Page</h1>

<div id="main">
    <h1>Login</h1>
    <form action="?controller=admin&action=login" method="post">
        <label>Email:   </label>
        <input type="text" name="email" value="<?php echo $email; ?>"/>
        <br />

        <label>Password:</label>
        <input type="password" name="password" />
        <br />

        </br>
        <label>&nbsp;</label>
        <input type="submit" value="Login" name="login_submitted"/>
    </form>

    <p><?php echo $login_message; ?></p>

</div>