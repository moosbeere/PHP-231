<?php
    // var_export($_GET);
    if (isset($_GET['name'])) echo 'Hello '.$_GET['name'].'<br>';
    if (isset($_GET['age']) && !empty($_GET['age'])) echo 'Age = '.$_GET['age'].'<br>';

    if (!empty($_POST)){
        if (isset($_POST['name'])) echo 'Name = '.$_POST['name'].'<br>';
        if (isset($_POST['female'])) echo 'Female = '.$_POST['female'].'<br>';
        if (isset($_POST['email'])) echo 'email = '.$_POST['email'].'<br>';
    }

    $arr = ['a', 'b', 'c', 'b', 'a'];

print_r(array_count_values($arr));



