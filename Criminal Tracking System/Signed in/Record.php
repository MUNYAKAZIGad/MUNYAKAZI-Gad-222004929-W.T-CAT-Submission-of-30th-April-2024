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
            #Block1 ol li{
                text-decoration: none;
                float: left;
                display: inline-block;
                margin-left: 5%;
                margin-top: 20px;
                font-size: 30px;
            }
            .mb-1{
                text-decoration: none;
                float: left;
                display: inline-block;
                margin-left: 5%;
                margin-top: 20px;
                font-size: 30px;
            }
            input{
                height: 30px;
            }
            form{
                padding-top: 30px;
                padding-bottom: 50px;
                clear: both;
            }
            form input{
                margin-bottom: 10px;
            }
            form label{
                font-weight: lighter;
                font-size: 20px;
            }
            #heading-h1{
                padding-top: 70px;
            }
            button{
                margin-left: 130px;
                margin-top: 20px;
                font-size: 20px;
                text-align: center;
                width: 160px;
                height: 30px;
                font-weight: bolder;
            }
            .parent_block div{
                float: left;
                display: inline-block;
                width: 20%;
                margin-left: 1%;
                margin-right: 1%;
            }
            .text p{
                font-size: 12px;
            }
            .Grant_parent_block{
                margin-left: 100px;
            }
            
            .Block #ribbon1 a:hover{
                color: aqua;
            }
            #Block2 a:hover{
                color: aqua;   
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
        <!--Start of the Application-->
        <div id="heading-h1">
            <h1 style="font-size: 60px;text-align: center;">Record's Guide line</h1>
                <div class="Grant_parent_block">
                <div class="parent_block">
                    <div id="Block5" class="text" >
                        <h1 style="text-align: center;">Guide line</h1>
                        <P>
                            This is CTS(Criminal Tracking system)'s Record which will used to Record new Criminal information 
                            and our system will get all information and perform what it should do.
                        </P>
                    </div>
                    <div id="Block2" class="text">
                        <h1 style="text-align: center;">Guide line</h1>
                        <p>
                            So, this Record page will collect all the basic information about criminal which will be needed by 
                            our CTS system. So, as system user to have to provide all asked information
                        </p>
                    </div>
                    <div id="Block3" class="text">
                        <h1 style="text-align: center;">Guide Line</h1>
                        <p>
                            you don't have to miss any asked information in order to our system work well and after all
                            provided information is fill out, you will place Insert Button in order to
                        </p>
                    </div>
                    <div id="Block4" class="text">
                        <h1 style="text-align: center;">Guide line</h1>
                        <p>
                            insert filled informatio into System Database. After inserting is already successfully, you
                            will get notification that notify that insertion of data is Recorded
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Start of Form or Body of the website-->
        <center>
            <form action="register Criminal.php" method="post">
                <label>ID Number: &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="id" placeholder="ID Number" required><br>
                <label>Surname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="surname" placeholder="Surname" required><br>
                <label>Lastname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="lastname" placeholder="Lastname" required><br>
                <label>Picture: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="picture" placeholder="Picture" required><br>
                <label>Crime: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="crime" placeholder="Crime" required><br>
                <label>Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address" placeholder="Address" required><br>
                <label>Province: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="province" placeholder="Province" required><br>
                <label>District: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="district" placeholder="District" required><br>
                <label>Sector: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="sector" placeholder="Sector" required><br>
                <label>Village: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="village" placeholder="Village" required><br>
                <label>Cell: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="cell" placeholder="Surname" required><br>
                <label>Father's Name: </label><input type="text" name="Father" placeholder="Father's Name" required><br>
                <label>Mother's Name: </label><input type="text" name="Mother" placeholder="Mother's Name" required><br>
                <button type="submit" class="btn" name="subject" value="Login">Insert</button>
            </form>
        </center>
        <!--End or finishing of Form or Body of the website-->
    </body>
    <footer>
        <div id="foot">Copyright © 2024 CTS All Right Reserved</div>
    </footer>
</html>