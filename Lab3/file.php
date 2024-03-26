<?php
    // // print_r($text);

    // print_r($_SERVER['SCRIPT_NAME']);
    // echo'<br>';
    // print_r($_SERVER['SCRIPT_FILENAME']);

    // echo __DIR__.'<br>';
    // echo __FILE__.'<br>';

    $array = [1,2,3];
    file_put_contents('test.txt',implode(PHP_EOL,$array));

    // rename('test.txt', 'file.txt');
    // copy('file.txt', 'test.txt');
    // unlink('file.txt');

    // var_dump(file_exists('text.txt'));
    $text = file_get_contents('test.txt');
    print_r($text);
    echo '<br>';
    var_dump(filesize('test.txt'));