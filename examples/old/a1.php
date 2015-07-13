<?php
# ODdl("mysqli.so");
$servername = "localhost";
$username = "root";
$password = "leesela";
$dbname = "tbl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM list1";
$result = mysqli_query($conn, $sql);
printf( mysqli_num_rows($result)) ;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["date1"]. "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>



