<?php
require 'mail.php';

try {
    sendmail("ansari.u@somaiya.edu", "Suwaid Ansari");
    echo 'Email sent successfully'; 
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
