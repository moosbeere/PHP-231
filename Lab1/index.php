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
            echo '<br>------------------<br>';
        }
            $a = 100;
            $b = 'A';

        //     if ($a == 100) echo 'ok';
        //         else echo 'no';

        //         echo '<br>';
        //    echo ($a == 101)? 'ok':'no';

           // if ($a < $b) echo 'ok';
            // else echo 'no';

            // echo $a++.'<br>';
            // echo $a.=$a;
        
            // echo '<h1>Hello, PHP</h1>';
            // $a = 10;
            // $b = '10';
            // // if ($a === $b) echo 'ok';
            // // else echo 'no';

            // if ($a !== $b) echo 'ok';
            // else echo 'no';


            define('pi', 3.14);
            // $x = $a * pi;
            // echo $a+$b;
            // $a = (int)$b;
            // echo $a;
            // echo '<h2>'.$a.'</h2>';
            $x = 3.4;
            $z = 5.8;
            // echo '$x = '.floor($x).' $z = '.floor($z).'<br>';
            // echo '$x = '.round($x).' $z = '.round($z).'<br>';
            // echo '$x = '.ceil($x).' $z = '.ceil($z).'<br>';
            // print '2<sup>10</sup> ='.pow(2,10);
            $Fam = 'Петров';

            $Imja = 'Сергей';
         
            $Otch = 'Юрьевич';
         
            $den = '08';
         
            $mes = '11';
         
            $god = '1993';

            // echo $Fam.' '.$Imja.' '.$Otch.' '.$den.' '.$mes.' '.$god;
            // echo "$Fam $Imja $Otch дата рождения $den $mes $god";

            // echo 'Сумма $a + $b = '.$a + $b;
            $a = 1;
            $b = 3; 
            $c = 5;
            switch($a+$b){
                case 3:
                    $d = 'three';
                    echo $d.'<br>';
                     break;
                case 4:
                    $d = 'four';
                    echo $d.'<br>';
                    break;
                case 7:
                    $d = 'seven';
                    echo $d.'<br>';
                    break;
                default: echo 'no<br>';
            }
            separator();
            $i = 2;
            $sum = 0;
            switch($i){
                case 1: $sum++;
                case 2: $sum++;
                case 3: $sum++;
                case 4: $sum++;
                case 5: $sum++;
            }
            echo $sum;
            separator();
            $sum = 0;
            for($i = 2; $i <= 5; $i++){
                $sum++;
            }
            echo $sum;
            separator();
            $i = 0; $sum=0;
            while($i < 5){
                $sum+=$i;
                $i++;
            }
            echo $sum;
            separator();
            $i = 0; $sum=0;
            do{
                $sum+=$i;
                $i++;
            }while($i<5);
            echo $sum;
            separator();
            $k = 0;
            $arr = array(3,6,1,23,6);
            for ($i = 0; $i < count($arr); $i++){
                $arr[$i]--;
                if (!$arr[$i]) continue;
                $k++;
            }
            echo $k;
            separator();
            $a = 27;
            $b = 23;
            echo round(hypot($a, $b), 2);
            separator();
            $sum = 0;
            while($i <= 15){
                if($i%3 == 0) {
                    $sum+=$i;
                    // echo $i.'<br>';
                }
                $i++;
            }echo $sum;
separator();


            $a = 36; $b = '4';
            echo ($a % $b > 0) ? gettype($a / $b) . " " . $a % $b : "{$a} / {$b}" . " = " . $a / $b;
            separator();
            $a = true;
            echo "Переменная a: $a<br>";
            separator();
            $d = '9.2кг';
            $d = (float)$d;
            echo $d_rounded = round($d);
        ?>
</body>
</html>