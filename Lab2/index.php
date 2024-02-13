<?php
    function separator(){
        echo '<br>--------------<br>';
    }

    $m1 = array('summer');
    print $m1[0].'<br>';

    $m2[0] = 'winter';
    var_dump($m2);
    separator();

    $m3 = array(3, 'automn', 100);
    $m3[3] = 7;
    $m3[5] = 'five';
    $m3[6] = 22;
    $m3['arr'] = 'arr';
    var_dump($m3);
    // separator();

    // // for($i = 0; $i < count($m3); $i++){
    // //     echo $m3[$i].'<br>';
    // // }

    // separator();
    // foreach($m3 as $value){
    //     echo $value.'<br>';
    // }
    // separator();    
    // foreach($m3 as $key=>$value){
    //     echo $key.'=>'.$value.'<br>';
    // }

    // separator();
    // $a = array(1,2);
    // $b = array(1,'2');

    // $c = $a + $b;
    // var_dump($c);
    // echo '<br>';
    // foreach($c as $key => $value){
    //     echo $key.'='.$value.'<br>';
    // }
    // separator();
    // $d = array(2 => 'a', 3 => 'b', 8 => 'c');
    // var_dump($a+$d);

    // separator();
    // var_dump($a == $b);//true
    // echo '<br>';
    // var_dump($a === $b);//false
    // echo '<br>';
    // var_dump($a != $b);//false
    // echo '<br>';
    // var_dump($a !== $b);//true
    // echo '<br>';
    separator();

    // sort($m3);
    // foreach($m3 as $key=>$value){
    //     echo $key. ' '. $value.'<br>';
    // }
    // ksort($m3);
    // foreach($m3 as $key=>$value){
    //     echo $key. ' '. $value.'<br>';
    // }
    // echo array_pop($m3);
    // separator();
    // echo array_push($m3, 3);
    // separator();
    // var_dump($m3);
    // separator();
    // array_unshift($m3, 2, 3, 4);
    // var_dump($m3);

    $M2 = [
        [1, 2, 3],
        ['one', 'two'],
        ['a', 2, 'big', 4]
    ];
    var_dump($M2);
    separator();

    foreach($M2 as $arr){
        foreach($arr as $value){
            echo $value.',';
        }
        echo '<br>';
    }

    separator();
    // function compare($x, $y){
    //     if ($x[1] == $y[1]) return 0;
    //     else if($x[1] > $y[1]) return 0;
    //     else return 1;
    // }

    // usort($M2, 'compare');
    // foreach($M2 as $arr){
    //     foreach($arr as $value){
    //         echo $value.',';
    //     }
    //     echo '<br>';
    // }

    $M3[0]= 'blue';
    $M3[1]= 'yellow';
    for ($i=0;$i<count($M3); $i++){
        echo $M3[$i].'<br>';
    }
    separator();
    $M3['red'] = 'RED';
    for ($i=0;$i<count($M3); $i++){
        echo $M3[$i].'<br>';
    }

    separator();
    $M[0]=100;

$M[1]=200;

$M['red']='красный';

$M[3]=NULL;

$M[4]=FAlSE;

$M[5]='';

$M[8]=300;

// for ($i=0;$i<count($M); $i++){
//     echo $M[$i].'<br>';
// }
foreach($M as $key=>$value){
    echo $key.'=>'.$value.'<br>';
}



    