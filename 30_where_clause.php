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

$sql = "SELECT * FROM `phptrip` WHERE `dest`= 'Bihar'";
$result = mysqli_query($conn, $sql);


//find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " Records Found in the DataBase<br>";

// Display the rows returned by sql query
if ($num> 0) 

//we can fetch using while loop
while ($row = mysqli_fetch_assoc($result)) {
    echo var_dump($row);
    echo "<br>";
}

//usage of Where clause to update
$sql = "UPDATE `phptrip` SET `name` = 'RohanUpdated' WHERE `phptrip`.`sno` = 4";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "We updated the record Sucessfully";
}
    else {
        echo "We Could not update the record Sucessfully";
    }
?>
