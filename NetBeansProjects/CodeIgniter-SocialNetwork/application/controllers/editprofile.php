<?php

/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: editprofile.php

 * Date and Time: Aug 11, 2016 10:11:30 AM

 * Project Name: CodeIgniter-SocialNetwork


 */



session_start();

// If the session vars aren't set, try to set them with a cookie
if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
        $_SESSION['user_id'] = $_COOKIE['user_id'];
        $_SESSION['username'] = $_COOKIE['username'];
    }
}
    
            
    class Editprofile extends CI_Controller {

        
	public function index()
	{
		$this->load->helper(array('editprofile', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'callback_username_check');
		$this->form_validation->set_rules('password1', 'Password1', 'required');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'required');
		

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
        function editprofile(){
            $this->db->models('social_model');
            //pull data
            $first_name = $this->social_model->retrive_user($first_name);
            $last_name = $this->social_model->retrive_user($last_name);
            $gender = $this->social_model->retrive_user($gender);
            $birthdate = $this->social_model->retrive_user($birthdate);
            $city = $this->social_model->retrive_user($city);
            $state = $this->social_model->retrive_user($state);
            $old_picture = $this->social_model->retrive_user($old_picture);
            $new_picture = $this->social_model->retrive_user($old_picture);
            $new_picture = trim($_FILES['new_picture']['name']);
            $new_picture_type = $_FILES['new_picture']['type'];
            $new_picture_size = $_FILES['new_picture']['size'];
            list($new_picture_width, $new_picture_height) = getimagesize($_FILES['new_picture']['tmp_name']);
            $error = false;
        }

	public function username_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('username_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
        
             
        // Make sure the user is logged in before going any further.
       function is_logged_in(){
           $is_logged_in = $this->session->user_id('is_logged_in');
        if (!isset($is_logged_in)||$is_logged_in != true) {
           // echo anchor('controllers/login', Login::class);
            echo '<p class="login">Please <a href="login.php">log in</a> to access this page.</p>';
            exit();
        } else {
          // echo anchor('controllers/logout', Logout::class);
        }
       }

            // Validate and move the uploaded picture file, if necessary
          function Upload_image(){
               
            $config['upload_path'] = './new_picture';
            $config['max_size'] = 1024 * 10;
            $config['allowed_types'] = 'gif|png|jpg|jpeg';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
        if (!empty($new_picture)) {
                if ((($new_picture_type == 'image/gif') || ($new_picture_type == 'image/jpeg') || ($new_picture_type == 'image/pjpeg') ||
                        ($new_picture_type == 'image/png')) && ($new_picture_size > 0) && ($new_picture_size <= MM_MAXFILESIZE) &&
                        ($new_picture_width <= MM_MAXIMGWIDTH) && ($new_picture_height <= MM_MAXIMGHEIGHT)) {
                    if ($_FILES['new_picture']['error'] == 0) {
                        // Move the file to the target upload folder
                        $target = MM_UPLOADPATH . basename($new_picture);
                        if (move_uploaded_file($_FILES['new_picture']['tmp_name'], $target)) {
                            // The new picture file move was successful, now make sure any old picture is deleted
                            if (!empty($old_picture) && ($old_picture != $new_picture)) {
                                @unlink(MM_UPLOADPATH . $old_picture);
                            }
                        } else {
                            // The new picture file move failed, so delete the temporary file and set the error flag
                            @unlink($_FILES['new_picture']['tmp_name']);
                            $error = true;
                            echo '<p class="error">Sorry, there was a problem uploading your picture.</p>';
                        }
                    }
                } else {
                    // The new picture file is not valid, so delete the temporary file and set the error flag
                    @unlink($_FILES['new_picture']['tmp_name']);
                    $error = true;
                    echo '<p class="error">Your picture must be a GIF, JPEG, or PNG image file no greater than ' . (MM_MAXFILESIZE / 1024) .
                    ' KB and ' . MM_MAXIMGWIDTH . 'x' . MM_MAXIMGHEIGHT . ' pixels in size.</p>';
                }
            }
          
            // Update the profile data in the database
            if (!$error) {
                if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($birthdate) && !empty($city) && !empty($state)) {
                    
                    update_user($first_name, $last_name, $gender, $birthdate, $city, $state, $new_picture, $_SESSION['user_id']);
                    
                    // Confirm success with the user
                    echo '<p>Your profile has been successfully updated. Would you like to <a href="viewprofile.php">view your profile</a>?</p>';

                    exit();
                } else {
                    echo '<p class="error">You must enter all of the profile data (the picture is optional).</p>';
                }
            }
    
    else {
            // Grab the profile data from the database
            $user = get_user_by_userid($_SESSION['user_id']);
            
            if ($user != NULL) {
                $first_name = $user['first_name'];
                $last_name = $user['last_name'];
                $gender = $user['gender'];
                $birthdate = $user['birthdate'];
                $city = $user['city'];
                $state = $user['state'];
                $old_picture = $user['picture'];
            } else {
                echo '<p class="error">There was a problem accessing your profile.</p>';
            }
        }
          }
    
    }
    ?>
   