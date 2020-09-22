<?php
  //While Loop
  $a = $x = 105;
  $b = $y = 45;
 
  while($x != $y){  //not equal
    if ($x>$y){
		$x = $x -$y;
	}
	else{
		$y = $y-$x;
	}
  }
  echo "GCD of $a and $b is: $x";
?>
