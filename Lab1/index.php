<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function separator(){
        echo '<br>--------------<br>';
    }
        // $x = 10.3;
        // $i = (int)$x;
        // $a = '10a';
        // $b = $a.$x;
            // echo '<h1>'.($a + $x).'</h1>'; 
        define('pi', 3.14);
        // echo pi;
        // echo $i;
        $a = 2.3;
        $b = 3.7;
        // echo '$a = '.floor($a).'     $b = '.floor($b).'</br>'; 
        // echo '$a = '.round($a).'     $b = '.round($b).'</br>'; 
        // echo '$a = '.ceil($a).'     $b = '.ceil($b).'</br>'; 

        // $a = 'hello';
        // echo strlen($a);
        $b1 = true;
        // echo $b1;

        $r = 100;
        $z = 'A';
        // echo gettype($z);
        $s = 10;
        // echo ++$r;
        // echo '<br>'.$r;
        // $r.=$r;
        // echo '<br>'.$r;
        // $a = 10;
        // $b = 5;
        // $x = ($a < $b)? $a:$b;
        // if ($a < $b) {
        //     $x = $a;
        // }
        //     elseif ($a > 10) $x = $b;
        //         else $x = 0;
        // $a = 1; $b = 3; $c = 4;
        // switch ($a + $b){
        //     case 7: 
        //         echo $d = $c/$a;
        //         break;
        //     case 4: 
        //         echo $p = $a + $b + $c;
        //         break;
        //     case 1: 
        //         echo '<br>';
        //         echo $a + $b;
        //         break;
        //     default: echo 'ok'; 
        // }

        $i = 2; $S = 0;
        switch($i){
            case 1: 
                $S++;
            case 2:
                $S++;
            case 3:
                $S++;
            case 4:
                $S++;
            case 5:
                $S++;
        }
        echo 'S = '.$S.'<br>';

        $Sum = 0;
        for ($i = 2; $i < 6; $i++){
            $Sum++;
        }
        echo 'S = '.$Sum.'<br>';

        $i = 0; $S = 0;        
        while($i < 5){
            $S++;
            $i++;
        }
        echo 'S = '.$S.'<br>';

        $i = 0; $S = 0;        
        do{
            $S+=$i;
            $i++;
        }while ($i < 5);
        echo 'S = '.$S.'<br>';

        $k = 0;
        $arr = array(3,4,1,13,6,31);
        for ($i = 0; $i < 6; $i++){
            $arr[$i]--;
            if(!$arr[$i]) break;
            $k++;
        }
        echo 'k = '.$k.'<br>';

        $k = 0;
        $arr = array(3,4,1,13,6,31);
        for ($i = 0; $i < 6; $i++){
            $arr[$i]--;
            if(!$arr[$i]) continue;
            $k++;
        }
        echo 'k = '.$k.'<br>';
        //ex 1
        $a = 27;
        $b = 12;
        $c = round(sqrt(27**2 + 12**2), 2);
        echo $c;

        $a = 2; 
        $b = 2.0; 
        $c = '2'; 
        $d = 'two'; 
        $g = true;
        $f = false; 
        //ex 7
        echo '<br>'.gettype($b+$a);
        echo '<br>'.gettype($a+$b);
        echo '<br>'.gettype($c+$b);

        //ex 10
        $hunter = 'охотник'; 
        $wants_to = 'желает';
        $know = 'знать'; 
        $fizan = 'фазан'; 
        $sits = 'сидит'; 
        echo "<br>Каждый $hunter $wants_to $know где $sits $fizan";

        //ex14
        $quieter = 'Тише'; 
        $go = 'едешь'; 
        $further = 'дальше'; 
        echo '<br>'.$quieter.' '.$go.' '.$further.' будешь<br>';
        ?>
        //ex 27<br>
        <table>
            <tr>Выражение</tr>
            <tr>Результат сравнения</tr>
            <?php
            $a = 2;$b = '2'; $d = '2a';
                echo '<td>'.$a.' == '.$b.'</td>';
                print '<td>'.($a == $b).'</td>';
            ?>

        </table>
        <?php

        // ex 31
        $a = 2; 
        $b = 2.0;
        $c = '2';
        $d = 'two';
        $g = true;
        $f = false;

        echo 'Исходный тип '.gettype($a).' Полученное значение '.(int)$a.'<br>';
        echo 'Исходный тип '.gettype($b).' Полученное значение '.(int)$b.'<br>';
        echo 'Исходный тип '.gettype($c).' Полученное значение '.(int)$c.'<br>';
        echo 'Исходный тип '.gettype($d).' Полученное значение '.(int)$d.'<br>';
        echo 'Исходный тип '.gettype($g).' Полученное значение '.(int)$g.'<br>';
        echo 'Исходный тип '.gettype($f).' Полученное значение '.(int)$f.'<br>';

        // ex 35
        $a = 36; 
        $b = '4';
        echo ($a%$b > 0) ? gettype($a/$b).' '.$a%$b : $a.'/'.$b.'='.$a/$b;
        echo '<br>';

        //ex 39
        $a = 27;
        $b = 12;
        if ($a) echo $b.'/'.$a.' = '.$b/$a;
        else echo (bool)$a;

        //ex 44
        $year = 2022; $month = 3; $day = 2;
        echo 'Дата: '.sprintf("%04d-%02d-%02d", $year, $month, $day);
        separator();

        //ex 48
        $sum = 0;
        for($i = 1; $i < 6; $i++){
            $sum+=$i;
        }
        echo $sum;
        separator();

        //ex 50
        $i = 1;
        $sum = 0;
        do{
            if($i%2 == 0) {
                $sum+=$i;
                echo $i.'<br>';
            }
            $i++;
        }while($i < 21);
        echo $sum;

separator();
        // $a = 2; $b = '2'; $d = '2a';
        // var_dump($a == $b);//true
        // var_dump($a === $b);//false
        // var_dump($a > $b);//false
        // var_dump($d < $b);//false

        separator();
        $a = 2;
                $b = 2.0;
                $c = '2';
                $d = 'two';
                $g = true;
                $f = false;
                // echo gettype ($g+$d);
        ?>






</body>
</html>