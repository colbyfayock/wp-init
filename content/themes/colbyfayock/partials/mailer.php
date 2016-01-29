<?php

if(isset($_POST['submit'])){

	$name = trim($_POST['username']);
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];
	$woop = $_POST['woop'];
	
	$siteEmail = 'no-reply@colbyfayock.com';
	$siteName = 'Colby Fayock';
		
	if($woop){
		$error['woop'] = "Woop! You are either some crazy spam robot or something went wrong...";
	}
	
	if(strlen($name) < 2 || $name == 'Name'){
		$error['name'] = "Name";
	}
	
	if(!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email) || $email == 'Email'){
		$error['email'] = "Email";
	}
	
	if(strlen($subject) <2 || $subject == 'Subject'){
		$error['subject'] = "Subject";
	}
	
	if(strlen($comments) <3 || $comments == 'Enter message here...'){
		$error['comments'] = "Message";
	}
	
	if(!$error){
		$to = $siteEmail;
		$email_subject = "ColbyFayock.com: $subject";
		$email_body = "Oh hey, new message from $name!\n" . 
			"Their e-mail address is $email\n" . 
			"They say:\n" . $comments;
		$headers = "From: $name <$siteEmail>\n";
		$headers .= "Reply-To: $email";
		wp_mail($to,$email_subject,$email_body,$headers);
		
		$message = '<span class="success">Success!</span> Your message was sent.';
		$success = true;
	}
	else{
		if(!isset($error['woop'])){
			$message = "There is something wrong with your:";
			$message .= "<ul id=\"response\">\n";
			
			foreach($error as $error) {
				$message .= '<li class="error">' . $error . '</li>';
			}
			$message .= "</ul>\n";
		}
		else{
			$message = $error['woop'];
		}
	}
}


if(isset($_POST['username'])){
    $conName = $_POST['username'];
}
if(isset($_POST['email'])){
    $conEmail = $_POST['email'];
}
if(isset($_POST['subject'])){
    $conSub = $_POST['subject'];
}
if(isset($_POST['comments'])){
    $conCom = $_POST['comments'];
}
?>