<?php
    $a = 3;
    $b = 4;
    $c = 7;
    // echo $c = ($a > $b)? $a:$b;
    // echo $c;

    // if ($a > $b){
    //     echo $a;
    //     echo 'ok';
    // } 
    // else if ($a == $b) echo 'ok';
    // else echo $b;

    switch($a + $b){
        case 3: echo 'warning';
                break;
        case 7: echo 'ok<br>';
                break;
        case 6: echo 'don`t believe<br>';
                break;
        default: echo 'any<br>';
    }

    echo '<br>----------------------<br>';
    $i = 2;
    $S = 0;
    switch($i){
        case 1: $S++;
        case 2: $S++;
        case 3: $S++;
        case 4: $S++;
        case 5: $S++;
    }

    // echo $S;
    $x = 5;
    while($x < 10){
        echo $x.'<br>';
        $x++;
    }
    echo '<br>----------------------<br>';

    do{
        echo $x.'<br>';
        $x--;
    }while($x>=5);

    echo '<br>----------------------<br>';

    $arr = array(1,2,3,4,5);
    for ($i = 0; $i < count($arr);$i++){
        echo $arr[$i].'<br>';
    }


