<?php
  include (dirname(__DIR__).'../../database/connection.php');

  $name = $_POST['name'];
  $principal_photo = $_POST['principal_photo'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity']; 
  $description = $_POST['description']; 
  
  if($name == "" || $principal_photo == "" || $description == ""
  || $price == "" || $quantity == "") {
    echo("
      <script language='javascript' type='text/javascript'>
        alert('Todos os campos precisam ser preenchidos');
        window.location.href='../front/signup.php';
      </script>
    ");
  } else {
    $insert = "INSERT INTO product (name, principal_photo, price, quantity, description) VALUES(
      '$name', '$principal_photo',$price, $quantity, '$description'
    )";
    $select = mysqli_query($connect, $insert);

    header("Location: /getWearable/front/add-product.php");
    exit;
  }
?>