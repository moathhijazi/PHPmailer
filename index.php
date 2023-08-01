<?php

/*

[2/8/2023]    This code created by Moath Hijazi for sending emails using PHPMailer

ATTENTION :

please change the username and password because its my own information

*/

function SendEmail($code , $toEmail) {

    try{
        require base_path("vendor/autoload.php");



        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // Set SMTP settings for Gmail
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';

        // Your Gmail account credentials
        $mail->Username = 'senderemail41@gmail.com';
        $mail->Password = 'mkuzubbeamxlwuls';

        // Set "From" and "AddAddress" fields
        $mail->setFrom('senderemail41@gmail.com');
        $mail->addAddress($toEmail);

        // Set email content
        $mail->isHTML(true);
        $mail->Subject = 'reset code';
        $mail->Body = '<div class = "w-full flex justify-center">This is your reset password code ['.$code.']</div>';

        $mail -> send() ; 

       

    }catch(e) {

        return 'Failed to send email' ; 

    }
}