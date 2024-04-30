<?php 
   require_once('db.php');
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.html");
        exit();
    }
    $query = "SELECT * FROM criminal_info";
    $result = mysqli_query($connection,$query);
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
    // Start of fetching data codes
    $query = "SELECT * FROM criminal_info";
    $result = mysqli_query($connection,$query);
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
            <h1 style="font-size: 60px;text-align: center;">Monitor page's Guide line</h1>
                <div class="Grant_parent_block">
                <div class="parent_block">
                    <div id="Block5" class="text" >
                        <h1 style="text-align: center;">Guide line</h1>
                        <P>
                            This is CTS(Criminal Tracking system)'s Monitor page which used to Monitor or Display all
                            information about Found Criminal around the Country or Region where
                        </P>
                    </div>
                    <div id="Block2" class="text">
                        <h1 style="text-align: center;">Guide line</h1>
                        <p>
                            CTS(Criminal Tracking System) is able to cover. So, this Monitor page will dispaly all 
                            Criminal, which found or tracked by our system and display all of them on 
                        </p>
                    </div>
                    <div id="Block3" class="text">
                        <h1 style="text-align: center;">Guide Line</h1>
                        <p>
                            on this Monitor page and be able to notify Nearby Police station which is nearby around
                            and after Police get Notification, will hurry up to catch Criminal.
                        </p>
                    </div>
                    <div id="Block4" class="text">
                        <h1 style="text-align: center;">Guide line</h1>
                        <p>
                            After Monitor Button pressed and all tracked criminal will be displayed on the Page and you
                            will get notification which confirm that Monitor is successfully Done.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Start of Form or Body of the website-->
        <center>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="display" style="clear: both;">List of all Tracked Criminal</h1>
                            </div>
                            <div class="body">
                                <table border="1">
                                    <tr class="headers">
                                        <td>ID</td>
                                        <td>Surname</td>
                                        <td>Lastname</td>
                                        <td>Picture</td>
                                        <td>Crime</td>
                                        <td>Address</td>
                                        <td>Province</td>
                                        <td>District</td>
                                        <td>Sector</td>
                                        <td>Village</td>
                                        <td>Cell</td>
                                        <td>Father's Name</td>
                                        <td>Mother's Name</td>
                                    </tr>
                                    <tr>
                                        <?php 
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                        ?>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['picture']; ?></td>
                                    <td><?php echo $row['crime']; ?></td>
                                    <td><?php echo $row['residential_address']; ?></td>
                                    <td><?php echo $row['province']; ?></td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['sector']; ?></td>
                                    <td><?php echo $row['village']; ?></td>
                                    <td><?php echo $row['cell']; ?></td>
                                    <td><?php echo $row['father_name']; ?></td>
                                    <td><?php echo $row['mother_name']; ?></td>
                                    </tr>
                                        <?php
                                            }
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </center>
        <!--End or finishing of Form or Body of the website-->
    </body>
    <footer>
        <div id="foot">Copyright © 2024 CTS All Right Reserved</div>
    </footer>
</html>