<?php
    // $a = 10;
    // $b = &$a;

    // echo "a = $a, b = $b<br>";
    // $b = 20;
    // echo "a = $a, b = $b<br>";

    // $c = 30;
    // $z = 'c';
    // echo "c = $c, z = $z<br>";
    // echo 'c = '.$c.' z = '.$$z.'<br>';


    // $func = 'sin';
    // $y = 30;
    // $x = $y/180*pi();

    // echo $func($x);

    $a = 2; $b = 3; $c = 1;
    // list($a, $b, $c) = F1($a, $b, $c);
    F1($a, $b, $c);
    echo "a = $a, b = $b, c = $c";

    function F1(&$a, &$b, &$c){
        $a++;
        $b--;
        $c++;
        return array($a, $b, $c);
    }

