<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: register.php

 * Date and Time: Jul 28, 2016 12:04:00 PM

 * Project Name: BookstoreMVC_Authentication_update


 */


$registersubmitted = isset($_POST['register_submitted']);
if ($registersubmitted) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
if (is_array($fname, $lname, $dob)) {
        $register_message = 'Wellcome to NPU Book Store, Thank you for registration';
        $_POST['enter_all detail'] = true;
        $action = 'list_books';
        $content = include "controllers/admin/list_books.php";
} elseif (is_valid_admin_login($email, $password)) {
        $_SESSION['is_valid_login'] = true;
        $action = 'list_books';
        $content = include_once "controllers/admin/list_books.php";
        return $content;
    }
    else {
        $register_message_message = 'Your email address / password may be invalid.';
    }
} else {
    $email = '';
    $register_message_message = 'You must complete all field to register.';
}
return 'views/register_view.php';