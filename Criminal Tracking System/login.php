<?php
// Developed and Designed by MUNYAKAZI Gad with 222004929 Reg number
session_start();

    // Connect to database (replace dbname, username, password with actual credentials)
    $connection = new mysqli("localhost", "root", "", "ctsystem");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = $connection->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    $_SESSION['user_id'] = $row['id']; // Set the user_id session variable
                    header("Location: Signed in/Dashboard.php");
                    exit();
                } else {
                    echo "Invalid email or password.";
                }
            } else {
                echo "User not found.";
            }
    }

$connection->close();
?>