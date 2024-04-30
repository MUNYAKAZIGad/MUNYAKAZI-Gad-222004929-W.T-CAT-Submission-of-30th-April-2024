<?php
// Developed and Designed by MUNYAKAZI Gad with 222004929 Reg number
  $connection = new mysqli("localhost","root","","ctsystem");
    if($connection ->connect_error){
        die("Connect failed: ".$connection -> connect_error);
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
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
        $sql = "INSERT INTO criminal_info(id, firstname, lastname, picture, crime, residential_address, province, district, sector, village, cell, father_name, mother_name)
        VALUES('$id','$surname','$lastname','$picture','$crime','$address','$province','$district','$sector','$village','$cella','$Father','$Mother')";
            if($connection->query($sql)==TRUE){
              echo "<script>alert('Successfully Insert');</script>";
              header("location: CAM Reg.php");
            } else {
                echo "Error: ".$sql."<br>".$connection->error;
            }
    }
  $connection->close();
?>