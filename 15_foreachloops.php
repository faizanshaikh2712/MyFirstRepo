<?php
    $arr = array("apple", "banana", "grapes", "mango", "watermelon");

    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i];
        echo "<br>";
    }




    //For-Each

    foreach ($arr as $value) {
        echo "$value <br>";
        }
?>