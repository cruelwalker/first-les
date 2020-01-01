<?php
    require_once('game.php');    
    require_once('player.php');
    require_once('card.php');
    session_start();
    //$_SESSION['name'] = "";
    //$_SESSION['score'] = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['loginBtn'])){
            $username = $_POST['player1name'];
        }
        $playerHand = createHand();
        $pcHand = createHand();
        $player1 = addPlayer($username, $playerHand);
        $player2 = addPlayer("PC", $pcHand);
        $_SESSION['name']=$player1->getName();
        $_SESSION['score'] = $player1->getScore();
        $_SESSION['player1'] =serialize($player1);
        $_SESSION['player2'] = $player2;
        /*$playerHand = $player1->getHand();
        foreach ( $playerHand as $key => $value) {
	        echo($value->getType()." ".$value->getPower()."<br>");
        }  */
        //echo($_SESSION['name']);     
        header('Location: playPage.php');
    }
    function createHand(){
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
        for ($i=0; $i < 6; $i++) { 
	        
		    array_push($player1Hand, $cards[$i]);
        }
        return $player1Hand;
    }
    function addPlayer($username, $player1Hand){
        $player = new Player($username, $player1Hand, 10);
        return $player;
    }

?>