<?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


function   sendmail ($sendto,$name){
     $mail = new phpmailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'iaibrahimansari7@gmail.com';  
            $mail->Password = 'umdbsqkelvriblyk';  
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('iaibrahimansari7@gmail.com', 'Ibrahim');
            $mail->addAddress($sendto, $name);
            $mail->isHTML(true);
            $mail->Subject = 'Your Parcel is confirmed';
            $mail->Body = 'Thank you for ordering , your parcel is confirmed';
            $mail->send();
            // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


