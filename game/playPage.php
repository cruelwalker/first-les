<!DOCTYPE html>
<html>
    <head>
        <title>Rami oh</title>
    </head>
    <body>
        <div id="card-container">
            <div id="card-img">
            </div>
            <div id="card-power"></div>
        </div>                    
    </body>
    <?php
        require_once("main.php");
        //require_once("player.php");
        //require_once("card.php");
        $p1 =unserialize($_SESSION['player1']);
        echo("player name: ".$p1->getName()."<br>");
        $name = $p1->getName();
        $hand = $p1->getHand();
        foreach ($hand as $key => $value) {
            echo($value->getType()." ".$value->getPower()."<br>");
        }
    ?>
</html>