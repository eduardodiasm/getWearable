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

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<?php
			require('./components/navbar.php');
			$idProduto = $_GET["id"];
			require ('../back/product/controller/buscarPeloId.php');
			$produto = mysqli_fetch_array(buscarPeloId($idProduto));

			if(!isset($_SESSION['cart'])) {
				$_SESSION['cart'] = array();	
			}
		?>

    <div class="hero-wrap hero-bread" style="background-image: url('https://atriumhealth.org/dailydose/-/media/daily-dose-blog/featured-images/hw-fitness-tracker_featured.jpg?h=1080&la=en&w=1920&hash=054879BF8652A5A951D02ABC5BAF92B2C84AA142');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">P??gina inicial</a></span> <span class="mr-2"><a href="index.php">Produto</a></span></p>
            <h1 class="mb-0 bread">Produto</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
				<form action="../back/cart/controller/add_product_in_cart.php?adicionar=<?php echo $produto['id']?>" id="form_send" method="POST">
					<div class="row">
						<div class="col-lg-6 mb-5 ftco-animate">
							<a href="images/product-1.jpg" class="image-popup"><img src="../back/image/products/<?php echo $produto['principal_photo']; ?>" class="img-fluid" alt="Colorlib Template"></a>
						</div>
						<div class="col-lg-6 product-details pl-md-5 ftco-animate">
							<h3><?php echo $produto['name']; ?></h3>
							<hr>
							<p class="price"><span>R$ <?php echo $produto['price']; ?>.00 </span></p>
							<p>
								<?php echo $produto['description']; ?>
							</p>
							<div class="row mt-4">
								<div class="col-md-6">
									<h6>Quantidade desejada</h6>
								</div>
								<div class="w-100"></div>
								<div class="input-group col-md-6 d-flex mb-3">
									<span class="input-group-btn mr-2">
											<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
											<i class="ion-ios-remove"></i>
											</button>
										</span>
									<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
									<span class="input-group-btn ml-2">
											<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
												<i class="ion-ios-add"></i>
										</button>
									</span>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
										<script>
												var val = document.getElementById('quantity').value
												function link() {
													return val;
												}
										</script>
										
									<p style="color: #000;">Quantidade dispon??vel: <?php echo $produto['quantity']; ?></p>
								</div>
							</div>
							 <a class="btn btn-black py-3 px-5" onClick="document.getElementById('form_send').submit();">Adicionar ao carrinho</a>	
						</div>
					</div>
				</form>
    	</div>
    </section>

		<?php
			require('./components/newsletter.php')
		?>
		<?php
			require('./components/footer.php')
		?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

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