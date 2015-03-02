<?php
/**
 * Created by IntelliJ IDEA.
 * User: Laura
 * Date: 2015-02-25
 * Time: 11:11 AM
 */
if(isset($_POST["submit"])){
// Checking For Blank Fields..
    if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
        echo "Fill All Fields..";
    }else{
// Check if the "Sender's Email" input field is filled out
        $email=$_POST['vemail'];
// Sanitize E-mail Address
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
            echo "Invalid Sender's Email";
        }
        else{
            $subject = $_POST['sub'];
            $message = $_POST['msg'];
            $headers = 'From:'. $email2 . "\r\n"; // Sender's Email
            $headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
            $headers .= 'Content-type: text/html; charset=UTF-8 \r\n';
// Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
//            mail("glutenbegone@live.ca", $subject, $message, $headers);
            mail("lvendram@gmail.com", $subject, $message, $headers);
            echo "Your mail has been sent successfuly ! Thank you for your feedback";
        }
    }
}
?>