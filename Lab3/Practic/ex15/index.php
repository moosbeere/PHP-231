<?php
$arr = ['1.txt', '2.txt', '3.txt'];
foreach($arr as $a){
    if(file_exists($a)) echo 'существует <br>';
        else echo 'no существует <br>';
}