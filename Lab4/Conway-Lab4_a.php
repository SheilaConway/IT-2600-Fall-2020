<?php
	//function getGcd($aa,$bb)
	$aa = $_POST["aa"];//gets the info from the html file
	$bb = $_POST["bb"];
	//echo $aa . " "  . $bb;
	
	while ($bb != 0) {
		$rem = $aa%$bb;
		$aa = $bb;
		$bb = $rem;
		
	}
	echo "GCD equals " .$aa;
?>
