<?php

    // $n = 5;
    // echo rek_fact(5);

    function fact($n){
        $k = 1;
        for($i = 2; $i <= $n; $i++) $k*=$i;
        return $k;
    }

    function rek_fact($n){
        if ($n == 1) return $n;
        else return $n*rek_fact($n-1);
    }

    // list($lastName, $name, $old) = spisoc();
    // // echo "$lastName $name $old лет";

    // function spisoc(){
    //     $old = 5;
    //     return array('Petrov', 'Oleg', $old);
    // }


    function sum_arr($a, $b, ...$c){
        $sum = $a+$b; 
        foreach($c as $v){
            $sum+=$v;
        }
        return $sum;
    }

    function sum($a,$b,$c=2){
        return $a+$b+$c;
    }

    // echo sum_arr(1,1,1,1,1);
    // echo sum(1,1,3);


    $a = 10;
    // $b = f($a);

    function f($c){
        $a = 5;
        $c++;
        global $a;
        $d = $a + $c;
        print "a = $a<br>";
        return $d;
    }
    // print "b = $b<br>";

    var_dump($GLOBALS);


