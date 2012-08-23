<?php
/*
* Class: PokerClass
* Description: This class suffles a deck of 52 cards
*/
class PokerClass
{
    public $all_cards = array();
    
/*
* Constructor
*
*/
    public function __construct()
    {
        $cards      = array_merge(range(2, 10), array(
            "J",
            "Q",
            "K",
            "A"
        ));
        $temp_array = array();
        $suits      = array(
            "Heart",
            "Spade",
            "Diamond",
            "Club"
        );
        
        foreach ($suits as $suit) {
            foreach ($cards as $card) {
                $temp_array[] = $card . "(" . $suit . ")";
            }
        }
        
        $this->all_cards = $temp_array;
        
    }
    
/*
* method: allCards
* input: NONE
* output: array of all the current cards on the deck
*/
    public function allCards()
    {
        return $this->all_cards;
    }
    
/*
* method: private _shuffleAlgo
* Description: method that applies the algo to sorted randomly
* input: array of items
* output: array sorted randomly
*/
    private function _shuffleAlgo($items)
    {
        $i = count($items); // number of items, we already know there are 52, but just to make it more generic
        
        while (--$i) {
            // get a random number between 0 and the current position $i
            $j = mt_rand(0, $i);
            if ($i != $j) {
                $tmp       = $items[$j];
                $items[$j] = $items[$i]; //swap the items
                $items[$i] = $tmp;
            }
        }
        return $items;
    }
    
/*
* method: sufflerCards
* input: array of items
* output: array sorted randomly
*/
    public function suffleCards()
    {
        return $this->_shuffleAlgo($this->all_cards);
        
    }
}
?>
