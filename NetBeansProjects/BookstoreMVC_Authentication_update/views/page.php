<!DOCTYPE html>

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: page.php

 * Date and Time: Jul 27, 2016 10:07:50 AM

 * Project Name: BookstoreMVC_Authentication_update


 */



<html>
    <head>
        <title><?php echo $pageData->title; ?></title>
        <meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
        <?php echo $pageData->css; ?>
        <?php echo $pageData->embeddedStyle ?>
    </head>
    <body>
        <?php echo $pageData->navigation; ?>
        <?php include_once "$pageData->content"; ?>
        <?php echo $pageData->scriptElements; ?>
    </body>
</html>