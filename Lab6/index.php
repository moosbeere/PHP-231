  
<?php
    session_start();

    if (isset($_GET['ses'])){
        unset($_SESSION['history']);
        unset($_SESSION['iterator']);
    } 

    if (!isset($_SESSION['history'])){
        $_SESSION['iterator'] = 0;
        $_SESSION['history'] = [];
    }

    if (isset($_POST['expression'])){
        if ($_SESSION['iterator'] == ($_POST['iterator'])){
            eval('$res='.$_POST['expression'].';');
            $_SESSION['history'][] = $_POST['expression'].'='.$res;
            $_SESSION['iterator']++;
        }

    }
    
?>

<form action="index.php" method="post">
    <input type="hidden" name="iterator" 
    value=<?= $_SESSION['iterator'];?>>
        <input type="text" name="expression" id="">
        <button type="submit">Enter</button>
        <a href="index.php?ses=clear">Clear</a>
    </form>

<?php

    if (isset($_SESSION['history'])){
        foreach($_SESSION['history'] as $val){
            echo $val.'<br>';
        }
    }
?>



