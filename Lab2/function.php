<?php
    function _fact($n){
        $k = 1;
        for($i = 2; $i<=$n;$i++){
            $k*=$i;
        }
        return $k;
    }

    echo _fact(4);
    echo '<br>-----------<br>';
    function factRec($n){
        if ($n < 2) return 1;
        return $n*=factRec($n-1);
    }

    echo factRec(4);
    echo '<br>-----------<br>';

    // function sumABC($a, $b = 10, $c = 10){
    //     return $a+$b+$c;
    // }

    // echo sumABC(2,4,3);

    function order($x, $arr, $str){
        for($i = 0; $i < count($arr); $i++){
            echo $arr[$i].'<br>';
        }
        echo $x +=$x;
        echo '<br>';
        echo $str;
    }
    $x = 3;
    $arr = array(2,4,5,7);
    $str = 'color';
    order($x, $arr, $str);
    // order($arr, $x, $str); error

    $a = 10;
    function ex($n){
        global $a;
        $n +=$a;
        $a = $n;
        echo $n;
    }
    echo '<br>-----------<br>';
    ex(5);
    echo '<br>-----------<br>';
    echo $a;
    echo '<br>-----------<br>';
var_dump($GLOBALS);


