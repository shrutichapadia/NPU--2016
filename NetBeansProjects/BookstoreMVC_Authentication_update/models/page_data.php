<?php

/* 


 * Student Info: Name=Chapadia Shruti, ID=15574CS

 * Subject: CS526(B)_HWNo3_Summer_2016

 * Author: shruti

 * Filename: page_data.php

 * Date and Time: Jul 27, 2016 10:04:09 AM

 * Project Name: BookstoreMVC_Authentication_update


 */


class PageData {
    public $title = "";
    public $content = "";
    public $css = "";
    public $embeddedStyle = "";
    //declare a new property for script elements   
    public $scriptElements = "";
    public $navigation = "";

    //declare a new method for adding Javascript files    
    public function addScript($src) {
        $this->scriptElements .= "<script src='$src'></script>";
    }

    public function addCSS($href) {
        $this->css .= "<link href='$href' rel='stylesheet' />";
    }

}