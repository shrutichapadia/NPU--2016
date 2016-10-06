<!DOCTYPE html>

<!--


Student Info: Name=ShrutiChapadia, ID=15574CS

Subject: CS526(B)_HWNo4_WK12_Summer_2016

Author: shruti

Filename: session_view.php

Date and Time: Aug 18, 2016 3:36:49 PM

Project Name: CodeIgniter-SocialNetwork


-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Social Network Session on</title>
    </head>
    <body>
        Well come: <?php echo $this->session->userdata('user_id');?>
         <?php echo $this->session->userdata('username');?>
        <?php
        // put your code here
        ?>
    </body>
</html>
