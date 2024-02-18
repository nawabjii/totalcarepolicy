<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["name"], $_POST["contact"], $_POST["makenmodel"], $_POST["vehiclenumber"], $_POST["yom"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@totalcarepolicy.com'; // Your Gmail username
    $mail->Password = '!@#TotalCare2023'; // Your Gmail password or App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('info@totalcarepolicy.com', 'Total Care Policy'); // Set your name and email address
    $mail->addAddress($_POST["info@totalcarepolicy.com"]); // Recipient's email address
    $mail->isHTML(true);
    
    // Set subject and body
    $mail->Subject = 'Form Submission: Vehicle Details';
    $mail->Body = "Name: " . htmlspecialchars($_POST["name"]) .
                  "<br>contact: " . htmlspecialchars($_POST["contact"]) .
                  "<br>Make and Model: " . htmlspecialchars($_POST["makenmodel"]) .
                  "<br>Vehicle Number: " . htmlspecialchars($_POST["vehiclenumber"]).
                  "<br>Year of Manufacture: " . htmlspecialchars($_POST["yom"]);

    try {
        $mail->send();
        echo "
        <script>
        alert('Sent successfully');
        window.location.href = '{$_SERVER['PHP_SELF']}';
        </script>";
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
