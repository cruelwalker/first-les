<?php
/**
 * 
 */
class Card
{
	private $type;
    private $power;


	function Card($type, $power)
	{
		$this->type = $type;
		$this->power =$power;
	}
	function getType(){
		return $this->type;
	}
	function getPower(){
		return $this->power;
	}
}
?>	