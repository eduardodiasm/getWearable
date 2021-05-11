<head>
    <title>getWearable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">

    <link rel="stylesheet" href="./css/aos.css">

    <link rel="stylesheet" href="./css/ionicons.min.css">

    <link rel="stylesheet" href="./css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/icomoon.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php 
  $method_payment = $_GET['method_payment'];
  
  include './components/navbar.php'; 

  if($method_payment == 'boleto') {
    echo "<br><br><div style='display: 0; justify-content: center;'>
    <button><a href='https://upload.wikimedia.org/wikipedia/commons/c/c7/BoletoBancario.png'> Abra o boleto </a></button><br><br>
    <button><a href='./index.php'> Voltar a pagina inicial </a></button>
    <div><br>";
  }
  if($method_payment == 'pix') {
    echo "<br><br><div style='display: 0; justify-content: center;'>
    <p>Faça pix pra esta chave: 04271924040 </p><br><br>
    <button><a href='./index.php'> Voltar a pagina inicial </a></button>
    <div><br>";
  }

  include './components/footer.php';
?>