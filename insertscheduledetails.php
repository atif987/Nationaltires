<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Methods:POST');
// header('Access-Control-Allow-Origin:*');
// header('Access-Control-Allow-Headers:content-type,methods,Access-Control-Allow-Origin,X-Requested-With');

include 'config.php';
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// $data = json_decode(file_get_contents('php://input'), true);

// Extract data from the decoded JSON
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email_address'];
$phone_number = $_POST['phone_number'];
$additional_comments = $_POST['additional_comments'];
$selected_year = $_POST['selected_year'];
$selected_make = $_POST['selected_make'];
$selected_model = $_POST['selected_model'];
$selected_service = $_POST['selected_service'];
$selected_further_details = $_POST['selected_further_details'];
$repair = $_POST['repair'];
$exacttime = $_POST['exacttime'];
$selectedDate = $_POST['selectedDate'];

// Perform database insert using PDO (assuming $pdo is your PDO instance)
$sql_query = "INSERT INTO Schedule (first_name, last_name, email_address, phone_number, additional_comments, selected_year, selected_make, selected_model, selected_service, selected_further_details, repair, exacttime, selectedDate) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql_query);
$result = $stmt->execute([$first_name, $last_name, $email_address, $phone_number, $additional_comments, $selected_year, $selected_make, $selected_model, $selected_service, $selected_further_details, $repair, $exacttime, $selectedDate]);


if ($result) {



try {

  require('Exception.php');
  require('SMTP.php');
  require('PHPMailer.php');
  
  
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'mail.invexup.com';                   //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = "registration@invexup.com";  //Registration@invexup.com                   //SMTP username
      $mail->Password   = "Invexis100%good";                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('Registration@invexup.com', 'InveX Up Company');
      $mail->addAddress('atifmaqbool11111@gmail.com',".");   
      $subject="Schedule Service";            
  
      $email_template = 'invexup_sales_email.html';
      $message = file_get_contents($email_template);
      $mail->msgHTML($message);
      $mail->Subject=$subject;

      $mail->send();
     

      }catch (Exception $e) {
        echo "<script>console.log(System error)</script>";
         
  }
    
  // Database insert was successful
  echo json_encode(array('message' => 'Thanks for submitting schedule request', 'status' => true));
} else {
  // Database insert failed
  echo json_encode(array('message' => 'Try Again ! ', 'status' => false));
}


?>