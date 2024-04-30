<?php 
// Developed and Designed by MUNYAKAZI Gad with 222004929 Reg number
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ctsystem";
    //create connection
    $connection = mysqli_connect($servername,$username,$password,$dbname);
    //check connection
    if(!$connection){
        die("Connection failed: ".mysqli_connect_errno());
    }

    $id = $_POST['id'];
    $surname = $_POST['surname'];
    $lastname = $_POST['lastname'];
    $picture = $_POST['picture'];
    $crime = $_POST['crime'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $village = $_POST['village'];
    $cella = $_POST['cell'];
    $Father = $_POST['Father'];
    $Mother = $_POST['Mother'];
    $sql = "UPDATE criminal_info SET firstname='$surname', lastname='$lastname', picture='$picture', crime='$crime', residential_address='$address', province='$province', district='$district', sector='$sector', village='$village', cell='$cella', father_name='$Father', mother_name='$Mother' WHERE id='$id' ";
    if(mysqli_query($connection,$sql)){
        echo "<script>alert('Record updated successfully');</script>;";
        header("location: Edit.php");
    } else {
        echo "Error updating record: ".mysqli_error($connection);
    }
    mysqli_close($connection);
?>