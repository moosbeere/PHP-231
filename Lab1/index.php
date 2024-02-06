<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> </header>    
    <main>
        <?php
        function separator()
        {
            echo '<br>-------------------<br>';
        }
            $a = '2';  
            $b = '2';
            $c = 6.7;
            $d = (int)$c;
            echo '<h1>'.gettype($d).'<br></h1>';
            define('pi', 3.14);
            // echo pi;
            // echo $a.$b;
            // echo $a+$b;

            $a = 2.2;
            $b = 3.7;
            echo 'a = '.$a.' floor = '.floor($a).'<br>';
            echo 'a = '.$a.' round = '.round($a).'<br>';
            echo 'a = '.$a.' ceil = '.ceil($a).'<br>';
            echo 'b = '.$b.' floor = '.floor($b).'<br>';
            echo 'b = '.$b.' round = '.round($b).'<br>';
            echo 'b = '.$b.' ceil = '.ceil($b).'<br>';

            echo 2**10;
            separator();
            $quit = 'Тише';
            $go = 'едешь';
            $will = 'будешь';

            echo "$quit $go дальше $will<br>";
            echo $quit.' '.$go.' дальше '.$will;

            $a = 2;
            $b = 3;
            echo "$a + $b = ($a + $b)";
            echo $a.'+'. $b.' = '.$a + $b;
            separator();

            $a = 1;
            $b = '3';
            // echo ($a > $b);
            // echo '<br>';
            // var_dump($a > $b);

            // echo $a || $b;

            // echo $a--;
            // echo'<br>'.$a;
            echo $a.=$a;
        ?>
    </main>
    <footer></footer>
</body>
</html>
