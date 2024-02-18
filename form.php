<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["name"], $_POST["contact"], $_POST["makenmodel"], $_POST["vehiclenumber"], $_POST["yom"], $_POST["agreement"])){
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
    $makeAndModel = $_POST["makenmodel"];
    $vehicleNumber = $_POST["vehiclenumber"];
    $yearOfManufacture = $_POST["yom"];

    // Set subject and body
    $mail->Subject = 'Form Submission: Vehicle Details';
    $mail->Body = "Name: " . htmlspecialchars($name) .
                  "<br>Contact: " . htmlspecialchars($contact) .
                  "<br>Make and Model: " . htmlspecialchars($makeAndModel) .
                  "<br>Vehicle Number: " . htmlspecialchars($vehicleNumber) .
                  "<br>Year of Manufacture: " . htmlspecialchars($yearOfManufacture);

                  try {
                    $mail->send();
                    
                } catch (Exception $e) {
                    echo "Mailer Error: {$mail->ErrorInfo}";
                }
}
?>
