<?php
    // echo preg_replace('/(a+)@(b+)/','$2@$1', 'aaa@bbb');
    // echo preg_replace('/[a-z]+/', '!$0!', 'aaa bbb');
    // echo preg_replace('/([a-z])\1/','!','aaebbc');

    // echo preg_replace('/(?:ab)+([a-z])/', '!$1!', 'ababx abe');

    // echo preg_replace('/([a-z]+):(\d+)/','$2:$1', 'aaa:444 kkk:333');
    // echo preg_replace('/(\d)\1/','!',  '332 441 550');
    // echo preg_replace('/(?<=x)a+/', '$1!', 'xaaa baaa');//x! baaa
    // echo preg_replace('/a+(?=x)/', '!', 'aaax aaab');//!x aaab

    // echo preg_replace('/(?<!x)aaa/', '!', 'xaaa baaa');
    // echo preg_replace('/aaa(?!x)/', '!', 'aaax aaab');

    // echo preg_replace_callback('/(\d)\+(\d)=/', 'sum', '2+3=');

    function sum($matches){
        $sum = $matches[1]+$matches[2];
        return $matches[0].$sum;
    }

    // echo preg_replace('/(?<=z)y+/', '!', 'zyy xyy');

    echo preg_replace_callback('/\d/', 'cube', 'a1b2c3');

    function cube($matches){
        $res = pow($matches[0], 3);
        return $res;
    }