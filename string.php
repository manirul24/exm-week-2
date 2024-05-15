<?php

//Original String: Hello, Vowel Count: 2, Reversed String: olleH
$strings = ["Hello", "World", "PHP", "Programming"];
 
function vowels($string){
        $vowels=["a", "e", "i", "o", "u"];

        $stringMatch=preg_split('//', $string, -1, PREG_SPLIT_NO_EMPTY);

        $result= array_intersect($stringMatch, $vowels);
    
 
  echo "Original String: ".$string.", Vowel Count: ".count($result).", Reversed String: ".strrev($string)."\n";
    
}



foreach($strings as $string){

  

    vowels($string);

}

 