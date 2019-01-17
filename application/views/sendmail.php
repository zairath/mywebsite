<?php
	if(isset($_POST['submit'])){
		//include PHPMailerAutoload.php
	require 'phpMailer/PHPMailerAutoload.php';

	function sendmail($to, $body, $fromName){
			//create an instance of PHPMailer
		$mail = new PHPMailer();

		//set a host
		$mail->Host = "smtp.gmail.com";

		//enable SMTP
		$mail->isSMTP();
		//$mail->SMTPDebug=2;

		//set authentication to true
		$mail->SMTPAuth = true;

		//set login details for Gmail account
		$mail->Username = "Dediseptianta112@gmail.com";
		$mail->Password = "asalasalan";

		//set type of protection
		$mail->SMTPSecure = "tls"; //or we can use TLS

		//set a port
		$mail->Port = 587;

		//set subject
		$mail->Subject = "Contact from - email";

		// set body
		$mail->Body = $body;

		//set who is sending an email
		$mail->setFrom('Dediseptianta112@gmail.com', $fromName);

		//set where we are sending email (recipients)
		$mail->addAddress($to);

		$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    ));

	    return $mail->send();
	}

	$fromName = $_POST['username'];
	$email = $_POST['email'];
	$body = $_POST['body'];

	if(sendmail('Dediseptianta112@gmail.com', $body, $fromName)){
		sendmail($email, 'terimakasih telah berkomentar', 'integra');
		redirect(base_url());
	}
	else(
		echo "gagal";
	)	
}

?>