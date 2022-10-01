<?php
$name = "harry is a good boy ";
echo $name;
echo "<br>";

echo "The Lenght of my String is " . strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "is");
echo "<br>";

echo str_replace("harry", "Paaya", $name);
echo "<br>";

echo str_repeat($name, 10);
echo "<br>";

echo "<pre>";
echo rtrim("     This is a good boy     ");
echo "<br>";
echo ltrim("     This is a good boy     ");
echo "</pre>";
?>