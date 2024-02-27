<?php

    $file = file('test.txt', FILE_IGNORE_NEW_LINES);
    $count = 0;
    foreach($file as $a){
        $count+=$a;
    }
    echo $count;
    file_put_contents('test.txt', implode(PHP_EOL, $file)."\r\n$count");