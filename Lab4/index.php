<?php
    $str = 'Ivanov Ivan Ivanovich';

    preg_match('/([A-Z][a-z]+) ([A-Z])[a-z]+ ([A-Z])[a-z]+/', $str, $matches);
    // var_dump($matches);
    // echo $matches[1].' '.$matches[2].'.'.$matches[3].'.';

    // echo str_replace('a', '!', 'aa a abc');
    // echo preg_replace('/a/', '!', 'aa a abc');
    // echo preg_replace('/A/i', '!', 'aa A abc');
    // echo '<br>';
    // echo str_replace('A', '!', 'aa A abc');

    // echo preg_replace('/xax/', '!', 'xax xaax');
    // echo preg_replace('/123/', '!', '123 xaax');
    // echo preg_replace('/Ab3/', '!', 'ab3 Ab3');

    // echo preg_replace('/x.x/', '!', 'xax xvx x3x');
    // echo preg_replace('/x..x/', '!', 'xadx xvx x3x');

    // echo preg_replace('/xa+x/', '!', 'xx xax xaax xaaaax');
    // echo preg_replace('/xa*x/', '!', 'xx xax xaax xaaaax');
    // echo preg_replace('/xa?x/', '!', 'xx xax xaax xaaaax');
    // echo 'xabx xabbbx xabababx xaaaax<br>';
    // echo preg_replace('/x(ab)+x/', '!', 'xabx xabbbx xabababx xaaaax');
    // echo preg_replace('/x[a-b]+x/', '!', 'xabx xabbbx xabababx xaaaax');
    // echo preg_replace('/x\+x/', '!', 'x+x xabbbx xabababx xxxxx');
    // echo preg_replace('/x\.x/', '!', 'xax x.x xvx xdx');
    // $ ^ . * + ? \ {} [] () |

    // echo preg_replace('/a.+?x/', '!', 'a23e4x qw x e');
    // echo preg_replace('/xa{1,2}x/', '!', 'xx xax xaax xaaaaaax');
    // echo preg_replace('/xa{,2}x/', '!', 'xx xax xaax xaaaaaax');//ошибка
    // echo preg_replace('/xa{2,}x/', '!', 'xx xax xaax xaaaaaax');
    // echo preg_replace('/xa{2}x/', '!', 'xx xax xaax xaaaaaax');
    // echo preg_replace('/\d+/', '!', '1 11 112 1231');
    // echo preg_replace('/\D+/', '!', '1 11 112 abc @@@');
    // echo preg_replace('/\s/', '!', '1 11 112 abc @@@');
    // echo preg_replace('/\S/', '!', '1 11 112 abc @@@');
    
    // echo preg_replace('/\w+/', '!', '1 11 112 abc @@@');
    // echo preg_replace('/\W+/', '!', '1 11 112 abc @@@');

    // '/[A-Za-z0-9]/' [abcdhgh] (abcdhgh)
    // echo preg_replace('/x[abc^]x/', '!', 'xax xbx x^x xfx');
    // echo preg_replace('/x[^abc\s]x/', '!', 'xax xbx x^x xfx');
    
    // echo 'xax xbx x^x xfx<br>';
    // [:-@] [:\-@]:;<>=?@ [2-5] [a-d] 
    $str = 'Иванов Ёжик Иванович';
   preg_match('/([А-ЯЁ][а-яё]+) ([А-ЯЁ])[а-яё]+ ([А-ЯЁ])[а-яё]+/u', $str, $matches);
    // var_dump($matches);
//    echo $matches[1].' '.$matches[2].'.'.$matches[3].'.';

// echo preg_replace('/^a+$/', '!', 'aaaa');
// echo preg_replace('/\ba+\b/', '!', 'aa aaaa aaa aaa a');


// echo preg_replace('/a|b+xx/', '!', 'aaxx bbxx exx');

$var = 'д\'Артаньян';
// echo preg_replace('/[а-я]\'[А-Я][а-я]+/u', '!', $var);

$a = '\\ \\ \\';
// echo preg_replace('/\\\/', '!', $a);
//  echo preg_replace('/a+/', '!', 'aa aa aa aa aa', 2);


// echo preg_match('/a+/', 'aa aa aa');
// echo preg_match('/^[a-z-.]+@[a-z]+\.[a-z]{2,3}$/', 'my-mail@mail.ru');
// echo 'xax xaax xbbx xaaaax<br>';
preg_match_all('/x(a+)x/', 'xax xaax xbbx xaaaax', $matches);
// print_r($matches);

preg_match_all('/([a-z]+)\.([a-z]{2,3})/', 'domain.ru site.com hello.by', $matches);
// print_r($matches);
// print $matches[2][0];
// echo '<br>';
// print $matches[1][0];

()






















