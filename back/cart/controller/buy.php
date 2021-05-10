<?php 
  include (dirname(__DIR__).'../../database/connection.php');

  session_start();

  $method_payment =  $_POST['method_payment'];
  $price =  $_POST['price'];
  $address = $_POST['address'];
  $state = $_POST['state'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];

  $insert = "INSERT INTO buy (method_payment, price, address, state, phone, city) 
  VALUES('$method_payment', '$price', '$address', '$state', '$phone', '$city')";

  if ($method_payment == null || $price == null || $address == null || $state == null || $city == null) {
    echo "<script>
      alert('Você deve informar todos os campos para que seu produto seja enviado')
    </script>";

    header("refresh: 1; url='../../../front/checkout.php?total=$price'");
  } else {
    $select = mysqli_query($connect, $insert);

    echo "<script>
      alert('Compra efetuada com sucesso')
    </script>";

    if($method_payment == 'boleto') {
      echo "<a href='https://upload.wikimedia.org/wikipedia/commons/c/c7/BoletoBancario.png'>Abra o boleto</a>";
    }
    if($method_payment == 'pix') {
      echo "Faça pix para esta chave: 04271924040";
    }
  }

      
?>