<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uclims";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO monitor (name, quantity, ppu)
VALUES ('$_POST[name]',$_POST[quantity],$_POST[ppu])";

if ($conn->query($sql) == TRUE) {
    header('Location: monitor.php');
} else {
         echo "<center><h2><br><br><br><br>Problem To INSERT Data</h2></center>";
}

$conn->close();
?>