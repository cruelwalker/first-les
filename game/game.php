<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['playBtn'])){
		
	}
}



/*
//arrays
$types = ["monster","human", "wizard"];
$player1Hand = [];
$player2Hand = [];
$cards = [];
//fill arrays
//fill cards
for ($i=0; $i < 11 ; $i++) { 
	$randomType = rand(0,2);
	$randomPower = rand(1,200);
	$type = $types[$randomType];
	$card = new Card($type, $randomPower);
	array_push($cards, $card);
}
//fill players hand
for ($i=0; $i < 11; $i++) { 
	if($i % 2 == 0){
		array_push($player1Hand, $cards[$i]);
	}	
	else{
		array_push($player2Hand, $cards[$i]);
	}
}
*/

/*
$playerHand = $player1->getHand();
foreach ( $playerHand as $key => $value) {
	echo($value->getType());
}
echo($cards[0]->getType() . $cards[0]->getPower());*/
?>