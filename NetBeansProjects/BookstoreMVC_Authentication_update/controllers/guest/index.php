<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: index.php

 * Date and Time: Jul 27, 2016 10:33:31 AM

 * Project Name: BookstoreMVC_Authentication_update


 */

//complete code listing for controllers/guest/index.php
include_once 'models/book_repository.php';
include_once 'models/publisher_repository.php';
include_once 'models/book.php';
include_once 'models/publisher.php';

$hasAction = isset($_GET['action']);
if ($hasAction) {
    $action = $_GET['action'];
} else {
    $action = 'list_books';
}

//$content = include_once 'views/navigation_guest.php';
$content = include_once "controllers/guest/$action.php";
return $content;

