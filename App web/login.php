<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>LOGIN</title>
</head>
<body>
<section class="haeder_main">
	<?php include "assets/php/header.php"  ?>
    <main class="login">
		<div class="container">
		<div class="zone_main_login">
		<div class="animation_img">
				<img src="assets/img/animation/animation.png" alt="">
			</div>
			<form action="assets/php/login_st_pr.php" method="POST">
				<h3 class="form_titre">Sign up</h3>

										
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<div class="checkout">
					<input class="input_data" type="checkbox"><p>Remmeber me?</p>
					</div>
					<div class="btn_form">
						<button>Login</button>
					</div>
					<a href="#"><p>Forgot password?</p></a>
				</form>
		</div>



			<div>

			</div>
		</div>
    </main>
</section>

<?php include "assets/php/footer.php"?>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="selectFilter.min.js"></script>

</script>
</body>
</html>