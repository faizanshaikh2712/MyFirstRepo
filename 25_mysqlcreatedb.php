<?php
    

    //Connecting to DataBase
    $servername = "localhost";
    $username = "root";
    $password = "";



    // Create a connection Object
    $conn = mysqli_connect($servername, $username, $password);


    //Create a DB
    $sql = "CREATE DATABASE dbharry";
   $result = mysqli_query($conn, $sql);



   //Check for DB creation Sucess
   if($result)
   {
    echo "DB was Created Sucessfully";
   }
    else
    {
        echo "DB was not Created --->".  mysqli_error($conn);
    }
   echo "The Result is ";
   var_dump($result);
   echo "<br>";

    //Die if connection was not sucessfull
    if (!$conn)
    {
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
        else {
            echo "Connection was Sucessfull";
         }
?>