<?php
    $db = require('db.php');
    $connect = mysqli_connect($db['host'], $db['username'], $db['password'], $db['database']);
    if (mysqli_connect_errno()) print_r(mysqli_connect_error());
    if (!isset($_GET['p'])) $_GET['p'] ='view';
    if(isset($_POST['save'])) {
        $sql = "INSERT INTO `friends`
               (`firstname`, `name`, `lastname`, `gender`, `date`, 
               `phone`, `email`, `adres`, `comment`) 
               VALUES (
               '".htmlspecialchars($_POST['firstname'])."',
               '".htmlspecialchars($_POST['name'])."',
               '".htmlspecialchars($_POST['lastname'])."',
               '".($_POST['gender'])."',
               '".($_POST['date'])."',
               '".($_POST['phone'])."',
               '".htmlspecialchars($_POST['email'])."',
               '".htmlspecialchars($_POST['adres'])."',
               '".htmlspecialchars($_POST['comment'])."'
               )";
        mysqli_query($connect, $sql);
        if (mysqli_errno($connect)) print_r(mysqli_error($connect));
    }
    require('header.php');
        if ($_GET['p']=='view') include('view.php');
        if ($_GET['p']=='add') include('add.php');
    require('footer.html');