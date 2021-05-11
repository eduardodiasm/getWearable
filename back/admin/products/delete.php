<?php

  include (dirname(__DIR__).'../../database/connection.php');

  $id = $_GET['id'];
  $query = "DELETE FROM product WHERE id = $id;";
  $query_result = mysqli_query($GLOBALS['connect'], $query); 

  header("Location: ../../../front/products.php");
  exit;
?>