<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["name"], $_POST["contact"], $_POST["services"], $_POST["agreement"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@totalcarepolicy.com'; // Your SMTP username
    $mail->Password = '!@#TotalCare2023'; // Your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('info@totalcarepolicy.com', 'Total Care Policy');
    $mail->addAddress('info@totalcarepolicy.com'); // Replace with the actual recipient's email address
    $mail->isHTML(true);
    
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $selectedService = $_POST["services"];
    
    // Associative array for service options mapping
    $serviceOptions = array(
        '1' => 'Health Insurance',
        '2' => 'Life Insurance',
        '3' => 'Home Insurance',
        '4' => 'Travel Insurance',
        '5' => 'Marine Insurance'
    );

    $selectedServiceDescription = $serviceOptions[$selectedService];

    // Set subject and body
    $mail->Subject = 'Form Submission: Service Request';
    $mail->Body = "Name: " . htmlspecialchars($name) .
                  "<br>Contact: " . htmlspecialchars($contact) .
                  "<br>Types Of Services: " . htmlspecialchars($selectedServiceDescription);

    try {
        $mail->send();
        echo "<script>alert('Sent successfully'); window.location.href = '/totalcarepolicy/index.php';</script>";
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
