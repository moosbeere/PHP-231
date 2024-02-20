<?php
//ex 3
    echo '<br>--------ex 3--------<br>';
    $arr = array(1,2,3,4,5);
    $reverse = array_reverse($arr);
    foreach($reverse as $r){
        echo $r.' ';
    }

    echo '<br>--------ex 4--------<br>';
    $a1 = array('a', 'b', 'c');
    $a2 = array(1,2,3);
    $res4 = array_combine($a1, $a2);
    foreach($res4 as $key=>$value){
        echo "$key => $value, ";
    }
    echo '<br>--------ex 6--------<br>';
    $a3 = array('a', 'b', 'c', 'd', 'e');
    $res6 = array_map('strtoupper', $a3);
    foreach($res6 as $r){
        echo $r.' ';
    }
    echo '<br>--------ex 8--------<br>';
    $a4 = [1,2,3,4,5];
    echo array_product($a4);
    
    echo '<br>--------ex 9--------<br>';
    $a5 = ['a'=>1, 'b'=>2, 'c'=>3];
    // echo array_rand(array_flip($a5));
    echo array_rand($a5);
    echo '<br>--------ex 11--------<br>';
    $a6 = ['a', 'b', 'c', 'd', 'e'];
    $a7 = array_replace($a6, [0 =>'!']);
    var_export($a7);
    echo '<br>--------ex 12--------<br>';
    $a8 = ['a', '-', 'b', '-', 'c', '-', 'd'];
    echo array_search('-', $a8);
    echo '<br>--------ex 16--------<br>';
    $a9 = [1, 2, 3, 4, 5, 6, 7, 8];
    
    for($i = 0; $i < 5; $i++){
        echo array_shift($a9).' ';
        echo array_pop($a9).' ';
    }
    echo '<br>--------ex 16--------<br>';

    $array = array(1, 2, 3, 4, 5);

    $newArray = (array_reverse($array));

    print_r($newArray);



