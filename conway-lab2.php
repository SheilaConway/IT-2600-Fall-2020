<!DOCTYPE html>
<?php

   // at the top of the script we do any initializations and calculations
   // anything we do up here is accessible in the HTML afterwards  
   function $fibNum ($N){
	   
	   
   }
   // read the value from the form 
   // remember it is a Post and the name of the field is fibNum
   $fibNum = N;
   
   // check that the value is not less than 3 with an if statement
   // if it is you can echo out an error message and then exit();
   if ( $N < 3;) {
	   return = $N;
   
   }else {exit = 'Error.';}
   
   // set up the array to hold the numbers
   // first two values are always  0 and 1
   
   $i = 1;
   while ($i <9){
	   $message = $message . $i . '';
	   $i++;
   }
   $fibArray = array();
   $i;
   $fibArray[0] =0;
   $fibArray[1] =1;
   
   
   // arrays start at 0 and we alreasy have 0 and 1 filled in
   // set up a for loop that goes from 2 to $fibNum-1
   // if there are 10 numbers then $fibNum will have 10 in it
   // and the last array index will be $fibNum-1 or 9
   for ($i=2; $i<fibNum; $i++) {
      // the two numbers before this one are in index positions $i-1 and $i-2
      $fibArray[$i] = $fibArray[$i-1]+[$1-2];
   }
   return $fibArray[$N];
   // now calculate the ratio
   // The last number is at $i-1 and the one before it is at $i-2   
   $fibRatio =    $i-1 % $i-2 ;
   
?>
<html lang="en">
<head>
   <title>IT 2600 - Lab 2</title>
</head>
<body>
   <h2>Conway - IT 2600 - Lab 2</h2>
   <?php 
      // in the HTML section echo out the array of numbers and then the ratio
      for ($i=0l $i<$fibNum; $i++) {
	  
	  }
	  echo "<br /><br />";
	  echo "The ratio is: $fibRatio";
   ?>
</body>

</html>
   