<?php
function m_get_view(){
  include "connection.php";
    $query = 'SELECT * FROM tblemployee em INNER JOIN tblprovince pr ON pr.pro_id = em.emp_id';
    $result = mysqli_query($connection,$query);
    return $result;
}


function m_add(){
  include "connection.php";
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $pro = $_POST['province'];

 $query = "INSERT INTO btlemployee (emp_fname,emp_lname,pro_id) VALUES ('$fname','$lname','$pro')";
 $result = mysqli_query($connection,$query);
 return $result;
}
function m_add_province(){
 include "connetion.php";
 $query = "SELECT * FROM tblemployee";
 $result = mysqli_connect($connection,$query);
 $rows =[];
if($result && mysqli_num_rows($result)>0){
  foreach($result as $recod){
    $result = $recod;
  }
}
return $result;
}
?>