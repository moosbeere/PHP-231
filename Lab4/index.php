<?php

$str = 'Ivanov Ivan Ivanovich';
// echo "$str<br>";

preg_match('/([A-Z][a-z]*) ([A-Z])[a-z]* ([A-Z])[a-z]*/', $str, $matches);
// var_dump($matches);

// echo $matches[1].' '.$matches[2].'.'.$matches[3].'.';

// echo str_replace('a', '!', 'aabbaa');
// echo '<br>';
// echo preg_replace('/a/', '!', 'aabbaa');
// echo '<br>';

// echo str_replace('A', '!', 'aAbbAa');
// echo '<br>';
// echo preg_replace('/A/i', '!', 'aAbbAa');
// echo '<br>';

// echo preg_replace('/xax/', '!', 'xax xaax');
// echo preg_replace('/123/', '!', '123 xaax');
// echo preg_replace('/x3x/', '!', 'x3x xaax');

// echo preg_replace('/A3B/', '!', 'a3b A3B');

// echo preg_replace('/x.x/', '!', 'xax xsx x&x x-x xaax');
// echo preg_replace('/x..x/', '!', 'xax xsx x&x x-x xaax');

// echo preg_replace('/xa+x/', '!', 'xx xax xaax xaaax xbx');
// echo 'xx xax xaax xaaax xbx<br>';
// echo preg_replace('/(xa)*x/', '!', 'xx xax xaax xaaax xbx');

// echo preg_replace('/xa?x/', '!', 'xx xax xaax xbx');


// echo preg_replace('/a\+x/', '!', 'a+x ax aax aaaax');
// echo preg_replace('/a\.x/', '!', 'a.x ax aax aaaax');

// echo preg_replace('/a.+?x/', '!', 'a23e4x qw x e');

// echo preg_replace('/xa{1,2}x/', '!', 'xx xax xaax xaaax');
// echo preg_replace('/xa{2,}x/', '!', 'xx xax xaax xaaax');
// echo preg_replace('/xa{2}x/', '!', 'xx xax xaax xaaax');
// echo preg_replace('/xa{,2}x/', '!', 'xx xax xaax xaaax');//ошибка
// echo '1 11 123 abc @@@<br>';
// echo preg_replace('/\d+/', '!', '1 11 123 abc @@@');

// echo '123 abc 3@@<br>';
// echo preg_replace('/\D/', '!', '123 abc 3@@');

// echo '1 12 123 abc @@@<br>';
// echo preg_replace('/\s/', '!', '1 12 123 abc @@@');

// echo '1 12 123 abc @@@<br>';
// echo preg_replace('/\S+/', '!', '1 12 123 abc @@@');

// echo '1 12 123a Abc @@@<br>';
// echo preg_replace('/\W+/', '!', '1 12 123a Abc @@@');

// echo '1 12 123a Abc @@@<br>';
// echo preg_replace('/\w+/', '!', '1 12 123a Abc @@@');

// echo preg_replace('/[abc^]xx/', '!', 'axx bxx cxx exx');
// echo preg_replace('/[^abc]xx/', '!', 'axx bxx cxx exx');

// [A-Za-z0-9] [2-5] [a-c]

// [:\-@] :;<>=?@

// echo preg_replace('/[\da-z]xx/', '!', '3xx axx Axx');
// echo preg_replace('/[а-яА-ЯёЁ]яя/u', '!', 'аяя ёяя 2яя');

// echo preg_replace('/^aaa$/', '!', 'aaa aaa aaa');
// echo preg_replace('/^aaa/', '!', 'aaa aaa aaa');
// echo preg_replace('/aaa$/', '!', 'aaa aaa aaa');

// echo preg_replace('/a|b+|c/', '!', 'bbbbb');
// echo preg_replace('/(a|b+)xx/', '!', 'axx bxx bbxx exx');

// echo preg_replace('/\b[a-z]+\b/', '!', 'axx bxx xxx exx');

$var = 'д\'Артаньян';
// echo preg_replace('/д\'[А][а-я]{7}/u', '!', $var);
// echo '\\ \\ \\\\<br>';
// echo preg_replace('/\\\/', '!', '\\ \\ \\\\');


// echo preg_replace('/a+/', '!', 'a aa aaa aaaa', 2);

// echo preg_match('/^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$/', 'my-mail@mail.ru');
//  echo preg_match_all('/a+/', 'eee aaa bbb aa');










