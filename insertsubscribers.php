<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:content-type,methods,Access-Control-Allow-Origin,X-Requested-With');

include 'config.php';

$data =  json_decode(file_get_contents('php://input'), true);
$email = $data['email'];


$sql_query = "INSERT INTO subscribers (email) VALUES (?);";
$stmt = $pdo->prepare($sql_query);
$result=$stmt->execute([$email]);


if($result){
    echo json_encode(array('message' => 'Thanks! You Have Been Successfully Added To Subscribers List ', 'status' => true));
}else{
     echo json_encode(array('message' => 'Try Again ! ', 'status' => false));
}

?>