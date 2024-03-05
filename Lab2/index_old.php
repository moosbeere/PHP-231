<?php

    // $arr = array(1,2,3,54,6);

    // $a[0]=2;
    // $a[2]=3;

    // $b = [
    //     'one'=>1, 
    //     'two'=>2
    // ];

    // echo $b['one'];// 1

    // var_dump($arr);
    // echo '<br>';
    // print_r($a);
    // echo '<br>';
    // print_r($b);
    // echo '<br>';

    // $M = array(1,2,3,4);
    // $M[4] = '';
    // $M[5] = 4;
    // foreach($M as $key=>$value){
    //     echo "$key----$value<br>";
    // }

    // foreach($M as $value){
    //     echo "$value<br>";
    // }

    // for ($i=0; $i < count($M); $i++) { 
    //     echo $M[$i].'<br>';
    // }

    $a1 = array(1,2,3);
    $a2 = array(4,5,6);
    $a3 = $a2+$a1;
    // print_r($a3);

    $b1 = [
        '0'=>1,
        '1'=>2,
        '2'=>3
    ];
    $b2 = [
        '3'=>1,
        '1'=>4,
        '5'=>3
    ];
    $b3 = $b2+$b1;
    // print_r($b3);

    $d = array(2 => 'a', 3 => 'b', 8 => 'c');
    $a = array('0'=>1,'1'=>2);
    $c = array('1'=>2,'0'=>1);
    // var_dump($a == $c);

    $arr = array(6,4,8,1);
    sort($arr);
    // print_r($arr);

    $cveta = [
        'yellow' => 'Жёлтый',
        'green' => 'Зеленый',
        'maroon' =>'Каштановый',
        'blue' =>'Синий',    
        'red' =>'Красный',     
    ];
    // asort($cveta);
    // print_r($cveta);

    $ARR = array_pad($cveta, 8, 'rgb');
    // print_r($ARR);
    print_r(array_shift($cveta));
    echo '<br>';
    print_r($cveta);
    

