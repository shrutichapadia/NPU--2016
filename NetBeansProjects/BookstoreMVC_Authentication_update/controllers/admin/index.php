<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: index.php

 * Date and Time: Jul 27, 2016 10:29:44 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


//complete code listing for controllers/admin/index.php
session_start();
include_once 'models/book_repository.php';
include_once 'models/publisher_repository.php';
include_once 'models/users_repository.php';
include_once 'models/book.php';
include_once 'models/publisher.php';

// If the user isn't logged in, force the user to login
if (!isset($_SESSION['is_valid_admin'])) {
    $action = "login";
} else {
    $hasAction = isset($_GET['action']);
    if ($hasAction) {
        $action = $_GET['action'];
    } else {
        $action = 'list_books';
    }
}

$content = include_once "controllers/admin/$action.php";
return $content;