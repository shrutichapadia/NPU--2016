<!DOCTYPE html>

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: db_error.php

 * Date and Time: Jul 27, 2016 10:06:27 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


<html>
    <head>
        <meta charset="UTF-8">
        <title>Database Error Page</title>
    </head>
    <body>
        <h1>Database Error Page</h1>
        <?php
        // put your code here
        echo '<h2>'.DBContext::$error_msg.'</h2>';
        ?>
    </body>
</html>