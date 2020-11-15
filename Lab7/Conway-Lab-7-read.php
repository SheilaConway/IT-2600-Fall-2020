<?php
    
    if(!isset($_COOKIE["Email"])){
        echo "Email Cookie is not set! <br>";
    }else{
        echo "Your email: ".$_COOKIE["Email"]."<br>"; 
    }

    if(!isset($_COOKIE["Food"])){
        echo "Food Cookie is not set! <br>";
    }else{
        echo "Your favorite food: ".$_COOKIE["Food"]."<br>"; 
    }
   
    if(!isset($_COOKIE["Year"])){
        echo "Year Cookie is not set! <br>";
    }else{
        echo "Year you were born: ".$_COOKIE["Year"]."<br>"; 
    }
    
?>
<br><br>
<h2>Click here to go Home <button><a href="Conway-Lab-7-simpleform.html">Click</a></button></h2>
