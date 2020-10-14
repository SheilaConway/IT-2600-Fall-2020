<html>
	<head>
		<title>The GCD of Two Numbers</title>
	</head>
	<body>
		<form method="post">
		<table>
			<tr>
			<th>Number 1</th>
			<td><input type = "text" name= "aa" value="<?php echo @$aa;?>"/></td>
			</tr>
			<tr>
			<th>Number 2</th>
			<td><input type = "text" name = "bb" value = "<?php echo @$bb;?>"/></td>
			</tr>
			<tr>
				<td align = "center" colspan="2">
				<input type = "submit" value = "Submit" name = "gcd" /></td>
			</tr>
			</table>
		</form>
	</body>
</html>

<?php
	function getGcd($aa,$bb)
	{
		if($aa == 0 or $bb ==0)
		{
			if ($aa == 0){
				return $bb;
			}
			else{
				return $aa;
			}
		}
		else if($aa == $bb){
			return $aa;
		}
		else if ($aa == $bb){
			return $aa;
		}
		else {
			if ($aa > $bb){
				$temp + $aa; //keeping the original in the process (variable swapping)
				$aa = $bb;
				$aa = $temp;
		}
		for ($i = 1; $i < ($aa+1); $i++)
		{
			if ($aa%$i == 0 and $bb%$i == 0) // actually finding the gcd
				$gcd = $i;
		}
		return $gcd;
		
		}
		
	}	
	

	extract($_POST);
    

    if(isset($gcd))
    {
        $result = getGcd($aa, $bb);
		echo "<h2> GCD of $aa and $bb is: $result </h2>";
	}
	
?>
