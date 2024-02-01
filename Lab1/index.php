<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $a = 100;
            $b = 'A';

            if ($a == 100) echo 'ok';
                else echo 'no';

                echo '<br>';
           echo ($a == 101)? 'ok':'no';

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
        ?>
</body>
</html>