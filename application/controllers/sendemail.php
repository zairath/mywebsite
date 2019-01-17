<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mail_m', 'm');
	}

	

	public function sendmail($to, $body, $fromName){

		$this->load->library("phpMailer_library");
		$objMail = $this->phpmailer_library->load();

		//set a host
		$objMail->Host = "smtp.gmail.com";

		//enable SMTP
		$objMail->isSMTP();
		//$mail->SMTPDebug=2;

		//set authentication to true
		$objMail->SMTPAuth = true;

		//set login details for Gmail account
		$objMail->Username = "Dediseptianta112@gmail.com";
		$objMail->Password = "asalasalan";

		//set type of protection
		$objMail->SMTPSecure = "tls"; //or we can use TLS

		//set a port
		$objMail->Port = 587;

		//set subject
		$objMail->Subject = "Contact from - email";

		// set body
		$objMail->Body = $body;

		//set who is sending an email
		$objMail->setFrom('Dediseptianta112@gmail.com', $fromName);

		//set where we are sending email (recipients)
		$objMail->addAddress($to);

		$objMail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    ));

	    return $objMail->send();
	}

	public function pre_sent(){
		date_default_timezone_set('Asia/Jakarta');
		$fromName = $this->input->post('username');
		$email = $this->input->post('email');
		$body = $this->input->post('body');
		$waktu = date("Y-m-d H:i:s");

		if( $this->sendmail('Dediseptianta112@gmail.com', $body, $fromName)){
		$this->sendmail($email, 'terimakasih telah berkomentar', 'integra');
		$this->m->showMail(array(
			'nama' => $fromName,
			'email' => $email,
			'isi' => $body,
			'date' => $waktu
		));
		redirect(base_url());
		}
		else{
		echo "gagal";
		}

		

	}

	
}
