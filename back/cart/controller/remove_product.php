<?php
  session_start();

  $action = $_GET['action'];
  $productId = $_GET['id'];

  if($_SESSION['cart'][$productId]['quantidade'] > 1){
    $_SESSION['cart'][$productId]['quantidade']--;
  }
  else {
    unset($_SESSION['cart'][$productId]);
  }
  
  header("Location: ../../../front/cart.php");
?>