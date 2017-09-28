<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $user["member_name"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "127.0.0.1/changepass.php?name=" . $user["member_name"] . "'>" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $user["member_name"] . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME); //from
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);//from
$mail->ReturnPath=SERDER_EMAIL;
	
$mail->AddAddress("btnganaaa@gmail.com"); //to
$mail->Subject = "Forgot Password Recovery";	//subject	
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	echo  'Problem in Sending Password Recovery Email';
} else {
	echo 'Please check your email to reset password!';
}

?>