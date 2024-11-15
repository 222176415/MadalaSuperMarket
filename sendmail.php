<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitContact'])) {
    // Validate and sanitize form input values
    $fullname = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $Regarding = filter_var($_POST['Regarding'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Check if validation failed
    if (!$email) {
        $_SESSION['status'] = "Invalid email address";
        header('Location: Index.html');
        exit(0);
    }

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'Ntimanethemba27@gmail.com';                     //SMTP username
        $mail->Password   = 'jzvmhycpbvuvjkif';                               //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // ENCRYPTION_SMTPS-Enable 465 implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        /// Recipients
        $mail->setFrom($email, $fullname); // Set the "From" address to the user's email and name
        $mail->addAddress('Ntimanethemba27@gmail.com', 'MadalaSuperMarket'); // Add the recipient's email address


        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from Website Contact Form';
        $mail->Body = '<p>Hello Madala, A new enquiry has been submitted through our website contact form:</p>
        <ul>
            <li>Name: ' . $fullname . '</li>
            <li>Email: ' . $email . '</li>
            <li>Regarding: ' . $Regarding . '</li>
            <li>Message: ' . $message . '</li>
        </ul>
        ';


        if ($mail->send()) {
            $_SESSION['status'] = "Thank you for the contact,We will get Back to you as soon as possible - MadalaSuperMarketTeam";
            header("Location: Index.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header('Location: Index.html');
            exit(0);
        }
    } catch (Exception $e) {
        $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header('Location: Index.html');
        exit(0);
    }
} else {
    header('Location: Index.html');
    exit(0);
}