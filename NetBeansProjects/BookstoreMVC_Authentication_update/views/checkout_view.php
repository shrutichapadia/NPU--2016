<!DOCTYPE html>

<!--


Student Info: Name=Chapadia Shruti, ID=15574CS

Subject: CS526(B)_HWNo3_Summer_2016

Author: shruti

Filename: checkout_view.php

Date and Time: Jul 29, 2016 5:10:33 PM

Project Name: BookstoreMVC_Authentication_update


-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
     <div>
         <h1> Shipping </h1> 
         <form id=" shipping page" >
             <div>
                 Last Name:<input type="text" >
                 </br><br>
                 First Name:<input type="text" >
                 <br><br>
                 Address line 1: <input type="text" > </br><br>
                 Address Line 2:(optional) <input type="text">  </br><br>
                 City: <input type ="text" >  </br><br>
                 State: <input type="dropdown" action="dropdown" >  </br><br>
                 ZIP Code: <input type="text" >  </br><br>
                 
                 <h2> Shipping Methods </h2>
                 <div class="small-14 small-offset-1 columns end">
                         <span class="rc-saving"> FREE </span>
                     <input type ="radio" method="click" name="Everyday Free Shipping">
                     "Everyday Free Shipping"<br>
                     <span class="rc-saving"> $10.00 </span>
                    <input type ="radio" method="click" name="Regular-fixed charge Shipping">
                     "Regular Fixed Charge Shipping"
                    
                 
                     </form>   
</div>
        </div>
             <form id="Payment  Confirmation">
                 
                 <h4> Card Type</h4>
                
                 MasterCard: <input type="button" method="hidden"> 
                  DebitCard: <input type="button" method="hidden">
                  <br><br>
                  
                  <div>
                 Name:<input type="text" >
                 </br><br>
                 Card Number:<input type="text" >
                 <br><br>
                 Valid Thru: <input type="text" > </br><br>
                 CVV: <input type="text" method="hidden">  </br><br>
                 
                 <input type="submit" method="post" >
             </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
