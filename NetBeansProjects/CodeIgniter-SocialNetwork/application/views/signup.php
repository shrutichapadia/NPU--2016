<!DOCTYPE html>

<!--


Student Info: Name=ShrutiChapadia, ID=15574CS

Subject: CS526(B)_HWNo4_WK12_Summer_2016

Author: shruti

Filename: signup.php

Date and Time: Aug 9, 2016 2:36:47 PM

Project Name: CodeIgniter-SocialNetwork


-->


<head>
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>
    <h3>Sign Up</h3>
    <table>
        <?php foreach ($query->result() as $row) : ?>
            <tr>
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->password1; ?></td>
                <td><?php echo $row->password2; ?></td>
                <td><?php echo anchor('signup/' . $row->user_id, 'signup');
            ?></td>
            </tr>
        <?php endforeach; ?>
            
            <code>
$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');<br />
$this->form_validation->set_rules('password1', 'Password1', 'required|matches[password2]');<br />
$this->form_validation->set_rules('password2', 'Password Confirmation', 'required');<br />

            </code>
            
<?php echo validation_errors(); ?>

<?php echo form_open('signup'); ?>

<h5>Username</h5>
<?php echo form_error('username'); ?>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

<h5>Password</h5>
<?php echo form_error('password1'); ?>
<input type="text" name="password1" value="<?php echo set_value('password1'); ?>" size="50" />

<h5>Password Confirm</h5>
<?php echo form_error('password2'); ?>
<input type="text" name="password2" value="<?php echo set_value('password2'); ?>" size="50" />


<div><input type="submit" value="Submit" /></div>

</form>
    </table>
</body>
</head>