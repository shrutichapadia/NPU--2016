<!DOCTYPE html>

<!--


Student Info: Name=Chapadia Shruti, ID=15574CS

Subject: CS526(B)_HWNo3_Summer_2016

Author: shruti

Filename: register_view.php

Date and Time: Jul 28, 2016 12:04:20 PM

Project Name: BookstoreMVC_Authentication_update


-->

<h1>Registration  Page</h1>

<div id="main">
    <h1>Create Account</h1>
    <form action="?controller=admin&action=register" method="post">
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?php echo $fname; ?>"/>
        <br />
        <label>Last Name:</label>
        <input type="text" name="lastname" value="<?php echo $lname; ?>"/>
        <br />
        <label>Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $dob; ?>"/>
        <br />
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>"/>
        <br />

        <label>Password:</label>
        <input type="password" name="password" />
        <br />
        <label>Retype Password:</label>
        <input type="retypepassword" name="Retype password" value ="<?php echo $password; ?>" />
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="register" name="register_submitted"/>
    </form>

    <p><?php echo $register_message; ?></p>

</div>
