<?php

/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: login.php

 * Date and Time: Aug 9, 2016 1:37:31 PM

 * Project Name: CodeIgniter-SocialNetwork


 */


class Login extends CI_Controller {

	public function view($login = 'login')
	{

	}
}

function create_member()
  {
  $new_member_insert_data = array(         //if validation passed (line 57 controller/login.php), post array data to db
   'first_name' => $this->input->post('first_name'),
   'last_name' => $this->input->post('last_name'),
   'username' => $this->input->post('username'),
   'password' => md5($this->input->post('password'))  //make sure password is md5 or same in db
   ); 
   
   $this->db->insert('membership', $new_member_insert_data); //insert (insert is new_member_insert_data array) into membership table
   return $this->db->insert_id();
  }
  ?>
  <!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h3>Social Network - Log In</h3>

        <?php
        echo form_open('login');
        // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
        if (empty($_SESSION['user_id'])) {
            echo '<p class="error">' . $error_msg . '</p>';
            ?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <legend>Log In</legend>
                    <label for="username">Username:</label>
                    <input type="text" name="username" value="<?php if (!empty($username)) echo $username; ?>" /><br />
                    <label for="password">Password:</label>
                    <input type="password" name="password" />
                </fieldset>
                <input type="submit" value="Login" name="submit" />
            </form>

            <?php
        }
        else {
            // Confirm the successful log-in
            echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
        }
        ?>
    </body>
</html>