<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: logout.php

 * Date and Time: Jul 27, 2016 12:18:18 PM

 * Project Name: BookstoreMVC_Authentication_update


 */


$logout = isset($_POST['log_out']);
if ($logout) {
    
    $logout = $logout.closelog();
    
    } else {
        $login_message = 'to relogin please enter Login ID and Password';
    }

return 'views/login_view.php';
