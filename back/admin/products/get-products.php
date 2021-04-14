<?php

  include (dirname(__DIR__).'../../database/connection.php');

  function getProduct () {
    $query = "SELECT * FROM product";
    $query_result = mysqli_query($GLOBALS['connect'], $query);
    return $query_result;
  }

?>