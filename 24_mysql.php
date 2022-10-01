<?php

    echo "Connecting to DataBase <br>";

    //ways to connect to mysql Database
    //1. MySQLi Extension
    // 2. PDO- PHP Data Object

    

    //Connecting to DataBase
    $servername = "localhost";
    $username = "root";
    $password = "";



    // Create a connection Object
    $conn = mysqli_connect($servername, $username, $password);



    //Die if connection was not sucessfull
    if (!$conn)
    {
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
        else {
            echo "Connection was Sucessfull";
         }
?>