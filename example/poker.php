<?php
   require "../lib/PokerClass.php";

   $l = new PokerClass();
 	echo "<pre>";
	echo "Original cards:\n";
	print_r($l->allCards());
	echo "=======================<br>\n";
	echo "shuffle: \n";
   $a = $l->suffleCards();
   print_r($a);
?>

