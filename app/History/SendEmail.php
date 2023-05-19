<?php

namespace App\History;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class SendEmail{

	
    public function __construct($code=" ",$email,$type,$password=""){
		
		//0 for verification email, 1 for reset, 2 for admin created account
		$link="http://admin.paraclearth.com";
	   if($type==0){
		$url="$link/confirm-email/$code/$email";
        $head="Hello";
        $title="Verify Email Address";
        $btn_label="Verify Email Address";
		$table="";
        $message1='Please click the button below to verify your email address.'; 
        $message2=''; 
        $message3="If you're having trouble clicking the Verify Email Address button, copy and paste the URL below into your web browser: $url"; 
        $otherdetail=['url'=>$url, 'msg1'=>$message1,'msg2'=>$message2,'title'=>$title, "btn_label"=>$btn_label, "head"=>$head,"msg3"=>$message3, "table"=>$table];
        Mail::to($email)->send(new WelcomeMail($otherdetail));
	   }
	    else if($type==1){
		   /////////$type=1
		$url="$link/reset-password/$code/$email";
        $head="Hello";
        $title="Password Reset";
        $btn_label="Reset Password";
		$table="";
        $message1='You are receiving this email because we received a password reset request for your account.'; 
        $message2='This password reset link will expire in 60 minutes.'; 
        $message3="If you're having trouble clicking the Reset Password button, copy and paste this url $url into your web browser:"; 
        $otherdetail=['url'=>$url, 'msg1'=>$message1,'msg2'=>$message2,'title'=>$title, "btn_label"=>$btn_label, "head"=>$head,"msg3"=>$message3, "table"=>$table];
		 Mail::to($email)->send(new WelcomeMail($otherdetail));
	   }
	   else if($type==2){
		
        $url="$link/confirm-employee-email/$code/$email";
        $head="Hello";
        $title="Verify Email Address";
        $btn_label="Verify Email Address";
		$table="";
        $message1="An account has been created for you with the below login credentials<br> 
			<br>
			 Email:  <b><span style=\"text-decoration:none;list-style-type:none\">$email<span></b><br> 
			Password:  <b>$password</b><br>You can change this password when you login"; 
        $message2=''; 
        $message3="If you're having trouble clicking the Verify Email Address button, copy and paste the URL below into your web browser: $url"; 
        $otherdetail=['url'=>$url, 'msg1'=>$message1,'msg2'=>$message2,'title'=>$title, "btn_label"=>$btn_label, "head"=>$head,"msg3"=>$message3, "table"=>$table];
        Mail::to($email)->send(new WelcomeMail($otherdetail));
	   }
	  
	   
	  
	  
				
				
    }
}

?>