<head>
    <title>getWearable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../front/csscss/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../front/css/animate.css">
    
    <link rel="stylesheet" href="../front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../front/css/magnific-popup.css">

    <link rel="stylesheet" href="../front/css/aos.css">

    <link rel="stylesheet" href="../front/css/ionicons.min.css">

    <link rel="stylesheet" href="../front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../front/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../front/css/flaticon.css">
    <link rel="stylesheet" href="../front/css/icomoon.css">
    <link rel="stylesheet" href="../front/css/style.css">
</head>

<?php
  include("../front/components/navbar.php");
 
  require('./database/connection.php');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password']; 
  
  if($name == "" || $email == "" || $password == "") {
    echo("
      <script language='javascript' type='text/javascript'>
        alert('Todos os campos precisam ser preenchidos');
        window.location.href='../front/signup.php';
      </script>
    ");
  } else {
    echo("$name, $email, $password");
  }
?>

<?php 
  include("../front/components/footer.php");
?>