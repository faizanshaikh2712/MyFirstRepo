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


$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Bihar'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Numbers of affected rows: $aff <br>";


if ($result) {
    echo "Delete Sucessfully";
}
else {
    $err = mysqli_error($conn);
    echo "Not Deleted Sucessfully due to this error: $err";
}

?>