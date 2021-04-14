<?php
  include (dirname(__DIR__).'../../database/connection.php');

  function buscarUsuarios () {
    $query = "SELECT * FROM user";
    $query_result = mysqli_query($GLOBALS['connect'], $query);
    return $query_result;
  }
?>