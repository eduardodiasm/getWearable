<head>
    <title>getWearable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head>

<?php
  session_start();

  require_once '../../back/admin/user/get-users.php';
  $users = buscarUsuarios();
?>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="./index.php">getWearable</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="../index.php" class="nav-link">Inicio</a></li>
          <li class="nav-item active"><a href="../shop.php" class="nav-link">Loja</a></li>
          <?php
            if (!isset($_SESSION['email'])) {
              echo("<script>
                alert('Você deve estar logado para acessar essa pagina')
              </script>");    
        
              header("refresh: 1; url= '../index.php'");
        
              exit; 
            }
            else {
                echo '<li class="nav-item cta cta-colored"><a href="../cart.php" class="nav-link"><span
                  class="icon-shopping_cart"></span></a></li>
                  <li class="nav-item cta cta-colored"><a href="../../back/user/controller/logout.php" class="nav-link"><span
                class="oi oi-account-logout"></span></a></li>
                  ';
            }
          ?>
        
        </ul>
      </div>
    </div>
  </nav>

<section class="ftco-section">
  <div class="row">
    <?php while($user = mysqli_fetch_array($users)) {?>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
          <a href="#" class="img-prod">
            <img class="img-fluid"
              src="../../back/image/users/default-user.png" width="300px" height="300px" alt="Colorlib Template">
            <div class="overlay"></div>
          </a>
      <div class="text py-4 pb-4 px-4 text-center">
        <h3><a href="#">
        <?php 
          if (strlen($user['name']) > 20) {
            $user['name'] = substr($user['name'], 0, 20).'...';
          }
            echo $user['name'];
        ?></a></h3>
        <div class="d-flex justify-content-center">
          <div class="pricing">
            <p class="price"><?php echo $user['email']; ?></p>
          </div>
        </div>
        <div class="bottom-area d-flex px-3">
          <div class="m-auto d-flex">
            <a href="../../back/user/controller/delete.php?id=<?php echo $user['id']; ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
              <span><i class="ion icon-trash"></i></span>
            </a>
            <a href="../edit.php?id=<?php echo $user['id']; ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
              <span><i class="ion icon-pencil"></i></span>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>
  <?php } ?>
  </div>
</section>
		
	<?php
		require('../components/footer.php');
	?>
    
  

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>