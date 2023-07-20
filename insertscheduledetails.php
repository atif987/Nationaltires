<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:content-type,methods,Access-Control-Allow-Origin');

include 'config.php';
  
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
$sql_query = "INSERT INTO schedule (first_name, last_name, email_address, phone_number, additional_comments, selected_year, selected_make, selected_model, selected_service, selected_further_details, repair, exacttime, selectedDate) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql_query);
$result = $stmt->execute([$first_name, $last_name, $email_address, $phone_number, $additional_comments, $selected_year, $selected_make, $selected_model, $selected_service, $selected_further_details, $repair, $exacttime, $selectedDate]);


if ($result) {
    
    $to = 'atifmaqbool11111@gmail.com'; // Replace with the recipient's email address
    $subject = 'Schedule Request';
    $message = "Hello,\n\nYou have a new schedule request. Please review the details:\n\nFirst Name: $first_name\nLast Name: $last_name\nEmail: $email_address\nPhone Number: $phone_number\nAdditional Comments: $additional_comments\nSelected Year: $selected_year\nSelected Make: $selected_make\nSelected Model: $selected_model\nSelected Service: $selected_service\nSelected Further Details: $selected_further_details\nRepair: $repair\nExact Time: $exacttime\nSelected Date: $selectedDate";
    $headers = "From: test@test.timslabs.site"; // Replace with the sender's email address

    // Use the mail() function to send the email
    $mail_sent = mail($to, $subject, $message, $headers);

    
  // Database insert was successful
  echo json_encode(array('message' => 'Thanks for submitting schedule request', 'status' => true));
} else {
  // Database insert failed
  echo json_encode(array('message' => 'Try Again ! ', 'status' => false));
}


?>