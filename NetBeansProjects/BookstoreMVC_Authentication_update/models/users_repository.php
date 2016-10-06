<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: users_repository.php

 * Date and Time: Jul 27, 2016 10:05:01 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


function add_user($email, $password, $is_admin) {
    global $db;
    $query = 'INSERT INTO users (emailAddress, password, isAdmin)
              VALUES (:email, :password, :is_admin)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':is_admin', $is_admin);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        DBContext::displayDBError($error_message);
    }
}

function is_valid_admin_login($email, $password) {
    global $db;
    $query = 'SELECT userID FROM users
              WHERE emailAddress = :email AND password = :password AND isAdmin = 1';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $valid = ($statement->rowCount() >= 1);
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        DBContext::displayDBError($error_message);
    }
    return $valid;
}
function is_array($fname, $lname, $dob) {
    global $db;
    $query = 'SELECT userID FROM users
              WHERE fname = :fname AND lname= :lname AND dob = :dob AND isAdmin = 1';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':dob', $dob);
        $statement->execute();
        $valid = ($statement->rowCount() >= 1);
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        DBContext::displayDBError($error_message);
    }
return $valid;


    }