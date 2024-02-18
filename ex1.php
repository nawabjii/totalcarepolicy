<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Total Care POlicy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assests/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  </head>
  <body>


<?php include 'nav.php';?>

<form id="submit-form" style="background-color:#FF7518;border:1px solid #000000; border-radius:15px;" action="" method="post">
    <div class="mb-3">
        <div style="padding-top:1rem;">
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name">
        </div>
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="vehiclenumber" aria-describedby="emailHelp" placeholder="Vehicle Number">
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="makenmodel" aria-describedby="emailHelp" placeholder="Make and Model">
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="contact" aria-describedby="emailHelp" placeholder="Phone Number">
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="yom" aria-describedby="emailHelp" placeholder="Year Of Manufacture">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agreement">
        <label class="form-check-label" for="exampleCheck1">By clicking, you agreed to our Privacy policy, Terms of Use & Disclaimer.</label>
    </div>

    <div id="submit-container">
        <button id="submit-button" class="btn11" type="submit" class="btn btn-primary">Submit</button>
        <div id="submitted-message" style="display: none;">
            Submitted! Redirecting to homepage in <span id="countdown">5</span> seconds...
        </div>
    </div>
</form>

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
        echo '<script>
            document.getElementById("submit-button").style.display = "none";
            document.getElementById("submitted-message").style.display = "block";
            startCountdown();
        </script>';
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<script>
function startCountdown() {
    var countdownElement = document.getElementById("countdown");
    var seconds = 5;

    var countdownInterval = setInterval(function() {
        countdownElement.textContent = seconds;
        seconds--;

        if (seconds < 0) {
            clearInterval(countdownInterval);
            window.location.href = '/totalcarepolicy/index.php'; // Redirect to homepage URL
        }
    }, 1000);
}

document.getElementById("submit-form").addEventListener("submit", function(event) {
    document.getElementById("submit-button").style.display = "none";
    document.getElementById("submitted-message").style.display = "block";
    startCountdown();
    event.preventDefault(); // Prevent default form submission behavior
});
</script>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 


</body>
</html>