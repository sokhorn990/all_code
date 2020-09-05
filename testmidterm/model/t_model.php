<?php
function m_view(){
    $query = "SELECT * FROM student";
    include_once "connect.php";
    $result = mysqli_query($connect,$query);
    $info =[];
    if($result &&  mysqli_num_rows ($result)){
        foreach ($result as $total){
            $info[] = $total;
        }
    }
    return $info;
}
?>