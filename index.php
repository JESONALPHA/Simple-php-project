<?php

require_once './src/RandomQuotes.php' ;

//create a new object of RandomQuotes class 
$rq = new \RandomQuotes\RandomQuotes ;

//generate a new Quote

echo $rq->generate()




?>