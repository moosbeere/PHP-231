<?php
/*
//ex 5 
    $a = 2; 
    $b = 2.0;
    $c = '2'; 
    $d = 'two'; 
    $g = true; 
    $f = false;
// нет таких арифметических операций

//ex 1
    $a = 27; $b = 12;
    $res = round(sqrt($a**2 + $b**2),2);
    echo $res.'<br>';

//ex 11
    $quieter = 'Тише'; $go = 'едешь'; $further = 'дальше';
    echo "$quieter $go, $further будешь!";

//ex 15
    $give = 'Дают';$take = 'бери'; $beat = 'бьют'; $run = 'беги';
    echo $give.'-'.$take.', '.$beat.'-'.$run.'<br>';

//ex 18
    $a = 4.3; $b = 7.7; $c = '5.5'; $d = '3.4кг';
    echo $a.' значение пола = '.floor($a).' значение потолка = '.ceil($a).' округление: '.round($a).'<br>';
    echo $b.' значение пола = '.floor($b).' значение потолка = '.ceil($b).' округление: '.round($b).'<br>';
    echo $c.' значение пола = '.floor((float)$c).' значение потолка = '.ceil((float)$c).' округление: '.round((float)$c).'<br>';
    echo $d.' значение пола = '.floor((float)$d).' значение потолка = '.ceil((float)$d).' округление: '.round((float)$d).'<br>';

//ex 22
    $a = 4;$b = 3;$c = ' мандаринок<br>';
    echo $a*$b.$c;

    

//30
    $a = 3; $b = '3'; $d = '3a';
    print 'a == b '.($a == $b).'<br>';
    print 'a >= b '.($a >= $b).'<br>';
    print 'b < d '.($b < $d).'<br>';
    print 'a < d '.($a < $d).'<br>';


//ex 34

    $a = 2; $b = 2.0;$c = '2';$d = 'two';$g = true;$f = false; 

    $arr = [$a, $b, $c, $d, $g, $f];
    foreach($arr as $l){
        echo 'Исходный тип '.gettype($l).' полученное значение ';
        var_export((bool)$l);
        echo '<br>';
    }

//ex 38
    $a = 7; $b = '8';
    echo (++$a > --$b)? $a : $b;
    echo '<br>';

//ex 51
    $sum = 0;
    $i = 0;
    while($i <= 20){
        if ($i%2){
            $sum+=$i;
        } 
        $i++;
    }
    echo $sum;
*/
$a = 2;
$b = 2.0;
$c = '2';
$d = 'two';
$g = true;
$f = false;


echo gettype($b+$c);

// echo $a-$b

// echo $a*$b

// echo $a%$b

// echo $a**$b

