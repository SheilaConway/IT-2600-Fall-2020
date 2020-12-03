<?php
// db connection
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
//get the values from the user form

$invoice_date1 = $_POST["invoice_date1"];
$invoice_date2 = $_POST["invoice_date2"];
$vendor_name = $_POST["vendor_name"];
echo $invoice_date1."<br>";
$needand = false;
$searchterm = "";
//form the SQL query used to get the database
$query = "SELECT vendor_name, invoice_number, invoice_total, invoice_date
                  FROM invoices JOIN vendors USING (vendor_id) "; 
if (!empty($vendor_name)){
	$searchterm = "%$vendor_name%";
	$query .= " where vendor_name LIKE :searchterm"; 
	$needand = true;
}
if (!empty($invoice_date1)){
	if ($needand){
		$query .= " AND invoice_date >= :invoice_date1  ";
	} else {
		$query .= "WHERE invoice_date >= :invoice_date1 ";
	}
	$needand = true;
}
if (!empty($invoice_date2)){
	if ($needand){
		$query .= " AND invoice_date <= :invoice_date2  ";
	} else {
		$query .= "WHERE invoice_date <= :invoice_date2 ";
	}
}
echo $query."<br>";
//prepare the statement
$statement = $db->prepare($query);
//bind the variables
if (!empty ($invoice_date1)){$statement->bindValue(':invoice_date1', $invoice_date1);}
if (!empty ($invoice_date2)){$statement->bindValue(':invoice_date2', $invoice_date2);}
if(!empty ($vendor_name)){$statement->bindValue(':searchterm', $searchterm);}
//execute the statement
$statement->execute();
$invoices = $statement->fetchAll();// get all results
$statement->closeCursor();       // close the PDOStatement object, we don't need it any more
//display the data

foreach ($invoices as $invoice) {
 echo $invoice['vendor_name']." - ".$invoice['invoice_number']." - ".$invoice['invoice_date']."<br />";
}  
?>
