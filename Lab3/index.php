<?php

    // $a = 10;
    // $b = &$a;

    // echo "b = $b<br>";

    // $b = 20;
    // echo "a = $a<br>";

    // $s = 'a';

    // echo $$s;//$a

        // $a = 2; $b = 3; $c = 4;
        // func($a, $b, $c);
        // echo "a = $a<br>";
        // echo "b = $b<br>";
        // echo "c = $c<br>";

        // function func(&$a, &$b , &$c){
        //     $a++; $b--; $c;
        //     // return array($a, $b, $c);
        // }

        // $func = 'sin';
        // $y = 30;
        // eval('$x = $func($y/180*pi());');
        // echo $x;

$vek=$_GET['vek'];

$XVI="Иван Васильевич";

$XVIII="Пётр Алексеевич";

$XIX="Николай Павлович";

print "В $vek веке царствовал ". $$vek."<BR>";