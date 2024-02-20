<?php
    $a = 5;
    $b = &$a;

    echo "Переменная a = $a, Переменная b = $b<br>";
    $b = 10;
    echo "Переменная a = $a, Переменная b = $b<br>";

    $c = 20;
    $z = 'c';

    echo "Переменная c = $c, Переменная z = $z<br>";
    echo 'Переменная c = '.$c. ', Переменная z = '. $$z.'<br>';

    $d = 1; $f = 2; $k = 3;
    echo "До изменения d = $d, f = $f, k  = $k<br>";

    // list($d, $f, $k) = F1($d, $f, $k); локальная область видимости
    F1($d, $f, $k);//передача значений по ссылке
    echo "d = $d, f = $f, k  = $k<br>";
    /*Вызов функции с созданием локальной области видимости
    function F1($d, $f, $k){
        $d++; $f--; $k+=$k;
        return array($d, $f, $k);
    }*/

    //Вызов функции, передавая переменные как ссылки
    function F1(&$d, &$f, &$k){
        $d++; $f--; $k+=$k;
        return array($d, $f, $k);
    }


    //вызов функции по переменной, которая символическая ссылка на название функции

    $func = 'sin';
    $y = 30;
    $x = $y/180*pi();

    $z = $func($x);
    print "$func($y<SUP>o</sup>)= $z<BR>";

    print ex_val($func,$x);
    echo '<br>';
    print ex_val('sin',$x);

    function ex_val($func, $x){
        $res = $func($x)+1;
        return $res;
    }


    


