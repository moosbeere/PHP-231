<?php

//     echo _fact();
//     echo '<br>---------<br>';
//     function factRec($n){
//         if($n < 2) return 1;
//         else return $n*=factRec($n-1);
//     }
//     echo factRec(4);

//     function _fact(){
//         $n = 3;
//         $k = 1;
//         for ($i = 2; $i <= $n; $i++) $k*=$i;
//         echo $k;
//     }

//     echo '<br>---------<br>';

//     list($name, $female, $age) = spisok();
//     echo $female.' '.$name.' возраст = '.$age.'<br>';

//     function spisok(){
//         $v=7;
//         return array('Маша', 'Петрова',  $v);
//     }
    
//     echo '<br>---------<br>';
// function sumABC($x, $b, $c = 20){
//     return $x+$b+$c;
// }

// echo $a = sumABC(3,4, 5);
// echo '<br>---------<br>';
// $a = sumABC(1,2)+10;
// echo $a;
// echo '<br>---------<br>';

// function order($x, $arr, $str){
//     foreach($arr as $ar){
//         echo $ar.'<br>';
//     }
//     $x+=$x;
//     $length = strlen($str);
//     echo $x.'<br>';
//     echo $length.'<br>';
// }

// $array = [2,'one', 6, 10];
// $a = 4;
// $key = 'string';

// order($a, $array, $key);



$b = f($a);
$a = 5;
// echo "1 b = $b<br>";

function f($n){
    global $a;
    // $a = 2;
    echo "func global a = $a<br>";
    $n++;
    echo "func n = $n<br>";
    // echo "function a = $a<br>";
    $b = $a + $n;// 5+3=8
    echo "func b = $b<br>";
    $a++;
    echo "func1 a = $a<br>";
    return $b;
}

$b = f($a);
echo "2 b = $b<br>";