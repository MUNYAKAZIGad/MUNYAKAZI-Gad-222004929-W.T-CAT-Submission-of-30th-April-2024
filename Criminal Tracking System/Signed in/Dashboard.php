<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// Connect to database (replace dbname, username, password with actual credentials)
$connection = new mysqli("localhost", "root", "", "ctsystem");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$user_id = $_SESSION['user_id'];

// Retrieve user's email from the database
$sql = "SELECT lastname FROM user WHERE id='$user_id'";
$result = $connection->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $email = $row['lastname'];
} else {
    $email = "Unknown";
}

$connection->close();
?>
<html>
    <header>
        <title>Criminal Tracking System</title>
        <style>
            #ribbon li{
                text-decoration: none;
                float: left;
                display: inline-block;
                margin-left: 5%;
                margin-top: 20px;
                font-size: 30px;
            }
            #ribbon li a{
                text-decoration: none;
                color: black;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            footer #foot{
                color: white;
                text-align: center;
                padding-top: 70px;
            } 
            footer{
                margin-top: 50px;
                height: 100px;
                background-color: black
            }
            #picture{
                text-align: center;
                padding-top: 100px;
            }
            #paragraphing{
                margin-left: 50px;
            }
            #scroll{
                margin-top: 50px;;
                padding-top: 10px;
                background-color: black;color: white;height: 50px;font-size: 30px;border-radius: 100px;
                text-align: center;
            } 
            #scroll a{
                text-decoration: none;
                color: white;
            }




            .Block{
                float: left;
                display: inline-block;
            }
            #Block1{
                width: 80%;
            }
            #Block2{
                width: 20%;
            }
            #Block1 ol li{
                text-decoration: none;
                float: left;
                display: inline-block;
                margin-left: 5%;
                margin-top: 20px;
                font-size: 30px;
            }
            #Block2 ol li{
                text-decoration: none;
                float: left;
                display: inline-block;
                margin-left: 5%;
                margin-top: 20px;
                font-size: 30px;
            }
            #Block1 ol li a{
                text-decoration: none;
                color: black;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            #Block2 ol li a{
                text-decoration: none;
                color: black;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            #username{
                color: blue;
            }
        </style>
    </header>
    <body>
        <!-- Developed and Designed by MUNYAKAZI Gad with 222004929 Reg number-->
        <!--Home Ribbon on the website of the system-->
        <div class="Block" id="Block1">
            <ol id="ribbon1">
                <li><a href=".\CAM Reg.php">CAM Reg</a></li>
                <li><a href=".\Record.php">Record</a></li>
                <li><a href=".\Remove.php">Remove</a></li>
                <li><a href=".\Monitor.php">Monitor</a></li>
                <li><a href=".\Edit.php">Edit</a></li>
            </ol>
        </div>
        <div class="Block" id="Block2">
            <ol>
                <li id="username"><?php echo $email; ?></li>
                <li><a href=".\logout.php">Logout</a></li>
            </ol>
        </div>
        <div id="paragraphing">
            <h1 style="padding-top: 200px;">Criminal Tracking System</h1>
            <p>Criminal Tracking System is the online Tracker for Criminal and it essential tool for security Company and Government Agencies 
                that is in charge of tracking criminal and crime site for the purpose of correcting more information about the crime and 
                tracking those who commit crime and escape justice. And this Criminal Tracking System have more advantages or benefit for Government
                Agencies or private security Company that is in charge of proving security and tracking Crime.
            </p>
            <h1>Advantages</h1>
            <p>
                <ol>
                    <li>CTSystem reduce the cost for those Private security Company and Government Agencies.</li>
                    <li>Easy in management of system for Company and Government Agencies </li>
                    <li>Large area coverge!</li>
                    <li>System cover large area around the Country.</li>
                </ol>
            </p>
            <h1>Disadvantages</h1>
            <li>Regular Notification about update on you Tracking Crime.</li>
            <li>Little more expensive</li>
        </div>
        <div id="scroll"><a href="#">Scroll Up</a></div>
    </body>
    <footer>
        <div id="foot">Copyright © 2024 CTS All Right Reserved</div>
    </footer>
</html>