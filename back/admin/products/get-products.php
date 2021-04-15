<?php

  require dirname(__DIR__).'../../database/connection.php';

  function getProduct () {
    $query = "SELECT * FROM product";
    $query_result = mysqli_query($GLOBALS['connect'], $query);

    return $query_result;
  }

  // Função para listar os produtos em ordem decrescente, para mostrar os últimos lançamentos
  function getDescendingOrderProduct() {
    $query = "SELECT * FROM product ORDER BY id DESC";
		$query_result = mysqli_query($GLOBALS['connect'], $query);

    return $query_result;
  }

?>