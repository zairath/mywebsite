<?php
class PHPMailer_Library
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load()
    {
        require_once(APPPATH."third_party/phpMailer/PHPMailerAutoload.php");
        $objMail = new PHPMailer;
        return $objMail;
    }
}