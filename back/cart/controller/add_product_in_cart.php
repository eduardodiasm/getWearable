<?php 
  session_start();

  $productId = intval($_GET['adicionar']);

  if(!isset($_SESSION['cart'][$productId]['quantidade'])) {
    $_SESSION['cart'][$productId]['quantidade'] = 1; 
  }

  else {
    $_SESSION['cart'][$productId]['quantidade']++; 
  }

  header("Location: ../../../front/shop.php");
?>