<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

//Variables to be inserted into the Table
$name = "Vikrant";
$destination = "Russia";


//Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);



// add a new trip to the trip table in the database
if($result){
    echo "The record has been recorded successfully!<br>";
}
else{
    echo "The record has not been recorded successfully because of this error ---> ". mysqli_error($conn);
}



?>