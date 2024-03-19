<?php
function sum($a, $b){
    return ($a+$b);
}
    if (isset($_GET)){
        foreach($_GET as $key=>$val){
            eval("\$$key='$val';");// $name = 'olga';
                                    //$age = '30';
        }
        echo "name = $name, age = $age";
        // sum()
    }
