<?php
$host = 'localhost';
$db   = 'grammar_check';
$user = 'root';       // default XAMPP user
$pass = '';           // default XAMPP password is empty

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
