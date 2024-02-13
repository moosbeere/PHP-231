<?php
    $arr = array(1,4,7,6);
    for($i = 0; $i < count($arr); $i++){
        // echo $arr[$i].'<br>';
    }
    $arr2 = array(1,'4',7,6);
    $arr3[0] = 'summer';
    $arr3[1] = 'winter';
    $arr3[3] = 'automn';
    $arr3[8] = 8;
    for($i = 0; $i < count($arr3); $i++){
        // echo $arr3[$i].'<br>';
    }

    foreach($arr3 as $key=>$value){
        echo "$key=>$value<br>";
    }
    $str = 'X+2=4';
        explode($str, '=');

    $m1 = array(1, 2);
    $m2[3] = 1;
    $m2[4] = 1;
    $m3 = $m1 + $m2;
    var_dump($m3);
    echo '<br>';
    $c = 2.0;
    $c = (int)$c;
    echo gettype($c);
    ?>