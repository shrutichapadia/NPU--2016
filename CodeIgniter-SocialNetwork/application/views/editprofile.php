<!DOCTYPE html>

<!--


Student Info: Name=ShrutiChapadia, ID=15574CS

Subject: CS526(B)_HWNo4_WK12_Summer_2016

Author: shruti

Filename: editprofile.php

Date and Time: Aug 11, 2016 11:12:34 AM

Project Name: CodeIgniter-SocialNetwork


-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Profile</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h3>Edit Profile</h3>

      <?php echo form_open_multipart('editprofile/update_user');?>
        <?php echo form_submit('','editprofile');?>
      
        
    <tr>
    <legend>Personal Information</legend> </tr> 
<tr>
    
    First Name: <td><?php echo $row->first_name;?></td>
    Last Name: <td><?php echo $row->last_name;?></td> 
    Gender: <td> <option value = "F" <?php echo $row->gender;?>></option>
                 <option value = "M" <?php echo $row->gender;?>></option></td>
    Birth Date: <td><?php echo $row->birthdate;?></td>
    City: <td><?php echo $row->city;?></td>
    State: <td><?php echo $row->state;?></td>
    Picture: <td><?php echo $row->new_picture;?></td>
    <td><?php echo anchor('views/editprofile', $editprofile);?></td>
   </tr>
    <?php echo form_submit('','submit');?>
      <?php echo form_close();?>
</body>

           

