<?php

 $arr = array(
    array(1,2,3),
    array('a','b'),
    array(2,3,4,5,6,7),
 );

//  foreach($arr as $value){
//     foreach($value as $elem){
//         echo "$elem,";
//     }
//     echo "<br>";
//  }

 $N1 = [
    'key1'=>[1,2,3],
    'key2'=>[4,10,9],
    'key3'=>[4,6,2],
    // ['a','b','g'],

 ];
// $N1[0][0]='abc';

// usort($N1, 'compare');

function compare($x, $y){
    var_dump($x);
    echo '<br>';
    var_dump($y);
    echo '<br>';

    if($x[1] === $y[1]) return 0;
    elseif($x[1] > $y[1]) return 0;
    else return 1;
}

sort($N1);
foreach($N1 as $key=>$value){
    echo "$key=>";
    foreach($value as $elem){
        echo "$elem,";
    }
    echo "<br>";
 }


 
