<?php
    // var_dump($_SERVER);
    print_r($_SERVER['DOCUMENT_ROOT']);
    echo '<br>';
    print_r($_SERVER['SCRIPT_FILENAME']);
    echo '<br>';
    print_r($_SERVER['SCRIPT_NAME']);
    echo '<br>';
    // print_r(file_get_contents('D:\XAMPP\htdocs\student-231\Lab3\text.txt'));//пример абсолютного пути
    print_r(file_get_contents('../text.txt'));//пример относительного пути
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __DIR__;
    echo '<br>';

    // file_put_contents('new.txt', '12345');
    // $file = file_get_contents('new.txt');
    // file_put_contents('new.txt', $file.'6');

    // copy('../text.txt', 'copy.txt');
    // var_dump(rename('../text.txt', '../new.txt'));
    // unlink('text.txt');
    var_dump(file_exists('text.txt'));
    echo '<br>';
    // $arr = explode("\r\n", file_get_contents('../new.txt'));
    $arr = explode(PHP_EOL, file_get_contents('../new.txt'));
    // $arr = file('../new.txt', FILE_IGNORE_NEW_LINES);
    print_r(filesize('../new.txt'));
    echo '<br>';
    var_dump($arr);
    file_put_contents('text.txt', implode(PHP_EOL, $arr));
    echo '<br>';

    $a = 2; $b = 5;

    // print "$a<sup>$b</sup> = $c <BR>";

    //Напечатается 2<sup>5</sup> =

    require('a_b_req.php');

    print "$a<sup>$b</sup> = $c <BR>";



