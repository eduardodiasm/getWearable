<!DOCTYPE html>
<html lang="en">
  <head>
    <title>getWearable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
      .container {
        margin-top: 1.5rem;
        margin-bottom: 3rem;
      }
    </style>
  </head>

<?php 
      include (dirname(__DIR__).'../back/database/connection.php');

      $id = $_GET['id'];

      $query = "SELECT * FROM user WHERE id = $id;";

      $query_result = mysqli_query($GLOBALS['connect'], $query);

      $user = mysqli_fetch_array($query_result);

      include './components/navbar.php';
?> 

<div class="container">
  <div class="justify-content-center align-items-center">
    <form class="contact-form" name="contact-form" method="POST" action="../back/user/controller/update.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="col-md-12">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" name="name" value="<?php echo $user['name']; ?>" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $user['email']; ?>" class="form-control" required="required">
        </div>
        <div class="form-group d-flex justify-content-center align-items-center">
          <button type="submit" name="update" class="btn btn-primary btn-lg col-md-8" align="center" required="required">Atualizar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php 
  include './components/footer.php';
?>