<?php 
  include (dirname(__DIR__).'../../database/connection.php');

  $id = $_POST['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  
  if($_FILES['principal_photo']['name'] != '') {
    $archive = $_FILES['principal_photo'];
    $ext = explode('.', $archive['name']);
    $new_name = md5(uniqid(time())) . '.' . $ext[1];
    $image_dir = '../../image/products/' . $new_name;
    move_uploaded_file($archive['tmp_name'], $image_dir);
    $principal_photo = $new_name;
  } else {
    $principal_photo = 'no-image.png';
  }

  $query = "UPDATE product SET name = '$name', description = '$email', principal_photo = '$principal_photo', price = $price, quantity = $quantity, description = '$description' WHERE id = '$id'"; 

  $update = mysqli_query($GLOBALS['connect'], $query); 

  header("Location: ../../../front/products.php");
  exit;
?>