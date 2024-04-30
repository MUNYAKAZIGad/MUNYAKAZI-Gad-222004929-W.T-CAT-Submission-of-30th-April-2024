<?php
// Connect to database (replace dbname, username, password with actual credentials)
$connection = new mysqli("localhost", "root", "", "ctsystem");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>