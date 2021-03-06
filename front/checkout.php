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
			include('./components/navbar.php');

			$total = $_GET['total'];
		?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('https://atriumhealth.org/dailydose/-/media/daily-dose-blog/featured-images/hw-fitness-tracker_featured.jpg?h=1080&la=en&w=1920&hash=054879BF8652A5A951D02ABC5BAF92B2C84AA142');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form method="post" action="../back/cart/controller/buy.php" class="">
								<h3 class="mb-4 billing-heading">Billing Details</h3>
								<div class="row align-items-end">
									<div class="w-100"></div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="country">Estado</label>
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="state" id="state" class="form-control">
													<option value="Rio Grande do Sul">RS</option>
													<option value="Rio de Janeiro">RJ</option>
													<option value="S??o Paulo">SP</option>
												</select>
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									
									
									<div class="w-100"></div>
								
									<div class="w-100"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="phone">Telefone</label>
											<input type="text" class="form-control" name="phone" id="phone" placeholder="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Cidade</label>
											<input type="text" class="form-control" name="city" id="city" placeholder="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>endere??o</label>
											<input type="text" class="form-control" name="address" id="address" placeholder="">
										</div>
									</div>
									<div class="w-100"></div>
									
								</div>
					</div>
							<div class="col-xl-5">
								<div class="row mt-5 pt-3">
									<div class="col-md-12 d-flex mb-5">
										<div class="cart-detail cart-total p-3 p-md-4">
											<h3 class="billing-heading mb-4">Cart Total</h3>
											
											<hr>
											<p class="d-flex total-price">
												<span>Total</span>
												<span>R$ <label>
												<input style="border: 0 none; outline: 0; box-shadow: 0 0 0 0;" name="price" id="price" value="<?php 
													
													print_r($total);

												?>" readonly>
												</label>
											
												</span>
											</p>
										</div>
									</div>
									<div class="col-md-12">
										<div class="cart-detail p-3 p-md-4">
											<h3 class="billing-heading mb-4">Metodos de pagamento</h3>
											<div class="form-group">
												<div class="col-md-12">
													<div class="radio">
														<label><input type="radio" name="method_payment" id="method_payment" value="boleto" class="mr-2">Boleto</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<div class="radio">
														<label><input type="radio" name="method_payment" id="method_payment" value="pix" class="mr-2">Pix</label>
													</div>
												</div>
											</div>
											
											<p><button type="submit" class="btn btn-primary py-3 px-4">comprar</button></p>
							</form>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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