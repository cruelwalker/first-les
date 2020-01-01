<?php
/**
 * 
 */
class Player
{
	private $name;
	private $hand;
	private $score;

	function Player($name, $hand, $score)
	{
		$this->name = $name;
		$this->hand = $hand;
		$this->score = $score;
	}
	function getName(){
		return $this->name;		
	}
	function getHand(){
		return $this->hand;
	}
	function getScore(){
		return $this->score;
	}
}

?>	