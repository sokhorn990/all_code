<?php
  $data = array();
  get_action($data);
function get_action(&$data){
  $function = "view";
  if(isset($_GET['action'])){
    $action = $_GET['action'];
    $function = $action;
  }
  $function($data);
}

function view(&$data){
  $data['view']=m_get_view();
  $data['page']= "test/view.php";
}
function add(&$data){
  $data['view']= m_add();
  $data['add_province']= m_add_province();
  $data['page']="test/add.php";
}

?>