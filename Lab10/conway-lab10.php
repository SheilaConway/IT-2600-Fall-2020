<?php
// connect to database
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
// steal this code from lab 9
//  $db is the database connection

// get the values from the form
$vendor_name = $_POST['vendor_name'];
$vendor_address1 = $_POST['vendor_address1'];
$vendor_address2 = $_POST['vendor_address2'];
$vendor_city = $_POST['vendor_city'];
$vendor_state = $_POST['vendor_state'];
$vendor_zip_code = $_POST['vendor_zip_code'];
$vendor_phone = $_POST['vendor_phone'];
$vendor_contact_last_name = $_POST['vendor_contact_last_name'];
$vendor_contact_first_name = $_POST['vendor_contact_first_name'];
$vendor_default_terms_id = $_POST['vendor_default_terms_id'];
$vendor_default_account_number = $_POST['vendor_default_account_number'];

// create the SQL
$query = "INSERT INTO vendors (vendor_name, vendor_address1, vendor_address2, vendor_city, vendor_state, vendor_zip_code, vendor_phone, vendor_contact_last_name, vendor_contact_first_name, vendor_default_terms_id, vendor_default_account_number)
   VALUES (:vendor_name, :vendor_address1, :vendor_address2, :vendor_city, :vendor_state, :vendor_zip_code, :vendor_phone, :vendor_contact_last_name, :vendor_contact_first_name, :vendor_default_terms_id, :vendor_default_account_number)";

echo $query."<br>";
// prepare
$statement = $db->prepare($query);

// bind variables 
$statement->bindValue(":vendor_name", $vendor_name);
$statement->bindValue(":vendor_address1", $vendor_address1);
$statement->bindValue(":vendor_address2", $vendor_address2);
$statement->bindValue(":vendor_city", $vendor_city);
$statement->bindValue(":vendor_state", $vendor_state);
$statement->bindValue(":vendor_zip_code", $vendor_zip_code);
$statement->bindValue(":vendor_phone", $vendor_phone);
$statement->bindValue(":vendor_contact_last_name", $vendor_contact_last_name);
$statement->bindValue(":vendor_contact_first_name", $vendor_contact_first_name);
$statement->bindValue(":vendor_default_terms_id", $vendor_default_terms_id);
$statement->bindValue(":vendor_default_account_number", $vendor_default_account_number);

// execute
$result = $statement->execute();
//$result = $statement->fetchAll();

if ($result)
   echo "inserted";
   else
   echo "Error";

$statement->closeCursor();

?>
