<?php

  include (dirname(__DIR__).'../../database/connection.php');

  $user_id = $_POST['id'];
  echo $user_id;
  $query = "DELETE FROM user WHERE id = $user_id;";
  $query_result = mysqli_query($GLOBALS['connect'], $query); 

  header("Location: /getWearable/front/users.php");
  exit;

?>