<!DOCTYPE html>

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: logOut_view.php

 * Date and Time: Jul 28, 2016 11:51:13 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


<h1>Logout</h1>

<div id="main">
    
    <form action="?controller=admin&action=logout" method="post" type="click">
        
        <label>&nbsp;</label>
        <input type="submit" value="Logout"/>
    </form>

    <p><?php echo $logout; ?></p>

</div>