<?php
include_once "connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id ='$id' ";
    $delete = mysqli_query($connect,$query);
    if($delete==true){
        header("location:index.php");
    }
?>