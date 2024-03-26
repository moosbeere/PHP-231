<?php
    $text = file_get_contents('text.txt');
    $array = explode(PHP_EOL,$text);
    $count = array_sum($array);
    $text.=$count;
    file_put_contents('text.txt', $text);