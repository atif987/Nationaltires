<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:content-type,methods,Access-Control-Allow-Origin,X-Requested-With');

include 'config.php';

$data =  json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$message=$data['message'];


$sql_query = "INSERT INTO contact (name, email,phone, message) VALUES (?, ?,?, ?);";
$stmt = $pdo->prepare($sql_query);
$result=$stmt->execute([$name, $email,$phone, $message]);


if($result){
    echo json_encode(array('message' => 'Thanks For Submitting ! Our Team Member Will Contact You , Soon.', 'status' => true));
}else{
     echo json_encode(array('message' => 'Try Again ! ', 'status' => false));
}

?>