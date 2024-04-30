<?php
//Developed and Designed by MUNYAKAZI Gad with 222004929 Reg number
  $connection = new mysqli("localhost","root","","ctsystem");
  if(isset($_POST['stud_delete_btn'])){
      $id = $_POST['delete_stu_id'];
      $query = "DELETE FROM criminal_info WHERE id='$id'";
      $query_run = mysqli_query($connection,$query);
        if($query_run){
            header("Location: Remove.php");
        } else {
            header("Location: Remove.php");
        }
  }
?>