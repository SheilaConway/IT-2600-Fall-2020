<?php
$myNum = $_POST["int"];
$results = array ();//sets up empty array
$results = myFunction($myNum); //calling the function

function myFunction($myNum){
	$fact = 1; //initializing
	for ($x = 1; $x <= $myNum; $x++){
		$fact = $fact * $x;
	}
	$sr = sqrt($myNum);
	$results = [$fact, $sr];
	return $results; //returns the array to line 4
}
?>


<html>
<body>

<?php
echo "<h2> Sheila Conway IT 2600 Lab 3 </h2>";
echo "The value entered was: " . $myNum . "<br>";
echo "The square root:" . $results[1] . "<br>" ;//position 1 
echo "The factorial:" . $results[0] . "<br>" ;//position 1 
echo "<br>";
?>
</body>
</html> 
