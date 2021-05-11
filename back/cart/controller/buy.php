<head>
    <title>getWearable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../../front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="../../../front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../front/css/magnific-popup.css">

    <link rel="stylesheet" href="../../../front/css/aos.css">

    <link rel="stylesheet" href="../../../front/css/ionicons.min.css">

    <link rel="stylesheet" href="../../../front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../front/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../../front/css/flaticon.css">
    <link rel="stylesheet" href="../../../front/css/icomoon.css">
    <link rel="stylesheet" href="../../../front/css/style.css">
  </head>

<?php 
  include (dirname(__DIR__).'../../database/connection.php');

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
  } 
  else {
      $select = mysqli_query($connect, $insert);

      echo "<script>
        alert('Compra efetuada com sucesso')
      </script>";

      header("refresh: 1; url='../../../front/payment_page.php?method_payment=$method_payment'");
  }

  include '../../../front/components/footer.php';
?>