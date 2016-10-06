<?php

/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: logout.php

 * Date and Time: Aug 9, 2016 1:37:47 PM

 * Project Name: CodeIgniter-SocialNetwork


 */


class Logout extends CI_Controller {

	public function view($logout = 'logout')
	{
  if (isset($_SESSION['user_id'])) {
    // Delete the session vars by clearing the $_SESSION array
    $_SESSION = array();

    // Delete the session cookie by setting its expiration to an hour ago (3600)
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600);
    }
	}
}
function logout()
{
  $this->session->sess_destroy();
  $this->index();
  setcookie('user_id', '', time() - 3600);
  setcookie('username', '', time() - 3600);

  // Redirect to the home page
  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/index.php';
  header('Location: ' . $home_url);
}

}