<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['name']))
		$errors['name'] = 'Name is required.';

	if (empty($_POST['email']))
		$errors['email'] = 'Email is required.';

	if (empty($_POST['phone']))
		$errors['phone'] = 'Phone is required.';

	if (empty($_POST['comment']))
		$errors['comment'] = 'Comment is required.';

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors process our form, then return a message

		require 'PHPMailerAutoload.php';
            
            $mail = new PHPMailer;

            $mail->SMTPDebug = 1;

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'gulrenor@gmail.com';                 // SMTP username
            $mail->Password = 'kanvtnvlopstgbnp';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

            $mail->From = $_POST['email'];
            $mail->FromName = $_POST['name'];
            $mail->addAddress('gulrenor@gmail.com');               // Name is optional
            $mail->addReplyTo($_POST['email']);
        
            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = '(kidsalot.com) Comment from ' . $_POST['name'];
            
            $messageBody = '<h2>You&rsquo;ve received a comment from ' . $_POST['name'] . ' (' . $_POST['email'] . ')</h2><hr /><table><tr><td><strong>From:</strong></td><td>' . $_POST['name'] . '</td></tr><tr><td><strong>Email:</strong></td><td>' . $_POST['email'] . '</td><tr></table><h3>Comment</h3><blockquote>' . $_POST['comment'] . '</blockquote><hr />';
            
            $mail->Body    = $messageBody;

            if(!$mail->send()) {
                //echo 'Message could not be sent.';
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                //echo 'Message has been sent';
            }

		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);