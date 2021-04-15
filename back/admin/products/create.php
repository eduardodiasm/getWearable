<?php
  include (dirname(__DIR__).'../../database/connection.php');

  $name = $_POST['name'];

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

  $price = $_POST['price'];
  $quantity = $_POST['quantity']; 
  $description = $_POST['description']; 
  
  if($name == "" || $principal_photo == "" || $description == ""
  || $price == "" || $quantity == "") {
    echo("
      <script language='javascript' type='text/javascript'>
        alert('Todos os campos precisam ser preenchidos');
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