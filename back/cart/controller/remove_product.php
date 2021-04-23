<?php
  session_start();

  $action = $_GET['action'];
  $productId = $_GET['id'];

  unset($_SESSION['cart'][$productId]);
  
  header("Location: ../../../front/cart.php");
?>