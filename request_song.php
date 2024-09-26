<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "chord_guit"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $song = $_POST["song"];
    
    $sql = "INSERT INTO requests (email, song) VALUES ('$email', '$song')";

    if ($conn->query($sql) === TRUE) {
        echo "Request berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
