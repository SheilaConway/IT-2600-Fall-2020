<?php
	$num1 = $_POST["num1"];
	
	for ($x=3; $x<= $num1; $x=$x+2){
		$isPrime = true;
		$sr = floor (sqrt ($x)); //floor removes the decimal places to round down to nearest int
		for ($i=3; $i<= $sr; $i++){
			if ($x%$i==0){
				$isPrime = false;
			}
		}
		if ($isPrime){
			echo $x."<br/>";
		} 
	}
?>
