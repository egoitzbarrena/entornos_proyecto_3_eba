<?php
$servername = "localhost";
$username = "root";
$password = "zubiri";
$dbname = "Proyecto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Usuarios (user,password)
VALUES ('$_POST[user]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>