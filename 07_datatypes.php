<?php
//PHP Data Types
/*
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/

// 1. String- sequence of character
$name = "Harry";
$age = 30;
echo "$name is $age years old";
echo "<br>";

//2. Integer- Non decimal number
$income = 500;
$debt = -600;
echo $income;
echo $debt;
echo "<br>";

// 3. Float- Decimal Number
$income = 45.23;
$debt = -21.65;
echo $income;
echo $debt;
echo "<br>";

// 4. Boolean- True or False
$x = true;
$y = false;
echo var_dump($x);
echo var_dump($y);
echo "<br>";

// 5. Object- Instance of Classes

//6. Array- use to store multiple values in single variable
$friends = array("Sam", "harry", "surya", "paaya");
echo var_dump($friends);
echo "<br>";

//7. Null
$name = NULL;
echo var_dump($name);

?>