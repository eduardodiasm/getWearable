<?php

  include (dirname(__DIR__).'../../database/connection.php');

  function buscarPeloId ($id) {
      $query = "SELECT * FROM product WHERE id = '$id'";
      $query_result = mysqli_query($GLOBALS['connect'], $query);
      return $query_result;
    }
?>