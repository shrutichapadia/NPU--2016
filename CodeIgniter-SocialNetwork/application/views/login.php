<!DOCTYPE html>

<!--


Student Info: Name=ShrutiChapadia, ID=15574CS

Subject: CS526(B)_HWNo4_WK12_Summer_2016

Author: shruti

Filename: login.php

Date and Time: Aug 17, 2016 4:17:43 PM

Project Name: CodeIgniter-SocialNetwork


-->


  <html>
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h3>Social Network - Log In</h3>

        <?php
        echo form_open('login/login');
        // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
        if (empty($ci_SESSION['user_id'])) {
            echo '<p class="error">' . $error_msg . '</p>';
            ?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <h5>Username</h5>
            <?php echo form_error('username'); ?>
            <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

            <h5>Password</h5>
            <?php echo form_error('password1'); ?>
            <input type="text" name="password1" value="<?php echo set_value('password1'); ?>" size="50" />

            <h5>Password Confirm</h5>
            <?php echo form_error('password2'); ?>
            <input type="text" name="password2" value="<?php echo set_value('password2'); ?>" size="50" />
            <input type="submit" value="Login" name="submit" />
            </form>

            <?php
        }
        else {
            // Confirm the successful log-in
            echo('<p class="login">You are logged in as ' . $ci_SESSION['username'] . '.</p>');
        }
        ?>
    </body>
</html>
