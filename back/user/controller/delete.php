<?php

  include (dirname(__DIR__).'../../database/connection.php');

  $user_id = $_GET['id'];
  $query = "DELETE FROM user WHERE id = $user_id;";
  $query_result = mysqli_query($GLOBALS['connect'], $query); 

  echo "<script> javascript:history.go(-2);</script>";
  
  exit;
?>