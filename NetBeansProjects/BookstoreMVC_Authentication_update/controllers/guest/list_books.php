<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: list_books.php

 * Date and Time: Jul 27, 2016 10:34:32 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


$publisher_id = 1;
if (isset($_GET['publisher_id'])) {
    $publisher_id = $_GET['publisher_id'];
}
$publishers = PublisherRepository::getPublishers();
$publisher = PublisherRepository::getPublisher($publisher_id);
$books = BookRepository::getBooksByPublisher($publisher_id);
return 'views/book_list_view.php';