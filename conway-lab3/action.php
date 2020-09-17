<?php
//$a = $_POST["int"];
//function myFunction(int $a){
	//statements that are executed by the function
	
	function myFunction($number){
	echo "$number<br>";
}

//echo myFunction($a);

if ( $number > 0) {
	   //return $a;
	   echo "Any number greater than 0";
	   //exit();
}
else {
	echo "error";
}

  $results = array ();
  //$results = myFunction($number);
  
  $myArray [ 0 ]=5;
  
  
  for ($number = 0;$number<count($myArray);$number++){
	  
	  echo $a . "-" . $myArray[$a] . "<br/>";
  }
  
//arrays are always a list, they have an index
//they always start with point 0
//sqrt ( float $arg ) : float
 //echo sqrt();
?>


<html>
<body>

Your number is <?php echo $_POST["name"]; ?><br>

<?php
echo "The value entered was: ";
//echo "The square root:" sqrt($a); 
echo '<br>';
//echo "The square:"
//echo "The factorial:"
?>
</body>
</html> 
