<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: view_book.php

 * Date and Time: Jul 27, 2016 10:35:19 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


$book_id = 1;
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
}
$publishers = PublisherRepository::getPublishers();
$book_id = $_GET['book_id'];
$book = BookRepository::getBook($book_id);
return 'views/book_view.php';