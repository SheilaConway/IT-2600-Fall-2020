<?php
//connect to database
$dsn = 'mysql:host=localhost;dbname=ap'; 
$username = 'root'; 
$password = '';
$db = new PDO($dsn, $username, $password); // creates PDO object
try {   
     $db = new PDO($dsn, $username, $password);
     echo 'You are connected to the database!<br>'; 
} 
catch (PDOException $e) {   
     $error_message = $e->getMessage();  
     echo "An error occurred while connecting to the database: $error_message";   
     exit();
}
//get invoice_id variable
$invoice_id=$_POST[];
//build delete statement
$query = "DELETE FROM `vendors` WHERE invoice_id = :invoice_id";
//prepare statement
$statement = $db->prepare($query);
//bind value
$statement->bindValue(":invoice_id", $invoice_id);
//execute
$result = $statement->execute();
?>
