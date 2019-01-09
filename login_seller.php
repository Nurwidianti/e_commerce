<?php include ('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(71, 44, 40)">
  <a class="navbar-brand" href="home.php" style="font-family: hand; font-size: 25px; font-weight: bold; color: rgb(180,180,180)" >Dinus Shop Seller Center</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php" style="font-size: 17px; color: rgb(180,180,180)">Home <span class="sr-only">(current)</span></a>
      </li>
      
  </ul>
</div>
  </div>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						Dinus Shop Seller Center
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>

					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
						<a href="info_seller.php" class="txt4">
							Info Seller
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('assets/img/Edit_1.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	

	
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>


</form>
</div>
</div>
</center>
</div>
</body>
</html>