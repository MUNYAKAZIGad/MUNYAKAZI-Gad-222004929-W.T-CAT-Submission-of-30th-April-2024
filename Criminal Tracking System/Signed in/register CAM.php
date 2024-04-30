<?php
// Developed and Designed by MUNYAKAZI Gad with 222004929 Reg number
  $connection = new mysqli("localhost","root","","ctsystem");
    if($connection ->connect_error){
        die("Connect failed: ".$connection -> connect_error);
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $country = $_POST['country'];
        $province = $_POST['province'];
        $district = $_POST['district'];
        $sector = $_POST['sector'];
        $village = $_POST['village'];
        $cella = $_POST['cell'];
        $whereroadfr = $_POST['whereroadfr'];
        $whereroadto = $_POST['whereroadto'];
        $attribute = $_POST['attribute'];
        $nearby = $_POST['nearby'];
        $sql = "INSERT INTO cam001(country, province, district, sector, village, cell, wrfrom, wrto, attribute, nearbypolicestation)
        VALUES('$country','$province','$district','$sector','$village','$cella','$whereroadfr','$whereroadto','$attribute','$nearby')";
            if($connection->query($sql)==TRUE){
              echo "<script>alert('Successfully Insert');</script>";
              header("location: CAM Reg.php");
            } else {
                echo "Error: ".$sql."<br>".$connection->error;
            }
    }
  $connection->close();
?>