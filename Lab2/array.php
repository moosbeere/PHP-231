<?php
    // $m = [2,'one',6,1,'Winter'];
    // foreach($m as $value){
    //     echo $value.'<br>';
    // }
    // echo '<br>-----------------<br>';
    // sort($m);
    // foreach($m as $value){
    //     echo $value.'<br>';
    // }
    // echo '<br>-----------------<br>';
    // $m1 = [
    //     'key'=>'gold',
    //     '3'=>3,
    //     'Key'=>'gold'
    // ];
    // foreach($m1 as $key=>$value){
    //     echo $key.'=>'.$value.'<br>';
    // }
    // echo '<br>-----------------<br>';

    // ksort($m1);
    // foreach($m1 as $key=>$value){
    //     echo $key.'=>'.$value.'<br>';
    // }
    // echo '<br>-----------------<br>';

    // // echo array_pop($m);
    // // echo array_push($m1, 4,7);
    // echo array_shift($m1);
    // echo '<br>-----------------<br>';
    // array_unshift($m1, 4,5,7,8);
    // var_dump($m1);

    $arr = [
        [1,4,6,7,9,4],
        ['one', 'two'],
        ['key', 6, 'gold']
    ];

    $arr[3][1] = '3';

    foreach($arr as $ar){
        foreach($ar as $a){
            echo $a.', ';
        }
        echo '<br>';
    }

    // $arr = array(array(),array());

    function compare($x, $y){
        if ($x[1] == $y[1]) return 0;
        else if ($x[1] > $y[1]) return 0;
        else return 1;
    }
    // $a = 'compare';
    echo '<br>-----------------<br>';

    usort($arr,'compare');
    foreach($arr as $ar){
        foreach($ar as $a){
            echo $a.', ';
        }
        echo '<br>';
    }
    echo '<br>-----------------<br>';
$m2[0] = 'blue';
$m2[1] = 'green';

$count = count($m2);
for ($i=0; $i < $count; $i++){
    echo $i.' '.$m2[$i].'<br>';
}
echo '<br>-----------------<br>';

$m2['red'] = 'color';
for ($i=0; $i < count($m2); $i++){
    echo $i.' '.$m2[$i].'<br>';
}
echo '<br>-----------------<br>';
$i = 290;
$M[0]=100;

$M[1]=200;

$M['color']='красный';

$M[3]=NULL;

$M[4]=FAlSE;

$M[5]='';

$M[8]=300;

echo '<br>-----------------<br>';

foreach($M as $key=>$value){
    echo $key.'=>'.$value.'<br>';
}
echo '<br>-----------------<br>';
    var_dump($m2);
echo '<br>-----------------<br>';

    // var_dump(array_merge($M, $m2));

    $arr1 = [5,4,3,2,1];
    $arr2 = ['one', 'two', 'three', 'four', 'five'];
    var_dump(array_combine($arr1, $arr2));



