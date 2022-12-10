<?php

$raw = file_get_contents('data.txt');
// $data = str_replace("\n\n"," ",$raw);
// $data = str_split($raw, 1);
var_dump($raw);

function partOne($data) {

    $answer = "";

    for ($i=0; $i < strlen($data)-3; $i++) { 
        
        $buffer = substr($data, $i, 4);
    
        $haystack = str_split($buffer, 1);
    
        $filteredHaystack = array_unique($haystack);
        if (count($filteredHaystack) === count($haystack)) {
            $answer = $i + 4;
            break;
        }
    }
    echo $answer;
}

partOne($raw);
