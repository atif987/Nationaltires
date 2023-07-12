<?php

 // Database credentials
 $host = "localhost";  // database host
 $dbname = "car";  // database name
 $username = "root";  // database username
 $password = "";  // database password

 // Create a PDO instance
 try {
     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo "Connected successfully";
 } catch(PDOException $e) {
     // echo "Connection failed: " . $e->getMessage();
 }


?>