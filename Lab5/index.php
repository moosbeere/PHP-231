<?php

$db = require('db.php');
$connect = mysqli_connect($db['host'], $db['username'], $db['password'], $db['database']);
if (mysqli_connect_errno()) print_r(mysqli_connect_error());

if (!isset($_GET['p'])) $_GET['p'] = 'view';

if(isset($_POST['name'])){
    $sql = "INSERT INTO `friends`(
        `firstname`, `name`, `lastname`, `gender`, `date`, 
        `phone`, `address`, `email`, `comment`) 
        VALUES (
            '".$_POST['firstname']."',
            '".$_POST['name']."',
            '".$_POST['lastname']."',
            '".$_POST['gender']."',
            '".$_POST['date']."',
            '".$_POST['phone']."',
            '".$_POST['address']."',
            '".$_POST['email']."',
            '".$_POST['comment']."'
        )";
        // print_r($sql);
    mysqli_query($connect, $sql);
    if (mysqli_errno($connect)) print_r(mysqli_error($connect));
}

require('header.php');
    if(isset($_GET['p']) && $_GET['p']=='view') include('view.php');
    if(isset($_GET['p']) && $_GET['p']=='add') include('add.php');
require('footer.html');
