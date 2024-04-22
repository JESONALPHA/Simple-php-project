<?php

namespace RandomQuotes ;


class RandomQuotes {
//create the public function that import the json file
    public function getRandomQuotes(){

        //inside the function get the list of Quotes
        $quotes= file_get_contents( __DIR__ . '/../inc/quotes.json' ) ;

        //convert the json file to a php array
        $quotes = json_decode($quotes ,true);
        //get a random index number

        $index = mt_rand(0 ,count($quotes));

        return $quotes[$index];
}


    public function generate(){
        return $this->getRandomQuotes();
    }


}







?>