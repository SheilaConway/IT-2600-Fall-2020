<?php

    if(isset($_POST['email'])){
        setcookie("Email", $_POST['email'], time() + (60 * 15), "/");
        echo "Email Cookie is set! <br>";
    }else{
        echo "Email Cookie is not set! <br>";
    }

    if(isset($_POST['food'])){
        setcookie("Food", $_POST['food'], time() + (60 * 15), "/");
        echo "Food Cookie is set! <br>";
    }else{
        echo "Food Cookie is not set! <br>";
    }

    if(isset($_POST['year'])){
        setcookie("Year", $_POST['year'], time() + (60 * 15), "/");
        echo "Year Cookie is set! <br>";
    }else{
        echo "Year Cookie is not set! <br>";
    }

?>
<br><br>
<h2>Click here to go Home <button><a href="Conway-Lab-7-simpleform.html">Click</a></button></h2>
<br><br>
<h2>Click here to Read Cookies <button><a href="Conway-Lab-7-read.php">Click</a></button></h2>
