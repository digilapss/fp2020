<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    function getContact()
	{
		return view('frontend.contact');
	}

	function sendMail(Request $request) {
        
        $subject = $request->input('subject');
        $name = $request->input('first-name') . " " . $request->input('last-name');
        $emailAddress = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $bodyMessage = "Name : " . $name . "<br>Email : " . $emailAddress . "<br>Phone Number : " . $phone . "<br>Message : " . $message;

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPAuth 	= true; // authentication enabled
			$mail->Username 	= 'fp2020indonesia.sender@gmail.com';                 // SMTP username
            $mail->Password 	= 'fp202053nd3r';                           // SMTP password
			$mail->SMTPSecure 	= 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host 		= "smtp.gmail.com";
			$mail->Port 		= 465; // or 587

            // Siapa yang mengirim email
            $mail->setFrom("fp2020indonesia.sender@gmail.com", "fp2020indonesia sender");

            // Siapa yang akan menerima email
            $mail->addAddress('setiyawan1994@gmail.com');     // Add a recipient
            // $mail->addAddress('fp2020indonesiacc@gmail.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $bodyMessage;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'success');
            return view('frontend.contact');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}
