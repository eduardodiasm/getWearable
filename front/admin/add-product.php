<?php
    session_start();

    if (!isset($_SESSION['email'])) {
      echo("<script>
        alert('Você deve estar logado para acessar essa pagina')
      </script>");    

      header("refresh: 1; url= '../index.php'");

      exit; 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>getWearable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="0; />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.../css">
    <link rel="stylesheet" href="../css/magnific-popup.cs../s">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="goto-here">
  

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="../index.php">getWearable</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="../index.php" class="nav-link">Inicio</a></li>
        <li class="nav-item active"><a href="../shop.php" class="nav-link">Loja</a></li>
        <?php
        if(isset($_SESSION['email'])) {
          echo '<li class="nav-item cta cta-colored"><a href="../cart.php" class="nav-link"><span
          class="icon-shopping_cart"></span></a></li>
          <li class="nav-item cta cta-colored"><a href="../../back/user/controller/logout.php" class="nav-link"><span
        class="oi oi-account-logout"></span></a></li>
          ';
        }
        ?>
        
        <!-- Verificar se o doido ta logado -->
        <?php
          
        ?>
      </ul>
    </div>
  </div>
</nav>

    <div class="hero-wrap hero-bread" style="background-image: url('https://atriumhealth.org/dailydose/-/media/daily-dose-blog/featured-images/hw-fitness-tracker_featured.jpg?h=1080&la=en&w=1920&hash=054879BF8652A5A951D02ABC5BAF92B2C84AA142');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Adicionar produto</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="../../back/admin/products/create.php" method="POST" enctype="multipart/form-data" class="billing-form">
							<h3 class="mb-4 billing-heading">Infos do produto</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="name">Nome do produto</label>
	                  <input type="text" name="name" class="form-control" placeholder="">
	                </div>
	              </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="description">Descrição</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="price">Preço</label>
	                  <input type="number" name="price" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="quantity">Quantidade</label>
	                  <input type="number" name="quantity" class="form-control" placeholder="">
	                </div>
		            </div>
                <!-- <div class="w-100"></div> -->
                <div class="col-md-12">
		            	<div class="form-group">
                    <label for="principal_photo">Foto principal do produto</label>
                    <input type="file" class="form-control-file" id="image" id="principal_photo" name="principal_photo">
	                </div>
		            </div>
                <div class="w-100"></div>
                <br>
	            </div>
              <div class="col-md-12">
								<div class="form-group">
									<button class="col-md-12 btn btn-primary py-3 px-4" type="submit">Adicionar</button>
								</div>
	          	</div>
	          </div>
          </div>
	          </form><!-- END -->
					</div>
        </div>
      </div>
    </section> <!-- .section -->

    <?php
  		include '../components/newsletter.php';
			include '../components/footer.php';
		?>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>