<!DOCTYPE html>

<!--


Student Info: Name=ShrutiChapadia, ID=15574CS

Subject: CS526(B)_HWNo4_WK12_Summer_2016

Author: shruti

Filename: user_page.php

Date and Time: Aug 18, 2016 3:58:31 PM

Project Name: CodeIgniter-SocialNetwork


-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Social Network</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h3>Social Network - Where you can find your friends!</h3>
        <?php
       
        echo form_open('user');?>
        
        <?php foreach($query->result()as $row): ?> 
    <option value ="<?php echo $row->user_id;?>">
    <?php echo $row->user_name;?></option>
    <?php echo anchor('user','User Detail');?>
    <?php endforeach;?>
        // Generate the navigation menu
        if ($this->session('user-id')) {
        <?php echo anchor('viewprofile', 'View Profile') ; ?>
        <?php echo anchor('editprofile', 'Edit Profile') ; ?>
      
       <?php echo anchor('Signup', 'Signup') ; ?>   
       <?php echo anchor('login', 'Login') ; ?>
       <?php echo anchor('logout', 'Logout') ; ?>
        
        }


        
        // Loop through the array of user data, formatting it as HTML
        echo '<h4>Latest members:</h4>';
        echo '<table>';
        foreach ($users as $user) {
            if (is_file(MM_UPLOADPATH . $user['picture']) && filesize(MM_UPLOADPATH . $user['picture']) > 0) {
                echo '<tr><td><img src="' . MM_UPLOADPATH . $user['picture'] . '" alt="' . $user['first_name'] . '" /></td>';
            } else {
                echo '<tr><td><img src="' . MM_UPLOADPATH . 'nopic.jpg' . '" alt="' . $user['first_name'] . '" /></td>';
            }
            if ($this->session('user-id')) {
                echo '<td><a href="viewprofile.php?user_id=' . $user_id['user_id'] . '">' . $user['first_name'] . '</a></td></tr>';
            } else {
                echo '<td>' . $user['first_name'] . '</td></tr>';
            }
        }
        echo '</table>';
        ?>
    </body>
</html>