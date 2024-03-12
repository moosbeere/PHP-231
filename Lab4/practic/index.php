<?php
//ex1
    // echo preg_replace('/\d/', '$0$0','a1b2c3');

//ex6
    $text = 'Hello! My name is Olga. My email - moosbeere_O@mail.ru, moosbeere0@mail.ru. And you?';
    preg_match_all('/\b[a-zA-Z0-9-_]+@[a-z]+\.[a-z]{2,3}\b/', $text, $matches);
    // var_dump($matches);

//ex8
    // echo preg_replace('/(\w)\1+/', '!', 'aaa bcd xxx efg');
//ex13
    // echo preg_replace('/(?<=\/)[a-z]+(?=\\\)/', '!', 'bbb /aaa\ bbb /ccc\\');

//ex18
    preg_match_all('/a[e|x]+a/','aeeea aeea aea axa axxa axxxa', $matches);
    // var_dump($matches);

//     $string = "http://site.ru";
// if (preg_match('/^(https?|ttp):\/\/[^\s\/$.?#].[^\s]*$/', $string)) {
//     echo "Строка является";
// } else {
//     echo "Строка не является";
// }

// echo preg_replace('/(\/)|(\\\)/', '!', 'bbb /aaa\ bbb /ccc\\');
    
$url = "my_mail@mail.ru";

$pattern = "/\b[a-z_]+@\b/";
echo preg_replace($pattern, "!", $url);
// if (preg_match($pattern, $url)) {
//     echo "Строка является e";
// } else {
//     echo "Строка не является e";
// }