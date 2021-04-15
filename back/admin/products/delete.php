<?php

  include (dirname(__DIR__).'../../database/connection.php');

  $product_id = $_POST['id'];
  $query = "DELETE FROM product WHERE id = $product_id;";
  $query_result = mysqli_query($GLOBALS['connect'], $query); 

  header("Location: /getWearable/front/products.php");
  
  exit;
?>