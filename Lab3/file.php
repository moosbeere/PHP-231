<?php
    // echo(file_get_contents('../text.txt'));//пример относительного пути
    // var_dump($_SERVER);
    // echo $_SERVER['DOCUMENT_ROOT'];//путь до корневого каталога
    // echo $_SERVER['SCRIPT_FILENAME']; //абсолютный путь к исполняемому файлу
    // echo $_SERVER['SCRIPT_NAME'];название исполняемого файла

    // echo(file_get_contents('D:\XAMPP\htdocs\student-231\Lab3\folder\text.txt'));//пример абсолютного пути

    // echo __FILE__;
    // echo '<br>';
    // echo __DIR__;
    // $text = file_get_contents('text.txt');
    // file_put_contents('text.txt', $text."2\r\n");
    // $text = file_get_contents('text.txt');
    // echo $text;

    // rename('text.txt', 'new.txt');
    // copy('new.txt', 'folder/text.txt');
    // var_dump(file_exists('text.txt'));
    // var_dump(filesize('new.txt'));
    // $text = file_get_contents('new.txt');
    // $arr = explode("\r\n" ,$text);
    // var_dump($arr);

    // file_put_contents('text.php', implode(PHP_EOL, $arr));
    // $file = file('folder/text.txt', FILE_IGNORE_NEW_LINES);
    // var_dump($file);



$a = 2; $b = 5;

print "$a<sup>$b</sup> = $c <BR>";

//Напечатается 2<sup>5</sup> =

require('a_b_req.php');
if ($a) include('a_b_req.php');

print "$a<sup>$b</sup> = $c <BR>";


?>


    