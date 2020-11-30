<?php

// get variables from HTML
$game = $_POST['game'];
$hands = $_POST['hands'];
$cards=0;
if($game=='5card'){
        $cards=5;
}
elseif($game=='blackjack'){
        $cards=2;
}
elseif($game=='overunder'){
        $cards=1;
}

//this is game array
$game = array('5card', 'blackjack','overunder');

//build the deck  pg 335
$faces = array('2','3','4','5','6','7','8','9','T','J','Q','K','A');
$suits = array('h','d','c','s');
//build array $cards
$cards = array();
foreach ($faces as $face){
	foreach ($suits as $suit){
		$cards[] = $face . $suit;
	}
}
//Shuffle shuffle($cards);
shuffle($cards);
$hands = array();
for ($i = 0; $i<5; $i++){
	$hands[]= array_pop($cards);
}
//for ($i = 1; $i<2; $i++){
	//$hands[]= array_pop($cards);
//}
//for ($i = 2; $i<2; $i++){
	//$hands[]= array_pop($cards);
//}
echo implode(',',$hands);
//$cards  
?>
<html>
<h2>Conway - IT2320 - Lab 6</h2>
<?php
for ($i = 0; $i<$hands; $i++) {  // how many players
    for ($j=0; $j<$game; $j++) {  // number of cards in each hand
  $card = array_pop($cards);
?>
   <img src="<?php echo 'images/'.$cards.'.png'; ?>" width="100">
   &nbsp;&nbsp;&nbsp;
<?php  
    }
echo "<br />";
}
?>
