<?php
include_once "connect.php";
    $id=$_GET['id'];
    $delete = mysqli_query($connect," DELETE FROM  demo_php WHERE id ='$id' ");
    if($delete==true){
        header("location:index.php");
    }
?>