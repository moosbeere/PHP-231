<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
        $r.=$r;
        echo '<br>'.$r;
        $a = 10;
        $b = 5;
        $x = ($a < $b)? $a:$b;
        if ($a < $b) $x = $a;
            elseif ($a > 10) $x = $b;
                else $x = 0;

    ?>
</body>
</html>