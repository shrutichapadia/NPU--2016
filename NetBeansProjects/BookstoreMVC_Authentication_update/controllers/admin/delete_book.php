<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: delete_book.php

 * Date and Time: Jul 27, 2016 10:29:23 AM

 * Project Name: BookstoreMVC_Authentication_update


 */

// Get the IDs
$book_id = $_POST['book_id'];
$publisher_id = $_POST['publisher_id'];

// Delete the book
BookRepository::deleteBook($book_id);

// Display the Book List page for the current publisher
header("Location: .?controller=admin&publisher_id=$publisher_id");

