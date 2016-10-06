<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

$dsn = 'mysql:host = localhost;dbname=book_db';
$username ='admin';
$password = 'password';
try{
    $db = new PDO($dsn, $username, $password);
    echo 'connected';
    
    
}catch(PDOException $ex){
    $error_msg = $ex->getMessage();
    include ('db_error.php');
    exist();
}
?>




// make sure the page uses a secure connection

//if (!isset($_SERVER['HTTPS'])) {
//
//$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//
//header("Location: " . $url);
//
//exit();
//
//}
//

