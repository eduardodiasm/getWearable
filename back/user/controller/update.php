<?php 
  include (dirname(__DIR__).'../../database/connection.php');

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  $query = "UPDATE user SET name = '$name', email = '$email' WHERE id = '$id'"; 
  $update = mysqli_query($GLOBALS['connect'], $query); 

  echo "<script> javascript:history.go(-2);</script>";

  exit;
?>