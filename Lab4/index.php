<?php

    preg_match_all('/x(a+)x/', 'xx xax xaax xaaax baab', $matches);
    // print_r($matches);

    preg_match_all('/([a-z]+)\.([a-z]{2,3})/', 'domain.ru hello.by mail.com', $matches);
    // print_r($matches);
    // echo '<br>';
    // echo $matches[1][0];
    // echo '<br>';
    // foreach($matches[1] as $matches){
    //     echo $matches.'<br>';
    // }


    // echo preg_replace('/(a+)@(b+)/', '$2@$1', 'a@b aa@bb');

    // echo preg_replace('/[a-z]+/', '!$0!', 'aaa bbb');// !aaa! !bbb!

    // echo preg_replace('/([a-z])(<\/\2>)/', '!', 'aaebbc');

    // echo preg_replace('/(ab)+([a-z])/' ,'!$1!','ababx abe');

    // echo preg_replace('/([a-z]+):(\d+)/','$2:$1','aaa:444 kkk:333');

    // echo preg_replace('/(\d)\1/','!','332 441 550');

    // echo preg_replace('/(?<=x)aaa/','!','xaaa baaa');
    // echo preg_replace('/(?<!x)aaa/','!','xaaa baaa');


    // echo preg_replace('/aaa(?=x)/', '!', 'aaax aaab');
    // echo preg_replace('/aaa(?!x)/', '!', 'aaax aaab');

    // echo preg_replace_callback('/(\d)\+(\d)=/', 'sum', '2+3=');

    function sum($matches){
        $result = $matches[0].($matches[1]+$matches[2]);
        return $result;
    }

    // echo preg_replace('&.+? #любой символ один или более раз a # потом буква a &x', '!', 'строка');

    // echo preg_replace('/(?<=z)yy/', '!', 'zyy ayy');

    echo preg_replace_callback('/\d/', 'cube', 'a1b2c3');

    function cube($matches){
        $result = pow($matches[0], 3);
        return $result;
    }


