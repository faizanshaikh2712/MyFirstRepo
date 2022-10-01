<?php
    echo "Accociative Arrays <br>";

    // $arr = array('this', 'that', 'what');
    // echo "<br>";
    // echo $arr[0];
    // echo $arr[1];
    // echo $arr[2];


    //Associative arrays

$favCol = array('shubham' =>'red','rohan' => 'green','harry' => 'blue');

//echo $favCol['shubham'];

foreach ($favCol as $key => $value) {
    echo "Favourite color of $key is $value <br>";
    
}


?>