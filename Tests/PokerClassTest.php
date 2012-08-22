<?php
require_once '../lib/PokerClass.php';

class PokerClassTest extends PHPUnit_Framework_TestCase
{


	public function testAllCards(){

		$stack = array();
        $this->assertEquals(0, count($stack));
		
        $l = new PokerClass();
        $this->assertEquals(52, count($l->allCards()));

	}

}
?>

