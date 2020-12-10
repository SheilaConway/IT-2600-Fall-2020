<html>
<style type="text/css">
        .redtext{
                color:red;
                font-weight:bold;
        }
</style>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $text = $_POST["input"];
        echo "<p><b>The input is: </b>$text</p>";
        echo "<p>Number of characters: ".strlen($text)."</p>";
        $words = explode(" ", $text);
        $word_count = count($words);
        echo "<p>Number of words: ".$word_count."</p>";
        echo "<p>Number of words using str_word_count() function: ".str_word_count($text)."</p>";
        $rand = rand(0,$word_count-1);
        $randword = $words[$rand];
        echo "<p>Random word is::  ".strtoupper($randword)."</p>"; 
        echo "<p>".substr($text, 9,10)."</p>";
        
        $strpos_str = stripos($text, "REDSTART");
        $strpos_end = stripos($text, "REDEND");
        $strend = substr($text,$strpos_str+8,$strpos_end-($strpos_str+8)); 
        $strend = trim($strend);
		
        echo "<p>".substr($text,0,$strpos_str)."<span class='redtext'>$strend</span>".substr($text, $strpos_end+6)."</p>";
        echo "<a href='Conway-Lab-5.html'>Go Back << </a>";

}
?>
