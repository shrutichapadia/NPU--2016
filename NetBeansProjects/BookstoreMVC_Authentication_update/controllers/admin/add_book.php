<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: add_book.php

 * Date and Time: Jul 27, 2016 10:29:09 AM

 * Project Name: BookstoreMVC_Authentication_update


 */

$addBookSubmitted = isset($_POST['addbook_submitted']);
if ($addBookSubmitted) {
    $publisher_id = $_POST['publisher_id'];;
    $isbn = $_POST['isbn'];
    $title = $_POST['book_title'];
    $price = $_POST['book_price'];

    // Validate the inputs
    if (empty($isbn) || empty($title) || empty($price)) {
        $error = "Invalid book data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        $publisher = PublisherRepository::getPublisher($publisher_id);
        $book = new Book($isbn, $title, $price, $publisher);
        BookRepository::addBook($book);

        // Display the Book List page for the current publisher
        header("Location: .?controller=admin&publisher_id=$publisher_id");
    }
}
else
{
    $publishers = PublisherRepository::getPublishers();
    return 'views/add_book_view.php';
}
