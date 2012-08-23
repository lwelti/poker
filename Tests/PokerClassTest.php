<?php
class PokerClassTest extends PHPUnit_Framework_TestCase
{

/*
 Basic test, to confirm we have 52 items
*/
	public function testAllCards(){

		
        $l = new PokerClass();
        $this->assertEquals(52, count($l->allCards()));
        $this->assertEquals(52, count($l->suffleCards()));

	}

/*
 Using array_unique() to confirm we only have 52 items
*/
        public function testDuplicates(){


        $l = new PokerClass();
	$a = $l->suffleCards();
		$result = array_unique($a);

        $this->assertEquals(52, count($result));

        }

/*
Test to compare both arrays
*/
	public function testSort(){

	$l = new PokerClass();

	$a_str = implode(",", $l->allCards());
	$b_str = implode(",", $l->suffleCards());

	if ( $a_str == $b_str){
		$this->assertFalse(TRUE);
	}


	}


}
?>

