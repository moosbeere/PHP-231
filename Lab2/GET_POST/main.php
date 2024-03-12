<?php

    if (!empty($_GET))
    {
       if (isset($_GET['name']) && !empty($_GET['name'])) echo 'Hello, '.$_GET['name'].'!';
       else echo 'no'; 
    }

    if (!empty($_POST)){
        if (isset($_POST['name'])) echo 'Hello, '.$_POST['name'].'<br>';
        if (isset($_POST['age'])) echo $_POST['age'];
    }
    
    $arr = [
        'ru'=>[
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Пятница',
        ],
        'en'=>[
            'Monday',
            'Tuesday',
            'Wensday',
            'Thurday',
            'Friday'
        ]
    ];
    $lang = 'ru';
    $day = 3;
    // echo $arr[$lang][$day-1];




