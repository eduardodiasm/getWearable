<?php 
  session_start();

  $productId = intval($_GET['adicionar']);
  $quantidade = $_POST['quantity'];

  if(!isset($_SESSION['cart'][$productId]['quantidade'])) {
    if(!isset($quantidade)) {
      $_SESSION['cart'][$productId]['quantidade'] = 1; 
    }
    else {
      $_SESSION['cart'][$productId]['quantidade'] = $quantidade; 
    }
  }

  else {
    if(!isset($quantidade)) {
      $_SESSION['cart'][$productId]['quantidade']++;  
    }
    else {
      $_SESSION['cart'][$productId]['quantidade'] = $quantidade; 
    }
  }

  header("Location: ../../../front/shop.php");
?>